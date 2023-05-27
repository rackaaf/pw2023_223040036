<?php
require 'functions.php';

$id = $_GET["id"];

if (hapus2($id) > 0) {
    echo "
    <script>
    alert('user berhasil dihapus');
    document.location.href = 'dashboard.php';
    </script>
    ";
} else {
    echo "
    <script>
    alert('user gagal dihapus');
    document.location.href = 'dashboard.php';
    </script>
    ";
}
