@extends('layouts.app')

@section('content')
<x-hero-page-default-section title="{{__('contacts.title')}}" description="{{__('contacts.description')}}" background-image="bg-hero" />

<section class="py-[4rem]">
    <div class="container">
        <div class="w-6/12 mx-auto">

            Форма обратной связи

        </div>
    </div>
</section>

@endsection