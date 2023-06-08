<?php

require_once __DIR__ . '/vendor/autoload.php';


require './functions.php';

$destinasi = query("SELECT * FROM rekomendasi_destinasi");

$html = '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/printpdf.css" />
    <title>Admin</title>
</head>

<body>
<h1>Daftar Admin</h1>

<table>
<thead>
    <tr>
        <th scope="col" width="30">id</th>
        <th scope="col">Tempat</th>
        <th scope="col" width="500">Deskripsi</th>
        <th scope="col">Gambar</th>
    </tr>
</thead>';


$i = 1;
foreach ($destinasi as $row) {
    $html .= '  <tbody>
    <tr>
    <td>' . $i++ . '</td>
    <td>' . $row["tempat"] . '</td>
    <td>' . $row["deskripsi"] . '</td>
    <td><img src="img/Destination/Rekomendasi/' . $row["gambar"] . '" width="50" height="50"></td>
    </tr>
    </tbody>';
}


$html .= '</table>
</body>

</html>';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output('Daftar Data Destinasi.pdf', \Mpdf\Output\Destination::INLINE);
