@extends('layouts.app')

@section('content')
<x-hero-page-dashboard title="Настройки аккаунта" background-image="bg-hero" />

<section class="py-[2.5rem]">
    <div class="container">
        <div class="flex gap-[1.875rem]">
            <div class="w-3/12 bg-white py-[0.5rem] px-[1rem]">
                @include('components.sidebar-dashboard')
            </div>
            <div class="w-9/12">
                <div>
                    <div class=" bg-white p-[1.5rem]">
                        <h2 class="mb-[1rem] font-semibold">Публичные данные</h2>
                        <div class="flex gap-[1.875rem] ">
                            <div class="w-fit">
                                <div class="relative flex justify-center items-center border border-neutral-200 p-[2rem] w-[10rem] h-[10rem] overflow-hidden group">
                                    <Image src="/images/no-user-image.jpg" alt="Example Image" layout="fill" class="object-conraine duration-300 group-hover:scale-105 " />
                                    <button class="w-10/12 mx-auto absolute bottom-2 left-0 right-0 text-center translate-y-[2rem] bg-white shadow-md px-[0.1rem] py-[0.2rem] rounded-full duration-300 opacity-0 group-hover:translate-y-0 group-hover:opacity-100">
                                        Сменить
                                    </button>
                                </div>
                            </div>
                            <div class="w-full flex justify-center items-start">
                                <div class="w-6/12">
                                    <form action="" class="space-y-4">
                                        <div class="flex items-center gap-[1rem]">
                                            <input class="border border-neutral-200 focus:border-sky-600 py-[0.6rem] px-[1rem] w-full focus:outline-0 placeholder:text-black" type="text" placeholder="Иван Иванов" disabled />
                                            <button class="group">
                                                <CiEdit class="text-[1rem] text-neutral-400 duration-300 group-hover:text-sky-600" />
                                            </button>
                                        </div>
                                        <div class="flex items-center gap-[1rem]">
                                            <input class="border border-neutral-200 focus:border-sky-600 py-[0.6rem] px-[1rem] w-full focus:outline-0 placeholder:text-black" type="tel" placeholder="+48 000 111 222" />
                                            <button class="group">
                                                <CiEdit class="text-[1rem] text-neutral-400 duration-300 group-hover:text-sky-600" />
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div class="w-6/12"></div>
                            </div>
                        </div>

                    </div>

                    <div class="bg-white p-[1.5rem] mt-[3rem]">
                        <div class="flex gap-[1.875rem] ">
                            <div class="w-6/12">
                                <h2 class="mb-[1rem] font-semibold">Сменить пароль</h2>

                                <form action="" class="space-y-4">
                                    <input class="border border-neutral-200 focus:border-sky-600 py-[0.6rem] px-[1rem] w-full focus:outline-0" type="password" placeholder="Старый пароль" />
                                    <input class="border border-neutral-200 focus:border-sky-600 py-[0.6rem] px-[1rem] w-full focus:outline-0" type="tepasswordxt" placeholder="Новый пароль" />
                                    <input class="border border-neutral-200 focus:border-sky-600 py-[0.6rem] px-[1rem] w-full focus:outline-0" type="password" placeholder="Повторить пароль" />
                                    <button type="submit" class="w-4/12 h-[3rem] border border-sky-600 duration-300 hover:bg-sky-600 bg-white text-sky-600 hover:text-white text-[1.3rem]">
                                        Сохранить
                                    </button>
                                </form>
                            </div>
                            <div class="w-6/12">
                                <h2 class="mb-[1rem] font-semibold">Сменить email</h2>

                                <form action="" class="space-y-4">
                                    <input class="border border-neutral-200 focus:border-sky-600 py-[0.6rem] px-[1rem] w-full focus:outline-0" type="email" placeholder="Новый адрес email" />
                                    <button type="submit" class="w-4/12 h-[3rem] border border-sky-600 duration-300 hover:bg-sky-600 bg-white text-sky-600 hover:text-white text-[1.3rem]">
                                        Сохранить
                                    </button>
                                </form>
                            </div>
                        </div>

                    </div>

                    <div class=" bg-white p-[1.5rem] mt-[3rem]">
                        <h2 class="mb-[1rem] font-semibold">Удаление аккаунта</h2>
                        <div class="flex gap-[1.875rem]">
                            <form action="" class="space-y-4 w-7/12">
                                <textarea id="message" name="message" placeholder="Пожалуйста укажите причину по которой вы хотите покинуть нас. " class="border bg-white h-[15rem] border-neutral-200 focus:border-sky-600 py-[0.6rem] px-[1rem] w-full focus:outline-0"></textarea>
                                <button type="submit" class="w-4/12 h-[3rem] border border-sky-600 duration-300 hover:bg-sky-600 bg-white text-sky-600 hover:text-white text-[1.3rem]">
                                    Отправить
                                </button>
                            </form>
                            <div class="w-5/12">
                                <div class="h-full flex flex-col justify-between items-center">
                                    <p>После нажатия на кнопку Удалить аккаунт все даные о вас на данном сайте будут удалены. Также будут удалены все ваши ваши блоги. </p>
                                    <button type="submit" class="w-full h-[3rem] border border-red-600 duration-300 hover:bg-red-600 bg-white hover:text-white text-red-600 text-[1.3rem]">
                                        Удалить аккаунт
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection