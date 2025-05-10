@extends('layouts.app')
@section('title','User')
@section('description','Register for the Failure to Yield Course')
@section('content')

<div class="mx-auto mt-10 max-w-7xl h-full sm:px-10 lg:px-2">
    <div>
        <div class="flex items-center w-full space-x-2">
            <h2 class="title text-xl text-red-500 whitespace-nowrap">||</h2>
            <h2 class="title text-xl text-black whitespace-nowrap">Student Login</h2>
            <span class="inline-block relative w-full h-6">
                <span class="absolute top-1/2 left-0 w-full h-0.5 bg-gray-300 transform -translate-y-1/4"></span>
            </span>
        </div>
        <div class="grid grid-cols-3 justify-items-center">
            <div class="col-span-3 md:col-span-2 w-full my-5">
                <h2 class="text-lg font-normal py-1 px-2">Or Login with your email and password here:</h2>
                <div>
                    <div class="form-login-email px-5 self-center w-full md:w-7/8 col-span-3 md:col-span-1 h-full rounded-sm bg-white py-3">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mt-2 grid grid-cols-1">
                                <label for="email" class="flex items-center text-sm font-medium text-gray-900">Email</label>
                                <input id="email" name="email" type="email" required class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                            <div class="mt-2 grid grid-cols-1">
                                <label for="password" class="flex items-center text-sm font-medium text-gray-900">Password</label>
                                <input id="password" name="password" type="password" required class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                            <div class="mt-2"><span class="text-sm text-blue-400">Forgot your password?</span></div>
                            <div class="mt-2 text-center"><span id="error-message" class="text-red-400 font-light text-xs"></span></div>
                            <button type="button" class="login_email mt-4 w-1/2 flex justify-self-end justify-center text-center py-4 px-2 border border-transparent rounded-md shadow-sm text-lg font-medium text-white bg-yellow-500 hover:bg-yellow-600 focus:ring-offset-opacity hover:cursor-pointer">Login</button>
                        </form>
                    </div>
                </div>

                <div class="border-t-1 border-gray-300 w-full my-10 py-4">
                    <div class="rounded-md bg-blue-50 p-4">
                        <div class="flex">
                          <div class="shrink-0">
                            <svg class="size-5 text-blue-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                              <path fill-rule="evenodd" d="M18 10a8 8 0 1 1-16 0 8 8 0 0 1 16 0Zm-7-4a1 1 0 1 1-2 0 1 1 0 0 1 2 0ZM9 9a.75.75 0 0 0 0 1.5h.253a.25.25 0 0 1 .244.304l-.459 2.066A1.75 1.75 0 0 0 10.747 15H11a.75.75 0 0 0 0-1.5h-.253a.25.25 0 0 1-.244-.304l.459-2.066A1.75 1.75 0 0 0 9.253 9H9Z" clip-rule="evenodd" />
                            </svg>
                          </div>
                          <div class="ml-3 flex-1 md:flex md:justify-between">
                            <p class="text-sm text-blue-700">OR If you've already made payment and finished setting up your account:</p>
                          </div>
                        </div>
                    </div>

                    <div>
                        <h2 class="text-md font-normal py-1 px-2">Login with your Driver License and Birth Date:</h2>
                        <div>
                            <div class="form-login-driver px-5 self-center w-full md:w-7/8 col-span-3 md:col-span-1 h-full rounded-sm bg-white py-3">
                                <form>
                                    <div class="mt-2 grid grid-cols-1">
                                        <label for="license" class="block text-sm/6 font-medium text-gray-900">Driver's License Number* (All Caps, No Dashes or spaces)</label>
                                        <div class="mt-2">
                                          <input type="license" name="license" id="license" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" placeholder="Driver License" required>
                                        </div>
                                      </div>
                                    <div class="my-6">
                                        <label for="birthday" class="block mb-2 text-sm font-medium text-black">
                                            Date of Birth
                                            <span class="text-xs text-gray-500 ml-1">(Must be 18+ years old)</span>
                                        </label>
                                        <div class="relative">
                                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                            <input type="date" id="birthday" name="birthday" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black"
                                                placeholder="Select date" value="{{ old('birthday') }}" max="{{ now()->subYears(18)->format('Y-m-d') }}" required>
                                        </div>
                                        @error('birthday')
                                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="mt-2"><span class="text-sm text-blue-400">Forgot your password?</span></div>
                                    <div class="mt-2 text-center"><span id="error-message" class="text-red-400 font-light text-xs"></span></div>
                                    <button type="button" class="mt-4 w-1/2 flex justify-self-end justify-center text-center py-4 px-2 border border-transparent rounded-md shadow-sm text-lg font-medium text-white bg-yellow-500 hover:bg-yellow-600 focus:ring-offset-opacity hover:cursor-pointer">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="border-t-1 border-gray-300 col-start-3 w-full my-10 pt-4 right_nav hidden md:inline-block">
                <div class="w-full bg-yellow-500 p-2">
                    <span>Useful Tip</span>
                </div>
                <div class="w-full bg-white p-2 border-1 border-gray-300">
                    <p class="bg-white">Bookmark this login page so you can return anytime in the future and begin where you left-off.</p>
                </div>
                <div class="border-b-1 border-gray-300 w-full my-5"></div>
                    <div class="rounded-md bg-green-50 p-4">
                        <div class="flex">
                            <div class="ml-3 flex-1 md:flex md:justify-between">
                                <p class="text-sm text-green-700">New to 10-Dollar-Online-Course? You can register for our course here: <a href="{{ route('register') }}" class="text-blue-600">https://www.10DollarOnlineCourse.com/register</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
