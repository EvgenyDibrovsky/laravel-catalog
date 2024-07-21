<section class="relative flex items-center {{ $backgroundImage }} bg-no-repeat bg-center bg-cover bg-fixed pt-[8rem] pb-[4rem]">
    <div class="absolute z-0 top-0 left-0 w-full h-full bg-black/20"></div>
    <div class="container">
        <div class="flex gap-[1.875rem] relative z-10 ">
            <div class="w-6/12 flex flex-col justify-center">
                <h1 class="text-[2rem] font-bold text-black">{{ $title }}</h1>
                <p class="text-[1rem] font-bold text-black">{{ $description }}</p>
            </div>
            <div class="w-6/12">
                <div class="flex item-center justify-center w-full h-full bg-white/50">


                    <!--  Слайдер в шапке страницы -->
                    <div class="swiper swiper-hero-default-page">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="#" class="flex">
                                    <img src="{{ asset('images/no_image.jpg') }}" alt="image_alt" class="border border-neutral-200 h-[10rem] w-[10rem] aspect-[4/3] object-cover" />
                                    <div class="px-[1rem] pt-[0.5rem] pb-[1rem] bg-white">
                                        <h4 class="text-titleH4Slider mb-[0.5rem] font-bold">Заголовок</h2>
                                            <p class="text-left text-textBase">
                                                {{ Str::limit('Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse iste eligendi perspiciatis voluptas sint ullam, consequatur illum eaque saepe, numquam voluptates, ad ut cupiditate ipsum quae dolorum rem possimus maxime. , ad ut cupiditate ipsum quae dolorum.', 255, '...') }}
                                            </p>
                                    </div>
                                </a>
                            </div>


                            <div class="swiper-slide">
                                <a href="#" class="flex">
                                    <img src="{{ asset('images/no_image.jpg') }}" alt="image_alt" class="border border-neutral-200 h-[10rem] w-[10rem] aspect-[4/3] object-cover" />
                                    <div class="px-[1rem] pt-[0.5rem] pb-[1rem] bg-white">
                                        <h4 class="text-titleH4Slider mb-[0.5rem] font-bold">Заголовок</h2>
                                            <p class="text-left text-textBase">
                                                {{ Str::limit('Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse iste eligendi perspiciatis voluptas sint ullam, consequatur illum eaque saepe, numquam voluptates, ad ut cupiditate ipsum quae dolorum rem possimus maxime. , ad ut cupiditate ipsum quae dolorum.', 255, '...') }}
                                            </p>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a href="#" class="flex">
                                    <img src="{{ asset('images/no_image.jpg') }}" alt="image_alt" class="border border-neutral-200 h-[10rem] w-[10rem] aspect-[4/3] object-cover" />
                                    <div class="px-[1rem] pt-[0.5rem] pb-[1rem] bg-white">
                                        <h4 class="text-titleH4Slider mb-[0.5rem] font-bold">Заголовок</h2>
                                            <p class="text-left text-textBase">
                                                {{ Str::limit('Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse iste eligendi perspiciatis voluptas sint ullam, consequatur illum eaque saepe, numquam voluptates, ad ut cupiditate ipsum quae dolorum rem possimus maxime. , ad ut cupiditate ipsum quae dolorum.', 255, '...') }}
                                            </p>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a href="#" class="flex">
                                    <img src="{{ asset('images/no_image.jpg') }}" alt="image_alt" class="border border-neutral-200 h-[10rem] w-[10rem] aspect-[4/3] object-cover" />
                                    <div class="px-[1rem] pt-[0.5rem] pb-[1rem] bg-white">
                                        <h4 class="text-titleH4Slider mb-[0.5rem] font-bold">Заголовок</h2>
                                            <p class="text-left text-textBase">
                                                {{ Str::limit('Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse iste eligendi perspiciatis voluptas sint ullam, consequatur illum eaque saepe, numquam voluptates, ad ut cupiditate ipsum quae dolorum rem possimus maxime. , ad ut cupiditate ipsum quae dolorum.', 255, '...') }}
                                            </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>