@extends('front.base', ['bodyClass' => 'homepage'])

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
@endsection