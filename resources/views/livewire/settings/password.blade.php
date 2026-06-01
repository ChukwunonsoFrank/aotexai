<div class="px-4 lg:px-0 h-full">
    <div class="lg:flex lg:h-full">
        <livewire:dashboard.partials.desktop-navbar />
        <div class="lg:h-full lg:flex-1 lg:pl-6 lg:pr-4">
            <div class="mb-3 sticky top-0 z-10 bg-dashboard pb-2 lg:pt-4">
                <h1 class="text-white text-lg md:text-xl lg:text-2xl font-semibold">Settings</h1>
            </div>
            <div class="lg:h-full lg:pb-24 lg:overflow-scroll scrollbar-hide">
                @include('partials.settings-heading')

                <x-settings.layout :heading="__('Update password')" :subheading="__('Ensure your account is using a long, random password to stay secure')">
                    <form wire:submit="updatePassword" class="mt-6 space-y-6">
                        <div>
                            <label for="current_password" class="block text-xs font-medium mb-2 text-zinc-300">{{ __('Current password') }}</label>
                            <input id="current_password" wire:model="current_password" type="password" required
                                autocomplete="current-password"
                                class="bg-navbar text-white border border-gray-700 text-sm py-2.5 sm:py-3 px-4 block w-full rounded-lg sm:text-sm focus:outline-0" />
                            @error('current_password')
                                <p class="text-xs text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="password" class="block text-xs font-medium mb-2 text-zinc-300">{{ __('New password') }}</label>
                            <input id="password" wire:model="password" type="password" required autocomplete="new-password"
                                class="bg-navbar text-white border border-gray-700 text-sm py-2.5 sm:py-3 px-4 block w-full rounded-lg sm:text-sm focus:outline-0" />
                            @error('password')
                                <p class="text-xs text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="password_confirmation" class="block text-xs font-medium mb-2 text-zinc-300">{{ __('Confirm password') }}</label>
                            <input id="password_confirmation" wire:model="password_confirmation" type="password" required
                                autocomplete="new-password"
                                class="bg-navbar text-white border border-gray-700 text-sm py-2.5 sm:py-3 px-4 block w-full rounded-lg sm:text-sm focus:outline-0" />
                        </div>

                        <div class="flex items-center gap-4">
                            <button type="submit"
                                class="py-2.5 cursor-pointer px-4 md:px-6 text-center gap-x-2 text-sm font-semibold rounded-lg bg-accent text-white focus:outline-hidden disabled:opacity-50 disabled:pointer-events-none">
                                {{ __('Save') }}
                            </button>

                            <x-action-message class="me-3 text-green-500" on="password-updated">
                                {{ __('Saved.') }}
                            </x-action-message>
                        </div>
                    </form>
                </x-settings.layout>
            </div>
        </div>
    </div>
</div>


