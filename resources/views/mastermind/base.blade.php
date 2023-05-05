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
<body class="flex flex-col no-wrap items-center  justify-center h-screen w-screen bg-emerald-600">
<table class="flex w-90 h-80 bg-amber-900 border justify-center">
    <!-- // structuur board voor colorplaces en checkers-->
    @for($row=1;$row<=10;$row++)
        <tr class="flex flex-row w-[500px]" id="row-{{ $row }}">
            @for($column=1;$column<=4;$column++)
                <td class="w-1/5 place border h-[20px]" id="column-{{ $row }}-{{ $column }}"></td>
            @endfor
            <td class="w-1/5">
                <td class="checkers scan border w-5 p-3"></td>
                <td class="checkers scan border w-5"></td>
                <td class="checkers scan border w-5"></td>
                <td class="checkers scan border w-5"></td>
            </td>
        </tr>
    @endfor
</table>

<table class="bg-amber-200">
    <tr>
        <td style="background:red;"><button id="red" type="button" class="colorButton">O</button></td>
        <td style="background:yellow;"><button id="yellow" type="button" class="colorButton">O</button></td>
        <td style="background:black;"><button id="black" type="button" class="colorButton">O</button></td>
        <td style="background:white;"><button id="white" type="button" class="colorButton">O</button></td>
    </tr>
    <tr>
        <td style="background:green;"><button id="green" type="button" class="colorButton" >O</button></td>
        <td style="background:orange;"><button id="orange" type="button" class="colorButton">O</button></td>
        <td style="background:blue;"><button id="blue" type="button" class="colorButton">O</button></td>
        <td style="background:purple;"><button id="purple" type="button" class="colorButton">O</button></td>
        <td><button type="button" onclick="location.reload()">Reset</button></td>
        <td><button id ="checker" type="button" class="checkbutton">Check</button></td>
    </tr>


</table>
</body>
</html>
