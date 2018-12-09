@extends('front.base')

@section('content')
    <div class="h-12 bg-pinky-grey"></div>
    @component('components.info-section', ['title' => trans('about.section_one.heading')])
        <p class="text-center text-purple">{{ trans('about.section_one.content') }}</p>
    @endcomponent
    <section class="section-height about-banner-1"></section>
    @component('components.info-section', ['title' => trans('about.section_two.heading')])
        <p class="text-center text-purple">{{ trans('about.section_two.content') }}</p>
    @endcomponent
    <section class="section-height about-banner-2"></section>
    @component('components.info-section', ['title' => trans('about.section_three.heading')])
        <p class="text-center text-purple">{{ trans('about.section_three.content') }}</p>
        <a href=""
           class="text-link text-purple mt-12">{{ trans('about.section_three.link_text') }} &rarr;</a>
    @endcomponent
@endsection