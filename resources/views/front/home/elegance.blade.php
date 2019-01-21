@component('components.info-section', ['title' => trans('homepage.elegance.heading'), 'topClass' => 'post-banner'])
    <p class="mb-12 text-purple text-center">{{ trans('homepage.elegance.content') }}</p>
    <a href="{{ localUrl('/menu') }}"
       class="text-link text-purple hover:text-purple-soft">{{ trans('homepage.elegance.link_text') }} &rarr;</a>
@endcomponent