<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex w-screen h-screen max-h-screen ">
        <div
            class="flex flex-col items-center justify-between p-4 w-[20%] h-screen bg-rose-600 bg-[url('/public/icon.png')] bg-no-repeat bg-contain bg-left ">
            @yield('nav')
        </div>
        <div class="flex flex-col items-center justify-between p-4 w-[80%] ">
            @yield('content')
        </div>
    </div>
</body>

</html>
