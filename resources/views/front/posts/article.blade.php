<div class="px-4 pt-24 pb-12">
    <p class="article-title type-h1 mb-4 text-charcoal text-center">{{ $post['title'] }}</p>
    <p class="font-serif text-charcoal-light text-center italic">Posted on {{ $post['publish_date_string'] }}</p>
</div>
<div class="max-w-3xl mx-auto px-4 py-12">
    <img src="{{ $post['title_image_web'] }}"
         alt="" class="w-full block mx-auto mb-8">
    <div class="journal-entry">
        {!! $post['body'] !!}
    </div>
</div>
<div class="px-4 py-12">
    <p class="type-h1 mb-4 text-charcoal text-center">{{ trans('blog.show.share_prompt') }}</p>
    <div class="flex justify-center items-center">
        <a href="https://twitter.com/home?status={{ urlencode($post['title'] . ' ' . Request::url()) }}" class="no-underline text-charcoal hover:text-charcoal-light mx-4">
            @include('svgs.social.twitter')
        </a>
        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::url()) }}" class="no-underline text-charcoal hover:text-charcoal-light mx-4">
            @include('svgs.social.facebook')
        </a>
        <a href="mailto:?&subject=Read&body={{ Request::url() }}" class="no-underline text-charcoal hover:text-charcoal-light mx-4">
            @include('svgs.social.mail')
        </a>
    </div>
    <div class="text-center mt-12">
        <a href="{{ localUrl('/journal') }}" class="text-link text-charcoal hover:text-charcoal-light">&larr; {{ trans('blog.show.back_button') }}</a>
    </div>
</div>
