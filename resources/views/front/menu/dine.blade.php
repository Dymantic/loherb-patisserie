<section id="dine" class="bg-pinky-grey max-w-xl reg-section-space flex flex-col items-center mx-auto">
    <p class="font-sans text-navy mb-8 uppercase">{{ trans('menu.dine.title') }}</p>
    <p class="mb-2 md:mb-4 heading-text text-purple capitalize">{{ trans($menu['dine']['starters']['title']) }}</p>
    @foreach($menu['dine']['starters']['courses'] as $course)
        <p class="text-purple capitalize">{{ trans($course) }}</p>
    @endforeach
    <div class="flex flex-col md:flex-row justify-around items-stretch md:mt-12 mb-12 w-full">
        @foreach($menu['dine']['options'] as $option)
            @include('front.menu.menu-column-section', [
                'title' => $option['title'],
                'choices' => $option['choices'],
                'price' => $option['price']
            ])
        @endforeach
    </div>
    <p class="heading-text text-purple capitalize mb-4">{{ trans($menu['dine']['beverages']['title']) }}</p>
    <div class="text-purple text-center">
        @foreach($menu['dine']['beverages']['options'] as $option)
            <span class="block mx-auto md:inline px-4 @if(!$loop->last) md:border-r md:border-purple @endif">{{ trans('menu.dine.beverages.' . $option) }}</span>
        @endforeach
    </div>
</section>
@include('front.menu.image-bar', ['images' => $menu['dine']['images']])