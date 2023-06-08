<?php

require '../functions.php';

$keyword = $_GET["keyword"];
$query = "SELECT * FROM rekomendasi_destinasi WHERE tempat LIKE '%$keyword%'";
$destinasi = query($query);

?>
<table class="table bg-white rounded shadow-sm table-hover">
    <thead>
        <tr class="text-center">
            <th scope="col" width="30">id</th>
            <th scope="col">Tempat</th>
            <th scope="col" width="500">Deskripsi</th>
            <th scope="col">Gambar</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody class="text-center">
        <tr>
            <?php $i = 1; ?>
            <?php

            foreach ($destinasi as $row) :

            ?>
                <td><?php echo $i; ?> </td>
                <td> <?= $row["tempat"]; ?></td>
                <td><?= $row["deskripsi"]; ?></td>
                <td><img src="img/Destination/Rekomendasi/<?= $row["gambar"]; ?>" width="50" height="50"></td>
                <td>
                    <a href="editdestinasi.php?id=<?= $row["id"]; ?> "><button type="button" class="btn btn-success">Edit</button></a>
                    <a href="hapusdestinasi.php?id=<?= $row["id"]; ?>" onclick="return confirm('hapus?');"><button type="button" class="btn btn-danger">Hapus</button></a>
                </td>
        </tr>
        <?php $i++; ?>
    <?php
            endforeach;
    ?>
    </tbody>
</table>