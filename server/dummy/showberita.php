<?php
include('../koneksi.php');

$datas = mysqli_query($koneksi, "SELECT * FROM berita");

echo "<pre>";
foreach($datas as $data){
    echo "Judul :" . $data['judul'];
    echo "<br>";
    echo "Oleh :" . $data['oleh'];
    echo "<br>";
    echo "Di-upload pada :" . $data['tanggal'];
    echo "<br>";
    echo "Isi : " . $data['isi'];
    echo "<br>";
    echo "<a href='selectberita.php?id=".$data['id']."'>Buka</a>";
    echo "<br>";
}
echo "</pre>";