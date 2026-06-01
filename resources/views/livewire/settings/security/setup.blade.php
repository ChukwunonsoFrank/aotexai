<div
    x-data="{
        copied: false,
        secret: @js($google2faSecret),
        qrCodeUrl: @js($qrCodeUrl),
        init() {
            this.$refs.qrcode.innerHTML = '';
            const qrcode = new QRCode(this.$refs.qrcode);
            qrcode.makeCode(this.qrCodeUrl);
        },
        async copyCode() {
            await navigator.clipboard.writeText(this.secret);
            this.copied = true;
            setTimeout(() => this.copied = false, 1500);
        }
    }"
    class="px-4 lg:px-0 h-full"
>
    <div class="lg:flex lg:h-full">
        <livewire:dashboard.partials.desktop-navbar />
        <div class="lg:h-full lg:flex-1 lg:px-96 lg:pt-6 text-center">
            <div class="bg-dashboard lg:pt-4">
                <h1 class="text-white my-3 text-lg md:text-xl lg:text-2xl font-semibold">2FA Setup</h1>
                <p class="text-zinc-300 text-xs leading-normal my-3">Scan the QR code below using the Google Authenticator app.</p>
            </div>

            <div class="flex items-center justify-center my-8">
                <div class="size-42 bg-[#FFFFFF] p-2 flex rounded-lg">
                    <div wire:ignore class="size-42" x-ref="qrcode"></div>
                </div>
            </div>

            <div>
                <p class="text-zinc-300 text-xs leading-normal">Can't scan the QR code? Enter this code into your authenticator app instead.</p>
            </div>

            <div class="mt-8 mb-2">
                <p class="text-white text-2xl font-bold leading-normal">{{ $google2faSecret }}</p>
            </div>

            <div class="flex items-center justify-center mb-10">
                <button type="button" x-on:click="copyCode()" class="text-zinc-400 hover:text-zinc-300 text-xs font-medium">
                    <span x-text="copied ? 'Copied' : 'Copy code'"></span>
                </button>
            </div>

            <div>
                <a href="{{ route('settings.security.2fa.enable') }}">
                    <button type="button" class="py-2.5 cursor-pointer px-4 w-full md:px-6 text-center gap-x-2 text-sm font-semibold rounded-lg bg-accent text-white focus:outline-hidden disabled:pointer-events-none">
                        Next
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
