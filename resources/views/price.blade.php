@extends('layouts.app')
@section('title','Pricing')
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
            <a href="{{route('price')}}" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Pricing</a>
            </div>
        </li>
        </ol>
    </nav>
<div>

<div class="mx-auto mt-10 max-w-7xl h-full sm:px-10 lg:px-2">
    <div>
        <div class="flex items-center w-full space-x-2">
            <h2 class="title text-xl text-red-500 whitespace-nowrap">||</h2>
            <h2 class="title text-xl text-black whitespace-nowrap">Pricing</h2>
            <span class="inline-block relative w-full h-6">
                <span class="absolute top-1/2 left-0 w-full h-0.5 bg-gray-300 transform -translate-y-1/4"></span>
            </span>
        </div>
        <div class="grid grid-cols-3 justify-items-center">
            <div class="col-span-3 md:col-span-2 w-full mt-5">
                <p class="px-2">We believe being open to YOU helps us gain your trust in us. If for any reason, you do not like our course,
                   you can request for a refund before taking the final exam. We guarantee you the 100% of the refund, without any questions asked.
                   We have an open pricing policy, you will never see any hidden fees after registration.</p>

                <h2 class="text-xl font-bold text-blue-400 py-4 px-2">Pricing for Wisconsin Failure to Yield</h2>

                <div class="overflow-x-auto py-5">
                    <table class="min-w-full bg-white border border-gray-200">
                      <!-- Table Header -->
                      <thead>
                        <tr class="bg-gray-100">
                          <th class="py-2 px-4 border-b text-left font-medium text-gray-700">What's Included</th>
                          <th class="py-2 px-4 border-b text-left font-medium text-gray-700">Our Price</th>
                          <th class="py-2 px-4 border-b text-left font-medium text-gray-700">Our Competitors</th>
                        </tr>
                      </thead>

                      <!-- Table Body -->
                      <tbody>
                        <!-- Row 1 -->
                        <tr class="hover:bg-gray-50">
                          <td class="py-1 px-4 border border-gray-300"> Failure to Yield Course</td>
                          <td class="py-1 px-4 border border-gray-300 text-center bg-green-100"> $10.00</td>
                          <td class="py-1 px-4 border border-gray-300 text-center"> $49 - $99</td>
                        </tr>
                        <!-- Row 2 -->
                        <tr class="hover:bg-gray-50">
                          <td class="py-1 px-4 border border-gray-300"> WisDOT Certificate Reporting</td>
                          <td class="py-1 px-4 border border-gray-300 text-center bg-green-100"> $19.95 </td>
                          <td class="py-1 px-4 border border-gray-300 text-center"> Hidden Fee or Included in Course</td>
                        </tr>
                        <!-- Row 3 -->
                        <tr class="hover:bg-gray-50">
                          <td class="py-1 px-4 border border-gray-300"> Course Type</td>
                          <td class="py-1 px-4 border border-gray-300 text-center bg-green-100"> Drivers Education Course (For Traffic Tickets)</td>
                          <td class="py-1 px-4 border border-gray-300 text-center"> Drivers Education Course (For Traffic Tickets)</td>
                        </tr>
                        <!-- Row 4 -->
                        <tr class="hover:bg-gray-50">
                            <td class="py-1 px-4 border border-gray-300"> Course Format</td>
                            <td class="py-1 px-4 border border-gray-300 text-center bg-green-100"> Online</td>
                            <td class="py-1 px-4 border border-gray-300 text-center"> Online</td>
                          </tr>
                        <!-- Row 5 -->
                          <tr class="hover:bg-gray-50">
                            <td class="py-1 px-4 border border-gray-300"> Course Length</td>
                            <td class="py-1 px-4 border border-gray-300 text-center bg-green-100"> 2 Hours (Stop and Start Anytime!)</td>
                            <td class="py-1 px-4 border border-gray-300 text-center"> 2 Hours</td>
                          </tr>
                        <!-- Row 6 -->
                          <tr class="hover:bg-gray-50">
                            <td class="py-1 px-4 border border-gray-300"> Support Service</td>
                            <td class="py-1 px-4 border border-gray-300 text-center bg-green-100"> Live Chat, Email & Phone Support</td>
                            <td class="py-1 px-4 border border-gray-300 text-center"> Phone Support</td>
                          </tr>
                        <!-- Row 7 -->
                          <tr class="hover:bg-gray-50">
                            <td class="py-1 px-4 border border-gray-300"> Course Completion Certificate</td>
                            <td class="py-1 px-4 border border-gray-300 text-center bg-green-100"> Included</td>
                            <td class="py-1 px-4 border border-gray-300 text-center"> Included</td>
                          </tr>
                        <!-- Row 8 -->
                          <tr class="hover:bg-gray-50">
                            <td class="py-1 px-4 border border-gray-300"> DMV Certificate Reporting</td>
                            <td class="py-1 px-4 border border-gray-300 text-center bg-green-100"> Within 1 Days (Even on Weekends)</td>
                            <td class="py-1 px-4 border border-gray-300 text-center"> Within 1 Business Day</td>
                          </tr>
                        <!-- Row 9 -->
                          <tr class="hover:bg-gray-50">
                            <td class="py-1 px-4 border border-gray-300"> eCertificate Delivery</td>
                            <td class="py-1 px-4 border border-gray-300 text-center bg-green-100"> Free</td>
                            <td class="py-1 px-4 border border-gray-300 text-center"> $9.95</td>
                          </tr>
                        <!-- Row 10 -->
                          <tr class="hover:bg-gray-50">
                            <td class="py-1 px-4 border border-gray-300"> Pass Conformation</td>
                            <td class="py-1 px-4 border border-gray-300 text-center bg-green-100"> Yes (Instantly)</td>
                            <td class="py-1 px-4 border border-gray-300 text-center"> Yes</td>
                          </tr>
                        <!-- Row 11 -->
                          <tr class="hover:bg-gray-50">
                            <td class="py-1 px-4 border border-gray-300"> Proof of Enrollment</td>
                            <td class="py-1 px-4 border border-gray-300 text-center bg-green-100"> Yes (Instantly)</td>
                            <td class="py-1 px-4 border border-gray-300 text-center"> Yes</td>
                          </tr>
                        <!-- Row 12 -->
                          <tr class="hover:bg-gray-50">
                            <td class="py-1 px-4 border border-gray-300"> Works on All Devices</td>
                            <td class="py-1 px-4 border border-gray-300 text-center bg-green-100"> Yes</td>
                            <td class="py-1 px-4 border border-gray-300 text-center"> Maybe</td>
                          </tr>
                        <!-- Row 13 -->
                          <tr class="hover:bg-gray-50">
                            <td class="py-1 px-4 border border-gray-300"> Your Privacy</td>
                            <td class="py-1 px-4 border border-gray-300 text-center bg-green-100"> Fully Protected</td>
                            <td class="py-1 px-4 border border-gray-300 text-center"> No Such Guarantee</td>
                          </tr>
                        <!-- Row 14 -->
                          <tr class="hover:bg-gray-50">
                            <td class="py-1 px-4 border border-gray-300"> SSL Certificate</td>
                            <td class="py-1 px-4 border border-gray-300 text-center bg-green-100"> 256 Bit Encryption</td>
                            <td class="py-1 px-4 border border-gray-300 text-center"> Maybe</td>
                          </tr>
                      </tbody>
                    </table>
                  </div>
            </div>
            <div class="col-start-3 w-full right_nav hidden md:inline-block">
                @include('partials.rightnav')
            </div>
        </div>
    </div>
</div>
@endsection
