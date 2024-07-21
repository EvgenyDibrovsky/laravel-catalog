@extends('layouts.app')

@section('content')
<section class="relative bg-hero bg-no-repeat bg-top bg-cover flex flex-col justify-between w-full h-[100dvh]">
    <div class="absolute z-0 top-0 left-0 w-full h-full bg-black/10"></div>
    <div class="relative z-10 h-[100%] flex justify-center items-center ">
        <div class="w-full">
            <div class="flex flex-col w-full -mt-[6rem] px-[0.5rem] py-[5.5rem] bg-white/20 backdrop-blur-sm">
                <div class="container mb-[2rem]">
                    <h1 class="text-black text-center text-[1.2rem] font-bold">Бизнес без границ!</h1>
                    <p class="text-sky-600 text-center text-[2rem] font-bold">Бизнес каталог</p>
                </div>
                <div class="container">
                    <div class="hero-search w-full flex gap-2 bg-white/50 p-2 backdrop-blur-md">
                        <input type="text" placeholder="Поиск..." class="py-[1rem] px-[1rem] w-full focus:outline-0" />

                        <select class="appearance-none py-[1rem] pl-[1rem] pr-[2.3rem] w-full focus:outline-none cursor-pointer bg-[url('/public/images/arrow-select.svg')] bg-no-repeat bg-[position:right_0.5rem_center] bg-[length:1.2rem_1.2rem] bg-white">
                            <option value="">Все страны</option>
                            <option value="Ukraine">Украина</option>
                            <option value="USA">США</option>
                            <option value="Poland">Польша</option>
                            <!-- Дополнительные страны -->
                        </select>

                        <select class="appearance-none py-[1rem] pl-[1rem] pr-[2.3rem] w-full focus:outline-none cursor-pointer bg-[url('/public/images/arrow-select.svg')] bg-no-repeat bg-[position:right_0.5rem_center] bg-[length:1.2rem_1.2rem] bg-white">
                            <option value="">Все города</option>
                            <option value="Ukraine">Украина</option>
                            <option value="USA">США</option>
                            <option value="Poland">Польша</option>
                            <!-- Дополнительные страны -->
                        </select>

                        <select class="appearance-none py-[1rem] pl-[1rem] pr-[2.3rem] w-full focus:outline-none cursor-pointer bg-[url('/public/images/arrow-select.svg')] bg-no-repeat bg-[position:right_0.5rem_center] bg-[length:1.2rem_1.2rem] bg-white">
                            <option value="">Все категории</option>
                            <option value="tech">Технологии</option>
                            <option value="health">Здравоохранение</option>
                            <option value="finance">Финансы</option>
                            <!-- Дополнительные категории -->
                        </select>
                        <button class="flex items-center justify-center bg-sky-600 px-[1.5rem] w-[40rem] text-white font-semibold duration-300 hover:bg-sky-500">
                            Поиск
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="absolute bottom-10 left-0 right-0 z-10 container">
        <ul class="grid grid-cols-8 ">
            <li class="border-r shadow-md bg-white dark:bg-slate-950 duration-300 hover:bg-sky-600 group">
                <a href="/work" class="flex justify-center items-center flex-col gap-2 py-[2rem] px-[1rem] duration-300 group-hover:text-white">
                    <svg className="mx-auto w-[2rem] h-[2rem] mb-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                    </svg>
                    <span class="font-semibold">Работа</span>
                </a>
            </li>

            <li class="border-r shadow-md bg-white dark:bg-slate-950 duration-300 hover:bg-sky-600 group">
                <a href="/real-estate" class="flex justify-center items-center flex-col gap-2 py-[2rem] px-[1rem] duration-300 group-hover:text-white">
                    <svg className="mx-auto w-[2rem] h-[2rem] mb-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                    </svg>
                    <span class="font-semibold">Недвижимость</span>

                </a>
            </li>

            <li class="border-r shadow-md bg-white dark:bg-slate-950 duration-300 hover:bg-sky-600 group">
                <a href="/finance" class="flex justify-center items-center flex-col gap-2 py-[2rem] px-[1rem] duration-300 group-hover:text-white">
                    <svg className="mx-auto w-[2rem] h-[2rem] mb-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                    </svg>
                    <span class="font-semibold">Финансы</span>
                </a>
            </li>

            <li class="border-r shadow-md bg-white dark:bg-slate-950 duration-300 hover:bg-sky-600 group">
                <a href="/law" class="flex justify-center items-center flex-col gap-2 py-[2rem] px-[1rem] duration-300 group-hover:text-white">
                    <svg className="mx-auto w-[2rem] h-[2rem] mb-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                    </svg>
                    <span class="font-semibold">Право</span>

                </a>
            </li>

            <li class="border-r shadow-md bg-white dark:bg-slate-950 duration-300 hover:bg-sky-600 group">
                <a href="/bussines" class="flex justify-center items-center flex-col gap-2 py-[2rem] px-[1rem] duration-300 group-hover:text-white">
                    <svg className="mx-auto w-[2rem] h-[2rem] mb-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                    </svg>
                    <span class="font-semibold">Производство</span>

                </a>
            </li>

            <li class="border-r shadow-md bg-white dark:bg-slate-950 duration-300 hover:bg-sky-600 group">
                <a href="/study" class="flex justify-center items-center flex-col gap-2 py-[2rem] px-[1rem] duration-300 group-hover:text-white">
                    <svg className="mx-auto w-[2rem] h-[2rem] mb-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                    </svg>
                    <span class="font-semibold">Образование</span>

                </a>
            </li>

            <li class="border-r shadow-md bg-white dark:bg-slate-950 duration-300 hover:bg-sky-600 group">
                <a href="/blogs" class="flex justify-center items-center flex-col gap-2 py-[2rem] px-[1rem] duration-300 group-hover:text-white">
                    <svg className="mx-auto w-[2rem] h-[2rem] mb-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                    </svg>
                    <span class="font-semibold">Продажа товаров</span>

                </a>
            </li>

            <li class="shadow-md bg-white dark:bg-slate-950 duration-300 hover:bg-sky-600 group">
                <a href="{{ route('catalog') }}" class="flex justify-center items-center flex-col gap-2 py-[2rem] px-[1rem] duration-300 text-sky-600 dark:text-sky-500 group-hover:text-white">
                    <svg className="mx-auto w-[2rem] h-[2rem] mb-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                    </svg>
                    <span class="font-semibold">Все категории</span>
                </a>
            </li>
        </ul>
    </div>
