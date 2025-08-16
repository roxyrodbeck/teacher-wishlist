@extends('layouts.app')

@section('title', $teacher->name . ' - Support Page')

@section('content')
<div class="max-w-2xl mx-auto bg-white rounded-lg shadow-md p-8">
    <!-- Teacher Name Header -->
     <div class="text-center mb-8">
        <h1 class="text-4xl font-bold text-gray-800 mb-2">{{ $teacher->name }}</h1>
        <p class="text-lg text-gray-600">Thank you for creating your wishlist page!</p>
</div>

<!-- Support Options -->
 <div class="space-y-6">
 <!-- Wishlist Section -->
  <div class="bg-blue-50 border border-blue-200 rounded-lg p-6">
    <h2 class="text-xl font-semibold text-blue-800 mb-3">Shop from Wishlist</h2>
    <p class="text-gray-700 mb-4">Purchase classroom supplies and educational materials directly from {{ explode(' ', $teacher->name)[0] }}'s wishlist.</p>
    <a href="{{ $teacher->wishlist_link }}" 
    target="_blank" 
    class="inline-block bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700 font-medium">Shop Now</a>
</div>

<!-- PayPal Section -->
<div class="bg-green-50 border border-green-200 rounded-lg p-6">
<h2 class="text-xl font-semibold text-green-800 mb-3">💝 Send Direct Support</h2>
<p class="text-gray-700 mb-4">
    Send a monetary donation directly to {{ explode(' ', $teacher->name)[0] }} to help with classroom needs.</p>
<a href="https://www.paypal.me/{{ Str.replace(['@', '.com', '.'], ['', '', ''], $teacher->paypal_email) }}"
target="_blank" 
class="inline-block bg-green-600 text-white px-6 py-3 rounded-md hover:bg-green-700 font-medium">Send via PayPal -></a>

</div>
</div>

<!-- Create Your Own Link -->
 <div class="text-center mt-6">
    <p class="text-sm text-gray-500 mb-2">Are you a teacher, too?</p>
    <a href="{{ route('teachers.create') }}" 
    class="text-blue-600 hover:text-blue-800 font-medium">Create Your Own Support Page</a>
</div>
</div>
@endsection
    