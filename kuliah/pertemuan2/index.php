<?php 
$nama = "Rackha" ;
$matakuliah = "Pemograman Web";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan2</title>
</head>
<body>
    <h1>
        <?php echo "Hello $nama"; ?>
    </h1>
    <p>
        <?php echo $matakuliah ; ?>
    </p>
    <p> <?php echo 
        "Hallo nama saya $nama saya sedang kuliah '' $matakuliah '' " ;
    ?>
    </p>
</body>
</html>