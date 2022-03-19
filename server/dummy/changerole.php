<?php
include('../koneksi.php');
function changerole($role, $id){
    global $koneksi;

    $data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM user WHERE id = '$id'"));
    if($data['role'] == $role){
        header('Location: user.php?key=2');
        exit;
    }
    $sql = "UPDATE user SET role = '$role' WHERE id = '$id'";
    $query = mysqli_query($koneksi, $sql);

    if($query){
        header('Location: user.php?key=1');
        exit;
    }else{
        header('Location: user.php?key=3');
        exit;
    }
}