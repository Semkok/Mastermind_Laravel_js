<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/mastermind.js'])
</head>
<body>
<h1>Scoreboard</h1>
<table class="border-collapse w-100">
    @foreach($scoreboards as $scoreboard)
    <tr class="bg-gray-500">
        <th class="border border-solid p-8">Name</th>
        <th class="border border-solid p-8">Score</th>
        <th class="border border-solid p-8">Time</th>
    </tr>
    <tr>
        <td class="border border-solid p-8">{{$scoreboard->username}}</td>
        <td class="border border-solid p-8">{{$scoreboard->timesguessed}}</td>
        <td class="border border-solid p-8">{{$scoreboard->time}}</td>
    </tr>
    @endforeach
</table>
<a href="/">back</a>
{{--@foreach($scores as $entry)--}}
{{--    {{$entry->username}}--}}
{{--@endforeach--}}
</body>
</html>
