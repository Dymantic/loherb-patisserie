@extends('front.base')

@section('title')
    {{ trans('contact.title') }}
@endsection

@section('head')
    @include('front.partials.ogmeta', [
        'ogImage' => '',
        'ogTitle' => trans('contact.title'),
        'ogDescription' => trans('contact.description')
    ])
@endsection

@section('content')
    <div class="h-12 bg-pinky-grey"></div>
    @component('components.info-section', ['title' => trans('contact.intro.heading')])
        <p class="text-center text-purple">{{ trans('contact.intro.content') }}</p>
    @endcomponent
    <contact-form class="mt-20" :trans='@json($form_text)'></contact-form>
    <div class="my-20">
        <p class="text-center">
            <a class="tracking-wide no-underline text-purple" href="">service@loherb.com.tw</a>
        </p>
        <p class="text-center">
            <a class="tracking-wide no-underline text-purple" href="">+886-3-959-5685</a>
        </p>
        <p class="text-center tracking-wide text-purple">{{ trans('footer.address') }}</p>
    </div>
@endsection