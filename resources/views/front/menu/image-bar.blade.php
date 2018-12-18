<section class="my-12">
    <div class="w-screen overflow-x-auto whitespace-no-wrap text-center menu-scroller">
        @foreach($images as $image)
            <div class="@if(!$loop->last) md:mr-12 md:pr-12 md:border-r md:border-purple @endif  inline-block">
                <img src="{{ $image }}"
                     alt="Main course at Loherb Cuisine" class="w-full block max-w-xs">
            </div>
        @endforeach
    </div>
    <div class="text-center mt-8">
        @include('svgs.icons.scroll_arrows')
    </div>
</section>