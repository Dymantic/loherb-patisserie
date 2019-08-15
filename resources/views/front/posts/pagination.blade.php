<div class="max-w-sm mx-auto p-4 mb-8 flex flex-col md:flex-row justify-between">
    @if($prev_page)
        <a href="{{ $prev_page }}" class="text-link text-charcoal hover:text-charcoal-light">
            <span class="arrow">&larr;</span>
            {{ trans('blog.index.previous-page') }}
        </a>
    @else
        <p class="text-link text-charcoal opacity-50">
            <span class="arrow">&larr;</span>
            {{ trans('blog.index.previous-page') }}
        </p>
    @endif

    @if($next_page)
        <a href="{{ $next_page }}" class="text-link text-charcoal hover:text-charcoal-light">
            {{ trans('blog.index.next-page') }}
            <span class="arrow">→</span>
        </a>
    @else
        <p class="text-link text-charcoal opacity-50">
            {{ trans('blog.index.next-page') }}
            <span class="arrow">→</span>
        </p>
    @endif
</div>