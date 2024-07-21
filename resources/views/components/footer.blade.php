    <footer class="w-full bg-white py-[2rem]">
        <div class="container">
            <div class="grid grid-cols-4">

                <div class="flex flex-col justify-between">
                    <a href="/">
                        <div class="flex flex-col leading-[0] gap-3 font-semibold text-sky-600 mb-[2rem]">
                            <span>Бизнес</span>
                            <span>каталог</span>
                        </div>
                    </a>
                    <p class="flex text-textFotterMini text-black">© 2023 Все права защищены.</p>
                </div>

                <!-- Menu 1   -->
                <ul>
                    <li>
                        <a href="/privacy-policy" class="text-mainMenuFooter duration-200 hover:text-sky-600">
                            Политика приватности
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-mainMenuFooter duration-200 hover:text-sky-600">
                            Условия использования
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-mainMenuFooter duration-200 hover:text-sky-600">
                            Стоимость услуг
                        </a>
                    </li>
                    <li>
                        <a href="/contacts" class="text-mainMenuFooter duration-200 hover:text-sky-600">
                            Связь с админимстратором
                        </a>
                    </li>
                </ul>

                <!-- Menu 2 -->
                <ul>
                    <li>
                        <a href="/catalog" class="text-mainMenuFooter duration-200 hover:text-sky-600">
                            Каталог
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-mainMenuFooter duration-200 hover:text-sky-600">
                            Сотрудничество
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-mainMenuFooter duration-200 hover:text-sky-600">
                            Реклама на сайте
                        </a>
                    </li>
                </ul>

                <div class="flex flex-col items-end justify-between">
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('images/pay/visa.svg') }}" alt="visa" class="h-10" />
                        <img src="{{ asset('images/pay/mastercard.svg') }}" alt="mastercard" class="h-10" />
                        <img src="{{ asset('images/pay/paypal.svg') }}" alt="paypal" class="h-10" />
                    </div>

                    <div class="flex text-textFotterMini text-black items-baseline">
                        Powered by
                        <a href="https://edweb.site" target="_blank" rel="noreferrer" class="duration-200 hover:underline">
                            <span class="ml-1 font-semibold text-textFotterMini  text-black">edWeb</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <a href="#" class="flex items-center justify-center bg-sky-600 w-[2rem] h-[2rem] fixed bottom-[10rem] right-5 z-20 transition-all  duration-300 hover:-translate-y-1 " id="back_to_top">
            <svg class="w-[1.2rem] h-[1.2rem] duration-300 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
            </svg>
        </a>
    </footer>