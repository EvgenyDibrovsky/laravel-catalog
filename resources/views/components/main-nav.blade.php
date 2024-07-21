 <nav class="flex items-center">
     <ul class="flex items-center gap-4">
         <li>
             <a href="/" class="text-mainMenu duration-200 hover:text-sky-600">
                 Главная
             </a>
         </li>
         <li>
             <a href="{{ route('catalog') }}" class="text-mainMenu duration-200 hover:text-sky-600">
                 Каталог
             </a>

         </li>
         <li>
             <a href="{{ route('contacts') }}" class="text-mainMenu duration-200 hover:text-sky-600">
                 Контакты
             </a>
         </li>
     </ul>
 </nav>