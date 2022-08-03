<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RailTicket - @yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body class="flex flex-col w-screen  ">
    <div class=" flex justify-between w-screen h-[100px] bg-[#d55257] p-3">
        @yield('nav')
    </div>
    <div class="flex w-screen h-[450px] bg-[#d55257]">
        @yield('content')
    </div>
    <div class="flex w-screen h-[300px] bg-white ">
        @yield('results')
    </div>
    <div class="flex items-center w-screen h-[150px] bg-zinc-800 ">
        @yield('footer')
        <div class="flex flex-col flex-1 items-center justify-center">
            <h1 class="text-white">Copyright @ 2022</h1>
            <h1 class="text-white">Made By Abhinav</h1>
            <h1 class="text-white">abhinav.vikash2@gmail.com</h1>
        </div>
        <div class="flex flex-1 items-center justify-center">
            <div class="bg-[url('/public/ins.png')] bg-no-repeat bg-contain h-10 w-10 m-1"></div>
            <div class="bg-[url('/public/twitter.svg')] bg-no-repeat bg-contain h-10 w-10 m-1"></div>
            <div class="bg-[url('/public/fb.svg')] bg-no-repeat bg-contain h-10 w-10 m-1"></div>
            <div class="bg-[url('/public/yt.svg')] bg-no-repeat bg-contain h-10 w-10 m-1"></div>
        </div>
    </div>
</body>

</html>
