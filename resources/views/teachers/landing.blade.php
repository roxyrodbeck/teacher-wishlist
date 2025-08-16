@extends('layouts.app')

@section('title', $teacher->name . ' - Support Page')

@section('content')
<div class="max-w-2xl mx-auto bg-white rounded-lg shadow-md p-8">
    <!-- Teacher Name Header -->
    <div class="text-center mb-8">
        <h1 class="text-4xl font-bold text-gray-800 mb-2">Thank you for helping {{ $teacher->name }}!</h1>
        <p class="text-lg text-gray-600">Your donation helps {{ $teacher->name }}'s students and school. 🍎</p>
    </div>
    
    <!-- Support Options -->
    <div class="space-y-6">
        <!-- Wishlist Section -->
        <div class="bg-green-50 border border-green-200 rounded-lg p-6">
            <h2 class="text-xl font-semibold text-green-800 mb-3">📝 Shop from Wishlist</h2>
            <p class="text-gray-700 mb-4">
                Purchase classroom supplies and educational materials directly from {{ explode(' ', $teacher->name)[0] }}'s wishlist.
            </p>
            <a 
                href="{{ $teacher->wishlist_link }}" 
                target="_blank"
                class="inline-block bg-green-600 text-white px-6 py-3 rounded-md hover:bg-green-700 font-medium"
            >
                View Wishlist →
            </a>
        </div>
        
        <!-- PayPal Section -->
        <div class="bg-green-50 border border-green-200 rounded-lg p-6">
            <h2 class="text-xl font-semibold text-green-800 mb-3">💝 Send Direct Support</h2>
            <p class="text-gray-700 mb-4">
                Send a monetary donation directly to {{ explode(' ', $teacher->name)[0] }} to help with classroom needs.
            </p>
            <a 
                href="https://paypal.me/{{ $teacher->paypal_username }}" 
                target="_blank"
                class="inline-block bg-green-600 text-white px-6 py-3 rounded-md hover:bg-green-700 font-medium"
            >
                Send via PayPal →
            </a>
        </div>
    </div>
    
    <!-- Thank You Message -->
    <div class="text-center mt-8 p-4 bg-yellow-50 border border-yellow-200 rounded-lg">
        <p class="text-yellow-800 font-medium">
            Every contribution makes a difference in students' lives. Thank you for your generosity!
        </p>
    </div>
    
    <!-- Create Your Own Link -->
    <div class="text-center mt-6">
        <p class="text-sm text-gray-500 mb-2">Are you a teacher too?</p>
        <a 
            href="{{ route('teachers.create') }}" 
            class="text-green-600 hover:text-green-800 font-medium"
        >
            Create your own support page
        </a>
    </div>
</div>
@endsection