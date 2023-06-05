<?php

require '../functions.php';

$keyword = $_GET["keyword"];
$query = "SELECT * FROM users WHERE username LIKE '%$keyword%'";
$users = query($query);

?>

<table class="table bg-white rounded shadow-sm table-hover">
    <thead>
        <tr class="text-center">
            <th scope="col" width="50">id</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody class="text-center">
        <?php $i = 1; ?>
        <?php

        foreach ($users as $row) :

        ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?= $row["username"]; ?> </td>
                <td><?= $row["password"]; ?></td>
                <td>
                    <a href="edit.php?id=<?= $row["id"]; ?>"><button type="button" class="btn btn-success">Edit</button></a>
                    <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('hapus?');"><button type="button" class="btn btn-danger">Hapus</button></a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php
        endforeach;
        ?>
    </tbody>
</table>