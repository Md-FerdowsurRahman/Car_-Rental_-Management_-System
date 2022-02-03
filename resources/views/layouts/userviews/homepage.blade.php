@extends('layouts.user')

@section('content')
{{--
    @livewire('how-we-work-section')
    @livewire('all-time-hit-brands')
    --}}
    
    <!-- Slider Section -->
@livewire('homepage-sliders')
<div class="space-y-5 mt-4">
    <div class="text-center">
        <p class="text-gray-500 font-semibold tracking-widest">How we work ?</p>
        <h2 class="font-bold text-3xl text-gray-800">We work in three major steps</h2>
    </div>
    <div class="w-full max-w-6xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-x-4">
            <div class="group">
                <div class="w-full space-y-5 p-8 box-border border border-gray-100 shadow-sm group-hover:shadow-lg group-hover:cursor-pointer">
                    <div class="h-12 w-12 flex items-center justify-center bg-gray-100 group-hover:bg-blue-400 shadow mx-auto rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-400 group-hover:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <div class="space-y-1">
                        <h2 class="text-center text-xl font-bold">Choose a Location</h2>
                        <p class="text-justify text-gray-500">Choose a Location where you want to visit . It can be
                            anywhere based on your desire .
                        </p>
                    </div>
                </div>
            </div>
            <div class="group">
                <div class="w-full space-y-5 p-8 box-border border border-gray-100 shadow-sm group-hover:shadow-lg group-hover:cursor-pointer">
                    <div class="h-12 w-12 flex items-center justify-center bg-gray-100 group-hover:bg-blue-400 shadow mx-auto rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-400 group-hover:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div class="space-y-1">
                        <h2 class="text-center text-xl font-bold">Set a pick-up date</h2>
                        <p class="text-justify text-gray-500">Choose a Location where you want to visit . It can be
                            anywhere based on your desire .
                        </p>
                    </div>
                </div>
            </div>
            <div class="group">
                <div class="w-full space-y-5 p-8 box-border border border-gray-100 shadow-sm group-hover:shadow-lg group-hover:cursor-pointer">
                    <div class="h-12 w-12 flex items-center justify-center bg-gray-100 group-hover:bg-blue-400 shadow mx-auto rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-400 group-hover:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                        </svg>
                    </div>
                    <div class="space-y-1">
                        <h2 class="text-center text-xl font-bold">Book your car</h2>
                        <p class="text-justify text-gray-500">Choose a Location where you want to visit . It can be
                            anywhere based on your desire .
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Best Services -->
<div class="w-full my-5 max-w-6xl mx-auto ">
    <div class="grid grid-cols-2 gap-x-4">
        <div class="h-[420px] w-full overflow-hidden">
            <img class="object-cover mt-3" src="images/range rover.png" alt="">
        </div>
        <div class="h-40 w-full">
            <h6 class="text-gray-500 font-semibold tracking-widest">Best Services</h6>
            <h2 class="font-bold text-3xl text-gray-800">Feel the best experience with our special deals</h2>
            <div class="h-2 w-1/4 bg-blue-400 rounded my-2"></div>
            <div class="space-y-4 mt-5">
                <div class="flex space-x-3 pr-10 items-center">
                    <div class="h-14 w-14 flex justify-center items-center bg-gray-100 border-2 border-gray-50 shadow rounded-full">
                        <i class="fas fa-handshake text-blue-400 text-lg"></i>
                    </div>
                    <div class="">
                        <h3 class="text-lg font-bold text-gray-800">Deals for every budget</h3>
                        <p class="text-gray-500">Incredible prices on hotels, cars , flights and <br> packages
                            worldwide</p>
                    </div>
                </div>
                <div class="flex space-x-3 pr-10 items-center">
                    <div class="h-14 w-14 flex justify-center items-center bg-gray-100 border-2 border-gray-50 shadow rounded-full">

                        <i class="far fa-money-bill-alt text-blue-400 text-lg"></i>
                    </div>
                    <div class="">
                        <h3 class="text-lg font-bold text-gray-800">Best price guranteed</h3>
                        <p class="text-gray-500">Find a lower price ? We'll refund you 100% of the difference . </p>
                    </div>
                </div>
                <div class="flex space-x-3 pr-10 items-center">
                    <div class="h-14 w-14 flex justify-center items-center bg-gray-100 border-2 border-gray-50 shadow rounded-full">
                        <i class="fas fa-phone-volume text-blue-400 text-lg"></i>
                    </div>
                    <div class="">
                        <h3 class="text-lg font-bold text-gray-800">24/7 support service</h3>
                        <p class="text-gray-500">We provide a 24 X 7 support service . please feel free to contact
                            us . </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- collection -->
