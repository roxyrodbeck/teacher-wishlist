@extends('layouts.app')

@section('title', 'Create Your Wishlist Page')

@section('content')
    <div class="max-w-md mx-auto bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-bold mb-4">Create Your Wishlist</h2>

        <form action="{{ route('teachers.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-2"> 
                    Your Name</label>
                    <input
                    type="text"
                    id="name"
                    name="name"
                    value="{{ old('name') }}"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
                    placeholder="Enter your name">
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
</div>

<div>
    <label for="wishlist_link" class="block text-sm font-medium text-gray-700 mb-2"> 
        Wishlist Link</label>
        <input 
        type="url"
        id="wishlist_link"
        name="wishlist_link"
        value="{{ old('wishlist_link') }}"
        required
        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
        placeholder="Enter your wishlist link">
        @error('wishlist_link')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
</div>

<div>
    <label for="paypal_email" class="block text-sm font-medium text-gray-700 mb-2"> 
        PayPal Email</label>
        <input 
        type="email"
        id="paypal_email"
        name="paypal_email"
        value="{{ old('paypal_email') }}"
        required
        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
        placeholder="Enter your PayPal email">
        @error('paypal_email')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
</div>
<button
type="submit"
class="w-full bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500"> 
    Create Wishlist</button>
    </form>
    </div>  
    @endsection
                    
                
        