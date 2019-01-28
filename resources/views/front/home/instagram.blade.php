<div class="reg-section-space">
    @include('front.partials.heading-purple', ['text' => trans('homepage.instagram.heading')])
    <div class="mt-12">
        @foreach($instagrams->take(8)->chunk(4) as $row)
            <div class="max-w-xl mx-auto flex-wrap md:flex-no-wrap justify-center w-full flex">
                @foreach($row as $instagram)
                    <picture class="sm:flex-1  w-1/2 sm:m-1">
                        <source srcset="{{ $instagram['standard'] }}"
                                media="(max-width: 576px)">
                        <source srcset="{{ $instagram['standard'] }}"
                                media="(min-width: 577px)">
                        <img srcset="{{ $instagram['standard'] }}"
                             alt="from instagram">
                    </picture>
                @endforeach
            </div>
        @endforeach
    </div>

    <div class="text-center mt-8">
        <a class="text-link tracking-wide mt-8 text-purple hover:text-purple-soft" href="">{{ trans('homepage.instagram.link_text') }} &rarr;</a>
    </div>
</div>