@extends('layouts.app')

@section('title', 'Success!')

@section('content')
    <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-md p-6">
        <div class="text-center">
            <div class="text-green-500 text-6xl mb-4"> 
                ✅</div>
                <h2 class="text-3xl font-mono font-bold mb-4">Success!</h2>
                <p class="text-gray-600 mb-6">Your wishlist page has been created successfully.</p>
</div>
                <div class="bg-gray-50 p-4 rounded-md mb-6">
                    <h3 class="font-semibold font-mono text-lg mb-2">Your Shareable Link:</h3>
                    <div class="flex items-center space-x-2">
                        <input
                        type="text"
                        value="{{ $teacher->shareable_url }}"
                        readonly
                        class="flex-1 px-3 py-2 border border-gray-300 rounded-md bg-white"
                        id="shareableLink">

                        <button
                        onclick="copyToClipboard()"
                        class="bg-green-600 font-mono text-white px-4 py-2 rounded-md hover:bg-green-700">
                            Copy Link</button>
</div>
</div>

<div class="text-center space-y-4">
    <a href="{{ $teacher->shareable_url }}" 
    target="_blank" 
    class="bg-green-600 font-mono text-white px-6 py-2 rounded-md hover:bg-green-700">Preview Your Page</a>
</div>
<a href="{{ route('teachers.create') }}" 
class="text-green-600 font-mono hover:text-green-800">Create Another Page</a>
</div>
</div>
</div>

<script>
    function copyToClipboard() {
        const linkInput = document.getElementById('shareableLink');
        linkInput.select();
        linkInput.setSelectionRange(0, 99999);
        navigator.clipboard.writeText(linkInput.value);

        const button = event.target;
        const originalText = button.textContent;
        button.textContent = 'Copied!';
        button.classList.add('bg-green-600');

        setTimeout(() => {
            button.textContent = originalText;
            button.classList.remove('bg-green-600');   
        }, 2000);
    }
    </script>
    @endsection

                        