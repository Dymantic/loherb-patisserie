<div class="flex flex-col justify-between mb-8 w-9/10 md:w-64 max-w-full bg-cream-light mx-auto">
    <div>
        <a href="{{ localUrl('/journal/' . $post['slug']) }}" class="block relative" style="padding-bottom: 75%">
            <img data-src="{{ $post['title_image_thumb'] }}"
                 alt="{{ $post['title'] }}" class="w-full h-full object-cover absolute pin lazyload">
        </a>
        <div class="p-4">
            <p class="heading-text text-charcoal">{{ $post['title'] }}</p>
            <p class="slanted-text text-charcoal-light">{{ $post['publish_date_string'] }}</p>
            <p class="text-charcoal">{{ $post['intro'] }}</p>
        </div>
    </div>

    <a href="{{ localUrl('/journal/' . $post['slug']) }}" class="no-underline btn btn-charcoal mb-8 mt-4">{{ trans('homepage.journal.read_button') }}</a>
</div>
