<div>
    <div class="mb-6 flex w-full flex-wrap items-center gap-2">
        <a @class([
            'inline-flex w-fit items-center rounded-full border border-gray-700 px-4 py-2 text-sm font-medium text-white transition',
            'bg-navbar' => request()->is('settings/profile'),
            'hover:bg-navbar' => !request()->is('settings/profile'),
        ]) href="{{ route('settings.profile') }}" wire:navigate>
                {{ __('Profile') }}
        </a>

        <a @class([
            'inline-flex w-fit items-center rounded-full border border-gray-700 px-4 py-2 text-sm font-medium text-white transition',
            'bg-navbar' => request()->is('settings/password'),
            'hover:bg-navbar' => !request()->is('settings/password'),
        ]) href="{{ route('settings.password') }}" wire:navigate>
            {{ __('Password') }}
        </a>
    </div>

    <div class="max-md:pt-2">
        <h2 class="text-white text-lg md:text-xl font-semibold">{{ $heading ?? '' }}</h2>
        <p class="text-xs text-zinc-300 mt-1">{{ $subheading ?? '' }}</p>

        <div class="mt-5 w-full max-w-lg">
            {{ $slot }}
        </div>
    </div>
</div>
