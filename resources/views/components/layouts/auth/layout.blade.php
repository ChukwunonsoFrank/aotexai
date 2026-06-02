<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ ucwords(config('app.name')) }} - AI Trading Platform</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&amp;display=swap" rel="stylesheet">

        <link rel="stylesheet" href="/homepage/assets/css/loginstyle.css">
    @livewireStyles
    @vite('resources/css/app.css')
    @vite('resources/css/custom.css')

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    <script>
        function renderAuthRecaptchas() {
            if (!window.grecaptcha || typeof window.grecaptcha.render !== 'function') {
                return;
            }

            document.querySelectorAll('.g-recaptcha').forEach((element) => {
                if (element.dataset.widgetId) {
                    return;
                }

                const siteKey = element.dataset.sitekey;
                if (!siteKey) {
                    return;
                }

                const widgetId = window.grecaptcha.render(element, {
                    sitekey: siteKey,
                    callback: function(token) {
                        const livewireRoot = element.closest('[wire\\:id]');
                        if (!livewireRoot || !window.Livewire) {
                            return;
                        }

                        const component = window.Livewire.find(livewireRoot.getAttribute('wire:id'));
                        if (component) {
                            component.set('gRecaptchaResponse', token);
                        }
                    },
                });

                element.dataset.widgetId = String(widgetId);
            });
        }

        function initializePasswordToggles() {
            document.querySelectorAll('.field-wrap-password').forEach((fieldWrap) => {
                if (fieldWrap.dataset.passwordToggleBound === 'true') {
                    return;
                }

                const input = fieldWrap.querySelector('.js-password-input');
                const button = fieldWrap.querySelector('.js-password-toggle');
                const icon = button?.querySelector('i');

                if (!input || !button || !icon) {
                    return;
                }

                const syncState = () => {
                    const isVisible = input.type === 'text';

                    icon.classList.toggle('fa-eye', isVisible);
                    icon.classList.toggle('fa-eye-slash', !isVisible);
                    button.setAttribute('aria-label', isVisible ? 'Hide password' : 'Show password');
                    button.setAttribute('aria-pressed', String(isVisible));
                };

                button.addEventListener('click', () => {
                    input.type = input.type === 'password' ? 'text' : 'password';
                    syncState();
                });

                fieldWrap.dataset.passwordToggleBound = 'true';
                syncState();
            });
        }

        function onAuthRecaptchaApiLoad() {
            renderAuthRecaptchas();
        }

        document.addEventListener('DOMContentLoaded', renderAuthRecaptchas);
        document.addEventListener('DOMContentLoaded', initializePasswordToggles);
        document.addEventListener('livewire:navigated', renderAuthRecaptchas);
        document.addEventListener('livewire:navigated', initializePasswordToggles);
    </script>
    <script src="https://www.google.com/recaptcha/api.js?onload=onAuthRecaptchaApiLoad&render=explicit" async defer></script>
</head>

<body>
    {{ $slot }}

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    @livewireScripts
</body>

</html>
