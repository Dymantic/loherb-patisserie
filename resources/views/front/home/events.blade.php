@component('components.info-section-dark', ['title' => trans('homepage.events.heading')])
    <p class="mb-12 text-cream-light">{{ trans('homepage.events.content') }}</p>
    <a href="{{ localUrl('/events') }}"
       class="text-link text-cream-light">{{ trans('homepage.events.link_text') }} &rarr;</a>
@endcomponent