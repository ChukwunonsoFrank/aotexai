<div x-data class="px-4 lg:px-0 h-full">
    <div class="lg:flex lg:h-full">
        <livewire:dashboard.partials.desktop-navbar />
        <div class="lg:h-full lg:flex-1 lg:overflow-y-auto lg:pl-6 lg:pr-4 lg:pt-4">
            <div id="hs-vertically-centered-modal"
                class="hs-overlay hidden size-full fixed top-0 start-0 z-80 overflow-x-hidden overflow-y-auto pointer-events-none"
                role="dialog" tabindex="-1" aria-labelledby="hs-vertically-centered-modal-label">
                <div
                    class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-56px)] flex items-center">
                    <div class="w-full flex flex-col bg-dashboard rounded-xl pointer-events-auto">
                        <div class="flex justify-between items-center py-3 px-4 border-b border-[#26252a]">
                            <h3 id="hs-vertically-centered-modal-label" class="font-bold text-white">
                                How the Referral Program Works
                            </h3>
                            <button type="button"
                                class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-dim text-white focus:outline-hidden disabled:opacity-50 disabled:pointer-events-none"
                                aria-label="Close" data-hs-overlay="#hs-vertically-centered-modal">
                                <span class="sr-only">Close</span>
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M18 6 6 18"></path>
                                    <path d="m6 6 12 12"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="p-4 overflow-y-auto space-y-4">
                            <p class="text-white text-sm">
                                Invite users with your referral link and earn deposit commissions through your network.
                            </p>
                            <ul class="list-disc list-inside text-white text-sm space-y-1">
                                <li>Level 1 (Direct referrals): 10% deposit commission.</li>
                                <li>Level 2 (Indirect referrals): 6% deposit commission.</li>
                                <li>Level 3 (Third chain): 4% deposit commission.</li>
                            </ul>
                            <div class="text-white text-sm space-y-1">
                                <p>Example:</p>
                                <p>If Alice invites Bob, Bob is Alice's Level 1 referral.</p>
                                <p>If Bob invites Charlie, Charlie is Alice's Level 2 referral.</p>
                                <p>If Charlie invites John, John is Alice's Level 3 referral.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-dashboard lg:pb-20 pb-8">
                <h1 class="text-white my-3 text-lg md:text-xl lg:text-2xl font-semibold">Referrals</h1>

                <p class="text-zinc-300 text-xs leading-normal">
                    Share your referral link, grow your network, and earn commissions when your downlines deposit.
                </p>

                <div class="rounded-lg bg-dim border-2 border-[#26252a] p-3 mt-5">
                    <div class="flex items-center">
                        <div class="flex-1 flex items-center gap-x-1">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="white"
                                    class="icon icon-tabler icons-tabler-filled icon-tabler-coin">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M17 3.34a10 10 0 1 1 -15 8.66l.005 -.324a10 10 0 0 1 14.995 -8.336zm-5 2.66a1 1 0 0 0 -1 1a3 3 0 1 0 0 6v2a1.024 1.024 0 0 1 -.866 -.398l-.068 -.101a1 1 0 0 0 -1.732 .998a3 3 0 0 0 2.505 1.5h.161a1 1 0 0 0 .883 .994l.117 .007a1 1 0 0 0 1 -1l.176 -.005a3 3 0 0 0 -.176 -5.995v-2c.358 -.012 .671 .14 .866 .398l.068 .101a1 1 0 0 0 1.732 -.998a3 3 0 0 0 -2.505 -1.501h-.161a1 1 0 0 0 -1 -1zm1 7a1 1 0 0 1 0 2v-2zm-2 -4v2a1 1 0 0 1 0 -2z" />
                                </svg>
                            </div>
                            <p class="text-xs text-zinc-300">Total Commissions</p>
                        </div>
                        <div class="flex-none">
                            <button type="button"
                                class="flex items-center gap-x-1 rounded-full bg-dashboard px-3 py-2 border border-[#323335]"
                                aria-haspopup="dialog" aria-expanded="false"
                                aria-controls="hs-vertically-centered-modal"
                                data-hs-overlay="#hs-vertically-centered-modal">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-info-icon lucide-info">
                                        <circle cx="12" cy="12" r="10" />
                                        <path d="M12 16v-4" />
                                        <path d="M12 8h.01" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-xs text-white">How it works?</p>
                                </div>
                            </button>
                        </div>
                    </div>

                    <div class="mt-3 flex items-end justify-between">
                        <h4 class="text-2xl font-bold text-white">
                            @money($this->totalCommissions)
                        </h4>
                    </div>
                </div>

                <div class="my-8">
                    <div class="w-full space-y-2">
                        <h2 class="text-white text-sm font-semibold">Referral Link</h2>
                        <div class="relative">
                            <input id="referral_link" type="text"
                                class="py-3 px-4 pe-20 block w-full border-2 border-[#26252a] text-white bg-transparent rounded-lg font-mono font-bold text-xs focus:outline-none disabled:opacity-50 disabled:pointer-events-none"
                                value="https://cloudspaceaitrading.com/register?ref={{ auth()->user()->referral_code }}" readonly>
                            <div x-on:click="$store.showReferralsPage.copyReferralLink()"
                                class="absolute inset-y-0 end-0 flex items-center gap-x-2 cursor-pointer z-20 pe-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="js-clipboard-default size-4 group-hover:rotate-6 transition lucide lucide-copy-icon lucide-copy">
                                    <rect width="14" height="14" x="8" y="8" rx="2" ry="2" />
                                    <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2" />
                                </svg>
                                <span class="text-xs text-white">Copy</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col border-2 border-[#323335]">
                    <div class="py-3 px-5 bg-dim border-b border-[#323335]">
                        <p class="text-white text-sm font-bold">Level 1 <span class="text-xs">(10% on deposits)</span></p>
                    </div>
                    <div class="px-4 py-8 flex items-center gap-1 flex-wrap">
                        @forelse ($level1Downlines as $downline)
                            <div class="flex items-center rounded-full bg-accent px-3 py-2">
                                <p class="text-xs text-white">{{ $downline }}</p>
                            </div>
                        @empty
                            <p class="text-xs text-zinc-300">No level 1 referrals yet.</p>
                        @endforelse
                    </div>

                    <div class="py-3 px-5 bg-dim border-t-2 border-b border-[#323335]">
                        <p class="text-white text-sm font-bold">Level 2 <span class="text-xs">(6% on deposits)</span></p>
                    </div>
                    <div class="px-4 py-8 flex items-center gap-1 flex-wrap">
                        @forelse ($level2Downlines as $downline)
                            <div class="flex items-center rounded-full bg-accent px-3 py-2">
                                <p class="text-xs text-white">{{ $downline }}</p>
                            </div>
                        @empty
                            <p class="text-xs text-zinc-300">No level 2 referrals yet.</p>
                        @endforelse
                    </div>

                    <div class="py-3 px-5 bg-dim border-t-2 border-b border-[#323335]">
                        <p class="text-white text-sm font-bold">Level 3 <span class="text-xs">(4% on deposits)</span></p>
                    </div>
                    <div class="px-4 py-8 flex items-center gap-1 flex-wrap">
                        @forelse ($level3Downlines as $downline)
                            <div class="flex items-center rounded-full bg-accent px-3 py-2">
                                <p class="text-xs text-white">{{ $downline }}</p>
                            </div>
                        @empty
                            <p class="text-xs text-zinc-300">No level 3 referrals yet.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    let lastToast = null;

    function toastCopied() {
        if (lastToast) {
            lastToast.hideToast();
        }

        const copiedToastMarkup = `
            <div class="flex items-center p-4">
                <div class="shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
                </div>
                <div class="ms-3 flex-1">
                    <p class="text-xs font-semibold text-white">Copied</p>
                </div>
            </div>
        `;

        lastToast = Toastify({
            text: copiedToastMarkup,
            className: "hs-toastify-on:opacity-100 opacity-0 absolute top-0 start-1/2 -translate-x-1/2 z-90 w-4/5 md:w-1/2 lg:w-1/4 transition-all duration-300 bg-dashboard border border-[#26252a] text-sm text-white rounded-xl shadow-lg [&>.toast-close]:hidden",
            duration: 4000,
            close: true,
            escapeMarkup: false
        });

        lastToast.showToast();
    }

    document.addEventListener('alpine:init', () => {
        Alpine.store('showReferralsPage', {
            copyReferralLink() {
                const copyText = document.getElementById('referral_link');
                copyText.select();
                copyText.setSelectionRange(0, 99999);
                navigator.clipboard.writeText(copyText.value);
                toastCopied();
            }
        });
    });
</script>
