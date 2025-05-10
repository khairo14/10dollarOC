<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    //
    public function index(){return view('home');}
    public function reviews(){return view('reviews');}
    public function pricing(){return view('price');}
    public function faqs(){return view('faqs');}
    public function user(){return view('user');}
    public function course(){return view('courses');}
    public function license(){return view('license');}
    public function register(){return view('register');}
    public function payment(){return view('payment');}
    public function login(){return view('login');}

    public function logout(Request $request){
        try {
            // Log out the user
            Auth::logout();

            // Return success response
            return response()->json([
                'success' => true,
                'message' => 'Logout successful!'
            ], 200);
        } catch (\Exception $e) {
            // Handle unexpected errors
            return response()->json([
                'success' => false,
                'message' => 'An error occurred during logout.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function userLogin(Request $request){
        try {
            // Validate the request data
            $validatedData = $request->validate([
                'email' => 'required|string|email|max:255',
                'password' => 'required|string|min:6',
            ]);

            if (Auth::attempt($validatedData)) {
                return response()->json([
                    'success' => true,
                    'message' => 'Login successful!',
                    'user' => Auth::user()
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Invalid credentials.'
                ], 401);
            }
        } catch (\Exception $e) {
            // Handle unexpected errors
            return response()->json([
                'success' => false,
                'message' => 'An error occurred during login.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function userRegistration(Request $request){
        try {
            // Validate the request data
            $validatedData = $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed',
                'phone' => 'nullable|string|max:20|regex:/^[\d\-\+\s\(\)]{10,20}$/',
                'address_line_1' => 'nullable|string|max:255',
                'city' => 'nullable|string|max:100',
                'state' => 'nullable|string|max:100',
                'zip_code' => 'nullable|string|max:20',
            ], [
                'first_name.required' => 'The first name field is required.',
                'last_name.required' => 'The last name field is required.',
                'email.unique' => 'This email is already registered.',
                'phone.regex' => 'Please enter a valid phone number (10-20 digits).',
                'password.confirmed' => 'The password confirmation does not match.',
            ]);

            // Create the user
            $user = User::create([
                'first_name' => $validatedData['first_name'],
                'last_name' => $validatedData['last_name'],
                'email' => $validatedData['email'],
                'password' => Hash::make($validatedData['password']),
                'phone' => $validatedData['phone'] ?? null,
                'address_line_1' => $validatedData['address_line_1'] ?? null,
                'city' => $validatedData['city'] ?? null,
                'state' => $validatedData['state'] ?? null,
                'zip_code' => $validatedData['zip_code'] ?? null,
            ]);

            // Return success response
            return response()->json([
                'success' => true,
                'message' => 'Registration successful!',
                'user' => $user
                // 'data' => $validatedData
            ], 201);

        } catch (\Exception $e) {
            // Handle unexpected errors
            return response()->json([
                'success' => false,
                'message' => 'An error occurred during registration.',
                'error' => $e->getMessage()
            ], 500);
        }
    }



}
