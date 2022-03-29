<?php
include("koneksi.php");

$nama = $_POST['nama'];
$nomor = $_POST['nomor'];
$alamat = $_POST['alamat'];
$idbarang = $_POST['idbarang'];
$ukuran = $_POST['ukuran'];
$jumlah = $_POST['jumlah'];
$harga = 500.000;

$sql = "INSERT INTO orderan (nama, nomor, alamat, idbarang, ukuran, jumlah) VALUES ('$nama', '$nomor', '$alamat', '$idbarang', '$ukuran', '$jumlah')";
$query = mysqli_query($koneksi, $sql);
if ($query) {
    $kueri = "SELECT * FROM orderan WHERE kode = '$kode'";
    $hasil = mysqli_query($koneksi, $kueri);
    $data = mysqli_fetch_assoc($hasil);
    $id = $data['id'];
    header('Location: ../detail-pembayaran.php?key=' . $id);
    exit;
} else {
    echo mysqli_error($koneksi);
    echo "GAGAL";
}

