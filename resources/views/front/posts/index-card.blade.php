<div class="flex flex-col justify-between mb-20 w-64 max-w-full bg-pinky-grey mx-auto">
    <div>
        <a href="{{ localUrl('/journal/' . $post['slug']) }}" class="hidden md:block">
            <img src="{{ $post['title_image_thumb'] }}"
                 alt="" class="w-full">
        </a>
        <div class="p-4">
            <p class="heading-text text-purple">{{ $post['title'] }}</p>
            <p class="reviews-text text-purple-soft">{{ $post['publish_date_string'] }}</p>
            <p class="text-purple">{{ $post['intro'] }}</p>
        </div>
    </div>

    <a href="{{ localUrl('/journal/' . $post['slug']) }}" class="no-underline btn btn-purple mb-8 mt-4">{{ trans('homepage.journal.read_button') }}</a>
</div>