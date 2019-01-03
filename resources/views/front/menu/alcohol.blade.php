<section id="alcohol" class="bg-pinky-grey max-w-xl reg-section-space flex flex-col items-center mx-auto my-12">
    <p class="font-sans text-navy mb-8 uppercase">{{ trans($menu['alcohol']['title']) }}</p>
    <p class="text-navy">{{ trans('menu.alcohol.corkage') }}</p>
    <div class="flex flex-col md:flex-row justify-around items-stretch my-12 w-full">
        @foreach($menu['alcohol']['sections'] as $section)
            @include('front.menu.menu-column-section', [
                'title' => $section['title'],
                'choices' => $section['options'],
                'price' => $section['price']
            ])
        @endforeach
    </div>
</section>
@include('front.menu.image-bar', ['images' => $menu['alcohol']['images']])