@extends('layouts.app')
@section('title','Customer Reviews')
@section('content')
<div class="mx-auto max-w-7xl h-full sm:px-10 lg:px-14">
    <nav class="flex mt-5 w-full bg-gray-100" aria-label="Breadcrumb">
        <ol role="list" class="flex space-x-4 rounded-md bg-white px-6 shadow-sm">
        <li class="flex">
            <div class="flex items-center">
            <a href="{{route('home')}}" class="text-blue-400 flex items-center hover:text-gray-500">
                <svg class="size-5 shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                <path fill-rule="evenodd" d="M9.293 2.293a1 1 0 0 1 1.414 0l7 7A1 1 0 0 1 17 11h-1v6a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-6H3a1 1 0 0 1-.707-1.707l7-7Z" clip-rule="evenodd" />
                </svg>
                Home
                <span class="sr-only">Home</span>
            </a>
            </div>
        </li>
        <li class="flex">
            <div class="flex items-center">
            <svg class="h-full w-6 shrink-0 text-gray-200" viewBox="0 0 24 44" preserveAspectRatio="none" fill="currentColor" aria-hidden="true">
                <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
            </svg>
            <a href="{{route('reviews')}}" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Customer Reviews</a>
            </div>
        </li>
        </ol>
    </nav>
<div>

<div class="mx-auto mt-10 max-w-7xl h-full sm:px-10 lg:px-2">
    <div>
        <div class="flex items-center w-full space-x-2">
            <h2 class="title text-xl text-red-500 whitespace-nowrap">||</h2>
            <h2 class="title text-xl text-black whitespace-nowrap">Customer Reviews</h2>
            <span class="inline-block relative w-full h-6">
                <span class="absolute top-1/2 left-0 w-full h-0.5 bg-gray-300 transform -translate-y-1/4"></span>
            </span>
        </div>
        <div class="grid grid-cols-3 justify-items-center">
            <div class="col-span-3 md:col-span-2 w-full mt-5">
                <div class="grid grid-cols-1 grid-rows-2 md:grid-rows-1 md:grid-cols-4 justify-items-center px-2 space-x-1 space-y-4">
                    <div class="space-x-2 space-y-2 justify-items-center">
                        <img src="{{ asset('img/facebook-icon.png') }}" alt="Facebook page">
                        <img src="{{ asset('img/ratings.png') }}" alt="ratings">
                        <p><a href="http://">800+ Facebook Reviews (4.9/5.0)</a></p>
                    </div>
                    <div class="space-x-2 space-y-2 justify-items-center">
                        <img src="{{ asset('img/yelp-icon.png') }}" alt="Yelp">
                        <img src="{{ asset('img/ratings.png') }}" alt="ratings">
                        <p><a href="http://">175+ Yelp Reviews (5.0/5.0)</a></p>
                    </div>
                    <div class="space-x-2 space-y-2 justify-items-center">
                        <img src="{{ asset('img/sa-icon.png') }}" alt="Facebook page">
                        <img src="{{ asset('img/ratings.png') }}" alt="ratings">
                        <p><a href="http://">800+ Facebook Reviews (4.9/5.0)</a></p>
                    </div>
                    <div class="space-x-2 space-y-2 justify-items-center">
                        <img src="{{ asset('img/google-plus-icon.png') }}" alt="Facebook page">
                        <img src="{{ asset('img/ratings.png') }}" alt="ratings">
                        <p><a href="http://">800+ Facebook Reviews (4.9/5.0)</a></p>
                    </div>
                   <div class="flex col-span-1 md:col-span-2 space-x-2 space-y-2 justify-items-center">
                        <div class="w-1/2 h-1/2 bg-green-600 text-center">
                            <h2 class="text-3xl font-bold p-2 text-white">4.9</h2>
                            <p class="bg-black w-full text-white p-1 my-2">Out of 5.0</p>
                        </div>
                        <div>
                            <img src="{{ asset('img/gold-bars.png') }}" alt="ratings">
                        </div>
                    </div>
                    <div class="space-x-2 space-y-2 justify-items-center">
                        <h2 class="text-2xl text-center font-bold text-black">Overall</br>Rating</h2>
                        <div class="flex text-amber-500 text-start text-3xl w-full">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <div class="space-x-2 space-y-2 justify-items-center">
                        <h2 class="text-4xl text-center font-bold text-black">98%</h2>
                        <p class="text-xs text-center">of customers that buy from this merchant give them a 4 or 5-Star rating.</p>
                    </div>
                </div>
            </div>
            <div class="col-start-3 w-full right_nav hidden md:inline-block">
                @include('partials.rightnav')
            </div>
        </div>
    </div>
</div>
@endsection
