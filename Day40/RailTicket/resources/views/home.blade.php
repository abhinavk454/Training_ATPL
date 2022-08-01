@extends('layouts.app')
@section('title', 'Home')

@section('nav')
    <div class="flex flex-1 text-center items-center h-[100%]">
        <div class=" w-[10%] bg-[url('/public/icon.png')] h-[100%] bg-no-repeat bg-contain bg-left"></div>
        <h1 class="ml-5 text-white font-bold border-b-2 ">RAILTICKET</h1>
        <h2 class="ml-5 text-white hover:font-bold hover:border-b-2 ">Find your next train</h2>
    </div>
    <div class=" flex flex-1 items-center h-[100%] justify-end">
        <h1 class="mr-5 text-white hover:font-bold hover:border-b-2  ">Help</h1>
        <h2 class="mr-5 text-white hover:font-bold hover:border-b-2 ">Manage Booking</h2>
    </div>
@endsection

@section('content')
    <div
        class="flex pl-[100px] justify-end items-center flex-1 bg-[url('/public/kohli.png')] bg-no-repeat bg-contain bg-left ">
        <form action="#" method="post" class="">
            @csrf
            <input type="text" placeholder="FROM" class="pr-20 pl-5 pt-2.5 pb-2.5">
            <input type="text" placeholder="TO" class="pr-20 pl-5 pt-2.5 pb-2.5">
            <input placeholder="Date" type="text" onfocus="(this.type='date')" class="w-[70px] pl-2 pr-2 pt-2.5 pb-2.5">
            <input type="submit" value="SEARCH TRAINS"
                class=" bg-[#ff5d5d] shadow-md pt-2.5 pb-2.5 pl-2 pr-2 text-white font-bold ">
        </form>
    </div>
    <div class=" w-[35%] bg-[url('/public/train.png')] bg-no-repeat bg-cover bg-right ">
    </div>
@endsection

@section('footer')

@endsection
