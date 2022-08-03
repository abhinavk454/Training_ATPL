@extends('layouts.app')
@section('title', 'Home')

@section('nav')
    <div class="flex flex-1 text-center items-center h-[100%]">
        <div class=" w-[10%] bg-[url('/public/icon.png')] h-[100%] bg-no-repeat bg-contain bg-left"></div>
        <h1 class="ml-5 text-white font-bold border-b-2 ">RAILTICKET</h1>
        <h2 class="ml-5 text-white hover:font-bold hover:border-b-2 ">Find your next train</h2>
    </div>
    <div class=" flex flex-1 items-center h-[100%] justify-end">
        <h1 class="mr-5 text-white hover:font-bold hover:border-b-2 ">Help</h1>
        <a href="/login">
            <h2 class="mr-5 text-white hover:font-bold hover:border-b-2 ">Login</h2>
        </a>
        <h2 class="mr-5 text-white hover:font-bold hover:border-b-2 ">Register</h2>
    </div>
@endsection

@section('content')
    <div
        class="flex pl-[100px] justify-end items-center flex-1 bg-[url('/public/kohli.png')] bg-no-repeat bg-contain bg-left ">
        <form action="/find-train" method="post" class="">
            @csrf
            {{-- TODO: suggesting the data from station database --}}
            <input type="text" name="from" id="#search" placeholder="FROM" class="pr-20 pl-5 pt-2.5 pb-2.5"
                required>
            <input type="text" name="to" placeholder="TO" class="pr-20 pl-5 pt-2.5 pb-2.5" required>
            <input placeholder="Date" name="date" type="date" class="w-[70px] pl-2 pr-2 pt-2.5 pb-2.5" required>
            <input type="submit" value="SEARCH TRAINS"
                class=" bg-[#ff5d5d] shadow-md pt-2.5 pb-2.5 pl-2 pr-2 text-white font-bold ">
        </form>
        <?php $trains = Session::get('trains');
        $error = Session::get('error');
        ?>
    </div>
    <div class="flex items-center w-[35%] bg-[url('/public/train.png')] bg-no-repeat bg-contain bg-right ">
    </div>
@endsection

@section('results')
    @if ($error)
        <div class="flex flex-1 items-center justify-center">
            <h1 class="">{{ $error }}</h1>
        </div>
    @else
        @if ($trains)
            <div class="flex w-screen h-[100%] items-center justify-around">
                @foreach ($trains as $train)
                    <div
                        class="flex flex-col h-[80%] justify-around items-center rounded-md m-3 text-white w-[25%] bg-[#3d95c5]">
                        <div class="flex flex-col justify-between items-center ">
                            <h5 class="mb-2 text-xl font-bold ">
                                {{ $train->name }}({{ $train->number }})</h5>
                            <p class="mb-3  text-gray-700 dark:text-gray-400 text-sm ">
                                {{ $train->departure_time }} to {{ $train->arrival_time }}
                            </p>
                            <p class="mb-3">
                                <span class="font-bold text-[#7eff49] ">Seats Available:
                                    {{ $train->seat_count }}</span>
                            </p>
                            <a class="bg-[#ff5d5d] shadow-md pt-2.5 pb-2.5 pl-6 pr-6 rounded-sm text-center text-white font-bold"
                                href={{ route('login') }}>BOOK</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="">
                <h1 class="text-center">{{ $error }}</h1>
            </div>
        @endif
    @endif
@endsection
