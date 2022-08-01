<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RailTicket - @yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body class="flex flex-col w-screen h-screen ">
    <div class=" flex justify-between w-screen h-[10%] bg-[#d55257] p-3">
        @yield('nav')
    </div>
    <div class="flex w-screen h-[50%] bg-[#d55257]">
        @yield('content')
    </div>
    <div class="w-screen h-[10%]">
        @yield('footer')
    </div>

</body>

</html>
