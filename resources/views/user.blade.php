@extends('layouts.app')
@section('title','User')
@section('description','Register for the Failure to Yield Course')
@section('content')
<div class="mx-auto max-w-7xl h-full sm:px-10 lg:px-14">
    <nav class="flex mt-5 w-full bg-gray-100" aria-label="Breadcrumb">
        <ol role="list" class="flex space-x-4 rounded-md bg-white px-6 shadow-sm">
        <li class="flex">
            <div class="flex items-center">
            <a href="{{route('user')}}" class="text-blue-400 flex items-center hover:text-gray-500">
                <i class="fa-solid fa-user mr-1"></i> Your Account Setup
                <span class="sr-only">Home</span>
            </a>
            </div>
        </li>
        <li class="flex">
            <div class="flex items-center">
            <svg class="h-full w-6 shrink-0 text-gray-200" viewBox="0 0 24 44" preserveAspectRatio="none" fill="currentColor" aria-hidden="true">
                <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
            </svg>
            <a href="{{route('user')}}" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Payment & Other Info</a>
            </div>
        </li>
        <li class="flex">
            <div class="flex items-center">
            <svg class="h-full w-6 shrink-0 text-gray-200" viewBox="0 0 24 44" preserveAspectRatio="none" fill="currentColor" aria-hidden="true">
                <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
            </svg>
            <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Begin Course</a>
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
                <div class="min-h-screen  py-12 px-4 sm:px-6 lg:px-8 bg-gray-50">
                        <form id="registrationForm" class="mt-8 space-y-6">
                            <div class="rounded-md shadow-sm space-y-4">
                                <!-- Personal Information -->
                                <div>
                                    <label for="first_name" class="block text-sm font-medium text-gray-700">First Name*</label>
                                    <input id="first_name" name="first_name" type="text" required
                                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                                </div>

                                <div>
                                    <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name*</label>
                                    <input id="last_name" name="last_name" type="text" required
                                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                                </div>

                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700">
                                        Email*
                                        <span class="e-tooltip text-xs text-blue-600 cursor-pointer">(why do we need this?)</span>
                                        {{-- <span class="text-xs text-gray-500">You will use this email address to login to 10-Dollar-Online-Course. We will also send your payment receipt and passing certificate to this email.</span> --}}
                                    </label>
                                    <input id="email" name="email" type="email" required
                                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                                </div>

                                <div>
                                    <label for="password" class="block text-sm font-medium text-gray-700">Password* (Min. 6 characters)</label>
                                    <input id="password" name="password" type="password" required minlength="6"
                                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                                </div>

                                <div>
                                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password*</label>
                                    <input id="password_confirmation" name="password_confirmation" type="password" required
                                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                                </div>

                                <!-- Address Information -->
                                <div>
                                    <label for="address" class="block text-sm font-medium text-gray-700">
                                        Your Mailing Address*
                                        <span class="m-tooltip text-xs text-blue-600 cursor-pointer">(why do we need this?)</span>
                                    </label>
                                    <input id="address" name="address" type="text" required
                                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                                </div>

                                <div>
                                    <label for="city" class="block text-sm font-medium text-gray-700">City*</label>
                                    <input id="city" name="city" type="text" required
                                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                                </div>

                                <div>
                                    <label for="state" class="block text-sm font-medium text-gray-700">State*</label>
                                    <select id="state" name="state" required
                                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                                        <option value="WI" selected>Wisconsin</option>
                                        <!-- Add other states as needed -->
                                    </select>
                                </div>

                                <div>
                                    <label for="zip" class="block text-sm font-medium text-gray-700">Zip*</label>
                                    <input id="zip" name="zip" type="text" required
                                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                                </div>

                                <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-700">
                                        Phone Number*
                                        <span class="p-tooltip text-xs text-blue-600 cursor-pointer">(why do we need this?)</span>
                                    </label>
                                    <input id="phone" name="phone" type="tel" required
                                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                                </div>

                                <!-- Terms and Conditions -->
                                <div class="flex items-center">
                                    <input id="terms" name="terms" type="checkbox" required
                                        class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                                    <label for="terms" class="ml-2 block text-sm text-gray-700">
                                        I accept terms and conditions set forth by 10-Dollar-Online-Course and by the State of each respective course.
                                    </label>
                                </div>
                            </div>
                            <div>
                                <button type="button" id="submitBtn"
                                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Next >
                                </button>
                            </div>
                        </form>
                            <!-- Tooltip for "What's this?" -->
                    <div id="tooltip" class="hidden absolute bg-white p-4 rounded shadow-lg border border-gray-200 max-w-xs z-50">
                        When you pass your course, we are required to submit your proof of completion electronically to the Wisconsin DMV and Department of Transportation. This fee is a standard fee charged to all students who take our Right of Way/Failure to Yeild Course.
                        <div class="absolute -top-1 left-4 w-3 h-3 bg-white transform rotate-45 border-t border-l border-gray-200"></div>
                    </div>
                    <div id="e-tooltip" class="hidden absolute bg-white p-4 rounded shadow-lg border border-gray-200 max-w-xs z-50">
                        You will use this email address to login to 10-Dollar-Online-Course. We will also send your payment receipt and passing certificate to this email.
                        <div class="absolute -top-2 left-4 w-3 h-3 bg-white transform rotate-45 border-t border-l border-gray-200"></div>
                    </div>
                    <div id="m-tooltip" class="hidden absolute bg-white p-4 rounded shadow-lg border border-gray-200 max-w-xs z-50">
                        If you choose to do so, we will mail you a printed copy of your passing certificate to this address. Your address is NEVER shared with anyone else.
                        <div class="absolute -top-2 left-4 w-3 h-3 bg-white transform rotate-45 border-t border-l border-gray-200"></div>
                    </div>
                    <div id="p-tooltip" class="hidden absolute bg-white p-4 rounded shadow-lg border border-gray-200 max-w-xs z-50">
                        If we have any questions, this is the best way to reach to you. We will NEVER share you phone number will anyone else.
                        <div class="absolute -top-2 left-4 w-3 h-3 bg-white transform rotate-45 border-t border-l border-gray-200"></div>
                    </div>
                </div>
            </div>
            <div class="col-start-3 w-full my-10 py-4 right_nav hidden md:inline-block">
                <!-- Order Summary -->
                <div class="bg-gray-50 p-4 rounded-md">
                    <h3 class="text-lg font-medium text-gray-900 mb-2">Order Info</h3>
                    <div class="space-y-2">
                        <div class="flex justify-between">
                            <span>Wisconsin Right of Way/Failure to Yield Course</span>
                            <span>$10.00</span>
                        </div>
                        <div class="flex justify-between text-green-600">
                            <span>✔ WisDOT eFiling & Processing Fee <span class="text-blue-500 cursor-pointer">(What's this?)</span></span>
                            <span>$19.95</span>
                        </div>
                        <div class="flex justify-between text-green-600">
                            <span>✔ Video Course Upgrade</span>
                            <span>Free</span>
                        </div>
                        <div class="flex justify-between text-green-600">
                            <span>✔ Instant Completion Email</span>
                            <span>Free</span>
                        </div>
                        <div class="flex justify-between text-green-600">
                            <span>✔ Unlimited Retakes</span>
                            <span>Free</span>
                        </div>
                        <div class="border-t border-gray-200 pt-2 mt-2 flex justify-between font-bold">
                            <span>Total</span>
                            <span>$29.95</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