<div class="space-y-5 mt-4 ">
    <div class="text-center">
        <p class="text-gray-500 font-semibold tracking-widest">See the collection
        </p>
        <h2 class="font-bold text-3xl text-gray-800">Our all time hit brands
        </h2>
    </div>
    <div class="w-full max-w-6xl mx-auto">
        <div x-data="{ openTab: 1 }" class="p-6">
            <ul class="flex justify-center space-x-5 ">
                <li class="-mb-px mr-1">
                    <a @click.prevent="openTab = 1" class="inline-block rounded-t py-2 px-4 font-semibold" :class="{'bg-blue-400 hover:bg-blue-600 rounded-md text-white':openTab==1}" href="#">Range
                        Rover</a>
                </li>
                <li class="-mb-px mr-1">
                    <a @click.prevent="openTab = 2" class="inline-block rounded-t py-2 px-4 font-semibold" :class="{'bg-blue-400 hover:bg-blue-600 rounded-md text-white':openTab==2}" href="#">Audi</a>
                </li>
                <li class="-mb-px mr-1">
                    <a @click.prevent="openTab = 3" class=" inline-block rounded-t py-2 px-4 font-semibold" :class="{'bg-blue-400 hover:bg-blue-600 rounded-md text-white':openTab==3}" href="#">Nissan</a>
                </li>


            </ul>
            <div class="w-full pt-4">
                <div x-show="openTab == 1">
                    <div class="border border-gray-300 px-6 py-3 grid grid-cols-4 gap-3">
                        <div class="group transform scale-95 transition-transform duration-300 hover:scale-100 w-full bg-gray-100 overflow-hidden hover:shadow-md cursor-pointer">
                            <div class="w-44 mx-auto">
                                <img class="object-cover" src="{{ asset('images/car.png') }}" alt="">
                            </div>
                            <div class="p-3 space-y-1.5">
                                <span class="px-6 rounded py-[1px] text-sm border border-blue-400">2021</span>
                                <a href="#" class="block text-xl font-semibold">
                                    Marcedeze Benz
                                </a>
                                <div class="flex space-x-3 text-lg font-bold">
                                    <div class="text-blue-400">
                                        $450 <sup class="text-sm font-semibold">/M</sup>
                                    </div>
                                    <div class="">|</div>
                                    <div class="">
                                        $20<sub class="text-sm font-semibold">/D</sub>
                                    </div>
                                </div>
                                <div class="flex justify-between">
                                    <div class="">
                                        <i class="fas fa-tachometer-alt text-sm mr-1.5"></i>150k
                                    </div>
                                    <div class="">
                                        <i class="fas fa-paper-plane text-sm mr-1.5"></i>Manual
                                    </div>
                                    <div class="">
                                        <i class="fas fa-gas-pump text-sm mr-1.5"></i>Diesel
                                    </div>
                                </div>
                                <div class="">
                                    <a href="#" class="bg-blue-400 text-white block text-center py-1.5 rounded-sm">
                                        Rent Now
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="group transform scale-95 transition-transform duration-300 hover:scale-100 w-full bg-gray-100 overflow-hidden hover:shadow-md cursor-pointer">
                            <div class="w-44 mx-auto">
                                <img class="object-cover" src="{{ asset('images/car.png') }}" alt="">
                            </div>
                            <div class="p-3 space-y-1.5">
                                <span class="px-6 rounded py-[1px] text-sm border border-blue-400">2021</span>
                                <a href="#" class="block text-xl font-semibold">
                                    Marcedeze Benz
                                </a>
                                <div class="flex space-x-3 text-lg font-bold">
                                    <div class="text-blue-400">
                                        $450 <sup class="text-sm font-semibold">/M</sup>
                                    </div>
                                    <div class="">|</div>
                                    <div class="">
                                        $20<sub class="text-sm font-semibold">/D</sub>
                                    </div>
                                </div>
                                <div class="flex justify-between">
                                    <div class="">
                                        <i class="fas fa-tachometer-alt text-sm mr-1.5"></i>150k
                                    </div>
                                    <div class="">
                                        <i class="fas fa-paper-plane text-sm mr-1.5"></i>Manual
                                    </div>
                                    <div class="">
                                        <i class="fas fa-gas-pump text-sm mr-1.5"></i>Diesel
                                    </div>
                                </div>
                                <div class="">
                                    <a href="#" class="bg-blue-400 text-white block text-center py-1.5 rounded-sm">
                                        Rent Now
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="group transform scale-95 transition-transform duration-300 hover:scale-100 w-full bg-gray-100 overflow-hidden hover:shadow-md cursor-pointer">
                            <div class="w-44 mx-auto">
                                <img class="object-cover" src="{{ asset('images/car.png') }}" alt="">
                            </div>
                            <div class="p-3 space-y-1.5">
                                <span class="px-6 rounded py-[1px] text-sm border border-blue-400">2021</span>
                                <a href="#" class="block text-xl font-semibold">
                                    Marcedeze Benz
                                </a>
                                <div class="flex space-x-3 text-lg font-bold">
                                    <div class="text-blue-400">
                                        $450 <sup class="text-sm font-semibold">/M</sup>
                                    </div>
                                    <div class="">|</div>
                                    <div class="">
                                        $20<sub class="text-sm font-semibold">/D</sub>
                                    </div>
                                </div>
                                <div class="flex justify-between">
                                    <div class="">
                                        <i class="fas fa-tachometer-alt text-sm mr-1.5"></i>150k
                                    </div>
                                    <div class="">
                                        <i class="fas fa-paper-plane text-sm mr-1.5"></i>Manual
                                    </div>
                                    <div class="">
                                        <i class="fas fa-gas-pump text-sm mr-1.5"></i>Diesel
                                    </div>
                                </div>
                                <div class="">
                                    <a href="#" class="bg-blue-400 text-white block text-center py-1.5 rounded-sm">
                                        Rent Now
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="group transform scale-95 transition-transform duration-300 hover:scale-100 w-full bg-gray-100 overflow-hidden hover:shadow-md cursor-pointer">
                            <div class="w-44 mx-auto">
                                <img class="object-cover" src="{{ asset('images/car.png') }}" alt="">
                            </div>
                            <div class="p-3 space-y-1.5">
                                <span class="px-6 rounded py-[1px] text-sm border border-blue-400">2021</span>
                                <a href="#" class="block text-xl font-semibold">
                                    Marcedeze Benz
                                </a>
                                <div class="flex space-x-3 text-lg font-bold">
                                    <div class="text-blue-400">
                                        $450 <sup class="text-sm font-semibold">/M</sup>
                                    </div>
                                    <div class="">|</div>
                                    <div class="">
                                        $20<sub class="text-sm font-semibold">/D</sub>
                                    </div>
                                </div>
                                <div class="flex justify-between">
                                    <div class="">
                                        <i class="fas fa-tachometer-alt text-sm mr-1.5"></i>150k
                                    </div>
                                    <div class="">
                                        <i class="fas fa-paper-plane text-sm mr-1.5"></i>Manual
                                    </div>
                                    <div class="">
                                        <i class="fas fa-gas-pump text-sm mr-1.5"></i>Diesel
                                    </div>
                                </div>
                                <div class="">
                                    <a href="#" class="bg-blue-400 text-white block text-center py-1.5 rounded-sm">
                                        Rent Now
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="group transform scale-95 transition-transform duration-300 hover:scale-100 w-full bg-gray-100 overflow-hidden hover:shadow-md cursor-pointer">
                            <div class="w-44 mx-auto">
                                <img class="object-cover" src="{{ asset('images/car.png') }}" alt="">
                            </div>
                            <div class="p-3 space-y-1.5">
                                <span class="px-6 rounded py-[1px] text-sm border border-blue-400">2021</span>
                                <a href="#" class="block text-xl font-semibold">
                                    Marcedeze Benz
                                </a>
                                <div class="flex space-x-3 text-lg font-bold">
                                    <div class="text-blue-400">
                                        $450 <sup class="text-sm font-semibold">/M</sup>
                                    </div>
                                    <div class="">|</div>
                                    <div class="">
                                        $20<sub class="text-sm font-semibold">/D</sub>
                                    </div>
                                </div>
                                <div class="flex justify-between">
                                    <div class="">
                                        <i class="fas fa-tachometer-alt text-sm mr-1.5"></i>150k
                                    </div>
                                    <div class="">
                                        <i class="fas fa-paper-plane text-sm mr-1.5"></i>Manual
                                    </div>
                                    <div class="">
                                        <i class="fas fa-gas-pump text-sm mr-1.5"></i>Diesel
                                    </div>
                                </div>
                                <div class="">
                                    <a href="#" class="bg-blue-400 text-white block text-center py-1.5 rounded-sm">
                                        Rent Now
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="group transform scale-95 transition-transform duration-300 hover:scale-100 w-full bg-gray-100 overflow-hidden hover:shadow-md cursor-pointer">
                            <div class="w-44 mx-auto">
                                <img class="object-cover" src="{{ asset('images/car.png') }}" alt="">
                            </div>
                            <div class="p-3 space-y-1.5">
                                <span class="px-6 rounded py-[1px] text-sm border border-blue-400">2021</span>
                                <a href="#" class="block text-xl font-semibold">
                                    Marcedeze Benz
                                </a>
                                <div class="flex space-x-3 text-lg font-bold">
                                    <div class="text-blue-400">
                                        $450 <sup class="text-sm font-semibold">/M</sup>
                                    </div>
                                    <div class="">|</div>
                                    <div class="">
                                        $20<sub class="text-sm font-semibold">/D</sub>
                                    </div>
                                </div>
                                <div class="flex justify-between">
                                    <div class="">
                                        <i class="fas fa-tachometer-alt text-sm mr-1.5"></i>150k
                                    </div>
                                    <div class="">
                                        <i class="fas fa-paper-plane text-sm mr-1.5"></i>Manual
                                    </div>
                                    <div class="">
                                        <i class="fas fa-gas-pump text-sm mr-1.5"></i>Diesel
                                    </div>
                                </div>
                                <div class="">
                                    <a href="#" class="bg-blue-400 text-white block text-center py-1.5 rounded-sm">
                                        Rent Now
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="group transform scale-95 transition-transform duration-300 hover:scale-100 w-full bg-gray-100 overflow-hidden hover:shadow-md cursor-pointer">
                            <div class="w-44 mx-auto">
                                <img class="object-cover" src="{{ asset('images/car.png') }}" alt="">
                            </div>
                            <div class="p-3 space-y-1.5">
                                <span class="px-6 rounded py-[1px] text-sm border border-blue-400">2021</span>
                                <a href="#" class="block text-xl font-semibold">
                                    Marcedeze Benz
                                </a>
                                <div class="flex space-x-3 text-lg font-bold">
                                    <div class="text-blue-400">
                                        $450 <sup class="text-sm font-semibold">/M</sup>
                                    </div>
                                    <div class="">|</div>
                                    <div class="">
                                        $20<sub class="text-sm font-semibold">/D</sub>
                                    </div>
                                </div>
                                <div class="flex justify-between">
                                    <div class="">
                                        <i class="fas fa-tachometer-alt text-sm mr-1.5"></i>150k
                                    </div>
                                    <div class="">
                                        <i class="fas fa-paper-plane text-sm mr-1.5"></i>Manual
                                    </div>
                                    <div class="">
                                        <i class="fas fa-gas-pump text-sm mr-1.5"></i>Diesel
                                    </div>
                                </div>
                                <div class="">
                                    <a href="#" class="bg-blue-400 text-white block text-center py-1.5 rounded-sm">
                                        Rent Now
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="group transform scale-95 transition-transform duration-300 hover:scale-100 w-full bg-gray-100 overflow-hidden hover:shadow-md cursor-pointer">
                            <div class="w-44 mx-auto">
                                <img class="object-cover" src="{{ asset('images/car.png') }}" alt="">
                            </div>
                            <div class="p-3 space-y-1.5">
                                <span class="px-6 rounded py-[1px] text-sm border border-blue-400">2021</span>
                                <a href="#" class="block text-xl font-semibold">
                                    Marcedeze Benz
                                </a>
                                <div class="flex space-x-3 text-lg font-bold">
                                    <div class="text-blue-400">
                                        $450 <sup class="text-sm font-semibold">/M</sup>
                                    </div>
                                    <div class="">|</div>
                                    <div class="">
                                        $20<sub class="text-sm font-semibold">/D</sub>
                                    </div>
                                </div>
                                <div class="flex justify-between">
                                    <div class="">
                                        <i class="fas fa-tachometer-alt text-sm mr-1.5"></i>150k
                                    </div>
                                    <div class="">
                                        <i class="fas fa-paper-plane text-sm mr-1.5"></i>Manual
                                    </div>
                                    <div class="">
                                        <i class="fas fa-gas-pump text-sm mr-1.5"></i>Diesel
                                    </div>
                                </div>
                                <div class="">
                                    <a href="#" class="bg-blue-400 text-white block text-center py-1.5 rounded-sm">
                                        Rent Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="openTab == 2">
                    <p class="">No car found for the Brand Nissan
                    </p>

                </div>
                <div x-show="openTab == 3">
                    <div class="border border-gray-300 px-6 py-3 grid grid-cols-4 gap-3">
                        <div class="group transform scale-95 transition-transform duration-300 hover:scale-100 w-full bg-gray-100 overflow-hidden hover:shadow-md cursor-pointer">
                            <div class="w-44 mx-auto">
                                <img class="object-cover" src="{{ asset('images/car.png') }}" alt="">
                            </div>
                            <div class="p-3 space-y-1.5">
                                <span class="px-6 rounded py-[1px] text-sm border border-blue-400">2021</span>
                                <a href="#" class="block text-xl font-semibold">
                                    Marcedeze Benz
                                </a>
                                <div class="flex space-x-3 text-lg font-bold">
                                    <div class="text-blue-400">
                                        $450 <sup class="text-sm font-semibold">/M</sup>
                                    </div>
                                    <div class="">|</div>
                                    <div class="">
                                        $20<sub class="text-sm font-semibold">/D</sub>
                                    </div>
                                </div>
                                <div class="flex justify-between">
                                    <div class="">
                                        <i class="fas fa-tachometer-alt text-sm mr-1.5"></i>150k
                                    </div>
                                    <div class="">
                                        <i class="fas fa-paper-plane text-sm mr-1.5"></i>Manual
                                    </div>
                                    <div class="">
                                        <i class="fas fa-gas-pump text-sm mr-1.5"></i>Diesel
                                    </div>
                                </div>
                                <div class="">
                                    <a href="#" class="bg-blue-400 text-white block text-center py-1.5 rounded-sm">
                                        Rent Now
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="group transform scale-95 transition-transform duration-300 hover:scale-100 w-full bg-gray-100 overflow-hidden hover:shadow-md cursor-pointer">
                            <div class="w-44 mx-auto">
                                <img class="object-cover" src="{{ asset('images/car.png') }}" alt="">
                            </div>
                            <div class="p-3 space-y-1.5">
                                <span class="px-6 rounded py-[1px] text-sm border border-blue-400">2021</span>
                                <a href="#" class="block text-xl font-semibold">
                                    Marcedeze Benz
                                </a>
                                <div class="flex space-x-3 text-lg font-bold">
                                    <div class="text-blue-400">
                                        $450 <sup class="text-sm font-semibold">/M</sup>
                                    </div>
                                    <div class="">|</div>
                                    <div class="">
                                        $20<sub class="text-sm font-semibold">/D</sub>
                                    </div>
                                </div>
                                <div class="flex justify-between">
                                    <div class="">
                                        <i class="fas fa-tachometer-alt text-sm mr-1.5"></i>150k
                                    </div>
                                    <div class="">
                                        <i class="fas fa-paper-plane text-sm mr-1.5"></i>Manual
                                    </div>
                                    <div class="">
                                        <i class="fas fa-gas-pump text-sm mr-1.5"></i>Diesel
                                    </div>
                                </div>
                                <div class="">
                                    <a href="#" class="bg-blue-400 text-white block text-center py-1.5 rounded-sm">
                                        Rent Now
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="group transform scale-95 transition-transform duration-300 hover:scale-100 w-full bg-gray-100 overflow-hidden hover:shadow-md cursor-pointer">
                            <div class="w-44 mx-auto">
                                <img class="object-cover" src="{{ asset('images/car.png') }}" alt="">
                            </div>
                            <div class="p-3 space-y-1.5">
                                <span class="px-6 rounded py-[1px] text-sm border border-blue-400">2021</span>
                                <a href="#" class="block text-xl font-semibold">
                                    Marcedeze Benz
                                </a>
                                <div class="flex space-x-3 text-lg font-bold">
                                    <div class="text-blue-400">
                                        $450 <sup class="text-sm font-semibold">/M</sup>
                                    </div>
                                    <div class="">|</div>
                                    <div class="">
                                        $20<sub class="text-sm font-semibold">/D</sub>
                                    </div>
                                </div>
                                <div class="flex justify-between">
                                    <div class="">
                                        <i class="fas fa-tachometer-alt text-sm mr-1.5"></i>150k
                                    </div>
                                    <div class="">
                                        <i class="fas fa-paper-plane text-sm mr-1.5"></i>Manual
                                    </div>
                                    <div class="">
                                        <i class="fas fa-gas-pump text-sm mr-1.5"></i>Diesel
                                    </div>
                                </div>
                                <div class="">
                                    <a href="#" class="bg-blue-400 text-white block text-center py-1.5 rounded-sm">
                                        Rent Now
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="group transform scale-95 transition-transform duration-300 hover:scale-100 w-full bg-gray-100 overflow-hidden hover:shadow-md cursor-pointer">
                            <div class="w-44 mx-auto">
                                <img class="object-cover" src="{{ asset('images/car.png') }}" alt="">
                            </div>
                            <div class="p-3 space-y-1.5">
                                <span class="px-6 rounded py-[1px] text-sm border border-blue-400">2021</span>
                                <a href="#" class="block text-xl font-semibold">
                                    Marcedeze Benz
                                </a>
                                <div class="flex space-x-3 text-lg font-bold">
                                    <div class="text-blue-400">
                                        $450 <sup class="text-sm font-semibold">/M</sup>
                                    </div>
                                    <div class="">|</div>
                                    <div class="">
                                        $20<sub class="text-sm font-semibold">/D</sub>
                                    </div>
                                </div>
                                <div class="flex justify-between">
                                    <div class="">
                                        <i class="fas fa-tachometer-alt text-sm mr-1.5"></i>150k
                                    </div>
                                    <div class="">
                                        <i class="fas fa-paper-plane text-sm mr-1.5"></i>Manual
                                    </div>
                                    <div class="">
                                        <i class="fas fa-gas-pump text-sm mr-1.5"></i>Diesel
                                    </div>
                                </div>
                                <div class="">
                                    <a href="#" class="bg-blue-400 text-white block text-center py-1.5 rounded-sm">
                                        Rent Now
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="group transform scale-95 transition-transform duration-300 hover:scale-100 w-full bg-gray-100 overflow-hidden hover:shadow-md cursor-pointer">
                            <div class="w-44 mx-auto">
                                <img class="object-cover" src="{{ asset('images/car.png') }}" alt="">
                            </div>
                            <div class="p-3 space-y-1.5">
                                <span class="px-6 rounded py-[1px] text-sm border border-blue-400">2021</span>
                                <a href="#" class="block text-xl font-semibold">
                                    Marcedeze Benz
                                </a>
                                <div class="flex space-x-3 text-lg font-bold">
                                    <div class="text-blue-400">
                                        $450 <sup class="text-sm font-semibold">/M</sup>
                                    </div>
                                    <div class="">|</div>
                                    <div class="">
                                        $20<sub class="text-sm font-semibold">/D</sub>
                                    </div>
                                </div>
                                <div class="flex justify-between">
                                    <div class="">
                                        <i class="fas fa-tachometer-alt text-sm mr-1.5"></i>150k
                                    </div>
                                    <div class="">
                                        <i class="fas fa-paper-plane text-sm mr-1.5"></i>Manual
                                    </div>
                                    <div class="">
                                        <i class="fas fa-gas-pump text-sm mr-1.5"></i>Diesel
                                    </div>
                                </div>
                                <div class="">
                                    <a href="#" class="bg-blue-400 text-white block text-center py-1.5 rounded-sm">
                                        Rent Now
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="group transform scale-95 transition-transform duration-300 hover:scale-100 w-full bg-gray-100 overflow-hidden hover:shadow-md cursor-pointer">
                            <div class="w-44 mx-auto">
                                <img class="object-cover" src="{{ asset('images/car.png') }}" alt="">
                            </div>
                            <div class="p-3 space-y-1.5">
                                <span class="px-6 rounded py-[1px] text-sm border border-blue-400">2021</span>
                                <a href="#" class="block text-xl font-semibold">
                                    Marcedeze Benz
                                </a>
                                <div class="flex space-x-3 text-lg font-bold">
                                    <div class="text-blue-400">
                                        $450 <sup class="text-sm font-semibold">/M</sup>
                                    </div>
                                    <div class="">|</div>
                                    <div class="">
                                        $20<sub class="text-sm font-semibold">/D</sub>
                                    </div>
                                </div>
                                <div class="flex justify-between">
                                    <div class="">
                                        <i class="fas fa-tachometer-alt text-sm mr-1.5"></i>150k
                                    </div>
                                    <div class="">
                                        <i class="fas fa-paper-plane text-sm mr-1.5"></i>Manual
                                    </div>
                                    <div class="">
                                        <i class="fas fa-gas-pump text-sm mr-1.5"></i>Diesel
                                    </div>
                                </div>
                                <div class="">
                                    <a href="#" class="bg-blue-400 text-white block text-center py-1.5 rounded-sm">
                                        Rent Now
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="group transform scale-95 transition-transform duration-300 hover:scale-100 w-full bg-gray-100 overflow-hidden hover:shadow-md cursor-pointer">
                            <div class="w-44 mx-auto">
                                <img class="object-cover" src="{{ asset('images/car.png') }}" alt="">
                            </div>
                            <div class="p-3 space-y-1.5">
                                <span class="px-6 rounded py-[1px] text-sm border border-blue-400">2021</span>
                                <a href="#" class="block text-xl font-semibold">
                                    Marcedeze Benz
                                </a>
                                <div class="flex space-x-3 text-lg font-bold">
                                    <div class="text-blue-400">
                                        $450 <sup class="text-sm font-semibold">/M</sup>
                                    </div>
                                    <div class="">|</div>
                                    <div class="">
                                        $20<sub class="text-sm font-semibold">/D</sub>
                                    </div>
                                </div>
                                <div class="flex justify-between">
                                    <div class="">
                                        <i class="fas fa-tachometer-alt text-sm mr-1.5"></i>150k
                                    </div>
                                    <div class="">
                                        <i class="fas fa-paper-plane text-sm mr-1.5"></i>Manual
                                    </div>
                                    <div class="">
                                        <i class="fas fa-gas-pump text-sm mr-1.5"></i>Diesel
                                    </div>
                                </div>
                                <div class="">
                                    <a href="#" class="bg-blue-400 text-white block text-center py-1.5 rounded-sm">
                                        Rent Now
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="group transform scale-95 transition-transform duration-300 hover:scale-100 w-full bg-gray-100 overflow-hidden hover:shadow-md cursor-pointer">
                            <div class="w-44 mx-auto">
                                <img class="object-cover" src="{{ asset('images/car.png') }}" alt="">
                            </div>
                            <div class="p-3 space-y-1.5">
                                <span class="px-6 rounded py-[1px] text-sm border border-blue-400">2021</span>
                                <a href="#" class="block text-xl font-semibold">
                                    Marcedeze Benz
                                </a>
                                <div class="flex space-x-3 text-lg font-bold">
                                    <div class="text-blue-400">
                                        $450 <sup class="text-sm font-semibold">/M</sup>
                                    </div>
                                    <div class="">|</div>
                                    <div class="">
                                        $20<sub class="text-sm font-semibold">/D</sub>
                                    </div>
                                </div>
                                <div class="flex justify-between">
                                    <div class="">
                                        <i class="fas fa-tachometer-alt text-sm mr-1.5"></i>150k
                                    </div>
                                    <div class="">
                                        <i class="fas fa-paper-plane text-sm mr-1.5"></i>Manual
                                    </div>
                                    <div class="">
                                        <i class="fas fa-gas-pump text-sm mr-1.5"></i>Diesel
                                    </div>
                                </div>
                                <div class="">
                                    <a href="#" class="bg-blue-400 text-white block text-center py-1.5 rounded-sm">
                                        Rent Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection