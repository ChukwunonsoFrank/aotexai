<div class="auth-login-screen">
    <div class="auth-login-wrap">
        <div class="auth-brand">
            <img src="/images/aotexailogo.png" loading="eager"
                alt="{{ config('mail.APP_NAME') }} logo, the platform for crypto trading and automated bots." style="width: 40px" alt="">
            <span class="brand-text">AOTEXAI</span>
        </div>

        <div class="login">
            <h1>Forgot Password</h1>
            <div class="login-divider"></div>

            <form wire:submit="sendPasswordResetLink" class="login-form">
                <x-auth-session-status class="text-center w-full text-sm text-red-300" :status="session('status')" />

                <p class="meta-line">Enter your email to receive a password reset link.</p>

                <label class="field-wrap">
                    <i class="fa fa-envelope-o field-icon" aria-hidden="true"></i>
                    <input wire:model="email" type="email" required placeholder="Your Email" class="field-input">
                </label>

                <button type="submit" class="login-submit">Email Password Reset Link</button>
            </form>

            <p class="meta-line meta-line-lg">
                Or, return to
                <a wire:navigate href="{{ route('login') }}">Log in</a>
            </p>
        </div>
    </div>
</div>
