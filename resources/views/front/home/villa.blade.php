<section class="section-height home-cuisine flex justify-center items-center">
    <div data-usher class="max-w-lg p-8 bg-opaque flex flex-col items-center mx-4 md:mx-0">
        @if(app()->getLocale() === 'en')
            @include('svgs.logos.Eng_Cuisine', ['classes' => 'text-purple h-16 mb-6'])
        @else
            @include('svgs.logos.Ch_Cuisine', ['classes' => 'text-purple h-16 mb-6'])
        @endif
        <p class="mb-8 text-purple text-center">{{ trans('homepage.cuisine.content') }}</p>
        <a href="https://cuisine.loherb.com.tw" class="text-link text-purple hover:text-purple-soft">{{ trans('homepage.cuisine.link_text') }} &rarr;</a>
    </div>
</section>
