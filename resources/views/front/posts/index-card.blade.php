<div class="flex flex-col justify-between mb-20 w-64 max-w-full p-4 bg-pinky-grey mx-auto">
    <div>
        <a href="{{ localUrl('/journal/' . $post['slug']) }}" class="hidden md:block">
            <img src="{{ $post['title_image_thumb'] }}"
                 alt="" class="w-full">
        </a>
        <p class="heading-text text-purple">{{ $post['title'] }}</p>
        <p class="reviews-text text-purple-soft">{{ $post['publish_date_string'] }}</p>
        <p class="text-purple">{{ $post['intro'] }}</p>
    </div>

    <a href="{{ localUrl('/journal/' . $post['slug']) }}" class="no-underline btn btn-purple mb-4 mt-8">Read it</a>
</div>