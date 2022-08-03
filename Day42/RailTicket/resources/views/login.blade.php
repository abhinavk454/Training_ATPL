@extends('layouts.app')
@section('title', 'Login')

@section('nav')
    <div class="flex flex-1 text-center items-center h-[100%]">
        <div class=" w-[10%] bg-[url('/public/icon.png')] h-[100%] bg-no-repeat bg-contain bg-left"></div>
        <h1 class="ml-5 text-white font-bold hover:border-b-2 ">RAILTICKET</h1>
        <h2 class="ml-5 text-white hover:font-bold hover:border-b-2 ">Find your next train</h2>
    </div>
    <div class=" flex flex-1 items-center h-[100%] justify-end">
        <h1 class="mr-5 text-white hover:font-bold hover:border-b-2 ">Help</h1>
        <h2 class="mr-5 text-white hover:font-bold border-b-2 ">Login</h2>
        <h2 class="mr-5 text-white hover:font-bold hover:border-b-2 ">Register</h2>
    </div>
@endsection

@section('content')
    <div
        class="flex pl-[100px] justify-end items-center flex-1 bg-[url('/public/kohli.png')] bg-no-repeat bg-contain bg-left ">
        <form action="/login" method="post" class="flex flex-col text-center justify-around h-[70%] w-[50%]">
            @csrf
            <input type="text" name="email" id="#search" placeholder="Email" class="pr-20 pl-5 pt-2.5 pb-2.5"
                required>
            <input type="password" name="password" placeholder="Password" class="pr-20 pl-5 pt-2.5 pb-2.5" required>
            <input type="submit" value="LOGIN"
                class=" bg-[#ff5d5d] shadow-md pt-2.5 pb-2.5 pl-2 pr-2 text-white font-bold ">
        </form>
        <?php $error = Session::get('error');
        ?>
    </div>
    <div class="flex items-center w-[40%] bg-[url('/public/train.png')] bg-no-repeat bg-contain bg-right ">
    </div>
@endsection

@section('results')
    @if ($error)
        <div class="flex flex-1 items-center justify-center">
            <h1 class="">{{ $error }}</h1>
        </div>
    @endif
@endsection
