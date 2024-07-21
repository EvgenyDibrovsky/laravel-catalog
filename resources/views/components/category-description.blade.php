<div class=" mb-[2rem] border-b-2 border-sky-600 pb-[1rem]">
    <div class="flex gap-[1rem]">
        @if($image)
        <img src="{{ $image }}" alt="{{ $title }}" class="border border-neutral-200 w-[5rem] h-[5rem] aspect-[4/3] object-cover">
        @else
        <img src="{{ asset('images/no_image.jpg') }}" alt="no image" class="border border-neutral-200 w-[5rem] h-[5rem] aspect-[4/3] object-cover">
        @endif

        <div class="w-full">
            <div>
                <h2 class="text-[1.4rem] font-semibold text-neutral-600 mb-2">
                    {{ $title }}
                </h2>
                <p class="text-[1rem]">{{ $content }}</p>
            </div>
        </div>
    </div>
</div>