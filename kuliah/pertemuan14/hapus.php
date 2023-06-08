<?php 

require 'functions.php';

$id = htmlspecialchars($_GET['id']) ;

if(hapus ($id) > 0 )  {
    echo "<script>alert('hapus data berhasil');
    document.location.href= 'index.php';
    </script>";
    
} else {
    echo "<script>alert('hapus data gagal');
    document.location.href= 'index.php';
    </script>";
}
?> 