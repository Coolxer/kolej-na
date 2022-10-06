@vite('resources/sass/landing/components/pricing_card.scss')

@props(['title', 'price', 'sentences', 'href' => '#'])

<div class="pricing-card">
    <h3 class="pricing-card__heading">{{ $title }}</h3>
    <div class="price">
        <span class="price__full">{{ $price }}</span>
        <div class="price__rest-wrapper">
            <span class="price__rest">99</span>
            <span class="price__currency">zł</span>
        </div>
    </div>
    <ul class="pricing-card__properties-list">
        @foreach ($sentences as $sentence)
            <p class='pricing-card__property-item' ,>
                {{ $sentence }}
            </p>
        @endforeach
    </ul>
    <x-button>
        <a href="{{ $href }}">Wybierz</a>
        <i class="fa-solid fa-check"></i>
    </x-button>

</div>
