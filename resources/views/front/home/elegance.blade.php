@component('components.info-section', ['title' => trans('homepage.elegance.heading')])
    <p class="mb-12 text-purple">{{ trans('homepage.elegance.content') }}</p>
    <a href="{{ localUrl('/menu') }}"
       class="text-link text-purple">{{ trans('homepage.elegance.link_text') }} &rarr;</a>
@endcomponent