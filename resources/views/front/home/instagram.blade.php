<div class="reg-section-space">
    @include('front.partials.heading-charcoal', ['text' => trans('homepage.instagram.heading')])
    <div class="mt-12">
        @foreach($instagrams->take(8)->chunk(4) as $row)
            <div class="max-w-4xl mx-auto flex-wrap md:flex-no-wrap justify-center w-full flex">
                @foreach($row as $instagram)
                    <div class="instagram-image-box" data-usher data-usher-delay="{{ ($loop->index * ($loop->parent->index + 1)) / 10 }}">
                        <img data-src="{{ $instagram['url'] }}" class="lazyload"
                             alt="from Instagram">
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>

    <div class="text-center mt-8">
        <a class="text-link tracking-wide mt-8 text-charcoal hover:text-charcoal-light" href="https://www.instagram.com/loherb_yilan">{{ trans('homepage.instagram.link_text') }} &rarr;</a>
    </div>
</div>
