@extends('layouts.dash')
@section('nav')
    <h1 class="text-3xl text-white font-bold border-b-2 mb-2">Welcome Admin</h1>
    <div class="flex flex-col items-center text-center w-[100%]">
        <a href="/adminDashboard">
            <h1 class=" text-white hover:font-bold hover:border-b-2 mb-2">Users</h1>
        </a>
        <a href="" class=" text-white font-bold border-b-2 mb-2">
            <h1>Stations</h1>
        </a>
        <a href="" class=" text-white hover:font-bold hover:border-b-2 mb-2">
            <h1>Routes</h1>
        </a>
        <a href="" class=" text-white hover:font-bold hover:border-b-2 mb-2">
            <h1>Trains</h1>
        </a>
        <a href="" class=" text-white hover:font-bold hover:border-b-2 mb-2">
            <h1>Tickets</h1>
        </a>
        <a href="/admin-passengers" class=" text-white hover:font-bold hover:border-b-2 mb-2">
            <h1>Pessengers</h1>
        </a>
        <a href="" class="bg-[#ff5d5d] shadow-md w-[50%] pt-2.5 pb-2.5 rounded-sm text-white font-bold">
            <h1>Logout</h1>
        </a>
    </div>
@endsection
@section('content')
    <?php
    $stations = Session::get('stations');
    // dd($users);
    ?>
    <div class="flex h-[20%] justify-between items-center w-[100%] text-center">
        <h1 class="text-2xl">All Stations</h1>
        <a href="" class="bg-[#ff5d5d] shadow-md pt-2.5 pb-2.5 rounded-sm text-white font-bold w-20">ADD</a>
    </div>
    <div class="h-[80%] w-[100%]">
        <table class="w-[100%] text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">ID</th>
                    <th scope="col" class="py-3 px-6">Name</th>
                    <th scope="col" class="py-3 px-6">Longitude</th>
                    <th scope="col" class="py-3 px-6">Latitude</th>
                    <th colspan="2" scope="col" class="py-3 px-6">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($stations as $station)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $station->id }}</th>
                        <td class="py-4 px-6 font-bold text-gray-900 whitespace-nowrap dark:text-white">{{ $station->name }}
                        </td>
                        <td class="py-4 px-6">{{ $station->coordinate_x }}</td>
                        <td class="py-4 px-6">{{ $station->coordinate_y }}</td>
                        <td class="py-4 px-6">
                            <a href="">
                                <button class="bg-[#ff5d5d] border-none pt-2.5 pb-2.5 pl-3 pr-3 rounded-sm ">
                                    <h1>Delete</h1>
                                </button>
                            </a>
                        </td>
                        <td class="py-4 px-6">
                            <a href="">
                                <button class="bg-[#ff5d5d] border-none pt-2.5 pb-2.5 pl-3 pr-3 rounded-sm ">
                                    <h1>Edit</h1>
                                </button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
