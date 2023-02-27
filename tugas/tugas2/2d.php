<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2d</title>
    <style>
        .kesatu {
            display: flex;
            flex-wrap: wrap;
            border: 1px solid black;
            height: 400px;
            width: 400px;
        }

        .kedua {
            display: flex;
            width: 20%;
            height: 20%;
        }

        .kedua.black {
            background-color: black;
            color: white;
        }

        .kedua.white {
            background-color: white;
            color: black;
        }
    </style>
</head>

<body>
    <div class="kesatu">
        <?php
        for ($a = 0; $a < 25; $a++) {
            $colorClass = ($a % 2 == 0) ?  'black' : 'white';
            echo '<div class="kedua ' . $colorClass . '">' . '</div>';
        }
        ?>
    </div>
</body>

</html>