<?php

namespace App\Http\Controllers;

use Dymantic\InstagramFeed\Profile;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $posts = app('blog')
        ->posts()
        ->live()
        ->latest()
        ->take(3)
        ->get()
        ->map
        ->asDataArrayFor(app()->getLocale());

        $reviews = data('testimonials.en');

        $instagrams = Profile::first()->feed();
        return view('front.home.page', ['posts' => $posts, 'reviews' => $reviews, 'instagrams' => $instagrams]);
    }

    public function about()
    {
        return view('front.about.page');
    }

    public function events()
    {
        return view('front.events.page', ['event_images' => data('events.slideshow'), 'amenities' => data('events.amenities')]);
    }


}
