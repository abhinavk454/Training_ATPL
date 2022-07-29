<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body class=" flex flex-col h-screen w-screen bg-[#ffffff] box-border m-0 p-0 ">
    @yield('nav')
    @yield('content')
    @yield('footer')
</body>

</html>
