<?php
include('../server/koneksi.php');
session_start();
if ($_SESSION['role']) {
    header('location: login.php');
    exit;
}
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

    <!-- Selectize -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js"
        integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css"
        integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />

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
                <form id="my_form" class="mt-5" action="regis2.php" method="post" enctype="multipart/form-data">
                    <div class="d-flex flex-wrap row">
                        <div class="col-12 col-xl-5 mt-4">
                            <label for="nama" class="form-label fw-bold">Nama Lengkap</label>
                            <input type="text" class="form-control form-control-signup f-14" id="inputNama"
                                aria-describedby="nama" name="nama" required>
                        </div>
                        <div class="col-12 col-xl-5 ms-xl-5 mt-4">
                            <label for="exampleInputEmail1" class="form-label fw-bold">Email</label>
                            <input type="email" class="form-control f-14" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="email">
                        </div>
                    </div>
                    <div class="d-flex flex-wrap row">
                        <div class="col-12 col-xl-5 mt-4">
                            <label for="exampleInputPassword" class="form-label mt-1 fw-bold">New Password</label>
                            <i class="position-icon d-flex justify-content-end">
                                <i class="btn  text-decoration-none ri-eye-line" id="hidePassword"></i>
                            </i>
                            <input type="password" class="form-control" aria-label="Password"
                                aria-describedby="button-addon2" id="password" name="password" required />
                            <span id="textConfirm" style="color: red; display: none;">Password Not Match</span>
                        </div>
                        <div class="col-12 col-xl-5 ms-xl-5 mt-4">
                            <label for="exampleInputPassword" class="form-label mt-1 fw-bold">Repeat Password</label>
                            <i class="position-icon d-flex justify-content-end" onclick="password_show_hide();">
                                <i class="btn text-decoration-none ri-eye-line" id="hideConfirmPassword">
                                </i>
                            </i>
                            <input type="password" class="form-control" aria-label="Confirm Password"
                                aria-describedby="button-addon2" id="confirmPassword" name="password2" required />
                            <span id="textConfirm2" style="color: red; display: none; font-size:11px;"
                                class="mt-2">Password Not Match</span>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap row">
                        <div class="col-12 col-xl-3 mt-4">
                            <label for="number" class="form-label fw-bold">Usia</label>
                            <input type="number" class="form-control form-control-signup f-14" id="exampleInputEmail1"
                                aria-describedby="nama" name="usia" required>
                        </div>
                        <label for="nama" class="d-flex d-xl-none form-label fw-bold mt-4">Tempat,Tanggal
                            Lahir</label>
                        <div class="col-12 col-xl-5 mt-4">
                            <label for="nama" class="d-none d-xl-flex form-label fw-bold">Tempat,Tanggal
                                Lahir</label>
                            <select class="form-control form-control-signup" id="select" name="tempat"
                                placeholder="Pilih Kota" required>
                                <option value=""></option>
                                <?php
                                $sql = mysqli_query($koneksi, "SELECT name FROM regencies");
                                while ($data = mysqli_fetch_array($sql)) {
                                    echo "<option value='" . $data['name'] . "'>" . $data['name'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-Ttl col-12 col-xl-3">
                            <label for="exampleInputEmail1" class="form-label fw-bold "></label>
                            <input type="date" class="form-control f-14" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="ttl" required>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap row">
                        <div class="col-12 col-xl-5 mt-4">
                            <label for="nama" class="form-label fw-bold">NIK</label>
                            <input type="number" class="form-control form-control-signup f-14" id="exampleInputEmail1"
                                aria-describedby="nama" name="nik" required>
                        </div>
                        <div class="col-12 col-xl-5 ms-xl-5 mt-4">
                            <label for="exampleInputEmail1" class="form-label fw-bold">Usaha</label>
                            <input type="text" class="form-control f-14" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="usaha" required>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap row">
                        <div class="col-12 col-xl-5 mt-4">
                            <label for="nama" class="form-label fw-bold">Instagram</label>
                            <input type="text" class="form-control form-control-signup f-14" id="exampleInputEmail1"
                                aria-describedby="nama" name="ig" required>
                        </div>
                        <div class="col-md-5 col-sm-5 col-lg-5 col-12 ms-xl-5 mt-4">
                            <label for="exampleInputEmail1" class="form-label fw-bold">No.Telp/Whatsapp</label>
                            <input type="number" class="form-control f-14" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="nomer" required>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 me-3 pt-5">
                        <div class="d-flex">
                            <!-- <a href="javascript:{}" class="text-decoration-none text-dark" onclick="document.getElementById('my_form').submit();">
                                <h6 class="fw-bold border-custom" type="submit">Selanjutnya </h6>
                            </a> -->
                            <button class="fw-bold border-custom" type="submit" style="all:unset;"
                                id="submit">Selanjutnya</button>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mt-1">
                        <small>
                            <p class="href">Sudah punya akun ? <a href="login.php"
                                    class="text-decoration-none text-danger">Login
                                    sekarang</a></p>
                        </small>
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
    var password = document.getElementById("password");
    var confirmPassword = document.getElementById("confirmPassword");
    var hidePassword = document.getElementById("hidePassword");
    var hideConfirmPassword = document.getElementById("hideConfirmPassword");
    var text1 = document.getElementById("textConfirm");
    var text2 = document.getElementById("textConfirm2");

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
        // text1.style.display = "block";
        text2.style.display = "block";
        if (password.value === confirmPassword.value) {
            text1.innerHTML = "Password Match";
            text1.style.color = "green";
            text2.innerHTML = "Password Match";
            text2.style.color = "green";
            document.getElementById("submit").disabled = false;
        } else {
            text1.innerHTML =
                "Password Not Match";
            text1.style.color = "red";
            text2.innerHTML =
                "Password Not Match";
            text2.style.color = "red";
            document.getElementById("submit").disabled = true;
        }
    });
    </script>

    <!-- Selectize -->
    <script>
    $(document).ready(function() {
        $('select').selectize({
            create: true,
            sortField: {
                field: 'text',
                direction: 'asc'
            },
            dropdownParent: 'body'
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