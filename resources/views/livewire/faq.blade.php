<div style="padding: 20px; padding-top: 60px;">
  <div class="container-contact mt-[300px]">
    <h1 class="contact-us-headline lineUp"></h1>
    <section class="privacy-section">
      <div class="div-block lg:!mt-20 !mt-30">
        <h1 class="heading-3">FAQ's</h1>

        <div class="max-w-3xl mx-auto px-4 py-10 text-white faq-accordion" x-data="{ selected: 0 }">
          <div class="space-y-4">

            <template x-for="(item, index) in [
      { question: 'How does {{ config('app.name') }} work?', answer: '{{ config('app.name') }} is an automated AI trading bot that helps you trade the forex and crypto market easily with a proven scalping strategy powered by a strong algorithm that opens and closes trades within seconds, targeting small profits that accumulate over time.' },
      { question: 'Do I need trading skills to earn?', answer: 'No. You don’t need any trading knowledge. The AI bot handles trades for you, making it beginner-friendly and fully automated.' },
      { question: 'Are there any fees?', answer: 'Yes, a 1% fee is deducted from profits made — not your capital. If you earn $100, only $1 is charged as fee.' },
      { question: 'Is my fund safe?', answer: 'Yes. Your capital is 100% safe and returned after every trade. Withdrawals are guaranteed at any time.' },
      { question: 'How fast is deposit and withdrawal?', answer: 'Deposits and withdrawals are processed instantly, typically within 30 minutes via crypto, with zero fees.' },
      { question: 'Does {{ config('app.name') }} increase my returns daily?', answer: 'Yes. It uses a scalping strategy with AI to increase returns daily while managing risk through automated adjustments.' },
      { question: 'What is the minimum deposit and withdrawal?', answer: 'Minimum deposit is $100; minimum withdrawal is $10. You can deposit and withdraw as often as needed.' },
      { question: 'What else do I need to know?', answer: 'There are 4 AI strategies to choose from. It trades weekdays (forex & crypto) and weekends (crypto only). Live support is available globally.' }
    ]" :key="index">
              <div class="faq-accordion-card rounded-2xl shadow-lg border border-gray-700 overflow-hidden transition-all">

                <!-- Header -->
                <button @click="selected === index ? selected = null : selected = index"
                  class="faq-accordion-trigger w-full flex items-center justify-between !px-6 !py-5 text-left focus:outline-none transition duration-300">
                  <span x-text="item.question" class="text-lg font-semibold tracking-wide text-white"></span>
                  <svg class="h-5 w-5 text-gray-400 transform transition-transform duration-300"
                    :class="{ 'rotate-180': selected === index }" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                  </svg>
                </button>

                <!-- Body -->
                <div x-show="selected === index" x-collapse class="!px-6 !pb-6 text-sm leading-relaxed text-gray-300">
                  <p x-text="item.answer"></p>
                </div>
              </div>
            </template>

          </div>
        </div>

      </div>
    </section>
  </div>
</div>
