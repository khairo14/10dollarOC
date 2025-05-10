@extends('layouts.app')
@section('title','Home')
@section('content')
    <div class="h-full py-6 bg-cover bg-no-repeat bg-center" style="background-image: url('{{ asset('img/bg-banner-1.jpg') }}');">
        <div class="mx-auto max-w-7xl h-full sm:px-10 lg:px-14">

            <div class="grid grid-rows-1 grid-cols-1 md:grid-cols-3 w-full items-center justify-items-center">
                <div class="tab-nav col-span-2 w-full h-full items-center m-2 hidden md:block px-3">
                    <div class="3way-panel relative overflow-hidden" style="height: 300px">
                        <div class="panel1 absolute top-0 left-0 w-full mx-auto my-4 justify-items-center transition-transform duration-300 transform -translate-x-full">
                        <video controls class="w-full max-w-xl rounded-md">
                            <source src="{{ asset('videos/demo.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                       </div>

                        <div class="panel2 absolute top-0 left-0 w-full mt-2 grid grid-cols-3 transition-transform duration-300 transform translate-x-0">
                            <div class="col-span-2">
                                <ul class="w-full text-white px-5 py-3 space-x-2 text-xl space-y-5 items-center">
                                    <li>
                                        <i class="fa fa-gavel" aria-label="Wisconsin State Approved School"></i>
                                        Wisconsin State Approved School (License # 764)
                                    </li>
                                    <li>
                                        <i class="fa fa-users" aria-label="Over 1.25 Million Customers"></i>
                                        Over 1.25 Million Customers! (<a href="http://www.shopperapproved.com/reviews/urbantrafficschool.com/" class="text-decoration: underline">5-Star Reviews</a>)
                                    </li>
                                    <li>
                                        <i class="fa-regular fa-thumbs-up" aria-label="Over 40,000+ 5-Star Course Reviews"></i>
                                        <span class="rotate inline-block whitespace-nowrap">
                                            <span class="front whitespace-nowrap">Over 40,000+ 5-Star Course Reviews</span>
                                            <span class="back whitespace-nowrap" style="display:none;"></span>
                                        </span>
                                    </li>
                                    <li>
                                        <i class="fa fa-refresh" aria-label="Free Unlimited Retakes"></i>
                                        Free Unlimited Retakes for Your Peace of Mind
                                    </li>
                                    <li>
                                        <i class="fa fa-bullhorn" aria-label="Same Day Wisconsin DMV Reporting"></i>
                                        Same Day Wisconsin DMV Reporting
                                    </li>
                                </ul>
                            </div>
                            <div class="grid justify-items-end">
                                <img src="{{ asset('img/wi-seal.png') }}" class="w-32" alt="Online Wisconsin School">
                                <img src="{{ asset('img/video-play.jpg') }}" class="w-32" alt="Online Wisconsin School">
                            </div>
                       </div>
                        <div class="panel3 absolute top-0 left-0 mt-2 w-full grid grid-cols-3 justify-items-center transition-transform duration-300 transform translate-x-full">
                            <div class="col-span-2">
                                <ul class="text-white text-xl space-y-4 py-6">
                                    <li class="font-normal"><u>Free Add-ons Provided to Our Students</u></li>
                                    <li class="font-normal"><i class="fa fa-heart" aria-label="Instant Proof of Completion Report"></i> Instant Proof of Completion Report (via Email)</li>
                                    <li class="font-normal"><i class="fa fa-life-ring" aria-label="SMS Notification on Certificate Processing"></i> SMS Notification on Cert. Processing</li>
                                    <li class="font-normal"><i class="fa fa-cloud" aria-label="Login Anytime from Any Device"></i> Login Anytime from Any Device.</li>
                                    <li class="font-normal"><i class="fa-solid fa-comment" aria-label="24x7 Live Chat and Phone Support"></i> 24x7 - Live Chat & Phone Support</li>
                                    <li class="font-normal"><i class="fa fa-refresh" aria-label="Free Certificate Re-processing"></i> Free Certificate Re-processing</li>
                                </ul>
                            </div>
                            <div class="grid justify-items-end">
                                <img src="{{ asset('img/uts-licenses.png') }}" class="w-32" alt="10dollarcourse DMV license">
                                <img src="{{ asset('img/gurantee.png') }}" class="w-36" alt="Satisfaction guarenteed on our course">
                            </div>
                       </div>
                    </div>
                    <div class="w-full">
                        <ul class="flex text-center space-x-0.5 w-full">
                            <li class="p-4 bg-white rounded-b-sm w-full whitespace-nowrap">
                                <a href="#" class="panel-btn-1"><span class="fa fa-video"></span> Quick Video</a>
                            </li>
                            <li class="p-4 bg-yellow-600 text-white rounded-b-sm w-full whitespace-nowrap">
                                <a href="#" class="panel-btn-2"><span class="fa fa-life-ring"></span> Overview</a>
                            </li>
                            <li class="p-4 bg-white rounded-b-sm w-full whitespace-nowrap">
                                <a href="#" class="panel-btn-3"><span class="fa fa-list"></span> Added Updgrades</a>
                            </li>
                        </ul>
                    </div>
                </div>

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
                        <button class="px-20 py-3 bg-yellow-600 text-center rounded-sm text-lg font-bold text-white hover:cursor-pointer">Let's Begin</button>
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

        </div>
    </div>

    <div class="h-3 repeat bg-center" style="background-image: url('{{ asset('img/bg2.jpg') }}');">
    </div>

    <div class="mx-auto max-w-7xl h-full sm:px-10 lg:px-14 pb-5">
        <div class="grid grid-rows-1 md:grid-cols-4 h-full pb-2">
            <div class="box1 bg-yellow-600 p-5 mb-1">
                <h3 class="font-bold text-lg"><i class="fa-solid fa-money-bill-1" aria-label="$10 Course"></i> $10* Course</h3>
                <p class="py-4">Why pay $100 for the same course? We charge only $10 for our course plus a super low *certificate handling and processing fee paid before taking the course</p>
            </div>
            <div class="box2 bg-amber-500 p-5 mb-1">
                <h3 class="font-bold text-lg"><i class="fa fa-check-square" aria-label="DMV Reporting"></i> DMV REPORTING</h3>
                <p class="py-4">If you received a letter from the DMV requiring you to take this course, enroll now to avoid any future driving privileges. We also report your completion to the DMV for you.</p>
            </div>
            <div class="box3 bg-amber-400 p-5 mb-1">
                <h3 class="font-bold text-lg"><i class="fa fa-sign-in" aria-label="No Hidden Fees"></i> $0 HIDDEN FEES</h3>
                <p class="py-4">Many other schools have made a habit of adding hidden fees to student courses after their course. With us you see all fees up-front. Pay What you see not a dime more!</p>
            </div>
            <div class="box4 bg-amber-300 p-5 mb-1">
                <h3 class="font-bold text-lg"><i class="fa fa-video" aria-label="Video Course"></i> VIDEO COURSE</h3>
                <p class="py-4">We're one of the only schools in Wisconsin that offers this course in a video format. Sit back relax and watch informative videos. No more boring reading!</p>
            </div>
        </div>
    </div>

    <div class="py-5 border-1 border-gray-200 w-full">
        <div class="mx-auto max-w-7xl h-full sm:px-10 lg:px-14">
            <h2 class="text-center font-bold">OVER 1 MILLION STUDENTS SERVED! RATED 5-STAR ON GOOGLE, FACEBOOK & YELP!</h2>
            <div class="grid grid-cols-1 grid-rows-3 md:grid-cols-3 md:grid-rows-1 items-center justify-items-center justify-between py-4">
                <div class="space-y-2">
                    <a href="http://www.shopperapproved.com/reviews/urbantrafficschool.com/" target="_blank" class="text-blue-600 hover:text-blue-950 space-y-2">
                        <img src="{{ asset('img/white-header-details.gif') }}" alt="Shopper Award">
                        <p>40,000+ Course Reviews</p>
                    </a>
                </div>
                <div class="space-y-2">
                    <a href="http://www.shopperapproved.com/reviews/urbantrafficschool.com/" target="_blank" class="text-blue-600 hover:text-blue-950 space-y-2">
                        <div class="flex items-center">
                            <img src="{{ asset('img/facebook-icon.png') }}" alt="facebook page">
                            <img src="{{ asset('img/ratings.png') }}" alt="Ratings">
                        </div>
                        <p>900+ Facebook Reviews (4.9/5.0)</p>
                    </a>
                </div>
                <div class="space-y-2">
                    <a href="http://www.shopperapproved.com/reviews/urbantrafficschool.com/" target="_blank" class="text-blue-600 hover:text-blue-950 space-y-2">
                        <div class="flex items-center">
                            <img src="{{ asset('img/google-plus-icon.png') }}" alt="Google Reviews">
                            <img src="{{ asset('img/ratings.png') }}" class="h-6 items-end" alt="Ratings">
                        </div>
                        <p>600+ Google Reviews (4.9/5.0)</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="py-5 border-1 border-gray-200 w-full">
        <div class="mx-auto max-w-7xl h-full sm:px-10 lg:px-14">
            <div class="grid grid-rows-1 grid-cols-1 md:grid-rows-2 md:grid-cols-4 space-y-5">
                <div class="px-5 justify-items-center space-y-2 text-center">
                    <i class="fa-regular fa-clock text-6xl text-blue-400" aria-label="Study At Your Pace"></i>
                    <h3 class="justify-self-center text-xl text-blue-400">Study At Your Pace </h3>
                    <p class="text-cemter">Our Online Traffic School is completely self paced. Log in and out of the course as many times as you'd like! Your progress is automatically saved.</p>
                </div>
                <div class="px-5 justify-items-center space-y-2 text-center">
                    <i class="fa-solid fa-window-restore text-6xl text-gray-400" aria-label="Works Everywhere"></i>
                    <h3 class="justify-self-center text-xl text-blue-400">Works Everywhere </h3>
                    <p class="text-cemter">Our Online Traffic School is completely self paced. Log in and out of the course as many times as you'd like! Your progress is automatically saved.</p>
                </div>
                <div class="px-5 justify-items-center space-y-2 text-center">
                    <i class="fa-solid fa-brain text-6xl text-blue-600" aria-label="Informative Course"></i>
                    <h3 class="justify-self-center text-xl text-blue-400">Informative Course </h3>
                    <p class="text-cemter">Visual aids help our users understand our materials better. We have incorporated videos and graphics to assist you in the learning process.</p>
                </div>
                <div class="px-5 justify-items-center space-y-2 text-center">
                    <i class="fa-solid fa-comments text-6xl text-green-600" aria-label="Reliable Support"></i>
                    <h3 class="justify-self-center text-xl text-blue-400">Reliable Support </h3>
                    <p class="text-cemter">Customer support is the backbone of our business. We provide phenomenal support via Live Chat, Email and Phone.</p>
                </div>

                <div class="px-5 justify-items-center space-y-2 text-center">
                    <i class="fa-solid fa-table-cells-column-lock text-6xl text-gray-500" aria-label="Secured Site"></i>
                    <h3 class="justify-self-center text-xl text-blue-400">Secured Site</h3>
                    <p class="text-cemter">Data security is our number one priority. We encrypt all of your information. Your info is moved away from our servers once you finish the course.</p>
                </div>
                <div class="px-5 justify-items-center space-y-2 text-center">
                    <i class="fa-solid fa-envelope-open-text text-6xl text-yellow-500" aria-label="Proactive Communication"></i>
                    <h3 class="justify-self-center text-xl text-blue-400">Proactive Communication</h3>
                    <p class="text-cemter">If DMV or Court signals user's incorrect/missing information, we make every effort to contact your to resolve issue.</p>
                </div>
                <div class="px-5 justify-items-center space-y-2 text-center">
                    <i class="fa-solid fa-rectangle-list text-6xl text-yellow-800" aria-label="Only 5 Chapters"></i>
                    <h3 class="justify-self-center text-xl text-blue-400">Only 5 Chapters!</h3>
                    <p class="text-cemter">We made our course as simple as possible. With five chapters to study and our practice quizzes, helps you get ready for the final exam.</p>
                </div>
                <div class="px-5 justify-items-center space-y-2 text-center">
                    <i class="fa-regular fa-rectangle-list text-6xl text-gray-400" aria-label="99% Success Rate"></i>
                    <h3 class="justify-self-center text-xl text-blue-400">99% Success Rate</h3>
                    <p class="text-cemter">The final exam covers what you study in our course. With over 99% success rate, rest assured you are making the right choice choosing us.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
