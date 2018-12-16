<div class="reg-section-space">
    <p class="text-center heading-text text-purple mb-12">{{ trans('homepage.journal.heading') }}</p>
    <div class="journal-grid max-w-xl mx-auto">
        @foreach($posts as $post)
            @include('front.posts.index-card', ['post' => $post])
        @endforeach
    </div>
    <div class="text-center mt-12">
        <a class="text-link text-purple" href="{{ localUrl('/journal') }}">{{ trans('homepage.journal.link_text') }} &rarr;</a>
    </div>
</div>