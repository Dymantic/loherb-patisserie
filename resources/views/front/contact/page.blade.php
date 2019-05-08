@extends('front.base')

@section('title')
    {{ trans('contact.seo.title') }}
@endsection

@section('head')
    @include('front.partials.ogmeta', [
        'ogImage' => url('/images/cuisine_facebook.jpg'),
        'ogTitle' => trans('contact.seo.title'),
        'ogDescription' => trans('contact.seo.description')
    ])
@endsection

@section('content')
    <div class="h-12 bg-cream-light"></div>
    @component('components.info-section', ['title' => trans('contact.intro.heading')])
        <p class="text-center text-charcoal">{{ trans('contact.intro.content') }}</p>
    @endcomponent
    <contact-form class="mt-20" :trans='@json($form_text)'></contact-form>
    <div class="mt-20">
        <p class="text-center">
            <a class="tracking-wide no-underline text-purple" href="">service@loherb.com.tw</a>
        </p>
        <p class="text-center">
            <a class="tracking-wide no-underline text-purple" href="">+886-3-959-5685</a>
        </p>
        <p class="text-center tracking-wide text-purple">{{ trans('footer.address_full') }}</p>
    </div>
    <section class="reg-section-space">
        <iframe class="block max-w-full mx-auto" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3625.935047568107!2d121.80799681544636!3d24.660363959320296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3467e61d55a9d87b%3A0xdc93b07cb47e22a9!2z5pel5YWJIExPSEVSQg!5e0!3m2!1sen!2stw!4v1547085617044" width="1000" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
@endsection