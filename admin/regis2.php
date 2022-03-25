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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="icon" type="image/" href="../assets/img/logoFkp.svg">
    <title>Register </title>
</head>

<body>
    <div class="container">
        <div class="row row-responsive">
            <div class="col-12 col-xl-6 register px-3 px-xl-0">
                <a href="../index.php"><img src="../admin/assets/img/sign/sign-logo.png" class="mt-4" alt=""></a>
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
                    <div class="d-flex flex-wrap row">
                        <div class="col-12 col-xl-5 mt-4">
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

                        <div class="col-12 col-xl-5 ms-xl-5 mt-4">
                            <label for="exampleInputEmail1" class="form-label fw-bold">DPD (Kota/Kab)</label>
                            <select name="kota" class="form-control f-14" id="form_kab">
                                <option> Kota/Kabupaten</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap row">
                        <div class="col-12 col-xl-11 mt-4">
                            <label for="exampleInputPassword" class="form-label fw-bold">Alamat</label>
                            <textarea type="text" class="form-control form-lebih" aria-label="alamat"
                                aria-describedby="button-addon2" id="alamat" name="alamat"></textarea>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap row">
                        <div class="col-12 col-xl-11 mt-4">
                            <label for="exampleInputPassword" class="form-label fw-bold">Alasan Bergabung
                                Fkp</label>
                            <textarea type="alasan" class="form-control form-lebih" aria-label="alasan"
                                aria-describedby="button-addon2" id="alasan" name="alasan"></textarea>
                        </div>
                    </div>
                    <div class="d-flex row">
                        <div class="col-12 col-xl-5 pt-4 d-flex flex-column flex-xl-row">
                            <div class="file-input">
                                <p class="fw-bold">Pas Foto</p>
                                <input type="file" id="file" class="file" name="foto" onchange="loadFoto(event)">
                                <label for="file" class="label-1">
                                    <img src="" id="foto" width="100px" height="100px" style="display: none;">
                                    <i class="ri-add-circle-fill fs-1 text-danger" id="tambah"></i>
                                </label>
                            </div>
                            <small>
                                <p class="pt-xl-4 mt-xl-3 mt-2 ms-2" id="max">*max ukurun file 2mb dan ukuran resolusi
                                    foto 4x4
                                </p>
                                <p class="pt-4 mt-3 ms-2" id="file-name"></p>
                            </small>
                        </div>
                        <div class="col-12 col-xl-4 pt-4 ms-xl-5">
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
                        <a class="btn btn-danger fw-bold me-5" data-bs-toggle="modal" href="#exampleModalToggle"
                            role="button"
                            style="border-radius: 10px; width:100px; font-size:14px; height:40px;">Daftar</a>
                    </div>
                    <div class="col-lg-6 col-md-6 mt-2">
                        <small>
                            <p> Sudah punya akun ? <a href="login.php" class="text-decoration-none text-danger">Login
                                    sekarang</a></p>
                        </small>
                    </div>
                    <div class="modal fade" id="exampleModalToggle" aria-hidden="true"
                        aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                        <div class="modal-dialog p-4 p-sm-0 modal-dialog-centered position-relative">
                            <div class="modal-content container">
                                <div class="modal-header">
                                    <img src="../admin/assets/img/starSmall.png" class="star position-absolute" alt="">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body fz-15 bg-abu">
                                    <p>Dengan ini saya menyatakan untuk mendaftar menjadi anggota Forum Kewirausahaan
                                        Pemuda dan setuju dengan segala peraturan organisasi yang berlaku. Apabila saya
                                        melanggar peraturan organisasi dan hukum yang berlaku di Republik Indonesia maka
                                        saya siap untuk dikeluarkan dari organisasi *
                                    </p>
                                </div>
                                <div class="form-check mt-3">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Setuju dengan ketentuan dan
                                        peraturan yang ada </label>
                                </div>
                                <div class="modal-footer mb-4">
                                    <button type="submit" class="w-100 btn btn-danger fw-bold"
                                        style="border-radius: 10px; font-size:14px;" id="submit">Lanjutkan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="bgRegister d-none d-xl-flex col-xl-6 h-100 position-fixed top-0 bottom-0 end-0">
                <img src="../admin/assets/img/sign/back2.svg"
                    class="bg-kanan d-flex-justify-content-end align-items-end position-absolute end-0" alt="">
                <img src="../admin/assets/img/sign/founder.svg" class="people" alt="">
            </div>
        </div>
    </div>

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

        const allowedExt = ["png", "jpg", "svg", "jpeg"];

        const myArray = fileName.split(".");
        let ext = myArray[myArray.length - 1];

        if (allowedExt.includes(ext)) {
            // Convert size in bytes to kilo bytes
            const fileSize = (size / 1000).toFixed(2);
            // Set the text content
            const fileNameAndSize = `${fileName} - ${fileSize}KB`;
            document.querySelector('#max').innerHTML = fileNameAndSize;
            document.getElementById("submit").disabled = false;
        } else {
            document.querySelector('#max').innerHTML = "File harus berupa foto";
            document.getElementById("submit").disabled = true;
        }
    });
    </script>

    <!-- preview -->
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

    <!-- Get Daerah -->
    <script type="text/javascript">
    $(document).ready(function() {
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

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>