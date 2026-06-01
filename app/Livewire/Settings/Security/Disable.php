<?php

namespace App\Livewire\Settings\Security;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;
use PragmaRX\Google2FA\Google2FA;

#[Layout('components.layouts.app')]
class Disable extends Component
{
    public string $code = '';

    public function disable2fa(): void
    {
        $this->validate([
            'code' => ['required', 'digits:6'],
        ]);

        $user = Auth::user();

        if (blank($user->google2fa_secret)) {
            $this->dispatch('error', message: '2FA secret not found.')->self();

            return;
        }

        $google2fa = new Google2FA;
        $valid = $google2fa->verifyKey((string) $user->google2fa_secret, $this->code);

        if (! $valid) {
            $this->reset('code');
            $this->dispatch('error', message: 'Invalid code')->self();

            return;
        }

        $user->google2fa_secret = null;
        $user->two_factor_enabled = false;
        $user->save();

        session()->flash('message', '2FA disabled successfully.');

        $this->redirectRoute('settings.security');
    }

    public function render()
    {
        return view('livewire.settings.security.disable');
    }
}
