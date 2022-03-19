<?php
include('../server/koneksi.php');
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

    <title>Register </title>
</head>

<body>
    <div class="container  ">
        <div class="row pb-5">
            <div class="col-md-6 col-lg-5 pt-3">
                <img src="../admin/assets/img/sign/sign-logo.png" class="sign-logo" alt="">
            </div>

            <div class="col-md-6 col-lg-6 background">
                <img src="../admin/assets/img/sign/bg-fkp.png" class=" sign-background" alt="">
            </div>
        </div>

        <div class="row ">
            <div class="col-lg-6 register">
                <h2 class="fw-bold registext">Register FKP </h2>
                <h6>Buat akunmu dan jadilah member FKP</h6>
                <form class="mt-5" action="../server/register.php" method="post" enctype="multipart/form-data">
                    <div class="hidden">
                        <input type="hidden" value="<?= $_POST['nama'] ?>" name="nama">
                        <input type="hidden" value="<?= $_POST['email'] ?>" name="email">
                        <input type="hidden" value="<?= $_POST['password'] ?>" name="password">
                        <input type="hidden" value="<?= $_POST['usia'] ?>" name="usia">
                        <input type="hidden" value="<?= $_POST['ttl'] ?>" name="ttl">
                        <input type="hidden" value="<?= $_POST['nik'] ?>" name="nik">
                        <input type="hidden" value="<?= $_POST['usaha'] ?>" name="usaha">
                        <input type="hidden" value="<?= $_POST['ig'] ?>" name="ig">
                        <input type="hidden" value="<?= $_POST['nomer'] ?>" name="nomer">
                    </div>
                    <div class="d-flex flex-wrap ">
                        <div class="col-md-5 col-sm-5 col-lg-5 col-12 ">
                            <label for="nama" class="form-label fw-bold">DPW (Provinsi)</label>

                            <select name="provinsi" class="form-control form-control-signup f-14" id="provinsi">
                                <option value=""> Provinsi</option>
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
                        <div class="col-md-5 col-sm-5 col-lg-3 col-12 ms-lg-5 ms-sm-5 ">
                            <label for="exampleInputEmail1" class="form-label fw-bold">DPD (Kota/Kab)</label>

                            <select name="kota" class="form-control f-14" id="form_kab">
                                <option> Kota/Kabupaten</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap mt-lg-4">
                        <div class="col-md-11 col-sm-11 col-lg-11 col-12">
                            <label for="exampleInputPassword" class="form-label mt-1 fw-bold">Alamat</label>

                            <input type="alamat" class="form-control form-lebih" aria-label="alamat"
                                aria-describedby="button-addon2" id="alamat" name="alamat" />
                        </div>

                    </div>
                    <div class="d-flex flex-wrap mt-lg-4">
                        <div class="col-md-11 col-sm-11 col-lg-11 col-12">
                            <label for="exampleInputPassword" class="form-label mt-1 fw-bold">Alasan Bergabung
                                Fkp</label>

                            <input type="alasan" class="form-control form-lebih" aria-label="alasan"
                                aria-describedby="button-addon2" id="alasan" name="alasan" />
                        </div>

                    </div>
                    <div class="d-flex">

                        <div class="col-lg-5 pt-4 d-flex">
                            <div class="file-input">
                                <p class="fw-bold">Pas photo</p>
                                <input type="file" id="file" class="file">
                                <label for="file" class="label-1">

                                    <i class="ri-add-circle-fill fs-1 text-danger"></i>
                                </label>
                            </div>
                            <small>
                                <p class="pt-4 mt-3 ms-2">*max ukurun file 2mb dan ukuran resolusi photo 4x4</p>

                            </small>
                        </div>
                        <div class="col-lg-3 pt-4 ms-6">
                            <div class="file-input">
                                <p class="fw-bold">KTP</p>
                                <input type="file" id="file" class="file">
                                <label for="file" class="label-2">

                                    <i class="ri-add-circle-fill fs-2 text-danger"></i>
                                </label>
                            </div>


                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 pt-3">

                        <button type="submit" class="btn btn-danger ms-3 me-5">Daftar</button>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <small>
                            <p> Sudah punya akun ? <a href="login.php" class="text-decoration-none text-danger">Login
                                    sekarang</a></p>

                        </small>
                    </div>

                </form>
            </div>
            <div class="col-md-6 welcome  ">
                <div class="opening ms-5">
                    <h1 class="ms-5 text-light fw-bold f-48">Selamat datang kembali </h1>
                    <h6 class="ms-5 ps-5 mt-4 text-light">Bersama kita wujudkan Muda Berkompetisi, Berkolaborasi &
                        Berkontribusi</h6>
                </div>
            </div>
        </div>
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

    <!-- pw -->

    <script>
    var password = document.getElementById("password");
    var confirmPassword = document.getElementById("confirmPassword");
    var hidePassword = document.getElementById("hidePassword");
    var hideConfirmPassword = document.getElementById("hideConfirmPassword");

    hidePassword.addEventListener("click", function() {
        if (password.type === "password") {
            password.type = "text";
            hidePassword.classList.remove("ri-eye-line");
            hidePassword.classList.add("ri-eye-off-line");
        } else {
            password.type = "password";
            hidePassword.innerHTML = "";
            hidePassword.classList.add("ri-eye-line");
            hidePassword.classList.remove("ri-eye-off-line");
        }
    });

    hideConfirmPassword.addEventListener("click", function() {
        if (confirmPassword.type === "password") {
            confirmPassword.type = "text";
            hideConfirmPassword.classList.remove("ri-eye-line");
            hideConfirmPassword.classList.add("ri-eye-off-line");
        } else {
            confirmPassword.type = "password";
            hideConfirmPassword.classList.add("ri-eye-line");
            hideConfirmPassword.classList.remove("ri-eye-off-line");
        }
    });

    confirmPassword.addEventListener("keyup", function() {
        if (password.value === confirmPassword.value) {
            document.getElementById("textConfirm").innerHTML = "Password Match";
            document.getElementById("textConfirm").style.color = "green";
        } else {
            document.getElementById("textConfirm").innerHTML =
                "Password Not Match";
            document.getElementById("textConfirm").style.color = "red";
        }
    });

    password.addEventListener("keyup", function() {
        if (password.value === confirmPassword.value) {
            document.getElementById("textConfirm").innerHTML = "Password Match";
            document.getElementById("textConfirm").style.color = "green";
        } else {
            document.getElementById("textConfirm").innerHTML =
                "Password Not Match";
            document.getElementById("textConfirm").style.color = "red";
        }
    });
    </script>
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