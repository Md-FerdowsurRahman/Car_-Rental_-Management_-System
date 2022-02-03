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
                                <a href="{{ route('car.single',$car->slug) }}" class="block text-xl font-semibold">
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
                                    <a href="{{ route('car.single',$car->slug) }}" class="bg-blue-400 text-white block text-center py-1.5 rounded-sm">
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