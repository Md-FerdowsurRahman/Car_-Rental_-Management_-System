{{-- <div class="col">
    <div class="mt-5 rent-form">
        <form wire:submit.prevent="NewRentRequest" action="" method="POST">
            @csrf
            @if (session('login-required'))
            <div class="alert alert-danger">
                {{ session('login-required') }}
</div>
@endif
<div class="form-row">
    <div class="col-sm-12">
        <div class="form-group"><label>Pickup Address</label>
            <select wire:model.lazy="rent_place_id" class="form-select form-control text-center">

                <option selected>Select a location</option>
                @foreach($rent_places as $rent_place)
                <option value="{{$rent_place->id}}">{{$rent_place->place_name}}</option>
                @endforeach
            </select>
            @error('rent_place_id')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
</div>
<div class="form-row">
    <div class="col-sm-12">
        <div class="form-group">
            <label>Pickup Date and time</label>
            <input wire:model.lazy="rent_date" class="form-control" type="datetime-local" name="pickup-time" min="today">
            @error('rent_date')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
</div>
<div class="form-row">
    <div class="col-sm-12">
        <div class="form-group"><label>Drop Address</label>
            <select wire:model.defer="return_place_id" class="form-select form-control text-center">
                <option selected>Select a location</option>

                @foreach($rent_places as $rent_place)
                <option value="{{$rent_place->id}}">{{$rent_place->place_name}}</option>
                @endforeach
            </select>
            @error('return_place_id')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
</div>
<div class="form-row">
    <div class="col-sm-12">
        <div class="form-group"><label>Drop Date and time</label>
            <input wire:model.lazy="return_date" class="form-control" type="datetime-local" name="drop-time" min="today">
            @error('return_date')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
</div>
<div class="form-row">
    <div class="col">
        <div class="card mb-2">
            <div class="card-header">
                <p>Total Days Count : {{$totalDays}} days</p>
                Amount To pay <h3 class="float-right">${{$amount_to_pay}}</h3>

            </div>
        </div>
        <div class="card credit-card-box">
            <div class="card-header">
                <h3>
                    <span class="panel-title-text">Payment Details </span>
                    <img class="img-fluid panel-title-image" src="{{asset('userFiles/assets/img/accepted_cards.png')}}">
                </h3>
            </div>
            <div class="card-body">
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="formCheck-1" name="payment">
                    <label class="form-check-label" for="formCheck-1">Cash During Rent Time</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="Pay_Online" name="payment">
                    <label class="form-check-label" for="Pay_Online">Pay Online</label>
                </div>
                <div>
                    <div class="form-row">
                        <div class="col-12">
                            <div class="form-group"><label for="cardNumber">Card number </label>
                                <div class="input-group"><input class="form-control" type="tel" required="" placeholder="Valid Card Number">
                                    <div class="input-group-append"><span class="input-group-text"><i class="fa fa-credit-card"></i></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-7">
                            <div class="form-group"><label for="cardExpiry"><span>expiration </span><span>EXP </span> date</label><input class="form-control" type="tel" required="" placeholder="MM / YY"></div>
                        </div>
                        <div class="col-5 pull-right">
                            <div class="form-group"><label for="cardCVC">cv code</label><input class="form-control" type="tel" id="cardCVC" required="" placeholder="CVC"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-12">
                            <div class="form-group"><label for="couponCode">coupon code</label><input class="form-control" type="text" id="couponCode"></div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<div class="form-row">
    <div class="col-sm-12">
        <div class="form-group">
            <input class="form-control btn btn-primary ml-0" type="submit" value="Request for Reservation" />
            <hr>
        </div>
        <div class="form-group"><a class="m-0 btn btn-info btn-block" href="#">Instant Reservation</a></div>
    </div>
</div>
</form>
</div>
</div> --}}

<div class=" w-full ">
    @guest
    <div class="my-4 w-full px-4 py-5 text-lg bg-red-300 border-red-300 border-2 shadow text-slate-600 text-center">
        Please Login Before Placing a Rent Request
    </div>
    @endguest
    <form wire:submit.prevent="NewRentRequest" method="POST">
        @csrf
        <div class="relative mb-4 ">
            <label for="pick-up" class="leading-7 text-sm text-gray-600">Pick-Up Address</label>
            <select wire:model.lazy="rent_place_id" class="w-full bg-white rounded border border-gray-300 focus:border-blue-400 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                <option class="py-1">Select Location</option>
                @foreach($rent_places as $rent_place)
                <option class="py-1" value="{{$rent_place->id}}">{{$rent_place->place_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="relative mb-4">
            <label for="Pickup Date and Time" class="leading-7 text-sm text-gray-600">Pickup Date and
                Time</label>
            <input wire:model.lazy="rent_date" type="datetime-local" min="today" class="w-full bg-white rounded border border-gray-300 focus:border-blue-400 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            @error('rent_date')
            <span class="text-red-400">{{ $message }}</span>
            @enderror
        </div>
        <div class="relative mb-4 ">
            <label for="pick-up" class="leading-7 text-sm text-gray-600">Drop Address</label>
            <select wire:model.lazy="return_place_id" class="w-full bg-white rounded border border-gray-300 focus:border-blue-400 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                <option class="py-1">Select Location</option>
                @foreach($rent_places as $rent_place)
                <option class="py-1" value="{{$rent_place->id}}">{{$rent_place->place_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="relative mb-4">
            <label for="Pickup Date and Time" class="leading-7 text-sm text-gray-600">Drop Date and Time</label>
            <input wire:model.lazy="return_date" type="datetime-local" min="today" class="w-full bg-white rounded border border-gray-300 focus:border-blue-400 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            @error('return_date')
            <span class="text-red-400">{{ $message }}</span>
            @enderror
        </div>
        <div class="my-4 w-full border-2 px-4 py-5 bg-gray-100">
            <div class="">
                <p>Total Days Count : {{$totalDays}} days</p>
            </div>
            <div class="">
                <div class="">
                    <div class="flex justify-between">
                        <h2>Amount To pay</h2>
                        <h2>${{ $amount_to_pay }}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div x-data="{payment:0}" class="flex items-center border justify-center px-5 pb-5">
            <div class="w-full mx-auto rounded-lg bg-white p-5 text-gray-700">
                <div class="pt-5 pb-8">
                    <h1 class="text-center font-bold text-xl uppercase">Secure payment System</h1>
                </div>
                <div class="">
                    <label for="cash" class="flex items-center cursor-pointer">
                        <input x-model="payment" value="0" type="radio" class="form-radio h-5 w-5 text-indigo-500" name="type" id="cash" checked>
                        <span class="ml-3">Cash On Delivery.</span>
                    </label>
                </div>
                <div class="my-2">
                    <label for="card" class="flex items-center cursor-pointer">
                        <input x-model="payment" value="1" type="radio" class="form-radio h-5 w-5 text-indigo-500" name="type" id="card">
                        <img src="https://leadershipmemphis.org/wp-content/uploads/2020/08/780370.png" class="h-8 ml-3">
                    </label>
                </div>
                <div x-show="payment==1" class="">
                    <div class="mb-3 flex -mx-2">
                        <div class="px-2">
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
                </div>

            </div>
        </div>
        @guest
        <div class="mt-4">
            <div class="cursor-not-allowed w-full block text-center mx-auto bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold">
                Please Login</div>
        </div>
        @else
        <div class="mt-4">
            <button class="w-full block mx-auto bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold" type="submit">
                Request for Reservation</button>
        </div>
        @endguest
    </form>
</div>