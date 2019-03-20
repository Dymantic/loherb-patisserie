@extends('front.base', ['bodyClass' => 'homepage'])

@section('title')
    {{ trans('homepage.seo.title') }}
@endsection

@section('head')
    @include('front.partials.ogmeta', [
        'ogTitle' => trans('homepage.seo.title'),
        'ogDescription' => trans('homepage.seo.description'),
        'ogImage' => url('/images/cuisine_facebook.jpg'),
    ])
@endsection

@section('content')
    @include('front.home.banner')
    @include('front.home.elegance')
    @include('front.home.dish-banner')
    @include('front.home.events')
    @include('front.home.wedding-banner')
    @include('front.home.journal', ['posts' => $posts])
    @include('front.home.reviews', ['reviews' => $reviews])
    @include('front.home.villa')
    @include('front.home.instagram', ['instagrams' => $instagrams])
    <div class="fb-customerchat"
         page_id="{{ config('facebook.page_id') }}" theme_color="#5d2b46">
    </div>
@endsection

@section('bodyscripts')
    @include('front.partials.restaurant-jsonld')
    @include('front.partials.facebook-sdk')
@endsection