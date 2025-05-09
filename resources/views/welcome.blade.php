@extends('layouts.app')
@section('title','Home')
@section('content')
    <div class="h-full py-6 bg-cover bg-no-repeat bg-center" style="background-image: url('{{ asset('img/bg-banner-1.jpg') }}');">
        <div class="mx-auto max-w-7xl h-full px-4 sm:px-10 lg:px-14">

            <div class="grid grid-rows-1 md:grid-cols-2 items-start justify-items-center">
                <div class="tab-nav w-full h-full items-center m-2">
                    <div class="3way-panel">
                       <div class="panel1 hidden w-full mx-auto my-4 justify-items-center">
                        <video controls class="w-full max-w-xl rounded-md">
                            <source src="{{ asset('videos/demo.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                       </div>
                       <div class="panel2 justify-items-center mt-2">
                        <ul class="text-white px-5 py-3 space-x-2 text-xl space-y-5 items-center">
                            <li>
                                <i class="fa fa-gavel"></i>
                                Wisconsin State Approved School (License # 764)
                            </li>
                            <li>
                                <i class="fa fa-users"></i>
                                Over 1.25 Million Customers! (<a href="http://www.shopperapproved.com/reviews/urbantrafficschool.com/" class="text-decoration: underline">5-Star Reviews</a>)
                            </li>
                            <li>
                                <i class="fa-regular fa-thumbs-up"></i>
                                <span class="rotate inline-block whitespace-nowrap">
                                    <span class="front whitespace-nowrap">Over 40,000+ 5-Star Course Reviews</span>
                                    <span class="back whitespace-nowrap" style="display:none;"></span>
                                </span>
                            </li>
                            <li>
                                <i class="fa fa-refresh"></i>
                                Free Unlimited Retakes for Your Peace of Mind
                            </li>
                            <li>
                                <i class="fa fa-bullhorn"></i>
                                Same Day Wisconsin DMV Reporting
                            </li>
                        </ul>
                       </div>
                       <div class="hidden panel3"></div>
                    </div>
                    <div class="w-full">
                        <ul class="flex text-center space-x-0.5 w-full">
                            <li class="p-4 bg-white rounded-b-sm w-full whitespace-nowrap">
                                <a href="#" class=""><span class="fa fa-video"></span> Quick Video</a>
                            </li>
                            <li class="p-4 bg-white rounded-b-sm w-full whitespace-nowrap">
                                <a href="#"><span class="fa fa-life-ring"></span> Overview</a>
                            </li>
                            <li class="p-4 bg-white rounded-b-sm w-full whitespace-nowrap">
                                <a href="#"><span class="fa fa-list"></span> Added Updgrades</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="form-signup px-4 w-full md:w-4/6 rounded-sm bg-white m-3 py-3 justify-self-end">
                    <div>
                        <div class="flex space-x-1 mt-2">
                            <h4 class="bg-yellow-600 rounded-sm w-15 flex py-1 px-2 text-sm text-center text-white whitespace-nowrap">Step 1</h4>
                            <label for="location" class="flex items-center text-sm font-medium text-gray-900">Select State</label>
                        </div>
                        <div class="mt-2 grid grid-cols-1">
                        <select id="location" name="location" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            <option selected>Please Select State</option>
                            <option >Wisconsin</option>
                        </select>
                        <svg class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-500 sm:size-4" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd" d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                        </svg>
                        </div>

                        <div class="flex space-x-1 mt-2">
                            <h4 class="bg-yellow-600 rounded-sm w-15 flex py-1 px-2 text-sm text-center text-white whitespace-nowrap">Step 2</h4>
                            <label for="location" class="flex items-center text-sm font-medium text-gray-900">Select Course</label>
                        </div>
                        <div class="mt-2 grid grid-cols-1">
                        <select id="location" name="location" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            <option selected>Select Your Course</option>
                            <option >Failure to Yield Course (Right of Way)</option>
                        </select>
                        <svg class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-500 sm:size-4" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd" d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                        </svg>
                        </div>
                    </div>
                    <div class="flex items-center mt-2 justify-center w-full">
                        <button class="px-20 py-3 bg-yellow-600 text-center rounded-sm text-lg font-bold text-white">Let's Begin</button>
                    </div>
                    <div class="text-center">
                        <p><small>Having issues? Signup <a href="http://" class="text-blue-400 hover:text-blue-600">manually</a> or <a href="http://" class="text-blue-400 hover:text-blue-600">call us</a>!</small></p>

                    </div>
                </div>
            </div>

        </div>
    </div>
    {{-- <div class="bg-green-100">
        asd
    </div> --}}
@endsection
