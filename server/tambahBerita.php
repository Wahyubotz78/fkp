<?php
include("koneksi.php");
session_start();

// $nama = explode(" ", $_SESSION['nama']);
$oleh = "Febrian";
$judul = $_POST['judul'];
$isi = $_POST['isi'];

$foto = $_FILES['foto']['name'];

if($oleh == null || $judul == null || $isi == null || $foto == null){
    header('Location: /admin/pengurus/berita.php?key=4');
    exit;
}

$fotoBaru = rand(1000, 100000) . "-" . $foto;

if (move_uploaded_file($_FILES['foto']['tmp_name'], 'berita/img/' . $fotoBaru)) {
    $sql = "INSERT INTO berita (oleh, judul, isi, foto) VALUES ('$oleh', '$judul', '$isi', '$fotoBaru')";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        header('Location: /admin/pengurus/berita.php?key=1');
        exit;
    } else {
        header('Location: /admin/pengurus/berita.php?key=2');
        exit;
    }
} else {
    header('Location: /admin/pengurus/berita.php?key=3');
    exit;
}


?>