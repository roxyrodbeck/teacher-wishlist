@extends('layouts.app')

@section('title', 'Create Your Wishlist Page')

@section('content')
    <div class="max-w-md mx-auto bg-white rounded-lg shadow-md p-6 mt-4">
        <h2 class="text-2xl font-bold font-mono mb-4">Create Your Wishlist</h2>

        <form action="{{ route('teachers.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label for="name" class="block text-sm font-medium font-mono text-gray-700 mb-2"> 
                    Your Name</label>
                    <input
                    type="text"
                    id="name"
                    name="name"
                    value="{{ old('name') }}"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" 
                    >
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
</div>

<div>
    <label for="wishlist_link" class="block text-sm font-medium font-mono text-gray-700 mb-2"> 
        Wishlist Link</label>
        <input 
        type="url"
        id="wishlist_link"
        name="wishlist_link"
        value="{{ old('wishlist_link') }}"
        required
        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" 
      >
        @error('wishlist_link')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
</div>

<div>
    <label for="paypal_username" class="block text-sm font-medium font-mono text-gray-700 mb-2"> 
        PayPal Username</label>
        <input 
        type="text"
        id="paypal_username"
        name="paypal_username"
        value="{{ old('paypal_ username') }}"
        required
        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
        placeholder="create at paypal.com/paypalme/">
        @error('paypal_username')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
</div>
<button
type="submit"
class="w-full bg-green-600 font-mono text-white px-4 py-2 rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500"> 
    Create Wishlist</button>
    </form>
    </div>  
    @endsection
                    
                
        