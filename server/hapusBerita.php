<?php
include "koneksi.php";
$id = $_GET['id'];

$hapus = mysqli_query($koneksi, "DELETE FROM berita WHERE id = '$id'");
if ($hapus) {
    header("location:../admin/pengurus/index.php");
}else{
    echo "gagal";
}
?>