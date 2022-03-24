<?php
include "koneksi.php";
session_start();

$simpan = mysqli_query($koneksi, "INSERT INTO pesan (nama, email, pesan) VALUES ('$_POST[nama]', '$_POST[email]', '$_POST[pesan]')");
if ($simpan) {
    echo"<script>alert('Pesan anda berhasil dikirim')
    window.location.href='/';
    </script>";
}else{
    echo"<script>alert('Pesan anda gagal dikirim')
    window.location.href='/';
    </script>";
}