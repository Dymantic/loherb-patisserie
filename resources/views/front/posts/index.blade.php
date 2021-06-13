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
    @component('components.info-section', ['title' => $page_title ?? trans('blog.index.heading')])
        <p class="body-text text-center text-purple">{{ $page_intro ?? trans('blog.index.subheading') }}</p>
    @endcomponent

    <x-blog-subnav current="{{ Request::path() }}"></x-blog-subnav>

    <div class="px-4 pt-12">
        <div class="journal-grid max-w-5xl mx-auto">
            @foreach($posts as $post)
                @include('front.posts.index-card', ['post' => $post])
            @endforeach
        </div>
    </div>

    @include('front.posts.pagination')
@endsection
