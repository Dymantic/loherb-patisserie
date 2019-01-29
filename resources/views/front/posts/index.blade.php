@extends('front.base', ['bodyClass' => 'md:pt-12'])

@section('title')
    {{ trans('blog.seo.title') }}
@endsection

@section('head')
    @include('front.partials.ogmeta', [
        'ogImage' => '',
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
@endsection