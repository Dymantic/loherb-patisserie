<div class="flex-1 flex flex-col justify-between items-center @if(!$loop->last) md:border-r md:border-purple @endif">
    <div class="text-center">
        <p class="mb-2 md:mb-4 mt-12 md:mt-0 font-heading text-purple">{{ trans($title) }}</p>
        @foreach($choices as $choice)
            <p class="text-purple capitalize">{{ trans($choice) }}</p>
        @endforeach
    </div>
    <p class="font-heading mt-1 md:mt-4 text-purple">{{ $price }}</p>
</div>