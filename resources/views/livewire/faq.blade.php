<div>
    <section class="breadcrumb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb__wrapper">
                        <h2 class="breadcrumb__title">Frequently Asked Questions</h2>
                        <ul class="breadcrumb__list">
                            <li class="breadcrumb__item"><a href="{{ route('home') }}" class="breadcrumb__link">Home</a></li>
                            <li class="breadcrumb__item"><i class="fa-solid fa-minus"></i></li>
                            <li class="breadcrumb__item"><span class="breadcrumb__item-text">FAQ</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq-section bg--black py-120">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-content text-center">
                        <h6 class="top-reveal">FAQ</h6>
                        <h2 class="top-reveal">Frequently Asked Questions</h2>
                        <p class="top-reveal">Answers to common questions about Cloudspaceaitrading, automated trading, deposits, withdrawals, strategies, and account limits.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-60 row-gap-5">
                <div class="col-lg-6 align-self-center">
                    <img src="/xtrady/assets/images/faq/faq.png" alt="FAQ support illustration" class="img-fluid scaleUp">
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="accordion custom--accordion" id="faqExample">
                        @foreach ([
                            ['How does Cloudspaceaitrading work?', 'Cloudspaceaitrading is an automated AI trading bot that helps you trade the forex and crypto market easily with a proven scalping strategy powered by a strong algorithm that opens and closes trades within seconds, targeting small profits that accumulate over time.'],
                            ['Do I need trading skills to earn?', 'No. You do not need any trading knowledge. The AI bot handles trades for you, making it beginner-friendly and fully automated.'],
                            ['Are there any fees?', 'Yes, a 1% fee is deducted from profits made, not your capital. If you earn $100, only $1 is charged as fee.'],
                            ['Is my fund safe?', 'Yes. Your capital is 100% safe and returned after every trade. Withdrawals are guaranteed at any time.'],
                            ['How fast is deposit and withdrawal?', 'Deposits and withdrawals are processed instantly, typically within 30 minutes via crypto, with zero fees.'],
                            ['Does Cloudspaceaitrading increase my returns daily?', 'Yes. It uses a scalping strategy with AI to increase returns daily while managing risk through automated adjustments.'],
                            ['What is the minimum deposit and withdrawal?', 'Minimum deposit is $100; minimum withdrawal is $10. You can deposit and withdraw as often as needed.'],
                            ['What else do I need to know?', 'There are 4 AI strategies to choose from. It trades weekdays for forex and crypto, and weekends for crypto only. Live support is available globally.'],
                        ] as $index => [$question, $answer])
                            <div class="accordion-item bottom-reveal">
                                <h2 class="accordion-header">
                                    <button class="accordion-button {{ $index === 0 ? '' : 'collapsed' }}" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq{{ $index }}"
                                        aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" aria-controls="faq{{ $index }}">
                                        {{ $question }}
                                    </button>
                                </h2>
                                <div id="faq{{ $index }}" class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" data-bs-parent="#faqExample">
                                    <div class="accordion-body">
                                        <p>{{ $answer }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
