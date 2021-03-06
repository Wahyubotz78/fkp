<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <link rel="stylesheet" href="assets/css/style.css?<?php echo time(); ?>">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="icon" type="image/" href="assets/img/logoFkp.svg">
</head>

<body>
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 col-xl-6 px-3 px-xl-0">
                <a href="index.php"><img src="assets/img/logoFkp.svg" class="mt-5" alt=""></a>
                <h3 class="fw-600 mt-5">Order Merchandise</h3>
                <p class="fw-400">Pastikan Informasi kamu sesuai ya!!</p>
                <p class="fz-14 fw-600 mt-5">Detail Informasi</p>
                <div class="row">
                    <div class="col-6">
                        <p class="fz-14">Nama Lengkap</p>
                    </div>
                    <div class="col-6">
                        <p class="fz-14 fw-600 text-end"><?= $_POST['nama'] ?></p>
                    </div>
                    <div class="col-6">
                        <p class="fz-14">No. Telp.</p>
                    </div>
                    <div class="col-6">
                        <p class="fz-14 fw-600 text-end"><?= $_POST['nomor'] ?></p>
                    </div>
                    <div class="col-6">
                        <p class="fz-14">Alamat</p>
                    </div>
                    <div class="col-6">
                        <p class="fz-14 fw-600 text-end"><?= $_POST['alamat'] ?>
                        </p>
                    </div>
                </div>
                <hr class="w-100">
                <p class="fz-14 fw-600 mt-5">Detai Barang</p>
                <?php
                $info = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM barang WHERE id = '$_POST[idbarang]'"));
                ?>
                <div class="row">
                    <div class="col-6">
                        <p class="fz-14">Barang</p>
                    </div>
                    <div class="col-6">
                        <p class="fz-14 fw-600 text-end">Kemeja Plannel FKP</p>
                    </div>
                    <div class="col-6">
                        <p class="fz-14">Ukuran</p>
                    </div>
                    <div class="col-6">
                        <p class="fz-14 fw-600 text-end"><?= $_POST['ukuran'] ?></p>
                    </div>
                    <div class="col-6">
                        <p class="fz-14">Jumlah Barang</p>
                    </div>
                    <div class="col-6">
                        <p class="fz-14 fw-600 text-end">x<?= $_POST['jumlah'] ?></p>
                    </div>
                    <div class="col-6">
                        <p class="fz-14">Harga</p>
                    </div>
                    <div class="col-6">
                        <p class="fw-600 text-end">Rp150.000,-</p>
                    </div>
                </div>
                <form action="/server/order.php" method="post">
                    <input type="hidden" value="<?= $_POST['nama'] ?>" name="nama">
                    <input type="hidden" value="<?= $_POST['nomor'] ?>" name="nomor">
                    <input type="hidden" value="<?= $_POST['alamat'] ?>" name="alamat">
                    <input type="hidden" value="<?= $_POST['idbarang'] ?>" name="idbarang">
                    <input type="hidden" value="<?= $_POST['ukuran'] ?>" name="ukuran">
                    <input type="hidden" value="<?= $_POST['jumlah'] ?>" name="jumlah">
                    <input type="hidden" value="<?= $harga ?>" name="harga">
                    <!-- <a href="detail-pembayaran.php" class="btn btn-danger w-100">Lanjutkan Pembayaran</a> -->
                    <button type="submit" class="btn btn-danger w-100">Lanjutkan Pembayaran</button>
                </form>
            </div>
            <div class="rightProduct d-none d-xl-flex align-items-center justify-content-center col-xl-5 pe-0 me-0 bg-biru position-fixed end-0 top-0 bottom-0">
                <div class="d-flex flex-column">
                    <div class="bg-abuMerchan d-flex flex-column align-items-center">
                        <img src="assets/img/merchanProduct.png" alt="">
                    </div>
                    <div class="bg-light p-3">
                        <h5 class="fw-700">Kemeja plannel FKP</h5>
                        <hr>
                        <div class="d-flex justify-content-between mt-4">
                            <div class="left">
                                <span class="fz-13 fw-700">Harga</span>
                                <h6 class="mt-3 fw-700">Rp150.000,-</h6>
                            </div>
                            <div class="right">
                                <img src="assets/img/star.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>