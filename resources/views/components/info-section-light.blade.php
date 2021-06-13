<div data-usher class="reg-section-space {{ $classes ?? '' }}">
    <div class="max-w-xl mx-auto flex flex-col items-center">
        <p class="type-h1 mb-4 text-charcoal text-center">{!!  $title !!}</p>
        <span class="inline-block mb-8">
                @include('svgs.logos.leaf-charcoal')
            </span>
        {{ $slot }}
    </div>
</div>
