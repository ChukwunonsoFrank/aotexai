<?php

namespace App\Livewire\Auth;

use App\Models\User;
use App\Notifications\UserLoggedIn;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use PragmaRX\Google2FA\Google2FA;

#[Layout('components.layouts.auth.layout')]
#[Title('Verify 2FA')]
class VerifyLoginTwofa extends Component
{
    public string $code = '';

    public function mount(): void
    {
        $pendingUserId = Session::get('login_2fa.user_id');

        if (! $pendingUserId) {
            $this->redirectRoute('login');

            return;
        }

        $user = User::find($pendingUserId);

        if (! $user || ! $user->two_factor_enabled || blank($user->google2fa_secret)) {
            Session::forget('login_2fa');
            $this->redirectRoute('login');

            return;
        }
    }

    public function verify2fa(): void
    {
        try {
            $this->validate([
                'code' => ['required', 'digits:6'],
            ]);

            $pendingUserId = Session::get('login_2fa.user_id');
            $remember = (bool) Session::get('login_2fa.remember', false);

            if (! $pendingUserId) {
                $this->redirectRoute('login');

                return;
            }

            $user = User::find($pendingUserId);

            if (! $user || blank($user->google2fa_secret)) {
                Session::forget('login_2fa');
                $this->dispatch('login-error', message: '2FA session expired. Please login again.')->self();

                return;
            }

            $google2fa = new Google2FA;
            $valid = $google2fa->verifyKey((string) $user->google2fa_secret, $this->code);

            if (! $valid) {
                $this->reset('code');
                $this->dispatch('login-error', message: 'Invalid code')->self();

                return;
            }

            Auth::login($user, $remember);

            Session::regenerate();
            session()->flash('just_logged_in', true);
            Session::forget('login_2fa');

            if (Auth::user()->is_admin) {
                $this->redirect('/admin/dashboard');

                return;
            }

            $admin = User::where('is_admin', 1)->first();
            $admin?->notify(new UserLoggedIn(Auth::user()->email));

            $this->redirectIntended(default: route('dashboard', absolute: false));
        } catch (\Exception $e) {
            $this->dispatch('login-error', message: $e->getMessage())->self();
        }
    }

    public function render()
    {
        return view('livewire.auth.verify-login-twofa');
    }
}
