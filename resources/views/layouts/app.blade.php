<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    @vite('resources/css/app.css') <!-- Laravel Mix or Vite -->
    <link rel="stylesheet" href="{{ asset('node_modules/animate.css/animate.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    
    <script>
        function toggleMenu() {
            const menu = document.getElementById("mobile-menu");
            menu.classList.toggle("hidden");
        }
    </script>
</head>
<body class="bg-gray-100">

    <nav class="bg-black p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-2 ml-10">
            <img src="{{ asset('build/assets/img/retro-mascot.8eaf8f1070c27a3e4fb9.png') }}" alt="Logo" class="h-12 w-12 mr-2.5">
            <a href="{{ route('home') }}" class="text-white text-xl font-bold">Perc Hub</a>
            </div>
            <button class="md:hidden text-white text-2xl" onclick="toggleMenu()">☰</button>

            <ul class="hidden md:flex space-x-6 text-white list-none ">
                <li><a href="{{ route('home') }}" class="hover:text-gray-400">Home</a></li>
                <li><a href="{{ route('about') }}" class="hover:text-gray-400">About</a></li>
                <li><a href="{{ route('services') }}" class="hover:text-gray-400">Services</a></li>
                <li><a href="{{ route('contact') }}" class="hover:text-gray-400">Contact</a></li>
                <li><a href="{{ route('products.list') }}" class="hover:text-gray-400">View Product List</a></li>
                <li><a href="{{ route('myprofile') }}" class="hover:text-gray-400">My Profile</a></li>
            </ul>
        </div>

        <!-- Mobile Menu -->
        <ul id="mobile-menu" class="hidden bg-gray-800 md:hidden text-white text-center list-none">
            <li class="py-2"><a href="{{ route('home') }}" class="block hover:bg-gray-700">Home</a></li>
            <li class="py-2"><a href="{{ route('about') }}" class="block hover:bg-gray-700">About</a></li>
            <li class="py-2"><a href="{{ route('services') }}" class="block hover:bg-gray-700">Services</a></li>
            <li class="py-2"><a href="{{ route('contact') }}" class="block hover:bg-gray-700">Contact</a></li>
            <li class="py-2"><a href="{{ route('products.list') }}" class="block hover:bg-gray-700">View Product List</a></li>
            <li class = "py-2"><a href="{{route('myprofile')}}" class="block hover:bg-gray-700">My Profile</a></li>
        </ul>
    </nav>

    <div class="container mx-auto mt-10">
        @yield('content')
    </div>

</body>
</html>
