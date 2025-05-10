@extends('layouts.app')
@section('title','Payemnt and Upgrade Option')
@section('content')
<div class="mx-auto max-w-7xl h-full sm:px-10 lg:px-14">
    <nav class="flex mt-5 w-full bg-gray-100 overflow-hidden" aria-label="Breadcrumb">
        <ol role="list" class="flex space-x-4 rounded-md bg-white px-6 shadow-sm">
        <li class="flex">
            <div class="flex items-center">
            <a href="#" class="text-green-700 flex items-center text-sm font-medium">
                <i class="fa-solid fa-circle-check mr-2"></i> Payment Plans
                <span class="sr-only">Home</span>
            </a>
            </div>
        </li>
        <li class="flex">
            <div class="flex items-center">
            <svg class="h-full w-6 shrink-0 text-gray-200" viewBox="0 0 24 44" preserveAspectRatio="none" fill="currentColor" aria-hidden="true">
                <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
            </svg>
            <a href="{{route('payment')}}" class="ml-4 text-sm font-medium text-blue-600 hover:text-blue-700">Payment Processing</a>
            </div>
        </li>
        <li class="flex">
            <div class="flex items-center">
            <svg class="h-full w-6 shrink-0 text-gray-200" viewBox="0 0 24 44" preserveAspectRatio="none" fill="currentColor" aria-hidden="true">
                <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
            </svg>
            <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Your Ticket Information</a>
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
            <h2 class="title text-xl text-black whitespace-nowrap">Payment and Upgrade Option</h2>
            <span class="inline-block relative w-full h-6">
                <span class="absolute top-1/2 left-0 w-full h-0.5 bg-gray-300 transform -translate-y-1/4"></span>
            </span>
        </div>
        <div class="grid grid-cols-3 justify-items-center">
            <div class="col-span-3 md:col-span-2 w-full my-5">
                <div class="list-group">
                    <div class="list-group-item flex justify-between items-center">
                        <form id="certificateForm" class="bg-white shadow-md rounded px-8 pt-2 pb-8 mb-4">
                            <!-- Certificate Delivery Options -->
                            <div class="mb-6">
                                <h2 class="text-lg font-semibold mb-3">Certificate Delivery</h2>
                                <div class="space-y-2">
                                    <div class="flex items-center">
                                        <input type="radio" id="emailDelivery" name="delivery_method" value="email" checked class="mr-2" data-price="0.00">
                                        <label for="emailDelivery">
                                            <i class="fa-solid fa-paper-plane"></i>
                                            <span class="text-yellow-600 underline font-bold">Recommended</span><span class="text-blue-600 font-bold">Copy of Certificate -</span> <span class="text-yellow-600 underline font-bold">$0.00</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="radio" id="regularMail" name="delivery_method" value="regular_mail" class="mr-2" data-price="5.99">
                                        <label for="regularMail">
                                            <i class="fa-solid fa-print"></i>
                                            <span class="text-blue-600 font-bold">Regular First Class Mail Delivery -</span> <span class="text-yellow-600 underline font-bold">$5.99</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="radio" id="priorityMail" name="delivery_method" value="priority_mail" class="mr-2" data-price="12.95">
                                        <label for="priorityMail">
                                            <i class="fa-solid fa-print"></i>
                                            <span class="text-blue-600 font-bold">3 - 5 Days Priority Mail Certificate -</span> <span class="text-yellow-600 underline font-bold">$12.95</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="radio" id="overnight" name="delivery_method" value="overnight" class="mr-2" data-price="49.95">
                                        <label for="overnight">
                                            <i class="fa-solid fa-print"></i>
                                            <span class="text-blue-600 font-bold">Overnight Completion Certificate -</span> <span class="text-yellow-600 underline font-bold">$49.95</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Wisconsin DOT Reporting -->
                            <div class="mb-6">
                                <h2 class="text-lg font-semibold mb-3">Wisconsin DOT Reporting</h2>
                                <div class="space-y-2">
                                    <div class="flex items-center">
                                        <input type="radio" id="nextDayProcessing" name="dot_processing" value="next_day" checked class="mr-2" data-price="19.95">
                                        <label for="nextDayProcessing">
                                            <span class="text-blue-600 font-bold">Certificate Processed to the WiSDOT Next Business Day -</span> <span class="text-yellow-600 underline font-bold">$19.95</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="radio" id="urgentProcessing" name="dot_processing" value="urgent" class="mr-2" data-price="29.95">
                                        <label for="urgentProcessing">
                                            <i class="fa-solid fa-plane-up"></i>
                                            <span class="text-yellow-600 underline font-bold">(License Revoked or Suspended?)</span><span class="text-blue-600 font-bold">Urgent Immediate Processing to DOT/DMV -</span> <span class="text-yellow-600 underline font-bold">$29.95</span>
                                        </label>
                                    </div>
                                </div>
                            </div>



                            <!-- Billing Address -->
                            <div class="mb-6">
                                <h2 class="text-lg font-semibold mb-3">YOUR BILLING ADDRESS</h2>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-1">
                                    <div>
                                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                                        <input type="text" id="name" name="name" value="{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}" class="w-full px-3 py-2 border rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                                    </div>
                                    <div>
                                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">E-mail</label>
                                        <input type="email" id="email" name="email" value="{{ auth()->user()->email}}" class="w-full px-3 py-2 border rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                                    </div>
                                    <div>
                                        <label for="address" class="block text-sm font-medium text-gray-700 mb-1">Address</label>
                                        <input type="text" id="address" name="address" value="{{ auth()->user()->address_line_1}}" class="w-full px-3 py-2 border rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                                    </div>
                                    <div>
                                        <label for="city" class="block text-sm font-medium text-gray-700 mb-1">City</label>
                                        <input type="text" id="city" name="city" value="{{ auth()->user()->city}}" class="w-full px-3 py-2 border rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                                    </div>
                                    <div>
                                        <label for="state" class="block text-sm font-medium text-gray-700 mb-1">State</label>
                                        <input type="text" id="state" name="state" value="{{ auth()->user()->state}}" class="w-full px-3 py-2 border rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                                    </div>
                                    <div>
                                        <label for="zip" class="block text-sm font-medium text-gray-700 mb-1">Zip Code</label>
                                        <input type="text" id="zip" name="zip" value="{{ auth()->user()->zip_code}}" class="w-full px-3 py-2 border rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                                    </div>
                                    <div>
                                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                                        <input type="tel" id="phone" name="phone" value="{{ auth()->user()->phone}}" class="w-full px-3 py-2 border rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Payment Section -->
                            <div class="mb-6">
                                <h2 class="text-lg font-semibold mb-3">Pay via Debit or Credit Card</h2>
                                <div class="space-y-4">
                                    <div>
                                        <label for="cardNumber" class="block text-sm font-medium text-gray-700 mb-1">Credit/Debit Card Number</label>
                                        <input type="text" id="cardNumber" name="card_number" placeholder="Valid Card Number" class="w-full px-3 py-2 border rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                                    </div>
                                    <div class="grid grid-cols-2 gap-4">
                                        <div>
                                            <label for="expiryDate" class="block text-sm font-medium text-gray-700 mb-1">Expiration Date</label>
                                            <input type="text" id="expiryDate" name="expiry_date" placeholder="MM/YY" class="w-full px-3 py-2 border rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                                        </div>
                                        <div>
                                            <label for="cvv" class="block text-sm font-medium text-gray-700 mb-1">Security Code (CVV)</label>
                                            <input type="text" id="cvv" name="cvv" placeholder="CVV Code" class="w-full px-3 py-2 border rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="billingZip" class="block text-sm font-medium text-gray-700 mb-1">Billing Zip Code</label>
                                        <input type="text" id="billingZip" name="billing_zip" value="53910" class="w-full px-3 py-2 border rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Package Includes -->
                            <div class="mb-6 bg-gray-100 p-4 rounded">
                                <h2 class="text-lg font-semibold mb-2">Package Includes:</h2>
                                <ul class="list-disc pl-5 space-y-1">
                                    <li>Certificate Delivery (Recommended) Emailed Copy of Certificate</li>
                                    <li>Testing and Certificate Fee</li>
                                </ul>
                            </div>

                            <!-- Form Actions -->
                            <div class="flex items-center justify-between">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                    Submit Payment
                                </button>
                                <button type="button" id="editBilling" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                    Edit Billing Info
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-start-3 w-full right_nav hidden md:inline-block">
                {{-- @include('partials.rightnav') --}}
                    <!-- Payment Details -->
                    <div class="mb-6 border-t pt-4">
                    <h2 class="text-lg font-semibold mb-3">Payment Details</h2>
                    <div class="space-y-2">
                        <div class="flex justify-between">
                            <span>Failure to Yield Course (Right of Way)</span>
                            <span>$10.00</span>
                        </div>
                        <div class="flex justify-between" id="dotProcessingFee">
                            <span>Certificate Processed to the WiSDOT Next Business Day</span>
                            <span>$19.95</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Upgrades</span>
                            <span>$0.00</span>
                        </div>
                        <div class="flex justify-between font-bold border-t mt-2 pt-2">
                            <span>Total</span>
                            <span id="totalAmount">$29.95</span>
                        </div>
                    </div>
                </div>

                <!-- Referral Code -->
                <div class="mb-6">
                    <label for="referralCode" class="block text-sm font-medium text-gray-700 mb-1">Referral Code</label>
                    <input type="text" id="referralCode" name="referral_code" class="w-full px-3 py-2 border rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