</section>

<section id="section-counter-script" class="py-[4rem]">
    <div class="container">
        <div class="flex items-center justify-between ">
            <div class="flex flex-col justify-start items-center">
                <span class="section-about-counter-item text-[4rem] font-bold text-orange-600" data-target="3045">0</span>
                <span class="text-[1.5rem] font-semibold dark:text-white">Зарегестрированных компаний</span>
            </div>
            <div class="flex flex-col justify-start items-center">
                <span class="section-about-counter-item text-[4rem] font-bold text-orange-600" data-target="8975">0</span>
                <span class="text-[1.5rem] font-semibold dark:text-white">Зарегестрированных пользователей</span>
            </div>
            <div class="flex flex-col justify-start items-center">
                <span class="section-about-counter-item text-[4rem] font-bold text-orange-600" data-target="10325">0</span>
                <span class="text-[1.5rem] font-semibold dark:text-white">Всего объявлений</span>
            </div>
        </div>
    </div>
</section>


<section class="py-[4rem]">
    <!--  Слайдер на странице объявление того же автора -->
    <div class="swiper swiper-logo-company">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="#" class="block shadow-md duration-300 hover:shadow-lg group">
                    <img src="{{ asset('images/no-logo.png') }}" alt="image_alt" class="border border-neutral-400 p-[1rem] max-h-[10rem] w-auto aspect-auto object-cover bg-white dark:bg-slate-950 grayscale duration-300 group-hover:grayscale-0 " />
                </a>
            </div>

            <div class="swiper-slide">
                <a href="#" class="block shadow-md duration-300 hover:shadow-lg group ">
                    <img src="{{ asset('images/no-logo.png') }}" alt="image_alt" class="border border-neutral-400 p-[1rem] max-h-[10rem] w-auto aspect-auto object-cover bg-white dark:bg-slate-950 grayscale duration-300 group-hover:grayscale-0" />
                </a>
            </div>

            <div class="swiper-slide">
                <a href="#" class="block shadow-md duration-300 hover:shadow-lg group ">
                    <img src="{{ asset('images/no-logo.png') }}" alt="image_alt" class="border border-neutral-400 p-[1rem] max-h-[10rem] w-auto aspect-auto object-cover bg-white dark:bg-slate-950 grayscale duration-300 group-hover:grayscale-0" />
                </a>
            </div>

            <div class="swiper-slide">
                <a href="#" class="block shadow-md duration-300 hover:shadow-lg group ">
                    <img src="{{ asset('images/no-logo.png') }}" alt="image_alt" class="border border-neutral-400 p-[1rem] max-h-[10rem] w-auto aspect-auto object-cover bg-white dark:bg-slate-950 grayscale duration-300 group-hover:grayscale-0" />
                </a>
            </div>

            <div class="swiper-slide">
                <a href="#" class="block shadow-md duration-300 hover:shadow-lg group ">
                    <img src="{{ asset('images/no-logo.png') }}" alt="image_alt" class="border border-neutral-400 p-[1rem] max-h-[10rem] w-auto aspect-auto object-cover bg-white dark:bg-slate-950 grayscale duration-300 group-hover:grayscale-0" />
                </a>
            </div>

            <div class="swiper-slide">
                <a href="#" class="block shadow-md duration-300 hover:shadow-lg group ">
                    <img src="{{ asset('images/no-logo.png') }}" alt="image_alt" class="border border-neutral-400 p-[1rem] max-h-[10rem] w-auto aspect-auto object-cover bg-white dark:bg-slate-950 grayscale duration-300 group-hover:grayscale-0" />
                </a>
            </div>

            <div class="swiper-slide">
                <a href="#" class="block shadow-md duration-300 hover:shadow-lg group ">
                    <img src="{{ asset('images/no-logo.png') }}" alt="image_alt" class="border border-neutral-400 p-[1rem] max-h-[10rem] w-auto aspect-auto object-cover bg-white dark:bg-slate-950 grayscale duration-300 group-hover:grayscale-0" />
                </a>
            </div>

            <div class="swiper-slide">
                <a href="#" class="block shadow-md duration-300 hover:shadow-lg group ">
                    <img src="{{ asset('images/no-logo.png') }}" alt="image_alt" class="border border-neutral-400 p-[1rem] max-h-[10rem] w-auto aspect-auto object-cover bg-white dark:bg-slate-950 grayscale duration-300 group-hover:grayscale-0" />
                </a>
            </div>
        </div>


    </div>
</section>

@endsection