<section class="relative flex items-center {{ $backgroundImage }} bg-no-repeat bg-center bg-cover bg-fixed  pt-[8rem] pb-[4rem]">
    <div class="absolute z-0 top-0 left-0 w-full h-full bg-black/20"></div>
    <div class="container">
        <div class="relative z-10 flex gap-[1.875rem] bg-white/50 p-[1rem]">
            <div class="w-6/12 flex flex-col justify-between items-start">

                <div class="mb-[1rem]">
                    <h1 class="text-[2rem] font-bold text-black">{{ $title }}</h1>
                </div>

                <ul>
                    <li class="flex gap-2">
                        <div>
                            <span class="font-semibold">NIP:</span>
                            <span>333 333 333</span>
                        </div>
                        <div>
                            <span class="font-semibold">REGON:</span>
                            <span>333 333 333</span>
                        </div>

                    </li>
                    <li>
                        <span class="font-semibold">Адрес:</span>
                        <a class="duration-300 hover:text-orange-600" target="_blank" rel="noopener noreferrer nofollow" href="https://www.google.com/maps/place/Рондо+Могилеськое+49,+Краков,+Польша">Польша, Малопольское воевудство, ул. Рондо Могилеськое 49</a>
                    </li>
                    <li>
                        <span class="font-semibold">Телефон:</span>
                        <a class="duration-300 hover:text-orange-600" href="tel:+48537450501">+48 537 450 501</a>
                    </li>
                    <li>
                        <span class="font-semibold">Email:</span>
                        <a class="duration-300 hover:text-orange-600" href="mailto:edweb@contact.site">edweb@contact.site</a>
                    </li>
                    <li>
                        <span class="font-semibold">Сайт:</span>
                        <a class="duration-300 hover:text-orange-600" target="_blank" rel="noopener noreferrer nofollow" href="https://edweb.site">edweb.site</a>
                    </li>
                </ul>

            </div>
            <div class="w-6/12 flex flex-col justify-between items-end">
                <div class="w-full h-[3rem] flex justify-end items-center mb-[1rem]">
                    <img src="{{  asset('images/no-logo.png') }}" alt="no logo" class="h-full w-auto aspect-auto ">
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias nihil explicabo enim odit assumenda aspernatur eos totam qui libero, ipsam unde corrupti quae sequi ad in numquam. Qui, quas obcaecati.</p>
            </div>
        </div>
    </div>
</section>