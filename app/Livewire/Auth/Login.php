<?php

namespace App\Livewire\Auth;

use App\Models\User;
use App\Notifications\UserLoggedIn;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('components.layouts.auth.layout')]

#[Title('Login')]

class Login extends Component
{
    #[Validate('required|string|email')]
    public string $email = '';

    #[Validate('required|string')]
    public string $password = '';

    public bool $remember = false;

    public $gRecaptchaResponse;

    /**
     * Handle an incoming authentication request.
     */
    public function login()
    {
        try {
            if (is_null($this->gRecaptchaResponse)) {
                $this->dispatch('login-error', message: 'Please confirm you are not a robot.')->self();
            }

            $recatpchaResponse = Http::get('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => config('services.recaptcha.secret'),
                'response' => $this->gRecaptchaResponse,
            ]);

            $result = $recatpchaResponse->json();

            if ($recatpchaResponse->successful() && $result['success'] == true) {
                $this->validate();

                $this->ensureIsNotRateLimited();

                $user = User::where('email', $this->email)->first();

                if ($user && $user->two_factor_enabled) {
                    if (! Auth::validate(['email' => $this->email, 'password' => $this->password])) {
                        RateLimiter::hit($this->throttleKey());

                        throw ValidationException::withMessages([
                            'email' => __('auth.failed'),
                        ]);
                    }

                    RateLimiter::clear($this->throttleKey());

                    session([
                        'login_2fa.user_id' => $user->id,
                        'login_2fa.remember' => $this->remember,
                    ]);

                    $this->redirectRoute('login.2fa');

                    return;
                }

                if (! Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
                    RateLimiter::hit($this->throttleKey());

                    throw ValidationException::withMessages([
                        'email' => __('auth.failed'),
                    ]);
                }

                RateLimiter::clear($this->throttleKey());
                Session::forget('login_2fa');
                Session::regenerate();

                session()->flash('just_logged_in', true);

                if (Auth::user()->is_admin) {
                    return redirect('/admin/dashboard');
                }

                $admin = User::where('is_admin', 1)->first();
                $admin?->notify(new UserLoggedIn(Auth::user()->email));

                $this->redirectIntended(default: route('dashboard', absolute: false));
            } else {
                $this->dispatch('login-error', message: 'Please confirm you are not a robot.')->self();
            }
        } catch (\Exception $e) {
            $this->dispatch('login-error', message: $e->getMessage())->self();
        }
    }

    /**
     * Ensure the authentication request is not rate limited.
     */
    protected function ensureIsNotRateLimited(): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout(request()));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'email' => __('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the authentication rate limiting throttle key.
     */
    protected function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->email).'|'.request()->ip());
    }
}
