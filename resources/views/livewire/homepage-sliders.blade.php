<div class="bg-gray-200">
    <div class="swiper relative group">
        <div class="swiper-wrapper">
            <!-- Slides -->
            @foreach ($sliders as $slider)
            <div class="swiper-slide">
                <!-- Slider Contents -->
                <div class="grid grid-cols-12 gap-x-3 max-h-[500px] 2xl:max-h-[900px] overflow-hidden mt-1.5">
                    <div class="w-full h-auto col-span-2"></div>
                    <!-- Slider Left Side Icon -->
                    <div class="w-full h-auto col-span-2 flex items-center">
                        <div class="space-y-3">
                            <div class="flex items-center space-x-2">
                                <!-- Icon Box -->
                                <div class="w-10 h-10 bg-white flex items-center justify-center rounded-md border shadow">
                                    <i class="fas fa-car text-blue-400"></i>
                                </div>
                                <p class="font-semibold">Doors : <span>{{$slider->car->doors}}</span></p>
                            </div>
                            <div class="flex items-center space-x-2">
                                <!-- Icon Box -->
                                <div class="w-10 h-10 bg-white flex items-center justify-center rounded-md border shadow">
                                    <i class="fas fa-users text text-blue-400"></i>
                                </div>
                                <p class="font-semibold">Passenger : <span>{{$slider->car->passengers}}</span></p>
                            </div>
                            <div class="flex items-center space-x-2">
                                <!-- Icon Box -->
                                <div class="w-10 h-10 bg-white flex items-center justify-center rounded-md border shadow">
                                    <i class="fas fa-suitcase-rolling text-blue-400"></i>
                                </div>
                                <p class="font-semibold">Luggage : <span>{{$slider->car->luggage}}</span></p>
                            </div>
                            <div class="flex items-center space-x-2">
                                <!-- Icon Box -->
                                <div class="w-10 h-10 bg-white flex items-center justify-center rounded-md border shadow">
                                    <i class="fas fa-thermometer-three-quarters text-blue-400"></i>
                                </div>
                                <p class="font-semibold">Air Conditioning : <span>{{$slider->car->air_condition_status}}</span></p>
                            </div>
                        </div>
                    </div>
                    <!-- Middle/ Image -->
                    <div class="w-full h-auto col-span-4">
                        <div class="space-y-1.5">
                            <div class="uppercase">
                                <span class="text-xs font-semibold text-white px-3 py-1 bg-blue-400">{{$slider->car->class_of_car}}</span>
                            </div>
                            <h2 class="text-3xl font-extrabold text-gray-800">{{ $slider->car->name }}</h2>
                            <div class="h-2 w-1/4 bg-blue-400 rounded"></div>
                            <p class="text-gray-500">
                                {{$slider->slider_text}}
                            </p>
                        </div>
                        <div class="">
                            <img class="object-cover w-full h-auto" src="{{$slider->slider_image_path? asset('/cars/'.$slider->slider_image_path) : asset('userFiles/assets/img/3-2-car-free-download-png.png')}}" alt="Car Name">
                        </div>
                    </div>


                    <!-- Slider Right Side Icon -->
                    <div class="w-full h-auto col-span-2 flex items-center">
                        <div class="space-y-3">
                            <div class="flex items-center space-x-2">
                                <!-- Icon Box -->
                                <div class="w-10 h-10 bg-white flex items-center justify-center rounded-md border shadow">
                                    <i class="fas fa-paper-plane text-blue-400"></i>
                                </div>
                                <p class="font-semibold">Transmission : <span>{{ $slider->car->transmission }}</span></p>
                            </div>
                            <div class="flex items-center space-x-2">
                                <!-- Icon Box -->
                                <div class="w-10 h-10 bg-white flex items-center justify-center rounded-md border shadow">
                                    <i class="fas fa-user text-blue-400"></i>
                                </div>
                                <p class="font-semibold">Minimum Age : <span>{{ $slider->car->min_age_to_take_rent }}</span></p>
                            </div>
                            <div class="flex items-center space-x-2">
                                <!-- Icon Box -->
                                <div class="w-10 h-10 bg-white flex items-center justify-center rounded-md border shadow">
                                    <i class="fas fa-gas-pump text-blue-400"></i>
                                </div>
                                <p class="font-semibold">Energy : <span>{{ $slider->car->energy }}</span></p>
                            </div>
                            <div class="space-y-3 ml-14">
                                <div class=""><span class="text-2xl font-extrabold">${{ $slider->car->rent_amount }}</span> <sup class="text-sm font-bold">/ Day</sup></div>
                                <div class="">
                                    <a href="#" class="bg-blue-500 hover:bg-blue-600  text-white px-6 inline-block py-1.5 rounded-sm shadow">Reserve
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full h-auto col-span-2"></div>
                </div>
            </div>
            @endforeach
        </div>
        <button class="z-40 home-slider-prev absolute top-1/2 left-8 cursor-pointer -translate-x-10 opacity-0 group-hover:opacity-100 group-hover:translate-x-0 transition-transform duration-1000">
            <div class="w-10 h-10 flex items-center justify-center rounded-full border shadow bg-gray-50 hover:bg-gray-800 hover:text-gray-50">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </div>
        </button>
        <button class="z-40 home-slider-next absolute top-1/2 cursor-pointer right-8 translate-x-10 opacity-0 group-hover:translate-x-0 group-hover:opacity-100 transition-transform duration-1000">
            <div class="w-10 h-10 flex items-center justify-center rounded-full border shadow bg-gray-50 hover:bg-gray-800 hover:text-gray-50">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </div>
        </button>
    </div>

</div>