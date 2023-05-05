<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welkom bij Mastermind!</title>
    @vite('resources/css/app.css')
</head>
<body style="font-family: 'PT Sans', sans-serif; background-image: url('images/mastermindgame.png');" class="flex h-screen w-screen items-center justify-center bg-blue-700  bg-contain" >
<div class="flex flex-col w-9/12  h-5/6 border-r-4 font-black center bg-white shadow-neutral-900 shadow-xl">
@yield('content')
</div>
</body>
</html>
