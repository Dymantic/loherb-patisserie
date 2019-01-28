<div class="reg-section-space">
    @include('front.partials.heading-purple', ['text' => trans('homepage.journal.heading')])
    <div class="journal-grid max-w-xl mx-auto mt-12">
        @foreach($posts as $post)
            @include('front.posts.index-card', ['post' => $post])
        @endforeach
    </div>
    <div class="text-center mt-12">
        <a class="text-link text-purple hover:text-purple-soft" href="{{ localUrl('/journal') }}">{{ trans('homepage.journal.link_text') }} &rarr;</a>
    </div>
</div>