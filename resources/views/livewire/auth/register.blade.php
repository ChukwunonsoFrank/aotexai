<div class="auth-login-screen">
    <div class="auth-login-wrap">
        <div class="auth-brand">
            <svg class="brand-mark" viewBox="0 0 72 56" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M10 47L31 11L43 17" />
                <path d="M17 49L59 47" />
                <path d="M17 42C31 39 43 34 58 29" />
            </svg>
            <span class="brand-text">AOITEXAI</span>
        </div>

        <div class="login">
            <h1>Register</h1>
            <div class="login-divider"></div>

            <form wire:submit="register" class="login-form">
                <x-auth-session-status class="text-center w-full text-sm text-red-300" :status="session('status')" />

                <label class="field-wrap">
                    <i class="fa fa-user-o field-icon" aria-hidden="true"></i>
                    <input wire:model="name" type="text" autocomplete="name" required placeholder="Fullname" class="field-input">
                </label>

                <label class="field-wrap">
                    <i class="fa fa-envelope-o field-icon" aria-hidden="true"></i>
                    <input wire:model="email" type="email" autocomplete="email" required placeholder="Your Email" class="field-input">
                </label>

                <label class="field-wrap">
                    <i class="fa fa-lock field-icon" aria-hidden="true"></i>
                    <input wire:model="password" type="password" autocomplete="new-password" required placeholder="Password" class="field-input">
                </label>

                <label class="field-wrap">
                    <i class="fa fa-lock field-icon" aria-hidden="true"></i>
                    <input wire:model="password_confirmation" type="password" autocomplete="new-password" required placeholder="Confirm Password" class="field-input">
                </label>

                <label class="terms-row" for="terms-checkbox">
                    <input wire:model="termsAndPrivacyPolicyAccepted" type="checkbox" id="terms-checkbox" class="terms-checkbox">
                    <span>
                        I confirm that I am 18 years old or older and accept the
                        <a href="{{ route('terms') }}">Terms & Conditions</a>
                        and
                        <a href="{{ route('privacy') }}">Privacy Policy</a>
                    </span>
                </label>

                <div class="captcha-wrap captcha-wrap-left">
                    <div wire:ignore class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.key') }}"></div>
                </div>

                <p class="meta-line meta-line-lg">
                    Already have an account?
                    <a wire:navigate href="{{ route('login') }}">Log in</a>
                </p>

                <button type="submit" class="login-submit">Create Account</button>
            </form>
        </div>
    </div>
</div>

@script
    <script>
        $wire.on('signup-error', (event) => {
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
