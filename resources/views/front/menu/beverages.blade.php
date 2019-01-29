<section id="beverages" class="bg-pinky-grey max-w-xl reg-section-space mx-auto my-12">
    <p class="font-sans text-navy mb-12 uppercase text-center">{{ trans($menu['beverages']['title']) }}</p>
    <div class="max-w-md mx-auto flex flex-col md:flex-row justify-between md:pb-16">
        <div class="w-full md:w-1/2 mb-8 md:mb-0">
            @include('front.menu.beverage-block', ['section' => $menu['beverages']['sections']['coffee'], 'border' => 'right'])
        </div>
        <div class="w-full md:w-1/2 mb-8 md:mb-0">
            @include('front.menu.beverage-block', ['section' => $menu['beverages']['sections']['tea'], 'border' => 'left'])
        </div>
    </div>
    <div class="hidden md:block max-w-md border-b-2 border-purple mx-auto"></div>
    <div class="max-w-md mx-auto flex flex-col md:flex-row justify-between md:mt-16">
        <div class="w-full md:w-1/2 mb-8 md:mb-0">
            @include('front.menu.beverage-block', ['section' => $menu['beverages']['sections']['juice'], 'border' => 'right'])
        </div>
        <div class="w-full md:w-1/2 mb-8 md:mb-0">
            @include('front.menu.beverage-block', ['section' => $menu['beverages']['sections']['aulait'], 'border' => 'left'])
        </div>
    </div>
</section>
@include('front.menu.image-bar', ['images' => $menu['beverages']['images']])