<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>

<div class="container mt-3">
  <h1>Halaman Home</h1>

  <h3>Daftar Mahasiswa</h3>

  <a href="tambah.php" class="btn btn-primary">Tambah Data Mahasiswa</a>



  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Gambar</th>
        <th scope="col">NIM</th>
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
        <th scope="col">Jurusan</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($students as $student) : ?>
        <tr>
          <th scope="row">1</th>
          <td><img src="img/<?= $student["gambar"]; ?>" width="50"></td>
          <td><?= $student["nim"]; ?></td>
          <td><?= $student["nama"]; ?></td>
          <td><?= $student["email"]; ?></td>
          <td><?= $student["jurusan"]; ?></td>
          <td>
            <a href="ubah.php?id=<?= $student['id']; ?> ">ubah</a> |
            <a href="hapus.php?id=<?= $student['id']; ?> " onclick="return confirm('yakin?')">hapus</a>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>




  <?php foreach ($students as $student) : ?>
    <ul>
      <li>Nama: <?= $student["nama"]; ?></li>
      <li>NIM: <?= $student["nim"]; ?></li>
      <li>Email: <?= $student["email"]; ?></li>
      <li>Jurusan: <?= $student["jurusan"]; ?></li>
    </ul>
  <?php endforeach; ?>
</div>

<?php require('partials/footer.php'); ?>