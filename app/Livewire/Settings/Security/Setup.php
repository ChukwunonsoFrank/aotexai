<?php

namespace App\Livewire\Settings\Security;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;
use PragmaRX\Google2FA\Google2FA;

#[Layout('components.layouts.app')]
class Setup extends Component
{
    public string $google2faSecret = '';

    public string $qrCodeUrl = '';

    public function mount(): void
    {
        $user = Auth::user();

        if (blank($user->google2fa_secret)) {
            $google2fa = new Google2FA;
            $user->google2fa_secret = $google2fa->generateSecretKey(16);
            $user->save();
        }

        $this->google2faSecret = (string) $user->google2fa_secret;

        $google2fa = new Google2FA;
        $this->qrCodeUrl = $google2fa->getQRCodeUrl(
            config('app.name'),
            (string) $user->email,
            $this->google2faSecret
        );
    }

    public function render()
    {
        return view('livewire.settings.security.setup');
    }
}
