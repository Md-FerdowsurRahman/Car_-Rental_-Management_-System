<div class="">
    <div class="text-2xl font-semibold text-slate-700 mt-3 mb-4">
        All Reviews
    </div>
    <div class="space-y-4">
        @foreach($reviews as $review)
        <div class="flex space-x-2">
            <div class="">
                <img class="h-12 w-12 rounded-full border" src="{{ $review->user->profile_photo_url }}" alt="">
            </div>
            <div class="w-full">
                <div class="flex items-center justify-between pr-8">
                    <div class="text-lg font-bold text-slate-600">{{ $review->user->name }}</div>
                    <div class="flex items-center">
                        Rating: {{ $review->review_point }}
                        <span class="ml-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="text-sm text-slate-400">
                    Shared Publicly On {{$review->created_at->format('D d M Y \a\t h:i A')}}
                </div>
                <div class="text-slate-600 pr-4 text-justify">
                    {{ $review->review_text }}
                </div>
            </div>
        </div>
        @endforeach.
        @auth
        <div class="flex space-x-2">
            <div class="">
                <img class="h-12 w-12 rounded-full border" src="{{ asset('/images/boy.png') }}" alt="">
            </div>
            <div class="w-full">
                <form wire:submit.prevent="addReview" action="" type="POST">
                    <textarea wire:model.defer="review_text" name="" id="" cols="30" rows="4" class="block w-full px-3 py-2.5 border border-gray-200 dark:border-gray-600 rounded-2xl text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-gray-200 focus:ring-0 focus:ring-gray-200 text-slate-600 dark:text-slate-300 bg-transparent"></textarea>
                    <div class="flex justify-between mt-2">
                        <div wire:model.defer="review_value" class="flex space-x-4">
                            <div class="">
                                <input type="radio" id="{{ $var1 = rand() }}" value="1" name="review" id="one">
                                <label for="one">1</label>
                            </div>
                            <div class="">
                                <input type="radio" id="{{ $var1 = rand() }}" value="2" name="review" id="two">
                                <label for="two">2</label>
                            </div>
                            <div class="">
                                <input type="radio" id="{{ $var1 = rand() }}" value="3" name="review" id="three">
                                <label for="three">3</label>
                            </div>
                            <div class="">
                                <input type="radio" id="{{ $var1 = rand() }}" value="4" name="review" id="four">
                                <label for="four">4</label>
                            </div>
                            <div class="">
                                <input type="radio" id="{{ $var1 = rand() }}" value="5" name="review" id="five">
                                <label for="five">5</label>
                            </div>
                        </div>
                        <button type="submit" class=" text-right lg:mt-2 xl:mt-0 text-white bg-blue-400 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded">Post Review</button>
                    </div>
                </form>
            </div>
        </div>
        @else
        <div class="flex space-x-2">
            <div class="">
                <img class="h-12 w-12 rounded-full border" src="{{ asset('/images/boy.png') }}" alt="">
            </div>
            <div class="w-full">

                <textarea name="" id="" cols="30" rows="4" class="block w-full px-3 py-2.5 border border-gray-200 dark:border-gray-600 rounded-2xl text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-gray-200 focus:ring-0 focus:ring-gray-200 text-slate-600 dark:text-slate-300 bg-transparent"></textarea>
                <div class="flex justify-between mt-2">
                    <div class="flex space-x-4">
                        <div class="">
                            <input type="radio" value="1" name="review" id="one">
                            <label for="one">1</label>
                        </div>
                        <div class="">
                            <input type="radio" value="2" name="review" id="two">
                            <label for="two">2</label>
                        </div>
                        <div class="">
                            <input type="radio" value="3" name="review" id="three">
                            <label for="three">3</label>
                        </div>
                        <div class="">
                            <input type="radio" value="4" name="review" id="four">
                            <label for="four">4</label>
                        </div>
                        <div class="">
                            <input type="radio" value="5" name="review" id="five">
                            <label for="five">5</label>
                        </div>
                    </div>
                    <button type="button" class=" text-right lg:mt-2 xl:mt-0 text-white bg-blue-400 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded">Please Login To post Review</button>
                </div>
            </div>
        </div>
        @endauth
    </div>
</div>