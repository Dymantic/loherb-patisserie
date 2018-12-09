<section class="bg-pinky-grey max-w-xl reg-section-space flex flex-col items-center mx-auto my-12">
    <p class="font-sans text-navy mb-8 uppercase">Brunch & Teatime</p>
    <p class="text-navy text-center">(Served from 8:00 to 10:00 and 14:00 to 17:00)</p>
    <div class="flex flex-col md:flex-row justify-around items-stretch my-12 w-full">
        @foreach($menu['brunch']['sections'] as $section)
            @include('front.menu.menu-column-section', [
                'title' => $section['title'],
                'choices' => $section['options'],
                'price' => $section['price']
            ])
        @endforeach
    </div>
</section>
@include('front.menu.image-bar', ['images' => $menu['brunch']['images']])