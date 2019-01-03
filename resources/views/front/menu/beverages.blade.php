<section id="beverages" class="bg-pinky-grey max-w-xl reg-section-space flex flex-col items-center mx-auto my-12">
    <p class="font-sans text-navy mb-8 uppercase">{{ trans($menu['beverages']['title']) }}</p>
    @foreach($menu['beverages']['sections'] as $section)
        <p class="mb-4 font-heading text-purple">{{ trans($section['title']) }}</p>
        @foreach($section['options'] as $option)
            <p class="text-purple">{{ trans($option) }}</p>
        @endforeach
        <p class="mt-4 font-heading text-purple">{{ $section['price'] }}</p>
        <div class="w-48 md:border-b border-purple my-8"></div>
    @endforeach
</section>
@include('front.menu.image-bar', ['images' => $menu['beverages']['images']])