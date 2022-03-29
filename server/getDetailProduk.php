<?php
include("koneksi.php");
$id = $_GET['id'];
$info = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM barang WHERE id = '$id'"));

?>
<div class="d-flex flex-column" id="detailProduk">
    <div class="bg-abuMerchan d-flex flex-column align-items-center">
        <img src="/server/barang/img/<?= $info['foto'] ?>" alt="">
    </div>
    <div class="bg-light p-3">
        <h5 class="fw-700"><?= $info['nama'] ?></h5>
        <hr>
        <div class="d-flex justify-content-between mt-4">
            <div class="left">
                <span class="fz-13 fw-700">Harga</span>
                <h6 class="mt-3 fw-700"><?= $info['harga'] ?>,-</h6>
            </div>
            <div class="right">
                <img src="assets/img/star.png" alt="">
            </div>
        </div>
    </div>
</div>