@extends('layouts.app')
@section('content')
<h1 class="text-3xl font-bold mb-6">Contact Us</h1>
<form action="{{ route('contact.submit') }}" method="post" class="max-w-sm mx-auto">
    @csrf
    <div class="mb-4">
        <label for="name" class="block text-gray-700 text-base mb-2">Name:</label>
        <input type="text" name="name" id="name" required class="w-3/4 px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500 text-sm">
    </div>
    <div class="mb-4">
        <label for="email" class="block text-gray-700 text-base mb-2">Email:</label>
        <input type="email" name="email" id="email" required class="w-3/4 px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500 text-sm">
    </div>
    <div class="mb-4">
        <label for="message" class="block text-gray-700 text-base mb-2">Message:</label>
        <textarea name="message" id="message" required class="w-3/4 px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500 h-32 text-sm"></textarea>
    </div>
    <div class="mb-4 flex justify-center">
        <button type="submit" class="w-3/4 bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition duration-200 text-sm">Send</button>
    </div>
</form>
@endsection