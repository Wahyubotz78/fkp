<?php
$host = "127.0.0.1";
$username = "egdev";
$password = "@egdev";
$db = "fkp";
date_default_timezone_set("Asia/Jakarta");
$tanggal = date("Y-m-d H:i:s");
$tanggal2 = date("Y-m-d");

date_default_timezone_set("Asia/Jakarta");
$jam = date("H:i:s");
$koneksi = mysqli_connect($host, $username, $password, $db);