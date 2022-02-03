@extends('layouts.user')
@section('content')
<section class="relative block h-[500px] bg-gray-300">
    <div class="bg-cover bg-center absolute top-0 w-full h-full" style="background-image: url('{{ asset('/images/audi.png') }}');">
    </div>
</section>
<section class="relative py-16 bg-gray-100">
    <div class="container max-w-7xl px-4 mx-auto">
        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-2xl -mt-64">
            <div class="px-6">
                <div class="flex flex-wrap justify-center">
                    <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">
                        <div class="relative">
                            <div class="w-40 -mt-20">
                                <img class="w-40 rounded-full" alt="Profile picture" src="{{ auth()->user()?->profile_photo_url }}" class="rounded-full shadow-lg max-w-full h-auto align-middle border-none undefined">
                            </div>
                        </div>
                    </div>
                </div>
                <livewire:user-profile-details />

                <div x-data="{ openTab: 3 }" class="p-6">
                    <ul class="flex justify-center space-x-5 ">
                        <li class="-mb-px mr-1">
                            <a @click.prevent="openTab = 1" class="inline-block rounded-t py-2 px-4 font-semibold" :class="{'bg-blue-400 hover:bg-blue-600 rounded-md text-white':openTab==1}" href="#">Current Rents</a>
                        </li>
                        <li class="-mb-px mr-1">
                            <a @click.prevent="openTab = 2" class="inline-block rounded-t py-2 px-4 font-semibold" :class="{'bg-blue-400 hover:bg-blue-600 rounded-md text-white':openTab==2}" href="#">All Rents</a>
                        </li>
                        <li class="-mb-px mr-1">
                            <a @click.prevent="openTab = 3" class="inline-block rounded-t py-2 px-4 font-semibold" :class="{'bg-blue-400 hover:bg-blue-600 rounded-md text-white':openTab==3}" href="#">Settings</a>
                        </li>
                    </ul>
                    <div class="w-full pt-4">
                        <div x-cloak x-show="openTab == 1">
                            <div class="border border-gray-300 px-6 py-3">
                                <div class="flex flex-col pt-4">
                                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                                <table class="min-w-full divide-y divide-gray-200">
                                                    <thead class="bg-gray-50">
                                                        <tr>
                                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                                #
                                                            </th>
                                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                                Tracking Id
                                                            </th>
                                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                                Recepient Details
                                                            </th>
                                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                                From Branch
                                                            </th>
                                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                                To Branch
                                                            </th>
                                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                                Status
                                                            </th>
                                                            <th scope="col" class="relative px-6 py-3">
                                                                <span class="sr-only">Action</span>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="bg-white divide-y divide-gray-200">


                                                        @foreach ($parcels=[0,1,2,3] as $parcel)
                                                        <tr>
                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                                {{ $loop->iteration }}
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                                asdfa
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                                <div class="flex items-center">
                                                                    <div class="flex-shrink-0 h-10 w-10">
                                                                        <img class="h-10 w-10 rounded-full" src="https://ui-avatars.com/api/?name=Jane+Cooper&color=7F9CF5&background=EBF4FF" alt="">
                                                                    </div>
                                                                    <div class="ml-4">
                                                                        <div class="text-sm font-medium text-gray-900">
                                                                            dsfsd
                                                                        </div>
                                                                        <div class="text-sm text-gray-500">
                                                                            dsfdsf
                                                                        </div>
                                                                        <div class="text-sm text-gray-500">
                                                                            Address : dsfdsf
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                                sdfdsf
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                                dsfdsf
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full text-green-800">
                                                                    dsfdsf
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        @endforeach


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-cloak x-show="openTab == 2">
                            <div class="border border-gray-300 px-6 py-3">
                                <div class="flex flex-col pt-4">
                                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                                <table class="min-w-full divide-y divide-gray-200">
                                                    <thead class="bg-gray-50">
                                                        <tr>
                                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                                #
                                                            </th>
                                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                                Tracking Id
                                                            </th>
                                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                                Recepient Details
                                                            </th>
                                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                                From Branch
                                                            </th>
                                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                                To Branch
                                                            </th>
                                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                                Status
                                                            </th>
                                                            <th scope="col" class="relative px-6 py-3">
                                                                <span class="sr-only">Action</span>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="bg-white divide-y divide-gray-200">


                                                        @foreach ($parcels=[0,1] as $parcel)
                                                        <tr>
                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                                {{ $loop->iteration }}
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                                asdfa
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                                <div class="flex items-center">
                                                                    <div class="flex-shrink-0 h-10 w-10">
                                                                        <img class="h-10 w-10 rounded-full" src="https://ui-avatars.com/api/?name=Jane+Cooper&color=7F9CF5&background=EBF4FF" alt="">
                                                                    </div>
                                                                    <div class="ml-4">
                                                                        <div class="text-sm font-medium text-gray-900">
                                                                            dsfsd
                                                                        </div>
                                                                        <div class="text-sm text-gray-500">
                                                                            dsfdsf
                                                                        </div>
                                                                        <div class="text-sm text-gray-500">
                                                                            Address : dsfdsf
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                                sdfdsf
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                                dsfdsf
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full text-green-800">
                                                                    dsfdsf
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        @endforeach


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-cloak x-show="openTab == 3">
                            <div class="border border-gray-300 px-6 py-3">
                                @livewire('user-edit-section')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection