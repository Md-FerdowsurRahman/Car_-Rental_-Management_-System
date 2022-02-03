<div>
    <form wire:submit.prevent="UpdaeUser" class="p-4" method="POST">
        @csrf
        <div class="grid grid-cols-3 gap-8 space-y-3">
            <div class=""></div>
            <div class="">
                <div class="space-y-2">
                    <label for="name" class="uppercase text-slate-500 dark:text-slate-400 text-sm tracking-wider font-semibold">Full Name</label>
                    <input wire:model="user.name" type="text" name="" id="name" class="block w-full px-3 py-2.5 border border-gray-200 dark:border-gray-600 rounded-2xl text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-gray-200 focus:ring-0 focus:ring-gray-200 text-slate-600 dark:text-slate-300 bg-transparent">
                    @error('user.name')
                    <span class="ml-4 text-xs font-semibold text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="space-y-2 mt-2">
                    <label for="phone" class="uppercase text-slate-500 dark:text-slate-400 text-sm tracking-wider font-semibold">Phone Number</label>
                    <input wire:model="user.phone_number" type="text" name="" id="phone" class="block w-full px-3 py-2.5 border border-gray-200 dark:border-gray-600 rounded-2xl text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-gray-200 focus:ring-0 focus:ring-gray-200 text-slate-600 dark:text-slate-300 bg-transparent">
                    @error('user.phone_number')
                    <span class="ml-4 text-xs font-semibold text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="space-y-2 mt-2">
                    <label for="phone" class="uppercase text-slate-500 dark:text-slate-400 text-sm tracking-wider font-semibold">Address</label>
                    <textarea wire:model="user.address" name="" id="" cols="30" rows="4" class="block w-full px-3 py-2.5 border border-gray-200 dark:border-gray-600 rounded-2xl text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-gray-200 focus:ring-0 focus:ring-gray-200 text-slate-600 dark:text-slate-300 bg-transparent"></textarea>
                    @error('user.phone_number')
                    <span class="ml-4 text-xs font-semibold text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mx-auto mt-4">
                    <button type="submit" class="w-full lg:mt-2 xl:mt-0 text-white bg-blue-400 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded">Update User Details</button>
                </div>
            </div>
            <div class=""></div>
        </div>

    </form>
</div>