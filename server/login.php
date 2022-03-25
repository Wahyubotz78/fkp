<?php
include('koneksi.php');
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$data = mysqli_query($koneksi, "SELECT * FROM user WHERE email='$email'");
$existEmail = mysqli_num_rows($data);

if ($existEmail > 0) {
    $row = mysqli_fetch_assoc($data);
    if (password_verify($password, $row['password'])){
        // setcookie("login", "#", time() + (86400 * 30), "/");
        $_SESSION['memberid'] = $row['memberid'];
        $_SESSION['role'] = $row['role'];
        $_SESSION['nama'] = $row['nama'];
        if($row['role'] == 0){
            header('Location: /admin/anggota/index.php');
            exit;
        }else{
            header('Location: /admin/pengurus/index.php');
            exit;
        }
    } else {
        header('Location: /admin/login.php?p=Password%20Salah');
        exit;
    }
} else {
    header('Location: /admin/login.php?p=Email%20Tidak%20Terdaftar');
    exit;
}


?>