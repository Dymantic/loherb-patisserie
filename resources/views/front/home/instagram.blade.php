<div class="reg-section-space">
    <p class="heading-text mb-12 text-purple text-center">{{ trans('homepage.instagram.heading') }}</p>
    @foreach($instagrams->take(8)->chunk(4) as $row)
        <div class="max-w-md mx-auto flex-wrap md:flex-no-wrap w-full flex md:mb-6">
            @foreach($row as $instagram)
                <img src="{{ $instagram['thumb'] }}"
                     alt="" class="md:mx-3 w-1/2 md:w-14">
            @endforeach
        </div>
    @endforeach
    <div class="text-center mt-8">
        <a class="text-link tracking-wide mt-8 text-purple hover:text-purple-soft" href="">{{ trans('homepage.instagram.link_text') }} &rarr;</a>
    </div>
</div>