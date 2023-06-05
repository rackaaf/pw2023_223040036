<?php

require_once __DIR__ . '/vendor/autoload.php';


require './functions.php';

$users = query("SELECT * FROM users");

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
<h1>Daftar User</h1>

<table>
<thead>
    <tr>
        <th scope="col" width="30">id</th>
        <th scope="col">Username</th>
        <th scope="col">Password</th>
    </tr>
</thead>';


$i = 1;
foreach ($users as $row) {
    $html .= '  <tbody>
    <tr>
    <td>' . $i++ . '</td>
    <td>' . $row["username"] . '</td>
    <td>' . $row["password"] . '</td>
    </tr>
    </tbody>';
}


$html .= '</table>
</body>

</html>';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output('Daftar User.pdf', \Mpdf\Output\Destination::INLINE);
