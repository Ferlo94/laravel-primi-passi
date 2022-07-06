<?php
    $links = [
        [
            "href" => "/chi-siamo",
            "text" => "CHI SIAMO"
        ],
        [
            "href" => "/cosa-vogliamo",
            "text" => "COSA VOGLIAMO"
        ],
        [
            "href" => "/un-fiorino",
            "text" => "UN FIORINO"
        ],
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <div class="container">
        <h1 class="title">NON CI RESTA CHE PROGRAMMARE</h1>
        <nav>
            <ul>
                <?php foreach ($links as $link) { ?>
                    <li><a href="<?= $link["href"] ?>"><?= $link["text"] ?></a></li>
                <?php } ?>
            </ul>
        </nav>
    </div>
</body>
</html>