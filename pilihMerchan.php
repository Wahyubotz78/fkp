<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Produk</title>
    <link rel="stylesheet" href="assets/css/style.css?<?php echo time(); ?>">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
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
                <form id="my_form" class="mt-5" action="regis2.php" method="post" enctype="multipart/form-data">
                    <div class="d-flex flex-wrap row">
                        <div class="col-12 col-xl-6 mt-4">
                            <label for="nama" class="form-label fw-bold">Nama Lengkap</label>
                            <input type="text" class="form-control form-control-signup f-14" id="inputNama"
                                aria-describedby="nama" name="nama" required>
                        </div>
                        <div class="col-12 col-xl-6 mt-4">
                            <label for="ex1" class="form-label fw-bold">Nomor Telp.</label>
                            <input type="email" class="form-control f-14" id="ex1" aria-describedby="emailHelp"
                                name="email">
                        </div>
                    </div>
                    <div class="d-flex flex-wrap row">
                        <div class="col-12 col-xl-12 mt-4">
                            <label for="ex2" class="form-label fw-bold">Alamat</label>
                            <textarea type="text" class="form-control form-lebih" aria-label="alamat"
                                aria-describedby="button-addon2" id="ex2" name="alamat"></textarea>
                        </div>
                    </div>
                    <div class="col-12 col-xl-12 mt-4">
                        <label for="ex3" class="form-label fw-bold">Pilih
                            Barang</label>
                        <select class="form-control" id="ex3" name="tempat" placeholder="Pilih Barang..." required>
                            <option value=""></option>
                            <?php
                            $sql = mysqli_query($koneksi, "SELECT name FROM regencies");
                            while ($data = mysqli_fetch_array($sql)) {
                                echo "<option value='" . $data['name'] . "'>" . $data['name'] . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="d-flex flex-wrap row">
                        <div class="col-4 col-xl-6 mt-4">
                            <label for="exampleInputEmail1" class="form-label fw-bold">Ukuran</label>
                            <select class="form-control" name="ukuran" placeholder="Ukuran..." required>
                                <option value=""></option>
                                <?php
                                $sql = mysqli_query($koneksi, "SELECT name FROM regencies");
                                while ($data = mysqli_fetch_array($sql)) {
                                    echo "<option value='" . $data['name'] . "'>" . $data['name'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-8 col-xl-6 mt-4">
                            <label for="exampleInputEmail1" class="form-label fw-bold">Jumlah
                                Pembelian</label>
                            <select style="background-color: #f3f3f4 !important" class="form-control" name="tempat"
                                placeholder="Jumlah Pembelian..." required>
                                <option value=""></option>
                                <?php
                                $sql = mysqli_query($koneksi, "SELECT name FROM regencies");
                                while ($data = mysqli_fetch_array($sql)) {
                                    echo "<option value='" . $data['name'] . "'>" . $data['name'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 pt-5">
                        <a href="detail-produk.php" class="w-100 btn btn-danger">Selanjutnya</a>
                    </div>
                </form>
            </div>
            <div
                class="rightProduct d-none d-xl-flex align-items-center justify-content-center col-xl-5 pe-0 me-0 bg-biru position-fixed end-0 top-0 bottom-0">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>