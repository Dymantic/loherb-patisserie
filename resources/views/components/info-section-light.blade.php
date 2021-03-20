<div class="reg-section-space {{ $classes ?? '' }}">
    <div class="max-w-xl mx-auto flex flex-col items-center">
        <p class="type-h1 mb-4 text-charcoal">{{ $title }}</p>
        <span class="inline-block mb-12">
                @include('svgs.logos.leaf-charcoal')
            </span>
        {{ $slot }}
    </div>
</div>
