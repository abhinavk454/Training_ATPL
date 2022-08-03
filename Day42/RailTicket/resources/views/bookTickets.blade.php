@extends('layouts.app')
@section('title', 'User Dashboard')

@section('nav')
    <div class="flex flex-1 text-center items-center h-[100%]">
        <div class=" w-[10%] bg-[url('/public/icon.png')] h-[100%] bg-no-repeat bg-contain bg-left"></div>
        <h1 class="ml-5 text-white font-bold hover:border-b-2 ">RAILTICKET</h1>
        <h2 class="ml-5 text-white hover:font-bold hover:border-b-2 ">Find your next train</h2>
    </div>
    <div class=" flex flex-1 items-center h-[100%] justify-end">
        <a href="">
            <h1 class="mr-5 text-white hover:font-bold hover:border-b-2 ">Welcome {{ $user = session()->get('user')->name }}
            </h1>
        </a>
        <a href="/logout">
            <h2 class="mr-5 text-white hover:font-bold hover:border-b-2 ">Logout</h2>
        </a>
        <a href="/view-tickets">
            <h2 class="mr-5 text-white hover:font-bold border-b-2 ">Tickets</h2>
        </a>
    </div>
@endsection

@section('content')
    <div
        class="flex pl-[100px] justify-end items-center flex-1 bg-[url('/public/kohli.png')] bg-no-repeat bg-contain bg-left ">

        <form action="/book-tickets" id="div1" method="post"
            class="flex flex-col justify-around items-center h-[100%] ">
            @csrf
            <h2 class="text-xl text-white text-center ">Add Pessengers (*Min: 1 and *Max: 5)</h2>
            <div class="">
                <input type="text" name="name1" placeholder="Name of Passenger1" class="pr-20 pl-5 pt-2.5 pb-2.5"
                    required>
                <input type="text" name="age1" placeholder="Age" class="pt-2.5 pb-2.5" required>
                <input type="text" name="gender1" placeholder="Gender" class="pt-2.5 pb-2.5" required>
                <input type="email" name="email1" placeholder="Email" class="pt-2.5 pb-2.5" required>
            </div>

            <input type="submit" value="BOOK"
                class=" bg-[#ff5d5d] shadow-md pt-2.5 pb-2.5 pl-5 pr-5 text-white font-bold ">
        </form>
        <?php $train = Session::get('train');
        $error = Session::get('error');
        ?>
    </div>
    <div class="flex items-center w-[25%] bg-[url('/public/train.png')] bg-no-repeat bg-contain bg-right ">
    </div>
@endsection

@section('results')
    @if ($error)
        <div class="flex flex-1 items-center justify-center">
            <h1 class="">{{ $error }}</h1>
        </div>
    @endif
@endsection
