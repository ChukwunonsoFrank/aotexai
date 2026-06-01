<div class="auth-login-screen">
    <div class="auth-login-wrap">
        <div class="auth-brand">
            {{-- logo goes here --}}
        </div>

        <div class="login">
            <h1>Login</h1>
            <div class="login-divider"></div>

            <form wire:submit="login" class="login-form">
                <x-auth-session-status class="text-center w-full text-sm text-red-300" :status="session('status')" />

                <label class="field-wrap">
                    <i class="fa fa-user-o field-icon" aria-hidden="true"></i>
                    <input wire:model="email" type="email" autocomplete="email" required placeholder="Your Email" class="field-input">
                </label>

                <label class="field-wrap">
                    <i class="fa fa-lock field-icon" aria-hidden="true"></i>
                    <input wire:model="password" type="password" autocomplete="current-password" required placeholder="Password"
                        class="field-input field-input-password">
                    <button type="button" class="field-toggle" aria-label="Toggle password visibility" tabindex="-1">
                        <i class="fa fa-eye-slash" aria-hidden="true"></i>
                    </button>
                </label>

                <div class="captcha-wrap captcha-wrap-left">
                    <div wire:ignore class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.key') }}"></div>
                </div>

                @if (Route::has('password.request'))
                    <p class="meta-line">
                        Forgot password?
                        <a wire:navigate href="{{ route('password.request') }}">Reset Password</a>
                    </p>
                @endif

                @if (Route::has('register'))
                    <p class="meta-line meta-line-lg">
                        Don't have an account?
                        <a wire:navigate href="{{ route('register') }}">Sign Up</a>
                    </p>
                @endif

                <button type="submit" class="login-submit">Login</button>
            </form>
        </div>
    </div>
</div>

@script
    <script>
        $wire.on('login-error', (event) => {
            const toastMarkup = `
                <div class="flex p-4">
                    <div class="shrink-0">
                        <svg class="shrink-0 size-4 text-red-500 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"></path>
                        </svg>
                    </div>
                    <div class="ms-3 flex-1">
                        <p class="text-xs font-semibold text-gray-700 dark:text-neutral-400">${event.message}</p>
                    </div>
                </div>
            `;

            Toastify({
                text: toastMarkup,
                className: "hs-toastify-on:opacity-100 opacity-0 fixed -top-37.5 right-5 z-90 transition-all duration-300 w-80 bg-white text-sm text-gray-700 border border-gray-200 rounded-xl shadow-lg [&>.toast-close]:hidden dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400",
                duration: 4000,
                close: true,
                escapeMarkup: false
            }).showToast();
        });
    </script>
@endscript
