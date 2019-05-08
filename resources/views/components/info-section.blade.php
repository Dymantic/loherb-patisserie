<div class="bg-cream-light reg-section-space {{ $topClass ?? '' }}">
    <div class="max-w-md mx-auto flex flex-col items-center">
        <p class="heading-text mb-4 text-charcoal">{{ $title }}</p>
        <span class="inline-block mb-12">
                @include('svgs.logos.leaf-charcoal')
            </span>
        {{ $slot }}
    </div>
</div>