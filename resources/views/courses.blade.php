@extends('layouts.app')
@section('title','Course')
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
            <a href="{{route('course')}}" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Our Course</a>
            </div>
        </li>
        </ol>
    </nav>
<div>

<div class="mx-auto mt-10 max-w-7xl h-full sm:px-10 lg:px-2">
    <div>
        <div class="flex items-center w-full space-x-2">
            <h2 class="title text-xl text-red-500 whitespace-nowrap">||</h2>
            <h2 class="title text-xl text-black whitespace-nowrap">Our Course</h2>
            <span class="inline-block relative w-full h-6">
                <span class="absolute top-1/2 left-0 w-full h-0.5 bg-gray-300 transform -translate-y-1/4"></span>
            </span>
        </div>
        <div class="grid grid-cols-3 justify-items-center">
            <div class="col-span-3 md:col-span-2 w-full my-5">
                <h2 class="text-xl font-bold text-blue-400 py-4 px-2">Wisconsin Right of Way/Failure to Yield Course</h2>
                <h2 class="text-xl font-bold text-blue-400 py-4 px-2">Overview</h2>
                <ul class="pl-15" style="list-style: disc">
                    <li>Wisconsin DOT Licensed Course</li>
                    <li>Automatic Electronic Submission to the DMV</li>
                    <li>2Hours Course. Self-Paced. Unlimited Access 24/7</li>
                    <li>Course Progress Saved Automatically.</li>
                    <li>Unlimited Chapter Quizzes Retakes</li>
                </ul>

                <h2 class="text-xl font-bold text-blue-400 py-4 px-2">Short Course</h2>
                    <p class="px-2">With only 4 Short chapters to study, we offer the legally shortest allowed course in the state of Wisconsin. Our course includes interactive images, graphs and short videos to help you study efficiently and easily..</p>
                <h2 class="text-xl font-bold text-blue-400 py-4 px-2">Unlimited Retakes</h2>
                    <p class="px-2">You probably already saw this on our homepage, but we wanted to reiterate that we offer unlimited course retakes in case if you needed. 99% of our students pass on first attempt however for your peace of mind unlimited course retakes are included free of charge.</p>
                <h2 class="text-xl font-bold text-blue-400 py-4 px-2">FASTER</h2>
                    <p class="px-2">On average our users have found our course to be quicker than any other traffic school. Over and over again, we are complemented on the easiness of our course.
                        We also email you the course enrollment and completion certificate without any charge instantly. Moreover,
                        we provide you an option to report your course completion to the DMV electronically on the same day (If completed before 10:30PM EST time. Otherwise we will report it to the DMV on the very next business day)
                    </p>
                <h2 class="text-xl font-bold text-blue-400 py-4 px-2">INEXPENSIVE</h2>
                    <p class="px-2">Our course is $44.95 with no hidden cost. When we started our course, we promised ourselves not to charge ridiculous prices to those who just paid a couple of hundred dollars for their traffic ticket.</p>
            </div>
            <div class="col-start-3 w-full right_nav hidden md:inline-block">
                @include('partials.rightnav')
            </div>
        </div>
    </div>
</div>
@endsection
