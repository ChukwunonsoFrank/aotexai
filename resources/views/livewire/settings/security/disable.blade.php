<div class="px-4 lg:px-0 h-full">
    <div class="lg:flex lg:h-full">
        <livewire:dashboard.partials.desktop-navbar />
        <div class="lg:h-full lg:flex-1 lg:px-96 lg:pt-6">
            <div class="bg-dashboard lg:pt-4 text-center">
                <h1 class="text-white my-3 text-lg md:text-xl lg:text-2xl font-semibold">Disable 2FA</h1>
                <p class="text-zinc-300 text-xs leading-normal my-3">Enter the 6-digit authentication code generated on the app.</p>
            </div>

            <form wire:submit="disable2fa" class="mt-8">
                <label for="code" class="block text-xs font-medium mb-2 text-zinc-300">Code</label>
                <input
                    id="code"
                    wire:model="code"
                    inputmode="numeric"
                    maxlength="6"
                    autocomplete="one-time-code"
                    class="bg-navbar text-white border border-gray-700 text-sm py-3 px-4 block w-full rounded-lg focus:outline-0"
                    placeholder="Enter 6-digit code"
                />

                @error('code')
                    <p class="text-xs text-red-500 mt-2">{{ $message }}</p>
                @enderror

                <button type="submit" class="mt-4 py-2.5 cursor-pointer px-4 w-full text-sm font-semibold rounded-lg bg-accent text-white focus:outline-hidden disabled:pointer-events-none">
                    Disable 2FA
                </button>
            </form>
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
    </script>
@endscript
