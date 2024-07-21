<div>
    <!-- Кнопка добавления объявления -->
    <button class="w-full h-[4rem] flex items-center justify-center duration-300 bg-sky-600 hover:bg-sky-500 py-[1rem] px-[2rem] text-white font-bold text-[1.4rem] mb-[2rem]">Добавить объявление</button>
    <!-- Категории -->
    <ul class="grid grid-cols-1 px-[1rem] py-[1rem] bg-white mb-[2rem]">
        @foreach ($categories as $category)
        <li><a class="flex items-center justify-between text-black py-[.1rem] duration-300 hover:text-sky-600 font-semibold text-[1rem]" href="{{ url('/catalog/' . $category->translate(app()->getLocale())->slug) }}">{{ $category->translate(app()->getLocale())->title }}</a></li>
        @endforeach
    </ul>
    <!-- Баннер рекламы -->
    <div class="flex justify-center items-center px-[1rem] py-[1rem] bg-white">
        <div class="flex justify-center items-center bg-sky-50 w-full h-[18rem]">Реклама</div>
    </div>
</div>