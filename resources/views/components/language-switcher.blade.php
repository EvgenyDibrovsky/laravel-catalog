   <!-- @php
   use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
   @endphp
   <ul class="flex items-center">
       @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
       <li>
           <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode) }}">
               {{ $properties['native'] }}
           </a>
       </li>
       @endforeach
   </ul> -->
   @php
   $currentLocale = \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale();
   $supportedLocales = \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getSupportedLocales();
   @endphp

   <div class="relative inline-block text-left">
       <button type="button" id="language-switcher-button" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50" aria-expanded="true" aria-haspopup="true">
           {{ strtoupper($currentLocale) }} <!-- Отображаем сокращенное название текущего языка -->
           <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
               <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
           </svg>
       </button>

       <div id="language-switcher-menu" class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden">
           <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="language-switcher-button">
               @foreach($supportedLocales as $localeCode => $properties)
               @if($localeCode !== $currentLocale)
               <a href="{{ \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getLocalizedURL($localeCode) }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
                   {{ $properties['native'] }} <!-- Отображаем полное название языка в списке -->
               </a>
               @endif
               @endforeach
           </div>
       </div>
   </div>

   <script>
       document.getElementById('language-switcher-button').addEventListener('click', function() {
           var menu = document.getElementById('language-switcher-menu');
           menu.classList.toggle('hidden');
       });
   </script>