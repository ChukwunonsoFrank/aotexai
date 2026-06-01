<?php

namespace App\Livewire\Settings\Security;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.app')]
class Index extends Component
{
    public function mount()
    {
        if (session()->has('message')) {
            $message = session()->get('message');
            $this->dispatch('message', message: $message)->self();
        }
    }

    public function getIs2faEnabledProperty(): bool
    {
        return (bool) auth()->user()->two_factor_enabled;
    }

    public function render()
    {
        return view('livewire.settings.security.index');
    }
}
