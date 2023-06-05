<?php

require '../functions.php';

$keyword = $_GET["keyword"];
$query = "SELECT * FROM admins WHERE username LIKE '%$keyword%'";
$admin = query($query);

?>

<table class="table bg-white rounded shadow-sm table-hover">
    <thead>
        <tr class="text-center">
            <th scope="col" width="30">id</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            <th scope="col">Gambar</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody class="text-center">
        <tr>
            <?php $i = 1; ?>
            <?php

            foreach ($admin as $row) :

            ?>
                <td><?php echo $i; ?> </td>
                <td> <?= $row["username"]; ?></td>
                <td><?= $row["password"]; ?></td>
                <td><img src="img/admins/<?= $row["gambar"]; ?>" width="50" height="50"></td>
                <td>
                    <a href="editadmin.php?id=<?= $row["id"]; ?> "><button type="button" class="btn btn-success">Edit</button></a>
                    <a href="hapusadmin.php?id=<?= $row["id"]; ?>" onclick="return confirm('hapus?');"><button type="button" class="btn btn-danger">Hapus</button></a>
                </td>
        </tr>
        <?php $i++; ?>
    <?php
            endforeach;
    ?>
    </tbody>
</table>