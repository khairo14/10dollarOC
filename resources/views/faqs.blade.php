@extends('layouts.app')
@section('title','FAQs')
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
            <a href="{{route('faqs')}}" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">FAQs</a>
            </div>
        </li>
        </ol>
    </nav>
<div>

<div class="mx-auto mt-10 max-w-7xl h-full sm:px-10 lg:px-2">
    <div>
        <div class="flex items-center w-full space-x-2">
            <h2 class="title text-xl text-red-500 whitespace-nowrap">||</h2>
            <h2 class="title text-xl text-black whitespace-nowrap">FAQs</h2>
            <span class="inline-block relative w-full h-6">
                <span class="absolute top-1/2 left-0 w-full h-0.5 bg-gray-300 transform -translate-y-1/4"></span>
            </span>
        </div>
        <div class="grid grid-cols-3 justify-items-center">
            <div class="col-span-3 md:col-span-2 w-full my-5">
                <h2 class="text-xl font-bold text-blue-400 py-1 px-2">FAQs for Wisconsin Failure to Yield/Right of Way Course</h2>
                <div class="max-w-3xl mx-auto mt-8 space-y-4">
                    <!-- FAQ Item 1 -->
                    <div class="faq-item border border-gray-200 rounded-lg overflow-hidden">
                        <button class="faq-toggle w-full flex justify-between items-center px-4 py-2 bg-gray-50 hover:bg-gray-100 transition-colors">
                            <h3 class="text-md text-left text-blue-300 px-4">Who can take a Failure to Yield Course?</h3>
                            <i class="fa-solid fa-caret-down text-3xl"></i>
                        </button>
                        <div class="faq-content bg-white hidden">
                            <div class="h-0.5 px-20 repeat relative bg-center w-full" style="background-image: url('{{ asset('img/bg2.jpg') }}');"> </div>
                            <p class="p-4 text-gray-700 text-sm">
                                Any person who receives a citation and is convicted for failure to yield under Wisconsin statute 346.18 is able to attend 001-Failure-to-Yield-Course Failure to Yield's Licensed Failure to yield right-of-way course.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="faq-item border border-gray-200 rounded-lg overflow-hidden">
                        <button class="faq-toggle w-full flex justify-between items-center px-4 py-2 bg-gray-50 hover:bg-gray-100 transition-colors">
                            <h3 class="text-md text-left text-blue-300 px-4">How long will it take for me to finish the course?</h3>
                            <i class="fa-solid fa-caret-down text-3xl"></i>
                        </button>
                        <div class="faq-content bg-white hidden">
                            <div class="h-0.5 px-20 repeat relative bg-center w-full" style="background-image: url('{{ asset('img/bg2.jpg') }}');"> </div>
                            <p class="p-4 text-gray-700 text-sm">
                                While our course is self paced. It would take you 2 hours to complete our course.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="faq-item border border-gray-200 rounded-lg overflow-hidden">
                        <button class="faq-toggle w-full flex justify-between items-center px-4 py-1 bg-gray-50 hover:bg-gray-100 transition-colors">
                            <h3 class="text-md text-left text-blue-300 px-4">How does your defensive driving course help me keep points off my Driving Record?</h3>
                            <i class="fa-solid fa-caret-down text-3xl"></i>
                        </button>
                        <div class="faq-content bg-white hidden">
                            <div class="h-0.5 px-20 repeat relative bg-center w-full" style="background-image: url('{{ asset('img/bg2.jpg') }}');"> </div>
                            <p class="p-4 text-gray-700 text-sm">
                                Our online defensive driving school is licensed by Wisconsin Department of Transportation.
                                Upon completion of this course we will give you a completion certificate which you can provide to your court by mail, fax, email or in person. When you follow this steps as part of your agreement with the court, they will not add points to your record.
                            </p>
                        </div>
                    </div>
                    <!-- FAQ Item 4 -->
                    <div class="faq-item border border-gray-200 rounded-lg overflow-hidden">
                        <button class="faq-toggle w-full flex justify-between items-center px-4 py-1 bg-gray-50 hover:bg-gray-100 transition-colors">
                            <h3 class="text-md text-left text-blue-300 px-4">How does your defensive driving course help me keep points off my Driving Record?</h3>
                            <i class="fa-solid fa-caret-down text-3xl"></i>
                        </button>
                        <div class="faq-content bg-white hidden">
                            <div class="h-0.5 px-20 repeat relative bg-center w-full" style="background-image: url('{{ asset('img/bg2.jpg') }}');"> </div>
                            <p class="p-4 text-gray-700 text-sm">
                                Yes! As a matter of fact, over 70% of our students finish our course on the same day. It’s made to be easy, fun and simple for you.
                            </p>
                        </div>
                    </div>
                    <!-- FAQ Item 5 -->
                    <div class="faq-item border border-gray-200 rounded-lg overflow-hidden">
                        <button class="faq-toggle w-full flex justify-between items-center px-4 py-1 bg-gray-50 hover:bg-gray-100 transition-colors">
                            <h3 class="text-md text-left text-blue-300 px-4">How does your defensive driving course help me keep points off my Driving Record?</h3>
                            <i class="fa-solid fa-caret-down text-3xl"></i>
                        </button>
                        <div class="faq-content bg-white hidden">
                            <div class="h-0.5 px-20 repeat relative bg-center w-full" style="background-image: url('{{ asset('img/bg2.jpg') }}');"> </div>
                            <p class="p-4 text-gray-700 text-sm">
                                No, we save your progress each time you complete a quiz so you can login anytime and begin where you left off.
                            </p>
                        </div>
                    </div>
                    <!-- FAQ Item 6 -->
                    <div class="faq-item border border-gray-200 rounded-lg overflow-hidden">
                        <button class="faq-toggle w-full flex justify-between items-center px-4 py-1 bg-gray-50 hover:bg-gray-100 transition-colors">
                            <h3 class="text-md text-left text-blue-300 px-4">How does your defensive driving course help me keep points off my Driving Record?</h3>
                            <i class="fa-solid fa-caret-down text-3xl"></i>
                        </button>
                        <div class="faq-content bg-white hidden">
                            <div class="h-0.5 px-20 repeat relative bg-center w-full" style="background-image: url('{{ asset('img/bg2.jpg') }}');"> </div>
                            <p class="p-4 text-gray-700 text-sm">
                                Our failure to yield course has total of 5 short chapters.
                            </p>
                        </div>
                    </div>
                    <!-- FAQ Item 7 -->
                    <div class="faq-item border border-gray-200 rounded-lg overflow-hidden">
                        <button class="faq-toggle w-full flex justify-between items-center px-4 py-1 bg-gray-50 hover:bg-gray-100 transition-colors">
                            <h3 class="text-md text-left text-blue-300 px-4">How does your defensive driving course help me keep points off my Driving Record?</h3>
                            <i class="fa-solid fa-caret-down text-3xl"></i>
                        </button>
                        <div class="faq-content bg-white hidden">
                            <div class="h-0.5 px-20 repeat relative bg-center w-full" style="background-image: url('{{ asset('img/bg2.jpg') }}');"> </div>
                            <p class="p-4 text-gray-700 text-sm">
                                Yes the State of Wisconsin requires students to pass the final exam at the end. However we give you unlimited retakes to pass, making your course easier then the most.
                            </p>
                        </div>
                    </div>
                    <!-- FAQ Item 8 -->
                    <div class="faq-item border border-gray-200 rounded-lg overflow-hidden">
                        <button class="faq-toggle w-full flex justify-between items-center px-4 py-1 bg-gray-50 hover:bg-gray-100 transition-colors">
                            <h3 class="text-md text-left text-blue-300 px-4">How does your defensive driving course help me keep points off my Driving Record?</h3>
                            <i class="fa-solid fa-caret-down text-3xl"></i>
                        </button>
                        <div class="faq-content bg-white hidden">
                            <div class="h-0.5 px-20 repeat relative bg-center w-full" style="background-image: url('{{ asset('img/bg2.jpg') }}');"> </div>
                            <p class="p-4 text-gray-700 text-sm">
                                We already give you unlimited attempts to pass the chapter quizzes and therefore no chance of you failing the course.
                            </p>
                        </div>
                    </div>
                    <!-- FAQ Item 9 -->
                    <div class="faq-item border border-gray-200 rounded-lg overflow-hidden">
                        <button class="faq-toggle w-full flex justify-between items-center px-4 py-1 bg-gray-50 hover:bg-gray-100 transition-colors">
                            <h3 class="text-md text-left text-blue-300 px-4">How does your defensive driving course help me keep points off my Driving Record?</h3>
                            <i class="fa-solid fa-caret-down text-3xl"></i>
                        </button>
                        <div class="faq-content bg-white hidden">
                            <div class="h-0.5 px-20 repeat relative bg-center w-full" style="background-image: url('{{ asset('img/bg2.jpg') }}');"> </div>
                            <p class="p-4 text-gray-700 text-sm">
                                Your completion certificate can be sent to you via Email, USPS or FedEx. Depending on the delivery method you choose, we will process your certificate on the same business day.
                            </p>
                        </div>
                    </div>
                    <!-- FAQ Item 10 -->
                    <div class="faq-item border border-gray-200 rounded-lg overflow-hidden">
                        <button class="faq-toggle w-full flex justify-between items-center px-4 py-1 bg-gray-50 hover:bg-gray-100 transition-colors">
                            <h3 class="text-md text-left text-blue-300 px-4">How does your defensive driving course help me keep points off my Driving Record?</h3>
                            <i class="fa-solid fa-caret-down text-3xl"></i>
                        </button>
                        <div class="faq-content bg-white hidden">
                            <div class="h-0.5 px-20 repeat relative bg-center w-full" style="background-image: url('{{ asset('img/bg2.jpg') }}');"> </div>
                            <p class="p-4 text-gray-700 text-sm">
                                Yes. When we designed our website, we made sure it works on smart phones, tablets and computers alike.
                            </p>
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
