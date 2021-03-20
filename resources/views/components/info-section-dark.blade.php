<div class="bg-charcoal reg-section-space">
    <div class="max-w-xl mx-auto flex flex-col items-center">
        <p class="type-h1 mb-4 text-cream-light">{{ $title }}</p>
        <span class="inline-block mb-12">
                @include('svgs.logos.leaf-cream')
            </span>
        {{ $slot }}
    </div>
</div>
