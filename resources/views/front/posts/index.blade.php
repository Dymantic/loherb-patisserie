@extends('front.base', ['bodyClass' => 'md:pt-12'])

@section('title')
    {{ trans('blog.seo.title') }}
@endsection

@section('head')
    @include('front.partials.ogmeta', [
        'ogImage' => url('/images/patisserie_facebook.jpg'),
        'ogTitle' => trans('blog.seo.title'),
        'ogDescription' => trans('blog.seo.description')
    ])
@endsection

@section('content')
    @component('components.info-section', ['title' => trans('blog.index.heading')])
        <p class="body-text text-center text-purple">{{ trans('blog.index.subheading') }}</p>
    @endcomponent

    <div class="px-4 py-12">
        <div class="journal-grid max-w-xl mx-auto">
            @foreach($posts as $post)
                @include('front.posts.index-card', ['post' => $post])
            @endforeach
        </div>
    </div>
    <div class="text-center py-12">
        <a href="{{ localUrl('/archives') }}" class="text-link text-charcoal hover:text-charcoal-light">
            {{ trans('blog.index.archives-link') }}
            <span class="arrow">→</span>
        </a>
    </div>
@endsection