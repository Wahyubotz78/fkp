<?php
include('../koneksi.php');

$name = explode(" ", $_SESSION['nama']);
$nama = $name[0];

$datas = mysqli_query($koneksi, "SELECT * FROM berita WHERE oleh = '$nama'");

foreach($datas as $data){
    echo "all";
}