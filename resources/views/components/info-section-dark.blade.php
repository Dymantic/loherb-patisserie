<div class="bg-charcoal reg-section-space">
    <div class="max-w-xl mx-auto flex flex-col items-center" data-usher>
        <p class="type-h1 mb-4 text-cream-light text-center">{!!  $title !!}</p>
        <span class="inline-block mb-8">
                @include('svgs.logos.leaf-cream')
            </span>
        {{ $slot }}
    </div>
</div>
