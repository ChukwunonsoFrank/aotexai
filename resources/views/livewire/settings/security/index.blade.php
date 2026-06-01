<div class="px-4 lg:px-0 h-full">
    <div class="lg:flex lg:h-full">
        <livewire:dashboard.partials.desktop-navbar />
        <div class="lg:h-full lg:flex-1 lg:px-80 lg:pt-6">
            <div class="mb-3 sticky top-0 bg-dashboard pb-2 lg:pt-4">
                <h1 class="text-white text-lg md:text-xl lg:text-2xl font-semibold">Security</h1>
            </div>

            <div class="lg:h-full lg:pb-24 lg:overflow-scroll scrollbar-hide">
                <div class="lg:grid lg:grid-cols-2 lg:gap-4">
                    <div class="bg-trade w-full rounded-sm flex flex-col space-y-2 p-3 mb-3 lg:mb-0">
                        <div class="flex items-center space-x-2">
                            <div class="flex-none">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check-icon lucide-shield-check">
                                    <path d="M20 13c0 5-3.5 7.5-8 9-4.5-1.5-8-4-8-9V5l8-3 8 3z" />
                                    <path d="m9 12 2 2 4-4" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="font-semibold text-sm text-white">2FA</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-xs font-semibold {{ $this->is2faEnabled ? 'text-green-500' : 'text-red-500' }}">
                                    {{ $this->is2faEnabled ? 'Enabled' : 'Disabled' }}
                                </span>
                                <a href="{{ $this->is2faEnabled ? route('settings.security.2fa.disable') : route('settings.security.2fa.setup') }}" class="py-1 px-3 inline-flex items-center justify-center text-xs font-semibold rounded-lg bg-accent text-white">
                                    {{ $this->is2faEnabled ? 'Disable' : 'Enable' }}
                                </a>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('settings.password') }}">
                        <div class="bg-trade w-full rounded-sm flex flex-col space-y-2 p-3 mb-3 lg:mb-0">
                            <div class="flex items-center space-x-2">
                                <div class="flex-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-rectangle-ellipsis-icon lucide-rectangle-ellipsis"><rect width="20" height="12" x="2" y="6" rx="2"/><path d="M12 12h.01"/><path d="M17 12h.01"/><path d="M7 12h.01"/></svg>
                                </div>
                                <div class="flex-1">
                                    <p class="font-semibold text-sm text-white">Change Password</p>
                                </div>
                                <div class="flex-none text-end">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right-icon lucide-chevron-right">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@script
    <script>
        $wire.on('error', (event) => {
            const toastMarkup = `
                <div class="flex items-center p-4">
                    <div class="shrink-0">
                        <svg class="shrink-0 size-4 text-red-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="m15 9-6 6"></path><path d="m9 9 6 6"></path></svg>
                    </div>
                    <div class="ms-3 flex-1">
                        <p class="text-xs font-semibold text-white">${event.message}</p>
                    </div>
                </div>
            `;

            Toastify({
                text: toastMarkup,
                className: "hs-toastify-on:opacity-100 opacity-0 border border-gray-700 absolute top-0 start-1/2 -translate-x-1/2 z-90 w-4/5 md:w-1/2 lg:w-1/4 transition-all duration-300 bg-navbar text-sm text-white rounded-xl shadow-lg [&>.toast-close]:hidden",
                duration: 3000,
                close: true,
                escapeMarkup: false
            }).showToast();
        });

        $wire.on('message', (event) => {
            const toastMarkup = `
                <div class="flex items-start p-4">
                    <div class="shrink-0">
                        <svg class="shrink-0 size-4 text-teal-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big-icon lucide-circle-check-big"><path d="M21.801 10A10 10 0 1 1 17 3.335"/><path d="m9 11 3 3L22 4"/></svg>
                    </div>
                    <div class="ms-3 flex-1">
                        <p class="text-xs font-semibold text-white">${event.message}</p>
                    </div>
                </div>
            `;

            Toastify({
                text: toastMarkup,
                className: "hs-toastify-on:opacity-100 opacity-0 border border-gray-700 absolute top-0 start-1/2 -translate-x-1/2 z-90 w-4/5 md:w-1/2 lg:w-1/4 transition-all duration-300 bg-navbar text-sm text-white rounded-xl shadow-lg [&>.toast-close]:hidden",
                duration: 4000,
                close: true,
                escapeMarkup: false
            }).showToast();
        });
    </script>
@endscript
