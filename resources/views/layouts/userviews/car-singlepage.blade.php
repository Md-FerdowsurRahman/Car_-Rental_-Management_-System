@extends('layouts.user')
@section('content')
<div class="bg-gray-200">
    <img class="w-full mx-auto h-[450px] object-contain" src="{{ asset('images/'.'/'.$car->image) }}" alt="{{ $car->name }}">
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
        <!-- reserve -->
        <div class=" w-full ">
            <div class="relative mb-4 ">
                <label for="pick-up" class="leading-7 text-sm text-gray-600">Pick-Up Address</label>
                <select class="w-full bg-white rounded border border-gray-300 focus:border-blue-400 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    <option class="py-1">Select Location</option>

                </select>
            </div>

            <div class="relative mb-4">
                <label for="Pickup Date and Time" class="leading-7 text-sm text-gray-600">Pickup Date and
                    Time</label>
                <input type="datetime-local" class="w-full bg-white rounded border border-gray-300 focus:border-blue-400 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4 ">
                <label for="pick-up" class="leading-7 text-sm text-gray-600">Drop Address</label>
                <select class="w-full bg-white rounded border border-gray-300 focus:border-blue-400 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    <option class="py-1">Select Location</option>

                </select>
            </div>
            <div class="relative mb-4">
                <label for="Pickup Date and Time" class="leading-7 text-sm text-gray-600">Drop Date and Time</label>
                <input type="datetime-local" class="w-full bg-white rounded border border-gray-300 focus:border-blue-400 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="my-4 w-full border-2 px-4 py-5 bg-gray-100">
                <div class="">
                    <p>Total Days Count : 0 days</p>
                </div>
                <div class="">
                    <div class="">
                        <div class="flex justify-between">
                            <h2>Amount To pay</h2>
                            <h2>$0</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="min-w-screen min-h-screen bg-gray-200 flex items-center justify-center px-5 pb-10 pt-16">
                <div class="w-full mx-auto rounded-lg bg-white shadow-lg p-5 text-gray-700" style="max-width: 600px">
                    <div class="w-full pt-1 pb-5">
                        <div class="bg-indigo-500 text-white overflow-hidden rounded-full w-20 h-20 -mt-16 mx-auto shadow-lg flex justify-center items-center">
                            <i class="mdi mdi-credit-card-outline text-3xl"></i>
                        </div>
                    </div>
                    <div class="mb-10">
                        <h1 class="text-center font-bold text-xl uppercase">Secure payment info</h1>
                    </div>
                    <div class="mb-3 flex -mx-2">
                        <div class="px-2">
                            <label for="type1" class="flex items-center cursor-pointer">
                                <input type="radio" class="form-radio h-5 w-5 text-indigo-500" name="type" id="type1" checked>
                                <img src="https://leadershipmemphis.org/wp-content/uploads/2020/08/780370.png" class="h-8 ml-3">
                            </label>
                        </div>
                        <div class="px-2">
                            <label for="type2" class="flex items-center cursor-pointer">
                                <input type="radio" class="form-radio h-5 w-5 text-indigo-500" name="type" id="type2">
                                <img src="https://www.sketchappsources.com/resources/source-image/PayPalCard.png" class="h-8 ml-3">
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="font-bold text-sm mb-2 ml-1">Name on card</label>
                        <div>
                            <input class="w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors" placeholder="Ferdows" type="text" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="font-bold text-sm mb-2 ml-1">Card number</label>
                        <div>
                            <input class="w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors" placeholder="0000 0000 0000 0000" type="text" />
                        </div>
                    </div>
                    <div class="mb-3 -mx-2 flex items-end">
                        <div class="px-2 w-1/2">
                            <label class="font-bold text-sm mb-2 ml-1">Expiration date</label>
                            <div>
                                <select class="form-select w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors cursor-pointer">
                                    <option value="01">01 - January</option>
                                    <option value="02">02 - February</option>
                                    <option value="03">03 - March</option>
                                    <option value="04">04 - April</option>
                                    <option value="05">05 - May</option>
                                    <option value="06">06 - June</option>
                                    <option value="07">07 - July</option>
                                    <option value="08">08 - August</option>
                                    <option value="09">09 - September</option>
                                    <option value="10">10 - October</option>
                                    <option value="11">11 - November</option>
                                    <option value="12">12 - December</option>
                                </select>
                            </div>
                        </div>
                        <div class="px-2 w-1/2">
                            <select class="form-select w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors cursor-pointer">
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                                <option value="2027">2027</option>
                                <option value="2028">2028</option>
                                <option value="2029">2029</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-10">
                        <label class="font-bold text-sm mb-2 ml-1">Security code</label>
                        <div>
                            <input class="w-32 px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors" placeholder="000" type="text" />
                        </div>
                    </div>
                    <div>
                        <button class="block w-full max-w-xs mx-auto bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold"><i class="mdi mdi-lock-outline mr-1"></i> Request for Reservation</button>
                    </div>
                </div>
            </div>

            <!-- BUY ME A BEER AND HELP SUPPORT OPEN-SOURCE RESOURCES -->
            <div class="flex items-end justify-end fixed bottom-0 right-0 mb-4 mr-4 z-10">

            </div>
        </div>
    </div>
</div>
@endsection