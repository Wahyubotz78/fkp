<?php
include "koneksi.php";

$memberid = rand(1,9999);
$email = $_POST['email'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$nik = $_POST['nik'];
$usia = $_POST['usia'];
$ttl = $_POST['ttl'];
$alamat = $_POST['alamat'];
$nomer = $_POST['nomer'];
$ig = $_POST['ig'];
$usaha = $_POST['usaha'];
$provinsi = $_POST['provinsi'];
$kota = $_POST['kota'];
$alasan = $_POST['alasan'];

$password = password_hash($password, PASSWORD_DEFAULT);

$foto = $_FILES['foto']['name'];
$ktp = $_FILES['ktp']['name'];
$fotoBaru = rand(1000,100000)."-".$foto;
$ktpBaru = rand(1000,100000)."-".$ktp;

$existEmail = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM user WHERE email='$email'"));

if($existEmail > 0){
    echo "<script>alert('Email sudah terdaftar');window.location='../register.php';</script>";
}else{
if(move_uploaded_file($_FILES['foto']['tmp_name'], 'user/ktp/'.$fotoBaru)){
    if(move_uploaded_file($_FILES['ktp']['tmp_name'], 'user/foto/'.$ktpBaru)){
        $sql = "INSERT INTO user (memberid, email, password, nama, nik, usia, ttl, alamat, nomer, ig, usaha, provinsi, kota, alasan, foto, ktp) VALUES ('$memberid', '$email', '$password', '$nama', '$nik', '$usia', '$ttl', '$alamat', '$nomer', '$ig', '$usaha', '$provinsi', '$kota', '$alasan', '$fotoBaru', '$ktpBaru')";
        $query = mysqli_query($koneksi, $sql);
        if($query){
           echo "Berhasil";
        }else{
            var_dump($sql);
        }
    }else{
        echo "Gagal upload foto";
    }
}else{
    echo "Gagal upload ktp";
}
}
?>