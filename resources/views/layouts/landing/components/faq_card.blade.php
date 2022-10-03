@vite('resources/sass/layouts/landing/components/faq_card.scss')

@props(['question', 'answer'])

<details class="faq-card">
    <summary class="faq-card__question">{{ $question }}</summary>
    <span class="faq-card__answer">
        {{ $answer }}
    </span>
</details>
