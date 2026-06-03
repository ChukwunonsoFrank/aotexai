<div x-data class="px-4 lg:px-0 h-full">
    <div class="lg:flex lg:h-full">
        <livewire:dashboard.partials.desktop-navbar />
        <div class="lg:h-full lg:flex-1 lg:px-80 lg:pt-6">
            <div class="mb-3 sticky top-0 bg-dashboard pb-2 lg:pt-4">
                <h1 class="text-white text-lg md:text-xl lg:text-2xl font-semibold">Account</h1>
            </div>
            <div class="lg:h-full lg:pb-24 lg:overflow-scroll scrollbar-hide">
                <div class="lg:flex lg:items-start lg:space-x-4">
                    <div class="flex justify-center mb-3 lg:justify-start">
                        <div class="bg-trade size-16 rounded-full flex items-center justify-center lg:size-20">
                            <svg class="lg:hidden" xmlns="http://www.w3.org/2000/svg" width="44" height="44"
                                viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-circle-user-icon lucide-circle-user">
                                <circle cx="12" cy="12" r="10" />
                                <circle cx="12" cy="10" r="3" />
                                <path d="M7 20.662V19a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v1.662" />
                            </svg>
                            <svg class="hidden lg:inline" xmlns="http://www.w3.org/2000/svg" width="48"
                                height="48" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-circle-user-icon lucide-circle-user">
                                <circle cx="12" cy="12" r="10" />
                                <circle cx="12" cy="10" r="3" />
                                <path d="M7 20.662V19a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v1.662" />
                            </svg>
                        </div>
                    </div>
                    <div class="text-center mb-8 lg:text-start">
                        <h1 class="text-white text-base font-semibold">{{ auth()->user()->name }}</h1>
                        <span class="text-xs text-white">{{ auth()->user()->email }}</span>
                        <div class="mt-3">
                            <a href="{{ route('dashboard.withdraw') }}">
                                <button type="button"
                                    class="py-2 px-4 md:px-6 md:py-3 inline-flex items-center gap-x-2 text-sm md:text-base font-semibold rounded-sm bg-accent text-white focus:outline-hidden">
                                    <i class="fa-solid fa-money-bill-transfer"></i>
                                    Withdraw
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="lg:grid lg:grid-cols-2 lg:gap-4">
                    <a href="{{ route('dashboard.deposithistory') }}">
                        <div class="bg-trade w-full rounded-sm flex flex-col space-y-2 p-3 mb-3 lg:mb-0">
                            <div class="flex items-center space-x-2">
                                <div class="flex-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                        viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="1"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-banknote-arrow-down-icon lucide-banknote-arrow-down">
                                        <path d="M12 18H4a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5" />
                                        <path d="m16 19 3 3 3-3" />
                                        <path d="M18 12h.01" />
                                        <path d="M19 16v6" />
                                        <path d="M6 12h.01" />
                                        <circle cx="12" cy="12" r="2" />
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <p class="font-semibold text-sm text-white">Deposit History</p>
                                </div>
                                <div class="flex-none text-end">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chevron-right-icon lucide-chevron-right">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('dashboard.withdrawhistory') }}">
                        <div class="bg-trade w-full rounded-sm flex flex-col space-y-2 p-3 mb-3 lg:mb-0">
                            <div class="flex items-center space-x-2">
                                <div class="flex-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                        viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="1"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-banknote-arrow-up-icon lucide-banknote-arrow-up">
                                        <path d="M12 18H4a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5" />
                                        <path d="M18 12h.01" />
                                        <path d="M19 22v-6" />
                                        <path d="m22 19-3-3-3 3" />
                                        <path d="M6 12h.01" />
                                        <circle cx="12" cy="12" r="2" />
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <p class="font-semibold text-sm text-white">Withdraw History</p>
                                </div>
                                <div class="flex-none text-end">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chevron-right-icon lucide-chevron-right">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('settings.profile') }}">
                        <div class="bg-trade w-full rounded-sm flex flex-col space-y-2 p-3 mb-3 lg:mb-0">
                            <div class="flex items-center space-x-2">
                                <div class="flex-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                        viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="1"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-cog-icon lucide-cog">
                                        <path d="M12 20a8 8 0 1 0 0-16 8 8 0 0 0 0 16Z" />
                                        <path d="M12 14a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" />
                                        <path d="M12 2v2" />
                                        <path d="M12 22v-2" />
                                        <path d="m17 20.66-1-1.73" />
                                        <path d="M11 10.27 7 3.34" />
                                        <path d="m20.66 17-1.73-1" />
                                        <path d="m3.34 7 1.73 1" />
                                        <path d="M14 12h8" />
                                        <path d="M2 12h2" />
                                        <path d="m20.66 7-1.73 1" />
                                        <path d="m3.34 17 1.73-1" />
                                        <path d="m17 3.34-1 1.73" />
                                        <path d="m11 13.73-4 6.93" />
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <p class="font-semibold text-sm text-white">Settings</p>
                                </div>
                                <div class="flex-none text-end">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chevron-right-icon lucide-chevron-right">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('settings.security') }}">
                        <div class="bg-trade w-full rounded-sm flex flex-col space-y-2 p-3 mb-3 lg:mb-0">
                            <div class="flex items-center space-x-2">
                                <div class="flex-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                        viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="1"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-lock-keyhole-icon lucide-lock-keyhole">
                                        <circle cx="12" cy="16" r="1" />
                                        <rect x="3" y="10" width="18" height="12" rx="2" />
                                        <path d="M7 10V7a5 5 0 0 1 10 0v3" />
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <p class="font-semibold text-sm text-white">Security</p>
                                </div>
                                <div class="flex-none text-end">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chevron-right-icon lucide-chevron-right">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('dashboard.referrals') }}">
                        <div class="bg-trade w-full rounded-sm flex flex-col space-y-2 p-3 mb-3 lg:mb-0">
                            <div class="flex items-center space-x-2">
                                <div class="flex-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users-icon lucide-users"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><path d="M16 3.128a4 4 0 0 1 0 7.744"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><circle cx="9" cy="7" r="4"/></svg>
                                </div>
                                <div class="flex-1">
                                    <p class="font-semibold text-sm text-white">Referrals</p>
                                </div>
                                <div class="flex-none text-end">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chevron-right-icon lucide-chevron-right">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                    {{-- <a x-on:click="$store.accountPage.toggleSupportModal()">
                        <div class="bg-trade w-full rounded-sm flex flex-col space-y-2 p-3 mb-3 lg:mb-0">
                            <div class="flex items-center space-x-2">
                                <div class="flex-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-circle-icon lucide-message-circle"><path d="M2.992 16.342a2 2 0 0 1 .094 1.167l-1.065 3.29a1 1 0 0 0 1.236 1.168l3.413-.998a2 2 0 0 1 1.099.092 10 10 0 1 0-4.777-4.719"/></svg>
                                </div>
                                <div class="flex-1">
                                    <p class="font-semibold text-sm text-white">Support</p>
                                </div>
                                <div class="flex-none text-end">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chevron-right-icon lucide-chevron-right">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a> --}}
                    <a href="https://t.me/Coachservice">
                        <div class="bg-trade w-full rounded-sm flex flex-col space-y-2 p-3 mb-3 lg:mb-0">
                            <div class="flex items-center space-x-2">
                                <div class="flex-none">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_4540_38)">
                                    <path d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24Z" fill="url(#paint0_linear_4540_38)"/>
                                    <path d="M8.12305 12.8771L9.54675 16.8177C9.54675 16.8177 9.72475 17.1864 9.91535 17.1864C10.1059 17.1864 12.9408 14.2372 12.9408 14.2372L16.0933 8.14819L8.17385 11.8599L8.12305 12.8771Z" fill="#C8DAEA"/>
                                    <path d="M10.0105 13.8877L9.73721 16.7923C9.73721 16.7923 9.62281 17.6823 10.5126 16.7923C11.4024 15.9023 12.2541 15.216 12.2541 15.216" fill="#A9C6D8"/>
                                    <path d="M8.14822 13.0178L5.21962 12.0636C5.21962 12.0636 4.86962 11.9216 4.98232 11.5996C5.00552 11.5332 5.05232 11.4767 5.19232 11.3796C5.84122 10.9273 17.2029 6.84359 17.2029 6.84359C17.2029 6.84359 17.5237 6.73549 17.7129 6.80739C17.7597 6.82188 17.8018 6.84854 17.835 6.88465C17.8681 6.92076 17.891 6.96501 17.9014 7.01289C17.9219 7.09746 17.9304 7.18446 17.9268 7.27139C17.9259 7.34659 17.9168 7.41629 17.9099 7.52559C17.8407 8.64209 15.7699 16.9749 15.7699 16.9749C15.7699 16.9749 15.646 17.4625 15.2021 17.4792C15.093 17.4827 14.9843 17.4642 14.8826 17.4249C14.7808 17.3855 14.6879 17.326 14.6096 17.25C13.7385 16.5007 10.7277 14.4773 10.0624 14.0323C10.0474 14.0221 10.0348 14.0087 10.0254 13.9932C10.0159 13.9777 10.01 13.9603 10.0078 13.9423C9.99852 13.8954 10.0495 13.8373 10.0495 13.8373C10.0495 13.8373 15.2921 9.17729 15.4316 8.68809C15.4424 8.65019 15.4016 8.63149 15.3468 8.64809C14.9986 8.77619 8.96242 12.5881 8.29622 13.0088C8.24827 13.0233 8.19758 13.0264 8.14822 13.0178Z" fill="white"/>
                                    </g>
                                    <defs>
                                    <linearGradient id="paint0_linear_4540_38" x1="12" y1="24" x2="12" y2="0" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#1D93D2"/>
                                    <stop offset="1" stop-color="#38B0E3"/>
                                    </linearGradient>
                                    <clipPath id="clip0_4540_38">
                                    <rect width="24" height="24" fill="white"/>
                                    </clipPath>
                                    </defs>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <p class="font-semibold text-sm text-white">Customer Service</p>
                                </div>
                                <div class="flex-none text-end">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chevron-right-icon lucide-chevron-right">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                        @csrf
                        <a class="cursor-pointer" onclick="this.closest('form').submit()">
                            <div class="bg-trade w-full rounded-sm flex flex-col space-y-2 p-3 mb-3 lg:mb-0">
                                <div class="flex items-center space-x-2">
                                    <div class="flex-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                            viewBox="0 0 24 24" fill="none" stroke="#FB2C36" stroke-width="1"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-log-out-icon lucide-log-out">
                                            <path d="m16 17 5-5-5-5" />
                                            <path d="M21 12H9" />
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <p class="font-semibold text-sm text-red-500">Logout</p>
                                    </div>
                                    <div class="flex-none text-end">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-chevron-right-icon lucide-chevron-right">
                                            <path d="m9 18 6-6-6-6" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </form>
                </div>
            </div>

            <div x-cloak x-show="$store.accountPage.isSupportModalOpen" x-transition
                class="fixed top-0 left-0 h-svh w-full bg-dashboard z-20 flex flex-col">
                <div class="flex items-center px-4 py-4 border-y border-[#26252a]">
                    <div class="flex-1">
                        <h1 class="text-white text-base font-bold">Support</h1>
                    </div>
                    <div class="flex-none">
                        <svg x-on:click="$store.accountPage.toggleSupportModal()" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-x-icon lucide-x cursor-pointer">
                            <path d="M18 6 6 18" />
                            <path d="m6 6 12 12" />
                        </svg>
                    </div>
                </div>
                <div class="grow">
                    <iframe frameborder="0" width="100%" height="100%"
                        src="https://jivo.chat/HjwhNMiL2E"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('alpine:init', () => {
        if (!Alpine.store('accountPage')) {
            Alpine.store('accountPage', {
                isSupportModalOpen: false,
                toggleSupportModal() {
                    this.isSupportModalOpen = !this.isSupportModalOpen;
                }
            });
        }
    });
</script>
