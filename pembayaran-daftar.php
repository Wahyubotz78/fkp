<?php
include "server/koneksi.php";
$data = mysqli_query($koneksi, "SELECT * FROM regisTrx WHERE id_user='$_GET[id]'");
$r = mysqli_fetch_array($data);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
    <!-- remixicon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />

    <!-- CSS -->
    <link rel="stylesheet" href="../admin/assets/css/style-signup.css?<?php echo time() ?>">
    <link rel="stylesheet" href="../assets/css/style.css?<?php echo time() ?>">
    <link rel="icon" type="image/" href="../assets/img/logoFkp.svg">

    <title>Pembayaran Pendaftaran</title>
</head>

<body>
    <div class="container">
        <div class="row row-responsive mb-5">
            <div class="col-12 col-xl-5 px-3 px-xl-0">
                <a href="index.php"><img src="assets/img/logoFkp.svg" class="mt-5" alt=""></a>
                <h3 class="fw-600 mt-5">Pembayaran Pendaftaran</h3>
                <p class="fw-400">Pastikan Informasi kamu sesuai ya!!</p>
                <p class="fz-14 fw-600 mt-5">Detail Pembayaran</p>
                <div class="row">
                    <div class="col-6">
                        <p class="fz-14">Daftar Member</p>
                    </div>
                    <div class="col-6">
                        <p class="fz-14 fw-600 text-end">Rp100.<?= $r['unix'] ?>,-</p>
                    </div>
                </div>
                <hr class="w-100">
                <p class="fz-14">Rekening Pembayaran</p>
                <div class="d-flex align-items-center flex-wrap gap-3">
                    <h5 class="fw-600">102329324</h5>
                    <img src="assets/img/copy.svg" alt="">
                    <p class="fz-14"><img src="assets/img/bni.svg" alt=""></p>
                </div>
                <p class="fz-14">Atas Nama</p>
                <div class="row d-flex align-items-center">
                    <div class="col-12">
                        <h5 class="fw-600">Azis Syahrul</h5>
                    </div>
                </div>
                <p class="fz-14">Jumlah yang harus dibayar</p>
                <div class="row d-flex align-items-center">
                    <div class="col-12">
                        <h5 class="fw-600">Rp100.<?= $r['unix'] ?>,-</h5>
                    </div>
                </div>
                <hr class="w-100 my-4">
                <p class="fz-14 fw-600">Catatan</p>
                <p class="fz-14">Hanya menerima dari Bank BNI</p>
                <p class="fz-14">Dapat dikenakan biaya transfer antar bank dan limitasi transfer dari bank selain BNI
                </p>
                <a href="sukses-bayar.php" class="btn btn-danger w-100">Sudah Bayar</a>
            </div>
            <div class="bgRegister d-none d-xl-flex col-xl-6 h-100 position-fixed top-0 bottom-0 end-0">
                <img src="../admin/assets/img/sign/back2.svg"
                    class="bg-kanan d-flex-justify-content-end align-items-end position-absolute end-0" alt="">
                <img src="../admin/assets/img/sign/founder.svg" class="people" alt="">
            </div>
        </div>
    </div>

    <script src="../admin/assets/js/sign/pw.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>