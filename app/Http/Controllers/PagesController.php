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
        ->latest('publish_date')
        ->take(3)
        ->get()
        ->map
        ->asDataArrayFor(app()->getLocale());

        $reviews = data('testimonials.' . app()->getLocale());
        $top_review = collect($reviews)->first();

        $instagrams = Profile::first()->feed();
        return view('front.home.page', ['posts' => $posts, 'reviews' => $reviews, 'instagrams' => $instagrams, 'top_review' => $top_review]);
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
