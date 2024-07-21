@extends('layouts.app')

@section('content')
<x-hero-page-single-offer-section title="Edweb Sp.zo.o." background-image="bg-hero" />

<section class="py-[2.5rem]">
    <div class="container">
        <div class="flex gap-[1.875rem]">
            <div class="w-3/12">
                @include('components.sidebar', ['categories' => $categories])
            </div>
            <div class="w-9/12 bg-white px-[2rem] py-[1rem]">

                <!-- Шапка объявления -->
                <div class="mb-[3rem]">
                    <div class="flex items-start justify-between gap-[1rem]">
                        <h1 class="inline-flex text-titleH1 font-semibold">{{ $offer->title }}</h1>
                        <button>
                            <svg class="w-[1.5rem] h-[1.5rem] text-neutral-400 duration-500 hover:text-red-600 hover:fill-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                            </svg>
                        </button>
                    </div>
                    <div>
                        <ul class="flex gap-4">
                            <li>
                                <span class="text-[0.8rem] text-neutral-600  font-semibold">Id oferty:</span>
                                <span class="text-[0.8rem] text-neutral-600 ">234707</span>
                            </li>
                            <li>
                                <span class="text-[0.8rem] text-neutral-600  font-semibold">Dodana:</span>
                                <span class="text-[0.8rem] text-neutral-600 ">{{ $offer->date }}</span>
                            </li>
                            <li>
                                <span class="text-[0.8rem] text-neutral-600  font-semibold">Ważna do:</span>
                                <span class="text-[0.8rem] text-neutral-600 ">09.10.2024</span>
                            </li>
                            <li>
                                <span class="text-[0.8rem] text-neutral-600  font-semibold">Odwiedzin:</span>
                                <span class="text-[0.8rem] text-neutral-600 ">74</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Опции объявления -->
                <div class="mb-[3rem] bg-neutral-100 py-[1.5rem] px-[1rem]">
                    <ul class="relative z-10 grid grid-cols-3 gap-[1rem] list-none">
                        <li class="flex items-center gap-2">
                            <svg class="fill-sky-600" xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                                <circle cx="8" cy="8" r="8" />
                            </svg>
                            <div class="flex items-center gap-1">
                                <span class="font-semibold">Страна:</span>
                                <span>Польша</span>
                            </div>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="fill-sky-600" xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                                <circle cx="8" cy="8" r="8" />
                            </svg>
                            <div class="flex items-center gap-1">
                                <span class="font-semibold">Воеводство:</span>
                                <span>Малопольске</span>
                            </div>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="fill-sky-600" xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                                <circle cx="8" cy="8" r="8" />
                            </svg>
                            <div class="flex items-center gap-1">
                                <span class="font-semibold">Город:</span>
                                <span>Краков</span>
                            </div>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="fill-sky-600" xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                                <circle cx="8" cy="8" r="8" />
                            </svg>
                            <div class="flex items-center gap-1">
                                <span class="font-semibold">Адрес:</span>
                                <span>Siewna 23B/38 </span>
                            </div>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="fill-sky-600" xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                                <circle cx="8" cy="8" r="8" />
                            </svg>
                            <div class="flex items-center gap-1">
                                <span class="font-semibold">Индекс:</span>
                                <span>31-231</span>
                            </div>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="fill-sky-600" xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                                <circle cx="8" cy="8" r="8" />
                            </svg>
                            <div class="flex items-center gap-1">
                                <span class="font-semibold">Цена:</span>
                                <span>230 zł</span>
                            </div>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="fill-sky-600" xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                                <circle cx="8" cy="8" r="8" />
                            </svg>
                            <div class="flex items-center gap-1">
                                <span class="font-semibold">Доход:</span>
                                <span>2450 zł</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="mb-[3rem]">
                    <h3 class="text-titleH3 mb-[1rem] text-black font-semibold">Описание</h3>
                    <p class="text-content">{{ $offer->description }}</p>
                    <p class="text-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, veniam recusandae obcaecati minima reprehenderit quidem explicabo voluptates cum
                        reiciendis nisi accusamus earum in iusto? Aut sed ratione corporis quae ullam.</p>
                    <p class="text-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, veniam recusandae obcaecati minima reprehenderit quidem explicabo voluptates cum
                        reiciendis nisi accusamus earum in iusto? Aut sed ratione corporis quae ullam.</p>
                    <p class="text-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, veniam recusandae obcaecati minima reprehenderit quidem explicabo voluptates cum
                        reiciendis nisi accusamus earum in iusto? Aut sed ratione corporis quae ullam.</p>
                </div>

                <!-- Вывод галереи -->
                <div class="mb-[3rem]">
                    <h3 class="text-titleH3 mb-[1.5rem] text-black font-semibold">Галерея</h3>
                    <div class="grid grid-cols-4 gap-[1rem] mb-[1rem]">
                        @if($offer->gallery && count($offer->gallery) > 0)
                        @foreach($offer->gallery as $image)
                        <div>
                            <a data-fslightbox="gallery" href="{{ asset($image) }}">
                                <img src="{{ asset($image) }}" alt="{{ $offer->title }}" class="w-full h-full aspect-video object-cover">
                            </a>
                        </div>
                        @endforeach
                        @else
                        <p>No images in the gallery.</p>
                        @endif
                    </div>
                </div>

                <!-- Форма обратной связи с автором объявления -->
                <div class="mb-[3rem]">
                    <h3 class="text-titleH3 mb-[1.5rem] text-black font-semibold">Написать сообщение</h3>
                    <form action="{{ route('contact.send.single.offer') }}" method="post">
                        @csrf
                        <div class="flex gap-[1.875rem]">
                            <div class="w-6/12">
                                <div class="w-full h-full flex flex-col justify-between gap-[1rem]">
                                    <input type="text" id="name" name="name" placeholder="Имя" class="border border-neutral-200 focus:border-sky-600 py-[1rem] px-[1.5rem] w-full focus:outline-0" aria-label="Имя и Фамилия" />

                                    <input type="tel" id="phone" name="phone" placeholder="Телефон" class="border border-neutral-200 focus:border-sky-600 py-[1rem] px-[1.5rem] w-full focus:outline-0" aria-label="Телефон" />

                                    <input type="email" id="email" name="email" placeholder="Email" class="border border-neutral-200 focus:border-sky-600 py-[1rem] px-[1.5rem] w-full focus:outline-0" aria-label="Почта" />
                                </div>
                            </div>

                            <div class="w-6/12">
                                <div class="w-full h-full flex flex-col justify-between gap-[1rem] ">
                                    <div>
                                        <textarea id="message" name="message" placeholder="Сообщение" class="border border-neutral-200 focus:border-sky-600 py-[1rem] px-[1.5rem] w-full h-[8rem] focus:outline-0" aria-label="Сообщение"></textarea>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="checkbox" id="privacy_policy" name="privacy_policy" class="border border-neutral-200 focus:border-sky-600 mr-2" aria-label="Согласие с политикой приватности" required />
                                        <label for="privacy_policy" class="text-neutral-600">Я согласен с <a href="{{ route('privacy.policy') }}" class="text-sky-600 underline">политикой приватности</a></label>
                                    </div>
                                    <div>
                                        <button type="submit" class="w-6/12 h-[3rem] border border-sky-600 duration-300 bg-sky-600 hover:bg-white hover:text-sky-600 text-white text-[1.3rem]">
                                            Отправить
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Объявления этой же компании -->
                <div class="mb-[3rem] ">
                    <h3 class="text-titleH3 mb-[1.5rem] text-black font-semibold">Объявления этой же компании</h3>

                    <!--  Слайдер на странице объявление того же автора -->
                    <div class="swiper-offer-single-page-wrapper relative">
                        <div class="swiper swiper-offer-single-page">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="#" class="block shadow-md duration-300 hover:shadow-lg ">
                                        <img src="{{ asset('images/no_image.jpg') }}" alt="image_alt" class="border border-neutral-200 h-[15rem] w-full aspect-video object-cover" />
                                        <div class="flex flex-col justify-between px-[1rem] py-[1.5rem] h-[18rem] bg-white">
                                            <h4 class="text-titleH4Slider mb-[0.5rem] font-semibold">Заголовок</h2>
                                                <p class="text-left text-content">
                                                    {{ Str::limit('Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse iste eligendi perspiciatis voluptas sint ullam, consequatur illum eaque saepe, numquam voluptates...', 255, '...') }}
                                                </p>
                                                <div class="flex justify-between items-center">
                                                    <div class="flex gap-1">
                                                        <span class="text-[0.8rem] text-neutral-600  font-semibold">Dodana:</span>
                                                        <span class="text-[0.8rem] text-neutral-600 ">{{ $offer->date }}</span>
                                                    </div>
                                                    <button>
                                                        <svg class="w-[1.5rem] h-[1.5rem] text-neutral-400 duration-500 hover:text-red-600 hover:fill-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                                        </svg>
                                                    </button>
                                                </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="swiper-slide">
                                    <a href="#" class="block shadow-md duration-300 hover:shadow-lg ">
                                        <img src="{{ asset('images/no_image.jpg') }}" alt="image_alt" class="border border-neutral-200 h-[15rem] w-full aspect-video object-cover" />
                                        <div class="flex flex-col justify-between px-[1rem] py-[1.5rem] h-[18rem] bg-white">
                                            <h4 class="text-titleH4Slider mb-[0.5rem] font-semibold">Заголовок</h2>
                                                <p class="text-left text-content">
                                                    {{ Str::limit('Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse iste eligendi perspiciatis voluptas sint ullam, consequatur illum eaque saepe, numquam voluptates...', 255, '...') }}
                                                </p>
                                                <div class="flex justify-between items-center">
                                                    <div class="flex gap-1">
                                                        <span class="text-[0.8rem] text-neutral-600  font-semibold">Dodana:</span>
                                                        <span class="text-[0.8rem] text-neutral-600 ">{{ $offer->date }}</span>
                                                    </div>
                                                    <button>
                                                        <svg class="w-[1.5rem] h-[1.5rem] text-neutral-400 duration-500 hover:text-red-600 hover:fill-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                                        </svg>
                                                    </button>
                                                </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="swiper-slide">
                                    <a href="#" class="block shadow-md duration-300 hover:shadow-lg ">
                                        <img src="{{ asset('images/no_image.jpg') }}" alt="image_alt" class="border border-neutral-200 h-[15rem] w-full aspect-video object-cover" />
                                        <div class="flex flex-col justify-between px-[1rem] py-[1.5rem] h-[18rem] bg-white">
                                            <h4 class="text-titleH4Slider mb-[0.5rem] font-semibold">Заголовок</h2>
                                                <p class="text-left text-content">
                                                    {{ Str::limit('Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse iste eligendi perspiciatis voluptas sint ullam, consequatur illum eaque saepe, numquam voluptates...', 255, '...') }}
                                                </p>
                                                <div class="flex justify-between items-center">
                                                    <div class="flex gap-1">
                                                        <span class="text-[0.8rem] text-neutral-600  font-semibold">Dodana:</span>
                                                        <span class="text-[0.8rem] text-neutral-600 ">{{ $offer->date }}</span>
                                                    </div>
                                                    <button>
                                                        <svg class="w-[1.5rem] h-[1.5rem] text-neutral-400 duration-500 hover:text-red-600 hover:fill-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                                        </svg>
                                                    </button>
                                                </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="swiper-slide">
                                    <a href="#" class="block shadow-md duration-300 hover:shadow-lg ">
                                        <img src="{{ asset('images/no_image.jpg') }}" alt="image_alt" class="border border-neutral-200 h-[15rem] w-full aspect-video object-cover" />
                                        <div class="flex flex-col justify-between px-[1rem] py-[1.5rem] h-[18rem] bg-white">
                                            <h4 class="text-titleH4Slider mb-[0.5rem] font-semibold">Заголовок</h2>
                                                <p class="text-left text-content">
                                                    {{ Str::limit('Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse iste eligendi perspiciatis voluptas sint ullam, consequatur illum eaque saepe, numquam voluptates...', 255, '...') }}
                                                </p>
                                                <div class="flex justify-between items-center">
                                                    <div class="flex gap-1">
                                                        <span class="text-[0.8rem] text-neutral-600  font-semibold">Dodana:</span>
                                                        <span class="text-[0.8rem] text-neutral-600 ">{{ $offer->date }}</span>
                                                    </div>
                                                    <button>
                                                        <svg class="w-[1.5rem] h-[1.5rem] text-neutral-400 duration-500 hover:text-red-600 hover:fill-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                                        </svg>
                                                    </button>
                                                </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>

                        <button type="button" class="swiper-button-prev-custom  ">
                            <svg class="w-[2rem] h-[2rem] text-white duration-200 transform translate-x-0 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                            </svg>
                        </button>
                        <button type="button" class="swiper-button-next-custom">
                            <svg class="w-[2rem] h-[2rem] text-white duration-200 transform translate-x-0 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                            </svg>
                        </button>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>