@extends('front.base', ['bodyClass' => 'homepage'])

@section('title')
    {{ trans('homepage.seo.title') }}
@endsection

@section('head')
    @include('front.partials.ogmeta', [
        'ogTitle' => trans('homepage.seo.title'),
        'ogDescription' => trans('homepage.seo.description'),
        'ogImage' => url('/images/patisserie_facebook.jpg'),
    ])
@endsection

@section('content')
    @include('front.home.banner')
    @include('front.home.patisserie-souvenir')
    @include('front.home.baked-banner')
    @include('front.home.gifts')
    @include('front.home.gift-banner')
    @include('front.home.journal', ['posts' => $posts])
    @include('front.home.villa')
    @include('front.home.communicate')
    @include('front.home.instagram', ['instagrams' => $instagrams])

@endsection

@section('bodyscripts')
{{--    @include('front.partials.restaurant-jsonld')--}}
@endsection