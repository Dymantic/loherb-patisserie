@extends('front.base', ['bodyClass' => 'md:pt-12'])

@section('title')
    {{ trans('blog.archives.title') }}
@endsection

@section('head')
    @include('front.partials.ogmeta', [
        'ogImage' => url('/images/villa_facebook.jpg'),
        'ogTitle' => trans('blog.archives.title'),
        'ogDescription' => trans('blog.archives.description')
    ])
@endsection

@section('content')
    @component('components.info-section', ['title' => trans('blog.archives.heading')])
        <p class="mt-8 body-text text-center md:text-left text-green-main">{{ trans('blog.archives.subheading') }}</p>
    @endcomponent

    <div class="px-4 py-12">
        <div class="max-w-md mx-auto">
            @foreach($post_months as $month => $posts)
                <p class="font-sans uppercase mb-8">{{ $month }}</p>
                <div class="mb-12">
                    @foreach($posts as $post)
                        <p class="px-4">
                            <a class="heading-text text-charcoal no-underline hover:underline"                                href="{{ localUrl('/journal/' . $post->slug) }}">{{ $post->title }}</a>
                        </p>
                    @endforeach()
                </div>

            @endforeach
        </div>
    </div>
@endsection