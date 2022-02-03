{{--
<div class="mt-2 p-3 pb-2">
    <div class="container">
        <h5 class="text-center working-steps text-gray-manual">See the collection</h5>
        <h3 class="text-center working-steps services-text-main">Our all time hit brands</h3>
        <div class="row">
            <div class="col">
                <div>
                    <ul class="nav nav-tabs justify-content-center mt-3" role="tablist">
                        @foreach($brands as $brand)
                        <li class="nav-item" role="presentation">
                            <a class="nav-link @if($loop->first) active @endif cars-tab-items cars-tab-brands-not-active cars-tabs-brands-general mt-3 mt-md-0"
                               role="tab" data-toggle="tab" href="{{"#".$brand->slug}}">
<span>
    <img class="tab-logo-image logo-black" src="{{url('/brands/'.$brand->brand_dark_image_path)}}">
    <img class="tab-logo-image logo-white" src="{{url('/brands/'.$brand->brand_light_image_path)}}">
</span>{{$brand->name}}</a>
</li>
@endforeach
</ul>
<div class="tab-content">
    @foreach($brands as $brand)
    <div class="tab-pane @if($loop->first) active @endif" role="tabpanel" id="{{$brand->slug}}">
        @if($brand->cars->count()>0)
        <p><a class="float-right view-all-car" href="#">View All Cars from {{$brand->name}}</a></p><br>
        @endif
        <div class="mt-3">
            <div class="row">
                @if($brand->cars->count()>0)

                @foreach($brand->cars as $car)

                <div class="col col-6 col-md-3 p-2">
                    <div class="card tab-car-card p-1">
                        <div class="m-auto p-3" style="background: #eeeff1;">
                            <img class="m-auto img-fluid" src="{{url('/cars/'.$car->car_photo_path)}}">
                        </div>
                        <div class="mt-1 mt-md-3">
                            <p><span class="tab-car-year-text mb-2">2020</span><a class="m-0 mt-2" href="#">
                                    <h5 class="tab-car-name">{{$car->name}}</h5>
                                </a></p>
                            <p class="m-0 tab-payment"><span class="tab-car-price-month float-left">
                                    <span class="tab-car-price">${{$car->rent_amount*30 - 150}}</span>
                                    <sup class="tab-car-sup">/M</sup></span><span class="tab-price-divider text-center">|</span>
                                <span class="tab-car-price-day"><span class="tab-car-price">${{$car->rent_amount}}</span><sup class="tab-car-sup">/D</sup></span>
                            </p>
                        </div>
                        <hr class="m-0 p-0 tab-car-card-hr">
                        <div class="mt-1">
                            <p><span>
                                    <span class="tab-car-text-span"><i class="fa fa-tachometer tab-car-icon"></i>
                                        <span class="tab-car-text">{{$car->highest_speed}}k</span>
                                    </span>

                                    <span class="tab-car-text-span"><i class="fa fa-paper-plane tab-car-icon"></i>
                                        <span class="tab-car-text">{{$car->transmission}}</span>
                                    </span>
                                    <span class="tab-car-text-span"><i class="fas fa-gas-pump tab-car-icon"></i>
                                        <span class="tab-car-text">{{$car->energy}}</span>
                                    </span>
                                </span>
                            </p>
                            <a href="{{route('car.single', ['slug' => $car->slug])}}" class="btn btn-block tab-car-card-rent-btn m-0">
                                Rent Now
                            </a>
                        </div>
                    </div>
                </div>

                @endforeach

                @else
                <h4 class=" m-auto pt-3">No car found for the Brand {{$brand->name}}</h4><br>
                @endif

            </div>
        </div>
    </div>
    @endforeach
</div>
</div>
</div>
</div>
</div>
</div>
--}}
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
                @foreach ($brands as $brand)
                <li class="-mb-px mr-1">
                    <a @click.prevent="openTab = {{ $brand->id }}" class="inline-block rounded-t py-2 px-4 font-semibold" :class="{'bg-blue-400 hover:bg-blue-600 rounded-md text-white':openTab=={{ $brand->id }}}" href="#">{{$brand->name}}</a>
                </li>
                @endforeach
            </ul>
            <div class="w-full pt-4">
                @foreach ($brands as $brand)
                <div x-show="openTab == {{ $brand->id }}">
                    <div class="border border-gray-300 px-6 py-3 grid grid-cols-4 gap-3">
                        @if ($brand->cars->count()>0)
                        @foreach ($brand->cars as $car)
                        <div class="group transform scale-95 transition-transform duration-300 hover:scale-100 w-full bg-gray-100 overflow-hidden hover:shadow-md cursor-pointer">
                            <div class="w-44 mx-auto">
                                <img class="object-cover" src="{{ asset('images/').'/'.$car->car_photo_path??'' }}" alt="">
                            </div>
                            <div class="p-3 space-y-1.5">
                                <span class="px-6 rounded py-[1px] text-sm border border-blue-400">{{ $car->model_release }}</span>
                                <a href="#" class="block text-xl font-semibold">
                                    {{ $car->name }}
                                </a>
                                <div class="flex space-x-3 text-lg font-bold">
                                    <div class="text-blue-400">
                                        ${{ $car->rent_amount*30-10 }} <sup class="text-sm font-semibold">/M</sup>
                                    </div>
                                    <div class="">|</div>
                                    <div class="">
                                        ${{ $car->rent_amount }}<sub class="text-sm font-semibold">/D</sub>
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
                        @endforeach
                        @else
                        <div class="flex items-center justify-center w-full">
                            <div class="text-slate-500 tracking-wider text-center mx-auto">There is no car from this brand.</div>
                        </div>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>