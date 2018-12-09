@extends('front.base')

@section('content')
    <div class="h-12"></div>
    @component('components.info-section-light', ['title' => 'The Menu'])
        <p class="text-purple text-center">Peruse our famous menu and start deciding what to feast on.</p>
    @endcomponent
    <div class="flex justify-around max-w-2xl mx-auto items-center px-4 pb-20">
        <a href=""
           class="font-sans text-navy uppercase no-underline">Dine</a>
        <a href=""
           class="font-sans text-navy uppercase no-underline">Brunch & Teatime</a>
        <a href=""
           class="font-sans text-navy uppercase no-underline">Beverages</a>
        <a href=""
           class="font-sans text-navy uppercase no-underline">Alcohol</a>
    </div>
    @include('front.menu.dine')
    @include('front.menu.brunch')
    @include('front.menu.beverages')
    @include('front.menu.alcohol')
@endsection