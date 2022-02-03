<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Management System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <script src="//unpkg.com/alpinejs" defer></script>
    <style>
        [x-cloak] {
            display: none;
        }
    </style>
</head>

<body>
    <nav x-data={MobileMenu:false,modal:false,open:false} class="bg-gray-100 shadow">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <!-- Mobile menu button-->
                    <button type="button" @click="MobileMenu = !MobileMenu" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <!--
                  Icon when menu is closed.
      
                  Heroicon name: outline/menu
      
                  Menu open: "hidden", Menu closed: "block"
                -->
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <!--
                  Icon when menu is open.
      
                  Heroicon name: outline/x
      
                  Menu open: "block", Menu closed: "hidden"
                -->
                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex justify-between">
                        <div class="">
                            <h2 class="text-xl font-bold uppercase">Rental Solution</h2>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block">
                    <ul class="flex space-x-4 text-gray-500">
                        <li>
                            <a class="text-gray-800 font-semibold hover:text-gray-800" href="/">
                                Home
                            </a>
                        </li>
                        <li>
                            <a class="text-gray-800 font-semibold hover:text-gray-800" href="{{route('cars')}}">
                                Cars
                            </a>
                        </li>
                        <li>
                            <a class="text-gray-800 font-semibold hover:text-gray-800" href="{{route('rent')}}">
                                Rent
                            </a>
                        </li>
                        <li>
                            <a class="text-gray-800 font-semibold hover:text-gray-800" href="{{route('services')}}">
                                Services
                            </a>
                        </li>
                        <li>
                            <a class="text-gray-800 font-semibold hover:text-gray-800" href="{{ route('contact') }}">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    @guest
                    <div class="flex space-x-2">
                        <a class="bg-blue-400  px-6 py-2 rounded text-white" @click.prevent="modal=true" href="">Login</a>
                        <a class="bg-blue-600 0 px-6 py-2 rounded text-white" @click.prevent="open=true" href="">Register</a>
                    </div>
                    @else
                    <!-- Profile dropdown -->
                    <div class="ml-3 relative" x-data="{ profileMenu: false }">
                        <div>
                            <button @click="profileMenu = !profileMenu" @click.away="profileMenu = false" type="button" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full" src="{{ auth()->user()->profile_photo_url }}" alt="">
                            </button>
                        </div>
                        <div x-cloak x-show="profileMenu" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="opacity-0 transform scale-90" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none z-50" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                            @if (auth()->user()->type === 1)
                            <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Dashboard</a>
                            @endif
                            <a href="{{ route('user.profile') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Profile</a>
                            <a onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-3">Logout
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </a>

                        </div>
                    </div>
                    @endguest
                </div>
            </div>
        </div>
        <!-- Login modal-->
        <div x-show="modal" x-cloak class="fixed z-40 inset-0 overflow-y-auto" aria-modal="true">
            <div class="flex min-h-screen text-center md:block md:px-2 lg:px-4 -mt-6">

                <div x-show="modal" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="hidden fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity md:block" @click="modal = false" aria-hidden="true">
                </div>
                <span class="hidden md:inline-block md:align-middle md:h-screen" aria-hidden="true"></span>

                <div x-show="modal" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 md:translate-y-0 md:scale-95" x-transition:enter-end="opacity-100 translate-y-0 md:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 md:scale-100" x-transition:leave-end="opacity-0 translate-y-4 md:translate-y-0 md:scale-95" class="flex text-base text-left transform transition w-full md:inline-block md:max-w-2xl md:px-4 md:my-8 md:align-middle lg:max-w-4xl">
                    <div class="w-full relative flex items-center bg-white dark:bg-gray-800 px-4 pt-14 pb-8 overflow-hidden shadow-2xl sm:px-6 sm:pt-8 md:p-6 lg:p-8">
                        <button type="button" class="absolute top-4 right-4 text-gray-400 hover:text-gray-500 dark:text-gray-300 sm:top-8 sm:right-6 md:top-6 md:right-6 lg:top-8 lg:right-8" @click="modal = false">
                            <span class="sr-only">Close</span>
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>

                        <div class=" w-full ">
                            <form method="POST" action="{{ route('login') }}" class="bg-white rounded px-8 pt-6 pb-8 mb-4">
                                @csrf
                                <div class="relative mb-4">
                                    <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                                    <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-blue-400 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                                <div class="relative mb-4">
                                    <label for="email" class="leading-7 text-sm text-gray-600">Password</label>
                                    <input type="password" id="email" name="password" class="w-full bg-white rounded border border-gray-300 focus:border-blue-400 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>

                                <div class="flex items-center justify-between">
                                    <button class="bg-blue-400 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                                        Login
                                    </button>
                                    <a @click.prevent="open=true,modal=false" href="#">New here ! <span class="text-blue-400 font-semibold">Register</span></a>
                                    @if (Route::has('password.request'))
                                    <a class="inline-block align-baseline font-bold text-sm text-blue-400 hover:text-blue-600" href="{{ route('password.request') }}">
                                        Forgot Password?
                                    </a>
                                    @endif
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Register Modal -->
        <div x-show="open" x-cloak class="fixed z-40 inset-0 overflow-y-auto" aria-modal="true">
            <div class="flex min-h-screen text-center md:block md:px-2 lg:px-4 -mt-6">

                <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="hidden fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity md:block" @click="open = false" aria-hidden="true">
                </div>
                <span class="hidden md:inline-block md:align-middle md:h-screen" aria-hidden="true"></span>

                <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 md:translate-y-0 md:scale-95" x-transition:enter-end="opacity-100 translate-y-0 md:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 md:scale-100" x-transition:leave-end="opacity-0 translate-y-4 md:translate-y-0 md:scale-95" class="flex text-base text-left transform transition w-full md:inline-block md:max-w-2xl md:px-4 md:my-8 md:align-middle lg:max-w-4xl">
                    <div class="w-full relative flex items-center bg-white dark:bg-gray-800 px-4 pt-14 pb-8 overflow-hidden shadow-2xl sm:px-6 sm:pt-8 md:p-6 lg:p-8">
                        <button type="button" class="absolute top-4 right-4 text-gray-400 hover:text-gray-500 dark:text-gray-300 sm:top-8 sm:right-6 md:top-6 md:right-6 lg:top-8 lg:right-8" @click="open = false">
                            <span class="sr-only">Close</span>
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>

                        <div class=" w-full ">
                            <form method="POST" action="{{ route('register') }}" class="bg-white rounded px-6 pt-6 pb-8 mb-4">
                                @csrf
                                <div class="grid gap-x-6 grid-cols-2">
                                    <div class="col-span-1">
                                        <div class="relative mb-4">
                                            <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                                            <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-blue-400 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        </div>
                                        <div class="relative mb-4">
                                            <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                                            <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-blue-400 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        </div>
                                        <div class="relative mb-4">
                                            <label for="email" class="leading-7 text-sm text-gray-600">Password</label>
                                            <input type="password" id="email" name="password" class="w-full bg-white rounded border border-gray-300 focus:border-blue-400 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        </div>
                                    </div>
                                    <div class="col-span-1">
                                        <div class="relative mb-4">
                                            <label for="name" class="leading-7 text-sm text-gray-600">Phone Number</label>
                                            <input type="text" id="name" name="phone_number" class="w-full bg-white rounded border border-gray-300 focus:border-blue-400 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        </div>
                                        <div class="relative mb-4">
                                            <label for="Address" class="leading-7 text-sm text-gray-600">Address</label>
                                            <input type="text" id="Address" name="address" class="w-full bg-white rounded border border-gray-300 focus:border-blue-400 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        </div>
                                        <div class="relative mb-4">
                                            <label for="email" class="leading-7 text-sm text-gray-600"> Confirm Password</label>
                                            <input type="password" id="email" name="password_confirmation" class="w-full bg-white rounded border border-gray-300 focus:border-blue-400 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-center justify-between">
                                    <button class="bg-blue-400 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                                        Sign Up
                                    </button>
                                    <a @click.prevent="open=false,modal=true" href="#">Already have an account ? <span class="text-blue-400 font-semibold">Login Here</span></a>
                                    @if (Route::has('password.request'))
                                    <a class="inline-block align-baseline font-bold text-sm text-blue-400 hover:text-blue-600" href="{{ route('password.request') }}">
                                        Forgot Password?
                                    </a>
                                    @endif
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- register  modal -->


        <!-- Mobile menu, show/hide based on menu state. -->
        <div x-show="MobileMenu" class="sm:hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Home</a>

                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Cars</a>

                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Rent</a>
                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Services</a>

                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Contact</a>
            </div>
        </div>
    </nav>
    @yield('content')
    <!-- Footer -->
    <footer class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap md:text-left text-center order-first">
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Our Products</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a href="#" class="text-gray-600 hover:text-gray-800">Career</a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-600 hover:text-gray-800">Hotels</a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-600 hover:text-gray-800">Cars</a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-600 hover:text-gray-800">Packages</a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-600 hover:text-gray-800">Features</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">About Rental Solution
                    </h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a href="#" class="text-gray-600 hover:text-gray-800">Career</a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-600 hover:text-gray-800">Hotels</a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-600 hover:text-gray-800">Cars</a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-600 hover:text-gray-800">Packages</a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-600 hover:text-gray-800">Features</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Resources</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a href="#" class="text-gray-600 hover:text-gray-800">Career</a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-600 hover:text-gray-800">Hotels</a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-600 hover:text-gray-800">Cars</a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-600 hover:text-gray-800">Packages</a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-600 hover:text-gray-800">Features</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Subscribe to Our
                        Newsletter
                    </h2>
                    <div class="flex xl:flex-nowrap md:flex-nowrap lg:flex-wrap flex-wrap justify-center items-end md:justify-start">
                        <div class="relative w-40 sm:w-auto xl:mr-4 lg:mr-0 sm:mr-4 mr-2">
                            <label for="footer-field" class="leading-7 text-sm text-gray-600">Placeholder</label>
                            <input type="text" id="footer-field" name="footer-field" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:bg-transparent focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        <button class="lg:mt-2 xl:mt-0 flex-shrink-0 inline-flex text-white bg-blue-400 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded">Button</button>
                    </div>
                    <p class="text-gray-500 text-sm mt-2 md:text-left text-center">Made with <i class=" text-red-600 fas fa-heartbeat"></i> By <span class="text-blue-600">Ferdows</span>

                    </p>
                </div>
            </div>
        </div>
        <div class="bg-gray-100">
            <div class="container px-5 py-6 mx-auto flex items-center sm:flex-row flex-col">
                <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-blue-400 rounded-full" viewBox="0 0 24 24">
                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                    </svg>
                    <span class="ml-3 text-xl">RENTAL SOLUTION</span>
                </a>
                <p class="text-sm text-gray-500 sm:ml-6 sm:mt-0 mt-4">© 2021 RENTAL SOLUTION —
                    <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" class="text-gray-600 ml-1" target="_blank">@ferdows</a>
                </p>
                <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                    <a class="text-gray-500">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                            </path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                            <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                            </path>
                            <circle cx="4" cy="4" r="2" stroke="none"></circle>
                        </svg>
                    </a>
                </span>
            </div>
        </div>
    </footer>


    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                type: 'fraction',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.home-slider-next',
                prevEl: '.home-slider-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        });
    </script>

</body>

</html>