<?php
include('../server/koneksi.php');

// if (!$_POST) {
//     header('Location: regis.php');
//     exit;
// }

$ttl = $_POST['ttl'];
$newttl = date("d-m-Y", strtotime($ttl));
$TTL = $_POST['tempat'] . ", " . $newttl;
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
    <!-- remixicon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />

    <!-- CSS -->
    <link rel="stylesheet" href="../admin/assets/css/style-signup.css?<?php echo time() ?>">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Register </title>
</head>

<body>
    <div class="container  ">


        <div class="row ">
            <div class="col-lg-6 register">
                <img src="../admin/assets/img/sign/sign-logo.png" class="sign-logo" alt="">

                <h2 class="fw-bold registext pt-5 mt-2">Register FKP </h2>
                <h6>Buat akunmu dan jadilah member FKP</h6>
                <form class="mt-5" action="../server/register.php" method="post" enctype="multipart/form-data">
                    <div class="hidden">
                        <input type="hidden" value="<?= $_POST['nama'] ?>" name="nama">
                        <input type="hidden" value="<?= $_POST['email'] ?>" name="email">
                        <input type="hidden" value="<?= $_POST['password'] ?>" name="password">
                        <input type="hidden" value="<?= $_POST['usia'] ?>" name="usia">
                        <input type="hidden" value="<?= $TTL ?>" name="ttl">
                        <input type="hidden" value="<?= $_POST['nik'] ?>" name="nik">
                        <input type="hidden" value="<?= $_POST['usaha'] ?>" name="usaha">
                        <input type="hidden" value="<?= $_POST['ig'] ?>" name="ig">
                        <input type="hidden" value="<?= $_POST['nomer'] ?>" name="nomer">
                    </div>
                    <div class="d-flex flex-wrap ">
                        <div class="col-md-5 col-sm-5 col-lg-5 col-12 mb-lg-4">
                            <label for="nama" class="form-label fw-bold">DPW (Provinsi)</label>
                            <select name="provinsi" class="form-control form-control-signup f-14" id="provinsi">
                                <option value="">Provinsi</option>
                                <?php
                                $daerah = mysqli_query($koneksi, "SELECT * FROM provinces ORDER BY name ASC");
                                while ($d = mysqli_fetch_array($daerah)) {
                                ?>
                                    <option value="<?php echo $d['id']; ?>"><?php echo $d['name']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-5 col-sm-5 col-lg-5 col-12 ms-lg-5 ms-sm-5  mb-lg-4">
                            <label for="exampleInputEmail1" class="form-label fw-bold">DPD (Kota/Kab)</label>

                            <select name="kota" class="form-control f-14" id="form_kab">
                                <option> Kota/Kabupaten</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap ">
                        <div class="col-md-11 col-sm-11 col-lg-11 col-12">
                            <label for="exampleInputPassword" class="form-label mt-1 fw-bold">Alamat</label>

                            <input type="alamat" class="form-control form-lebih" aria-label="alamat" aria-describedby="button-addon2" id="alamat" name="alamat" />
                        </div>

                    </div>
                    <div class="d-flex flex-wrap mt-lg-3">
                        <div class="col-md-11 col-sm-11 col-lg-11 col-12">
                            <label for="exampleInputPassword" class="form-label mt-1 fw-bold">Alasan Bergabung
                                Fkp</label>

                            <input type="alasan" class="form-control form-lebih" aria-label="alasan" aria-describedby="button-addon2" id="alasan" name="alasan" />
                        </div>

                    </div>
                    <div class="d-flex">

                        <div class="col-lg-5 pt-4 d-flex">
                            <div class="file-input">
                                <p class="fw-bold">Pas photo</p>
                                <input type="file" id="file" class="file" name="foto" onchange="loadFoto(event)">
                                <label for="file" class="label-1">
                                    <img src="" id="foto" width="100px" height="100px" style="display: none;">
                                    <i class="ri-add-circle-fill fs-1 text-danger" id="tambah"></i>
                                </label>
                            </div>
                            <small>
                                <p class="pt-4 mt-3 ms-2">*max ukurun file 2mb dan ukuran resolusi photo 4x4</p>
                            </small>

                        </div>
                        <div class="col-lg-4 pt-4 ms-5 ">
                            <div class="file-input">
                                <p class="fw-bold">KTP</p>
                                <input type="file" id="file2" class="file" name="ktp" onchange="loadKTP(event)">
                                <label for="file2" class="label-2">
                                    <img src="" id="ktp" width="100px" height="60px" style="display: none;">
                                    <i class="ri-add-circle-fill fs-2 text-danger" id="tambah2"></i>
                                </label>
                            </div>
                            <small>
                                <p class=" mt-3 ">*max ukurun file 2mb </p>
                            </small>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 pt-3">

                        <button type="submit" class="btn btn-danger fw-bold  me-5" style="border-radius: 10px; width:100px; font-size:14px; height:40px;">Daftar</button>
                    </div>
                    <div class="col-lg-6 col-md-6 mt-2">
                        <small>
                            <p> Sudah punya akun ? <a href="login.php" class="text-decoration-none text-danger">Login
                                    sekarang</a></p>
                        </small>
                    </div>
                </form>
            </div>
        </div>
        <div class="text-kanan">
            <div class="col-lg-6 col-xl-4 col-xxl-4 opening ms-5 ">
                <h1 class="ms-1 text-light fw-bold f-48">Selamat datang kembali </h1>
                <h6 class="ms-1 ps-3 mt-4 text-light">Bersama kita wujudkan Muda Berkompetisi, Berkolaborasi &
                    Berkontribusi</h6>
            </div>
        </div>

        <div class="social">

            <div class="row">
                <div class="col-md-12  ">
                    <div class="d-flex justify-content-end">
                        <h6 class="text-light me-4">Social Media</h6>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-12 ">
                    <div class="d-flex justify-content-end">
                        <img src="../admin/assets/img/sign/fb.png" alt="">
                        <img src="../admin/assets/img/sign/yt.png" class="mx-4" alt="">
                        <img src="../admin/assets/img/sign/ig.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row ">
            <div class="kanan">
                <img src="../admin/assets/img/sign/back.svg" class="bg-kanan d-flex-justify-content-end align-items-end   " alt="">
                <img src="../admin/assets/img/sign/founder.svg" class="people" alt="">

            </div>
        </div>
    </div>


    <!-- pw -->
    <script>
        const file = document.querySelector('#file');
        file.addEventListener('change', (e) => {
            // Get the selected file
            const [file] = e.target.files;
            // Get the file name and size
            const {
                name: fileName,
                size
            } = file;
            // Convert size in bytes to kilo bytes
            const fileSize = (size / 1000).toFixed(2);
            // Set the text content
            const fileNameAndSize = `${fileName} - ${fileSize}KB`;
            document.querySelector('.file-name').textContent = fileNameAndSize;
        });
    </script>
    <script>
        var loadFoto = function(event) {
            var output = document.getElementById('foto');
            var icon = document.getElementById('tambah');
            icon.style.display = "none";
            output.style.display = "block";

            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
        var loadKTP = function(event) {
            var output = document.getElementById('ktp');
            var icon = document.getElementById('tambah2');
            icon.style.display = "none";
            output.style.display = "block";

            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script type="text/javascript">
        $(document).ready(function() {

            // sembunyikan form kabupaten, kecamatan dan desa


            // ambil data kabupaten ketika data memilih provinsi
            $('body').on("change", "#provinsi", function() {
                var id = $(this).val();
                var data = "id=" + id + "&data=kabupaten";
                $.ajax({
                    type: 'POST',
                    url: "/server/get-daerah.php",
                    data: data,
                    success: function(hasil) {
                        $("#form_kab").html(hasil);

                    }
                });
            });

        });
    </script>
</body>

</html>