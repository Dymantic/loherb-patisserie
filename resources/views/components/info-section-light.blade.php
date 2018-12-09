<div class="reg-section-space">
    <div class="max-w-md mx-auto flex flex-col items-center">
        <p class="heading-text mb-4 text-purple">{{ $title }}</p>
        <span class="inline-block mb-12">
                @include('svgs.logos.leaf-purple')
            </span>
        {{ $slot }}
    </div>
</div>