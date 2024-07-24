@extends('layouts.app')

@section('content')
<x-hero-page-default-section title="{{__('contacts.title')}}" description="{{__('contacts.description')}}" background-image="bg-hero" />

<section class="py-[4rem]">
    <div class="container">
        <div class="w-10/12  mx-auto">
            <!-- Слайдер в шапке страницы -->
            <div class="flex gap-[0.938rem] h-[40rem]">
                <!-- thumbsSlider -->
                <div class="w-2/12">
                    <div class="swiper swiper-video-thumbs   ">
                        <div class="swiper-wrapper  ">
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                            </div>
                        </div>
                        <button class="swiper-button-prew-custom">prew</button>
                        <button class="swiper-button-next-custom">next</button>
                    </div>
                </div>

                <!-- slider -->
                <div class="w-10/12">
                    <div class="swiper mySwiper swiper-video">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>

                    </div>
                </div>

            </div>

        </div>



    </div>
</section>

@endsection