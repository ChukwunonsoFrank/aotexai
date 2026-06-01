<?php

namespace App\Livewire\Dashboard;

use App\Models\Referral;
use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.app')]

class ShowReferrals extends Component
{
    public $totalCommissions;

    public function mount()
    {
        $this->totalCommissions = Referral::where('user_id', auth()->user()->id)->sum('amount');
    }

    public function render()
    {
        $user = auth()->user();

        $level1Referrals = User::query()
            ->select(['name', 'referral_code'])
            ->where('referred_by', $user->referral_code)
            ->latest()
            ->get();

        $level1Downlines = $level1Referrals->pluck('name')->all();
        $level1Codes = $level1Referrals->pluck('referral_code')->filter()->values();

        $level2Referrals = User::query()
            ->select(['name', 'referral_code'])
            ->when(
                $level1Codes->isNotEmpty(),
                fn($query) => $query->whereIn('referred_by', $level1Codes),
                fn($query) => $query->whereRaw('1 = 0')
            )
            ->latest()
            ->get();

        $level2Downlines = $level2Referrals->pluck('name')->all();
        $level2Codes = $level2Referrals->pluck('referral_code')->filter()->values();

        $level3Downlines = User::query()
            ->select(['name'])
            ->when(
                $level2Codes->isNotEmpty(),
                fn($query) => $query->whereIn('referred_by', $level2Codes),
                fn($query) => $query->whereRaw('1 = 0')
            )
            ->latest()
            ->pluck('name')
            ->all();

        return view('livewire.dashboard.show-referrals', [
            'level1Downlines' => $level1Downlines,
            'level2Downlines' => $level2Downlines,
            'level3Downlines' => $level3Downlines,
        ]);
    }
}
