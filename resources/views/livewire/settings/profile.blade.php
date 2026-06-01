<div class="px-4 lg:px-0 h-full">
    <div class="lg:flex lg:h-full">
        <livewire:dashboard.partials.desktop-navbar />
        <div class="lg:h-full lg:flex-1 lg:pl-6 lg:pr-4">
            <div class="mb-3 sticky top-0 z-10 bg-dashboard pb-2 lg:pt-4">
                <h1 class="text-white text-lg md:text-xl lg:text-2xl font-semibold">Settings</h1>
            </div>
            <div class="lg:h-full lg:pb-24 lg:overflow-scroll scrollbar-hide">
                @include('partials.settings-heading')

                <x-settings.layout :heading="__('Profile')" :subheading="__('Update your name and email address')">
                    <form wire:submit="updateProfileInformation" class="my-6 w-full space-y-6">
                        <div>
                            <label for="name" class="block text-xs font-medium mb-2 text-zinc-300">{{ __('Name') }}</label>
                            <input id="name" wire:model="name" type="text" required autofocus autocomplete="name"
                                class="bg-navbar text-white border border-gray-700 text-sm py-2.5 sm:py-3 px-4 block w-full rounded-lg sm:text-sm focus:outline-0" />
                            @error('name')
                                <p class="text-xs text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="email" class="block text-xs font-medium mb-2 text-zinc-300">{{ __('Email') }}</label>
                            <input id="email" wire:model="email" type="email" required autocomplete="email"
                                class="bg-navbar text-white border border-gray-700 text-sm py-2.5 sm:py-3 px-4 block w-full rounded-lg sm:text-sm focus:outline-0" />
                            @error('email')
                                <p class="text-xs text-red-500 mt-2">{{ $message }}</p>
                            @enderror

                            @if (auth()->user() instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !auth()->user()->hasVerifiedEmail())
                                <div>
                                    <p class="mt-4 text-xs text-zinc-300">
                                        {{ __('Your email address is unverified.') }}

                                        <button type="button" class="text-sm text-accent cursor-pointer"
                                            wire:click.prevent="resendVerificationNotification">
                                            {{ __('Click here to re-send the verification email.') }}
                                        </button>
                                    </p>

                                    @if (session('status') === 'verification-link-sent')
                                        <p class="mt-2 text-xs font-medium text-green-500">
                                            {{ __('A new verification link has been sent to your email address.') }}
                                        </p>
                                    @endif
                                </div>
                            @endif
                        </div>

                        <div class="flex items-center gap-4">
                            <button type="submit"
                                class="py-2.5 cursor-pointer px-4 md:px-6 text-center gap-x-2 text-sm font-semibold rounded-lg bg-accent text-white focus:outline-hidden disabled:opacity-50 disabled:pointer-events-none">
                                {{ __('Save') }}
                            </button>

                            <x-action-message class="me-3 text-green-500" on="profile-updated">
                                {{ __('Saved.') }}
                            </x-action-message>
                        </div>
                    </form>

                    {{-- <livewire:settings.delete-user-form /> --}}
                </x-settings.layout>
            </div>
        </div>
    </div>
</div>
