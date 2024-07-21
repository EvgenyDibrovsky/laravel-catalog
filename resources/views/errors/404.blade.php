@extends('layouts.app')

@section('content')

<section class="h-[80dvh] flex items-center justify-center">
    <div class="">
        <div class="mb-[4rem]">
            <h1 class="text-[8rem] font-bold text-center text-sky-600">{{__('404.title')}}</h1>
            <p class="text-[2rem] text-center">{{__('404.description')}}</p>
        </div>

        <div class="flex justify-center mt-[2rem]">
            <a href="/" class="px-[1.5rem] py-[0.5rem] bg-sky-600 text-white duration-300 hover:bg-sky-500">{{__('404.btn')}}</a>
        </div>
    </div>
</section>
@endsection