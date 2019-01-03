@extends('front.base')

@section('title')
    {{ trans('about.seo.title') }}
@endsection

@section('head')
    @include('front.partials.ogmeta', [
        'ogTitle' => trans('about.seo.title'),
        'ogDescription' => trans('about.seo.description'),
        'ogImage' => ''
    ])
@endsection

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
        <a href="{{ localUrl('/contact') }}"
           class="text-link text-purple mt-12">{{ trans('about.section_three.link_text') }} &rarr;</a>
    @endcomponent
@endsection