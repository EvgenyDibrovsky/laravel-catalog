@extends('layouts.app')

@section('content')
<x-hero-page-dashboard title="Подписка и оплаты" background-image="bg-hero" />

<section class="py-[2.5rem]">
    <div class="container">
        <div class="flex gap-[1.875rem]">
            <div class="w-3/12 bg-white py-[0.5rem] px-[1rem]">
                @include('components.sidebar-dashboard')
            </div>
            <div class="w-9/12">
                <div className="bg-neutral-100 p-[1.5rem] mb-[2rem]">
                    <h2 class="text-titleH2 mb-[1rem] font-semibold">История оплат</h2>
                    <table class="w-full bg-white ">
                        <thead>
                            <tr>
                                <th className="w-fit text-left px-2 py-2 border border-black">Наименование</th>
                                <th className="w-fit text-left px-2 py-2 border border-black">Дата покупки</th>
                                <th className="w-fit text-left px-2 py-2 border border-black">Срок действия</th>
                                <th className="w-fit text-left px-2 py-2 border border-black">Управление</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td className="px-2 py-2 border border-black">Пакет Gold</td>
                                <td className="px-2 py-2 border border-black">12.06.2024</td>
                                <td className="px-2 py-2 border border-black">31.06.2024</td>
                                <td className="relative px-2 py-2 border border-black">
                                    <div className="inline-block h-full w-[1.5rem] mr-1 align-middle group">
                                        <a href="#">
                                            <RxFileText className="text-[1.4rem] bg-sky-600 text-white p-[0.3rem] rounded-full duration-300 group-hover:shadow-lg" />
                                        </a>
                                        <span className="inline-block absolute right-0 translate-x-full top-1/2 -translate-y-1/2 opacity-0 text-[0.6rem] rounded-full text-white invisible duration-300 group-hover:visible group-hover:translate-x-1/2 group-hover:opacity-100 bg-sky-600 shadow-md px-[0.4rem] py-[0.2rem]">
                                            Скачать счет
                                        </span>
                                    </div>
                                    <div className="inline-block w-[1.5rem] mr-1 align-middle group">
                                        <a href="#">
                                            <RxUpdate className="text-[1.4rem] bg-orange-600 text-white p-[0.3rem] rounded-full duration-300 group-hover:shadow-lg" />
                                        </a>
                                        <span className="inline-block absolute right-0 translate-x-full top-1/2 -translate-y-1/2 opacity-0 text-[0.6rem] rounded-full text-white invisible duration-300 group-hover:visible group-hover:translate-x-1/2 group-hover:opacity-100 bg-orange-600 shadow-md px-[0.4rem] py-[0.2rem]">
                                            Повторить
                                        </span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div className="absolute right-0 top-0 translate-x-1/2 -translate-y-1/2 rounded-full flex justify-center items-center p-[0.7rem] bg-green-600 shadow-lg">
                        <PiWalletFill className="text-[2rem] text-white " />
                    </div>
                </div>

                <div className="bg-neutral-100 p-[1.5rem] mb-[2rem]">
                    <h2 class="text-titleH2 mb-[1rem] font-semibold">Пакеты подписок</h2>

                    <ul class="grid grid-cols-3 gap-[1.875rem]">

                        <li class="bg-white px-[2rem] py-[1.5rem] duration-300 hover:scale-110">
                            <h2 class="text-sky-600 text-center text-[1.5rem] font-semibold mb-[1rem]">Silver</h2>
                            <ul class="mb-[1.5rem] list-disc list-outside marker:text-green-600">
                                <li>Публикация блогов</li>
                                <li>Публикация ссылок на соц.сети</li>
                                <li>Регистрация в каталоге</li>
                            </ul>
                            <button class="w-full h-[3rem] border border-sky-600 duration-300 hover:bg-sky-600 bg-white text-sky-600 hover:text-white text-[1.3rem]">Подписатся</button>
                        </li>

                        <li class="bg-white px-[2rem] py-[1.5rem] duration-300  hover:scale-110">
                            <h2 class="text-sky-600 text-center text-[1.5rem] font-semibold mb-[1rem]">Gold</h2>
                            <ul class="mb-[1.5rem] list-disc list-outside marker:text-green-600">
                                <li>Публикация блогов</li>
                                <li>Публикация ссылок на соц.сети</li>
                                <li>Регистрация в каталоге</li>
                            </ul>
                            <button class="w-full h-[3rem] border border-sky-600 duration-300 hover:bg-sky-600 bg-white text-sky-600 hover:text-white text-[1.3rem]">Подписатся</button>
                        </li>

                        <li class="bg-white px-[2rem] py-[1.5rem] duration-300 hover:scale-110">
                            <h2 class="text-sky-600 text-center text-[1.5rem] font-semibold mb-[1rem]">Platinum</h2>
                            <ul class="mb-[1.5rem] list-disc list-outside marker:text-green-600">
                                <li>Публикация блогов</li>
                                <li>Публикация ссылок на соц.сети</li>
                                <li>Регистрация в каталоге</li>
                            </ul>
                            <button class="w-full h-[3rem] border border-sky-600 duration-300 hover:bg-sky-600 bg-white text-sky-600 hover:text-white text-[1.3rem]">Подписатся</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection