<section class="section-height home-cuisine flex justify-center items-center">
    <div class="max-w-sm p-8 bg-opaque flex flex-col items-center mx-4 md:mx-0">
        @include('svgs.logos.shoutout_cuisine', ['svgClass' => 'h-24 mb-12'])
        <p class="mb-8 text-purple text-center">{{ trans('homepage.cuisine.content') }}</p>
        <a href="https://cuisine.loherb.com.tw" class="text-link text-purple hover:text-purple-soft">{{ trans('homepage.cuisine.link_text') }} &rarr;</a>
    </div>
</section>