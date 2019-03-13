@extends('front.base')

@section('title')
    {{ $post['title'] }}
@endsection

@section('head')
    @include('front.partials.ogmeta', [
        'ogImage' => $post['title_image_banner'],
        'ogTitle' => $post['title'],
        'ogDescription' => $post['description']
    ])
@endsection

@section('content')
<div class="px-4 pt-24 pb-12">
    <p class="heading-text mb-4 text-brown-dark text-center">{{ $post['title'] }}</p>
    <p class="font-serif text-brown-light text-center italic">Posted on {{ $post['publish_date_string'] }}</p>
</div>
<div class="max-w-lg mx-auto px-4 py-12">
    <img src="{{ $post['title_image_web'] }}"
         alt="" class="w-full block mx-auto mb-8">
    <div class="journal-entry">
        {!! $post['body'] !!}
    </div>
</div>
<div class="px-4 py-12">
    <p class="heading-text mb-4 text-purple text-center">{{ trans('blog.show.share_prompt') }}</p>
    <div class="flex justify-center items-center">
        <a href="https://twitter.com/home?status={{ urlencode($article->title . ' ' . Request::url()) }}" class="no-underline text-purple hover:text-purple-soft mx-4">
            @include('svgs.social.twitter')
        </a>
        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::url()) }}" class="no-underline text-purple hover:text-purple-soft mx-4">
            @include('svgs.social.facebook')
        </a>
        <a href="mailto:?&subject=Read&body={{ Request::url() }}" class="no-underline text-purple hover:text-purple-soft mx-4">
            @include('svgs.social.mail')
        </a>
    </div>
    <div class="text-center mt-12">
        <a href="{{ localUrl('/journal') }}" class="text-link text-purple hover:text-purple-soft">&larr; {{ trans('blog.show.back_button') }}</a>
    </div>
</div>
@endsection