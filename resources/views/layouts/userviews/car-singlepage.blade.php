@extends('layouts.user')
@section('content')
<div class="bg-gray-200 relative">
    <img class="w-full mx-auto h-[450px] object-contain" src="{{ asset('images/'.'/'.$car->car_image_single_page_view) }}" alt="{{ $car->name }}">
    <div class="absolute right-0 transform -translate-x-12 translate-y-10 bottom-0">
        <div class="p-4 bg-gray-100 w-36 h-36 rounded-b-lg border flex justify-center items-center">
            <div class="text-6xl text-slate-600 font-extrabold">${{ $car->rent_amount }}</div>
        </div>
    </div>
</div>
<div class="w-full my-5 max-w-7xl mx-auto ">
    <div class="grid grid-cols-2 gap-x-4">
        <div class=" pr-2">
            <div class="text-4xl font-bold text-slate-700 uppercase">{{ $car->name }}</div>
            @livewire('review-count-section',['car'=> $car])
            <div class="border-t border-b pt-4 pb-5 my-4">
                <div class="flex items-center justify-between px-2">
                    <div class="flex items-center space-x-3">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-slate-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <div class="">{{ $car->passengers }}
                            <span>Passengers</span>
                        </div>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-slate-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                        </div>
                        <div class="">{{ $car->luggage }}
                            <span>Luggages</span>
                        </div>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-slate-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                            </svg>
                        </div>
                        <div class="">
                            <span>{{ $car->transmission }}</span>
                        </div>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-slate-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="">{{ $car->doors }}
                            <span>Doors</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-slate-600 text-justify border-b pb-4">
                {{$car->car_details}}
            </div>
            <livewire:review-section :car="$car" />
            
        </div>
        @livewire('payment-section',['car'=> $car])
        <!-- reserve -->
        
    </div>
</div>
@endsection