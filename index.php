<?php
$faq = [
    [
        'domanda'  => 'domanda1',
        'risposta'  => 'risposta1',
    ],
    [
        'domanda'  => 'domanda2',
        'risposta'  => 'risposta2',

    ],
    [

        'domanda'  => 'domanda3',
        'risposta'  => 'risposta3',
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Faq</title>
</head>

<body>
    <header>
        <div class="logo">Logo</div>
        <div class="nav">navigazione</div>

    </header>
    <main>
        <h1>FAQ Google</h1>
        <ul>
        <?php foreach($faq as $domanda => $contenuto) { ?>
            <li>
            <h3><?= $contenuto['domanda']; ?></h3>
            <p><?= $contenuto['risposta']; ?></p>
            </li>
            <?php } ?>

        </ul>
       
    </main>
</body>
</html>