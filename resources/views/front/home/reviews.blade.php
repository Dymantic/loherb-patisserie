<div class="bg-pinky-grey reg-section-space reviews">
    <p class="heading-text mb-16 text-purple text-center">{{ trans('homepage.reviews.heading') }}</p>
    <div data-flickity='{"autoPlay": 5000}' class="slide-show dark arrows-wide low-dots max-w-md mx-auto">
        @foreach($reviews as $review)
            <div class="w-full text-purple">
                @if($review['title'])
                    <p class="heading-text mb-4 hidden md:block">{{ $review['title'] }}</p>
                @endif
                <p class="mb-4 md:hidden text-center">“{{ $review['brief'] ?? '' }}”</p>
                <p class="mb-4 hidden md:block">
                    {{ $review['content'] }}
                </p>
                <p class="text-sm md:text-base text-center md:text-right italic"> - {{ $review['name'] }}</p>
                <p class="text-sm md:text-base text-center md:text-right italic pb-16">({{ $review['source'] }})</p>
                @include('front.partials.star-rating', ['rating' => $review['rating']])
            </div>
        @endforeach
    </div>
</div>