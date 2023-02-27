<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2c</title>
    <style>
        .kesatu {
            display: flex;
        }

        .kedua {
            height: 40px;
            width: 40px;
            display: flex;
            background-color: salmon;
            border: 1px solid black;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <?php
    for ($a = 10; $a >= 1; $a--) {
        echo "<div class=kesatu>";
        for ($b = 1; $b <= $a; $b++) {
            echo "<div class=kedua>";
            echo "<p>$b</p>";
            echo "</div>";
        }
        echo "</div>";
    }
    ?>

</body>

</html>