@extends('layouts.user')
@section('content')
<div class="space-y-5 mt-4 ">
        <div class="text-center">
            <p class="text-gray-500 font-semibold tracking-widest">See the cars
            </p>
            <h2 class="font-bold text-3xl text-gray-800">Our all time hit cars
            </h2>
        </div>
        <div class="w-full max-w-6xl mx-auto">
            <div x-data="{ openTab: 1 }" class="p-6">
                <ul class="flex justify-center space-x-5 ">
                    <li class="-mb-px mr-1">
                        <a @click.prevent="openTab = 1" class="inline-block rounded-t py-2 px-4 font-semibold"
                            :class="{'bg-blue-400 hover:bg-blue-600 rounded-md text-white':openTab==1}" href="#">Range
                            Rover</a>
                    </li>
                    <li class="-mb-px mr-1">
                        <a @click.prevent="openTab = 2" class="inline-block rounded-t py-2 px-4 font-semibold"
                            :class="{'bg-blue-400 hover:bg-blue-600 rounded-md text-white':openTab==2}"
                            href="#">Audi</a>
                    </li>
                    <li class="-mb-px mr-1">
                        <a @click.prevent="openTab = 3" class=" inline-block rounded-t py-2 px-4 font-semibold"
                            :class="{'bg-blue-400 hover:bg-blue-600 rounded-md text-white':openTab==3}"
                            href="#">Nissan</a>
                    </li>


                </ul>
                <div class="w-full pt-4">
                    <div x-show="openTab == 1">
                        <div class="border border-gray-300 px-6 py-3 grid grid-cols-4 gap-3">
                            <div
                                class="group transform scale-95 transition-transform duration-300 hover:scale-100 w-full bg-gray-100 overflow-hidden hover:shadow-md cursor-pointer">
                                <div class="w-50 mx-auto">
                                    <img class="object-cover" src="images/jeep.png" alt="">
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
                            <div
                                class="group transform scale-95 transition-transform duration-300 hover:scale-100 w-full bg-gray-100 overflow-hidden hover:shadow-md cursor-pointer">
                                <div class="w-50 mx-auto">
                                    <img class="object-cover" src="images/jeep.png" alt="">
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
                            <div
                                class="group transform scale-95 transition-transform duration-300 hover:scale-100 w-full bg-gray-100 overflow-hidden hover:shadow-md cursor-pointer">
                                <div class="w-50 mx-auto">
                                    <img class="object-cover" src="images/jeep.png" alt="">
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
                            <div
                                class="group transform scale-95 transition-transform duration-300 hover:scale-100 w-full bg-gray-100 overflow-hidden hover:shadow-md cursor-pointer">
                                <div class="w-50 mx-auto">
                                    <img class="object-cover" src="images/jeep.png" alt="">
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
                            <div
                                class="group transform scale-95 transition-transform duration-300 hover:scale-100 w-full bg-gray-100 overflow-hidden hover:shadow-md cursor-pointer">
                                <div class="w-50 mx-auto">
                                    <img class="object-cover" src="images/land rover.png" alt="">
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
                            <div
                                class="group transform scale-95 transition-transform duration-300 hover:scale-100 w-full bg-gray-100 overflow-hidden hover:shadow-md cursor-pointer">
                                <div class="w-50 mx-auto">
                                    <img class="object-cover" src="images/land rover.png" alt="">
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
                            <div
                                class="group transform scale-95 transition-transform duration-300 hover:scale-100 w-full bg-gray-100 overflow-hidden hover:shadow-md cursor-pointer">
                                <div class="w-50 mx-auto">
                                    <img class="object-cover" src="images/land rover.png" alt="">
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
                            <div
                                class="group transform scale-95 transition-transform duration-300 hover:scale-100 w-full bg-gray-100 overflow-hidden hover:shadow-md cursor-pointer">
                                <div class="w-50 mx-auto">
                                    <img class="object-cover" src="images/land rover.png" alt="">
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
                        <div class="border border-gray-300 px-6 py-3 grid grid-cols-4 gap-3">
                            <div
                                class="group transform scale-95 transition-transform duration-300 hover:scale-100 w-full bg-gray-100 overflow-hidden hover:shadow-md cursor-pointer">
                                <div class="w-full mx-auto">
                                    <img class="object-cover" src="images/bmw.jpg" alt="">
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
                            <div
                                class="group transform scale-95 transition-transform duration-300 hover:scale-100 w-full bg-gray-100 overflow-hidden hover:shadow-md cursor-pointer">
                                <div class="w-full mx-auto">
                                    <img class="object-cover" src="images/bmw.jpg" alt="">
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
                            <div
                                class="group transform scale-95 transition-transform duration-300 hover:scale-100 w-full bg-gray-100 overflow-hidden hover:shadow-md cursor-pointer">
                                <div class="w-full mx-auto">
                                    <img class="object-cover" src="images/bmw.jpg" alt="">
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
                            <div
                                class="group transform scale-95 transition-transform duration-300 hover:scale-100 w-full bg-gray-100 overflow-hidden hover:shadow-md cursor-pointer">
                                <div class="w-full mx-auto">
                                    <img class="object-cover" src="images/bmw.jpg" alt="">
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
                            <div
                                class="group transform scale-95 transition-transform duration-300 hover:scale-100 w-full bg-gray-100 overflow-hidden hover:shadow-md cursor-pointer">
                                <div class="w-full mx-auto">
                                    <img class="object-cover" src="images/audi.png" alt="">
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
                            <div
                                class="group transform scale-95 transition-transform duration-300 hover:scale-100 w-full bg-gray-100 overflow-hidden hover:shadow-md cursor-pointer">
                                <div class="w-full mx-auto">
                                    <img class="object-cover" src="images/audi.png" alt="">
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
                            <div
                                class="group transform scale-95 transition-transform duration-300 hover:scale-100 w-full bg-gray-100 overflow-hidden hover:shadow-md cursor-pointer">
                                <div class="w-full mx-auto">
                                    <img class="object-cover" src="images/audi.png" alt="">
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
                            <div
                                class="group transform scale-95 transition-transform duration-300 hover:scale-100 w-full bg-gray-100 overflow-hidden hover:shadow-md cursor-pointer">
                                <div class="w-full mx-auto">
                                    <img class="object-cover" src="images/audi.png" alt="">
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
                    <div x-show="openTab == 3">
                        <div class="border border-gray-300 px-6 py-3 grid grid-cols-4 gap-3">
                            <div
                                class="group transform scale-95 transition-transform duration-300 hover:scale-100 w-full bg-gray-100 overflow-hidden hover:shadow-md cursor-pointer">
                                <div class="w-full mx-auto">
                                    <img class="object-cover" src="images/lamborgini.png" alt="">
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
                            <div
                                class="group transform scale-95 transition-transform duration-300 hover:scale-100 w-full bg-gray-100 overflow-hidden hover:shadow-md cursor-pointer">
                                <div class="w-full mx-auto">
                                    <img class="object-cover" src="images/lamborgini.png" alt="">
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
                            <div
                                class="group transform scale-95 transition-transform duration-300 hover:scale-100 w-full bg-gray-100 overflow-hidden hover:shadow-md cursor-pointer">
                                <div class="w-full mx-auto">
                                    <img class="object-cover" src="images/lamborgini.png" alt="">
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
                            <div
                                class="group transform scale-95 transition-transform duration-300 hover:scale-100 w-full bg-gray-100 overflow-hidden hover:shadow-md cursor-pointer">
                                <div class="w-full mx-auto">
                                    <img class="object-cover" src="images/lamborgini.png" alt="">
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
                            <div
                                class="group transform scale-95 transition-transform duration-300 hover:scale-100 w-full bg-gray-100 overflow-hidden hover:shadow-md cursor-pointer">
                                <div class="w-full mx-auto">
                                    <img class="object-cover" src="images/tesla.png" alt="">
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
                            <div
                                class="group transform scale-95 transition-transform duration-300 hover:scale-100 w-full bg-gray-100 overflow-hidden hover:shadow-md cursor-pointer">
                                <div class="w-full mx-auto">
                                    <img class="object-cover" src="images/tesla.png" alt="">
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
                            <div
                                class="group transform scale-95 transition-transform duration-300 hover:scale-100 w-full bg-gray-100 overflow-hidden hover:shadow-md cursor-pointer">
                                <div class="w-full mx-auto">
                                    <img class="object-cover" src="images/tesla.png" alt="">
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
                            <div
                                class="group transform scale-95 transition-transform duration-300 hover:scale-100 w-full bg-gray-100 overflow-hidden hover:shadow-md cursor-pointer">
                                <div class="w-full mx-auto">
                                    <img class="object-cover" src="images/tesla.png" alt="">
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