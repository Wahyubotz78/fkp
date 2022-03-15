<?php
include('../koneksi.php');

$id = $_GET['id'];

$data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM berita WHERE id = '$id'"));

echo "<pre>";
var_dump($data);
echo "</pre>";
