@extends('layouts.app')
@section('title','Register')
@section('description','Register for the Failure to Yield Course')
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
            <a href="{{route('register')}}" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Register</a>
            </div>
        </li>
        </ol>
    </nav>
<div>

<div class="mx-auto mt-10 max-w-7xl h-full sm:px-10 lg:px-2">
    <div>
        <div class="flex items-center w-full space-x-2">
            <h2 class="title text-xl text-red-500 whitespace-nowrap">||</h2>
            <h2 class="title text-xl text-black whitespace-nowrap">Let's Begin</h2>
            <span class="inline-block relative w-full h-6">
                <span class="absolute top-1/2 left-0 w-full h-0.5 bg-gray-300 transform -translate-y-1/4"></span>
            </span>
        </div>
        <div class="grid grid-cols-3 justify-items-center">
            <div class="col-span-3 md:col-span-2 w-full my-5">
                <h2 class="text-xl font-bold text-blue-400 py-1 px-2">Register</h2>
                <div class="form-signup px-5 self-center w-full md:w-7/8 col-span-3 md:col-span-1 h-full rounded-sm bg-white py-3">
                    <div>
                        <div class="flex space-x-1 mt-2">
                            <h4 class="bg-yellow-600 rounded-sm w-15 flex py-1 px-2 text-sm text-center text-white whitespace-nowrap">Step 1</h4>
                            <label for="location" class="flex items-center text-sm font-medium text-gray-900">Select State</label>
                        </div>
                        <div class="mt-2 grid grid-cols-1">
                        <select id="location" name="location" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            <option value="0" selected>Please Select State</option>
                            <option value="1">Wisconsin</option>
                        </select>
                        <svg class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-500 sm:size-4" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd" d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                        </svg>
                        </div>

                        <div class="flex space-x-1 mt-2">
                            <h4 class="bg-yellow-600 rounded-sm w-15 flex py-1 px-2 text-sm text-center text-white whitespace-nowrap">Step 2</h4>
                            <label for="course" class="flex items-center text-sm font-medium text-gray-900">Select Course</label>
                        </div>
                        <div class="mt-2 grid grid-cols-1">
                        <select id="course" name="course" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            <option value="0">Select Your Course</option>
                            <option value="1">Failure to Yield Course (Right of Way)</option>
                        </select>
                        <svg class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-500 sm:size-4" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd" d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                        </svg>
                        </div>
                        <div class="mt-2 text-center"><span id="error-message" class="text-red-400 font-light text-xs"></span></div>
                    </div>
                    <div class="flex items-center mt-2 justify-center w-full">
                        <button class="register px-20 py-3 bg-yellow-600 text-center rounded-sm text-lg font-bold text-white hover:cursor-pointer">Let's Begin</button>
                    </div>
                    <div class="text-center h-1/2 space-y-5">
                        <p><small>Having issues? Signup <a href="http://" class="text-blue-400 hover:text-blue-600">manually</a> or <a href="http://" class="text-blue-400 hover:text-blue-600">call us</a>!</small></p>
                        <div class="flex h-25 space-x-4 justify-between">
                            <img src="{{ asset('img/white-mini-icon.gif') }}" class="w-32 h-12" alt="Shopperaward">
                            <img src="{{ asset('img/norton.png') }}" class="w-28 h-18" alt="norton">
                        </div>
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
