@extends('front.base')

@section('content')
    <div class="h-12"></div>
    @component('components.info-section-light', ['title' => 'The Menu'])
        <p class="text-purple text-center">Peruse our famous menu and start deciding what to feast on.</p>
    @endcomponent
    <div class="flex justify-around md:justify-center mx-auto items-center p-4 menu-sub-nav">
        <a href="" data-jump-target="#dine" data-jump-offset="-50"
           class="font-sans text-navy uppercase no-underline hover:underline md:mx-12">Dine</a>
        <a href="" data-jump-target="#brunch" data-jump-offset="-50"
           class="font-sans text-navy uppercase no-underline hover:underline md:mx-12">Brunch & Teatime</a>
        <a href="" data-jump-target="#beverages" data-jump-offset="-50"
           class="font-sans text-navy uppercase no-underline hover:underline md:mx-12">Beverages</a>
        <a href="" data-jump-target="#alcohol" data-jump-offset="-50"
           class="font-sans text-navy uppercase no-underline hover:underline md:mx-12">Alcohol</a>
    </div>
    <div class="pb-20">

    </div>

    @include('front.menu.dine')
    @include('front.menu.brunch')
    @include('front.menu.beverages')
    @include('front.menu.alcohol')
    @include('front.partials.back-to-top')
@endsection