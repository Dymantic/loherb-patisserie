<div class="bg-navy reg-section-space">
    <div class="max-w-md mx-auto flex flex-col items-center">
        <p class="heading-text mb-4 text-cream-light">{{ $title }}</p>
        <span class="inline-block mb-12">
                @include('svgs.logos.leaf-cream')
            </span>
        {{ $slot }}
    </div>
</div>