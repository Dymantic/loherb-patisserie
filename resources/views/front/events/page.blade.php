@extends('front.base')

@section('content')
    <div class="h-12 bg-pinky-grey"></div>
    @component('components.info-section', ['title' => trans('events.intro.heading')])
        <p class="text-center text-purple">{{ trans('events.intro.content') }}</p>
    @endcomponent
    <section>
        <div class="reg-section-space slide-show-container">
            <div data-flickity
                 class="w-full max-w-2xl md:w-4/5 mx-auto slide-show inner-dots">
                @foreach($event_images as $image)
                    <picture class="w-full block mx-auto">
                        <source srcset="{{ $image['small'] }}"
                                media="(max-width: 576px)">
                        <source srcset="{{ $image['full'] }}"
                                media="(min-width: 577px)">
                        <img srcset="{{ $image['full'] }}"
                             alt="Loherb Cuisine provides an ideal event venue">
                    </picture>
                @endforeach
            </div>
        </div>
    </section>
    @component('components.info-section-light', ['title' => trans('events.venue.heading')])
        <div class="max-w-xl mx-auto mb-20 flex flex-wrap">
            @foreach($amenities as $amenity)
                <div class="w-full md:w-1/2 my-1">
                    <div class="w-56 max-w-full mx-auto flex items-start text-green-main my-1">
                            <span class="w-6">
                                @include("svgs.amenities.{$amenity}")
                            </span>
                        <span class="ml-4">{{ trans("events.venue.amenities.{$amenity}") }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    @endcomponent
    <section class="section-height events-bottom-banner"></section>
    <section class="reg-section-space bg-pinky-grey">
        <p class="text-purple text-center">{{ trans('events.bookings.prompt') }}</p>
        <div class="text-center mt-12">
            <a href="{{ localUrl('/contact') }}"
               class="text-link text-purple">{{ trans('events.bookings.link_text') }} &rarr;</a>
        </div>

    </section>
@endsection