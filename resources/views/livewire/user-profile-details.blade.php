<div class="text-center my-5">
    <h1 class="text-slate-800 text-3xl font-bold leading-normal mt-0 mb-2">{{ auth()->user()->name }}</h1>
    <div class="mt-0 mb-2 text-slate-600 font-medium gap-2">
        <div class="">
            <span class="undefined text-lg leading-none">Address :
            </span class="text-slate-300">{{ auth()->user()->address }}</span>
        </div>
        <div class="">
            <span class="undefined text-lg leading-none">Phone :
            </span class="text-slate-300">{{ auth()->user()->phone_number }}</span>
        </div>
        <div class="">
            <span class="undefined text-lg leading-none">Email :
            </span class="text-slate-300">{{ auth()->user()->email }}</span>
        </div>
    </div>
</div>