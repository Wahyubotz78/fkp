<?php
include('../koneksi.php');

$datas = mysqli_query($koneksi, "SELECT * FROM berita");
$arr = mysqli_fetch_assoc($datas);

echo "<pre>";
$counter = 0;
foreach($datas as $data){
    if($counter == 0) {
        echo "<b>";
        echo "Judul :" . $data['judul'];
        echo "<br>";
        echo "Oleh :" . $data['oleh'];
        echo "<br>";
        echo "Di-upload pada :" . $data['tanggal'];
        echo "<br>";
        echo "Isi : " . $data['isi'];
        echo "<br>";
        echo "<a href='selectberita.php?id=" . $data['id'] . "'>Buka</a>";
        echo "<br>";
        echo "</b>";
    }else{
        echo "Judul :" . $data['judul'];
        echo "<br>";
        echo "Oleh :" . $data['oleh'];
        echo "<br>";
        echo "Di-upload pada :" . $data['tanggal'];
        echo "<br>";
        echo "Isi : " . $data['isi'];
        echo "<br>";
        echo "<a href='selectberita.php?id=" . $data['id'] . "'>Buka</a>";
        echo "<br>";
    }
    $counter++;
}

foreach($datas as $data){
    echo "jumlah huruf :";
    echo strlen(strip_tags($data['isi']));
    echo "<br>";
    echo "jumlah kata :";
    $kata = explode(" ", $data['isi']);
    echo count($kata);
    echo "<br>";
}
echo "</pre>";