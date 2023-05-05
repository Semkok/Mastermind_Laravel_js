<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css'])
</head>
<body class="flex w-screen h-screen justify-center items-center bg-cover" style="background-image: url('images/circuit-board.svg')">
<div class="flex flex-col w-1/2 h-5/6 border p-2 rounded-3xl bg-amber-200">
        <strong>Uitleg Mastermind:</strong>
        <p>De speler heeft een bord met 10 rijen en vier vakken per rij. Per rij mag er één keer geraden worden.<br>
        De speler heeft een code te raden met een kleuren combinatie die het spel genereerd.<br>
        De geheime code bestaat uit vier vakken die 4 kleuren hebben die gekozen worden uit 8 kleuren die hetzelfde kunnen zijn of verschillend.<br>
        De speler krijgt aanwijzingen of de goede kleuren zijn gekozen (bij elke rij waarbij er gecheckt wordt) met twee pinnen of geen:<br>
        <br>
        <strong>De witte pin:</strong> De kleur zit erin maar op de verkeerde plek.<br>
        <strong>De rode pin:</strong> De kleur zit erin en op de goede plek.<br>
        <strong>Geen pin:</strong> De kleur is fout en zit er niet.<br>
        <br>
        Wanneer de speler 10 keer de verkeerde kleurencombinatie heeft geraden heeft de speler het spel verloren.<br>
        Je kan het natuurlijk opnieuw proberen door weer het spel te resetten :)<br>
        Wanneer de speler de kleurencombinatie binnen het 10 keer raden goed heeft deze gewonnen.</p>
        <br>
        <a href="/">
        <strong>Ga terug</strong>
        </a>
</div>
</body>
</html>
