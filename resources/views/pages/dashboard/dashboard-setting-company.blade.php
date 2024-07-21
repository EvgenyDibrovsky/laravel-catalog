@extends('layouts.app')

@section('content')
<x-hero-page-dashboard title="Настройки компании" background-image="bg-hero" />

<section class="py-[2.5rem]">
    <div class="container">
        <div class="flex gap-[1.875rem]">
            <div class="w-3/12 bg-white py-[0.5rem] px-[1rem]">
                @include('components.sidebar-dashboard')
            </div>
            <div class="w-9/12">
                Контент
            </div>
        </div>
    </div>
</section>
@endsection