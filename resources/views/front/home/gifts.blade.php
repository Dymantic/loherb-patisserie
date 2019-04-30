@component('components.info-section-dark', ['title' => trans('homepage.gifts.heading')])
    <p class="mb-12 text-cream-light text-center">{{ trans('homepage.gifts.content') }}</p>
    <a href="{{ localUrl('/contact') }}"
       class="text-link text-cream-light hover:text-brown-light">{{ trans('homepage.gifts.link_text') }} &rarr;</a>
@endcomponent