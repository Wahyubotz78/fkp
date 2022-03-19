<?php
include('../koneksi.php');

$id = $_GET['id'];

$data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM berita WHERE id = '$id'"));

echo "<pre>";
var_dump($data);
echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="../berita/img/<?=$data['foto']?>" alt="">
</body>
</html>
