<?php

$perangkatKeras = ['Motherboard', 'Processor', 'Hard Disk', 'PC Coller', 'VGA Card', 'SSD'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Macam - macam perangkat keras komputer</h2>
    <ol>
        <?php foreach ($perangkatKeras as $p) : ?>
            <li><?= $p; ?></li>
        <?php endforeach; ?>
    </ol>

    <?php
    array_push($perangkatKeras, 'Card Reader', 'Modem');
    sort($perangkatKeras);
    ?>

    <body>
        <h2>Macam - macam perangkat keras komputer baru</h2>
        <ol>
            <?php foreach ($perangkatKeras as $p) : ?>
                <li><?= $p; ?></li>
            <?php endforeach;
            ?>
        </ol>


    </body>

</html>