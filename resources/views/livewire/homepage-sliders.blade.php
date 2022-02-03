{{-- <div class="simple-slider mt-5">
    <div class="swiper-container">
        <div class="swiper-wrapper">

            @foreach($sliders as $slider)
                <div class="swiper-slide slide-container" style="background-image:url(https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500);">
                    <div class="container">
                        <div class="slider-main-div">
                            <div class="row slider-row">
                                <div class="col slider-left-column col-3 d-sm-none d-md-inline d-none">
                                    <div class="left-details-div car-slider-details">
                                        <div class="slider-left-item" style="font-size: 27px;font-family: 'Open Sans', sans-serif;"><i class="fa fa-car slider-car-details-icon s-i-doors"></i><span class="car-left-details">
                                            Doors :</span><span class="car-left-details">{{$slider->car->doors}}</span></div>
<div class="slider-left-item" style="font-size: 27px;font-family: 'Open Sans', sans-serif;"><i class="fas fa-users slider-car-details-icon s-i-passengers"></i><span class="car-left-details">
        Passengers&nbsp; :</span><span class="car-left-details">{{$slider->car->passengers}}</span></div>
<div class="slider-left-item" style="font-size: 27px;font-family: 'Open Sans', sans-serif;"><i class="fas fa-suitcase slider-car-details-icon"></i><span class="car-left-details">
        Luggage&nbsp; :</span><span class="car-left-details">{{$slider->car->luggage}}</span></div>
<div class="slider-left-item" style="font-size: 27px;font-family: 'Open Sans', sans-serif;"><i class="fa fa-thermometer slider-car-details-icon"></i><span class="car-left-details">
        Air Conditioning&nbsp; :</span><span class="car-left-details">{{$slider->car->air_condition_status}}</span></div>
</div>
</div>
<div class="col slider-center-column col-12 col-md-6 text-center text-md-left">
    <div class="car-name-div mt-4">
        <p class="car-quality-text text-center m-md-0"><span class="text-uppercase">{{$slider->car->class_of_car}}</span></p>
        <h1 class="car-title-slider p-0 font-weight-bold align-content-sm-center"><strong>{{$slider->car->name}}</strong><br></h1>
        <hr class="slider-hr m-md-0 mt-0 mb-0">
        <p class="car-slider-text-p mt-2 mb-2">{{$slider->slider_text}}</p>
    </div>
    <div class="slider-car-div">
        <img class="d-lg-flex justify-content-lg-end main-slider-car-image" src="{{$slider->slider_image_path?
                                                asset('/cars/'.$slider->slider_image_path) :
                                                asset('userFiles/assets/img/3-2-car-free-download-png.png')}}">
    </div>
</div>
<div class="col slider-right-column col-3 d-sm-none d-md-inline d-none">
    <div class="right-details-div car-slider-details">
        <div class="slider-left-item" style="font-size: 27px;font-family: 'Open Sans', sans-serif;"><i class="fa fa-paper-plane slider-car-details-icon"></i>
            <span class="car-left-details">Transmission&nbsp; :</span><span class="car-left-details">{{$slider->car->transmission}}</span>
        </div>
        <div class="slider-left-item" style="font-size: 27px;font-family: 'Open Sans', sans-serif;"><i class="fa fa-user slider-car-details-icon"></i>
            <span class="car-left-details">Minimum Age&nbsp; :</span><span class="car-left-details">{{$slider->car->min_age_to_take_rent}}</span>
        </div>
        <div class="slider-left-item" style="font-size: 27px;font-family: 'Open Sans', sans-serif;"><i class="fas fa-gas-pump slider-car-details-icon"></i>
            <span class="car-left-details">Energy :</span><span class="car-left-details">{{$slider->car->energy}}</span>
        </div>
    </div>
    <div>
        <div class="float-right reserve-btn mt-5">
            <h2 class="float-left amount-text mr-3">$ {{$slider->car->rent_amount}}<sup class="slider-day-text">&nbsp;/Day</sup></h2><a class="btn reserve-btn-text" data-toggle="modal" data-target="#product-modal">Reserve Now</a>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
@endforeach
</div>
<div class="swiper-pagination slider-pagination"></div>
<div class="swiper-button-prev slider-previous slider-control"></div>
<div class="swiper-button-next slider-next slider-control"></div>
</div>
</div> --}}
<div class="bg-gray-200">
    <div class="swiper relative group">
        <div class="swiper-wrapper">
            <!-- Slides -->
            @foreach ($sliders as $slide)
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
                                <p class="font-semibold">Transmission : <span>{{ $slider->car->transmission_mode }}</span></p>
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