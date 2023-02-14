@vite('resources/sass/landing/partials/faq.scss')

@php
$id = 'faq';
$title = 'Najczęściej zadawane pytania (FAQ)';
@endphp

<x-section :id="$id" :title="$title" theme="color" class="faq">

    <x-slot:content>
        <div class="faq__list">
            <x-faq-card question="Question 1" answer="Answer 1" />
            <x-faq-card question="Question 2" answer="Answer 2" />
            <x-faq-card question="Question 3" answer="Answer 3" />
            <x-faq-card question="Question 4" answer="Answer 4" />
            <x-faq-card question="Question 5" answer="Answer 5" />
        </div>
    </x-slot:content>

    <x-slot:image>
        <img src="{{ Vite::asset('resources/images/illustrations/faq.svg') }}"
            alt="">
    </x-slot:image>
</x-section>
