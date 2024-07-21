@extends('layouts.app')

@section('content')
<x-hero-page-default-section title="{{ $title }}" description="{{ $content }}" background-image="bg-hero" />

<section class="py-[2.5rem]">
    <div class="container">
        <div class="flex gap-[1.875rem]">
            <div class="w-3/12">
                @include('components.sidebar', ['categories' => $categories])
            </div>
            <div class="w-9/12">
                <!-- @include('components.category-description') -->
                @include('components.listOffer', ['offers' => $offers])
                @include('components.pagination')
            </div>
        </div>
    </div>
</section>
@endsection