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
    <link rel="stylesheet" href="../admin/assets/css/style-signup.css?<?php echo time ()?>">


    <title>Register </title>
</head>

<body>
    <div class="container  ">
        <div class="row pb-5">
            <div class="col-md-6 pt-3">
                <img src="../admin/assets/img/sign/sign-logo.png" class="sign-logo" alt="">
            </div>

            <div class="col-md-6 background">
                <img src="../admin/assets/img/sign/sign-bg-img.png" class=" sign-background" alt="">
            </div>
        </div>

        <div class="row ">
            <div class="col-lg-6 register">
                <h2 class="fw-bold registext">Register FKP </h2>
                <h6>Buat akunmu dan jadilah member FKP</h6>
                <form class="mt-5" action="/server/register.php" method="post" enctype="multipart/form-data">

                    <div class="d-flex flex-wrap ">
                        <div class="col-md-5 col-sm-5 col-lg-5 col-12 ">
                            <label for="nama" class="form-label fw-bold">Nama Lengkap</label>
                            <input type="text" placeholder="Nama" class="form-control form-control-signup f-14"
                                id="exampleInputEmail1" aria-describedby="nama" name="nama">
                        </div>
                        <div class="col-md-5 col-sm-5 col-lg-5 col-12 ms-lg-5 ms-sm-5 ">
                            <label for="exampleInputEmail1" class="form-label fw-bold">Email</label>
                            <input type="email" placeholder="Email" class="form-control f-14" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="email">
                        </div>
                    </div>
                    <div class="d-flex flex-wrap mt-lg-4">
                        <div class="col-md-5 col-sm-5 col-lg-5 col-12">
                            <label for="exampleInputPassword" class="form-label mt-1">New Password</label>
                            <i class="position-icon d-flex justify-content-end">
                                <i class="btn  text-decoration-none ri-eye-line" id="hidePassword"></i>
                            </i>
                            <input type="password" class="form-control" placeholder="Password" aria-label="Password"
                                aria-describedby="button-addon2" id="password" name="password" />
                        </div>
                        <div class="col-md-5 col-sm-5 col-lg-5 col-12 ms-lg-5  ms-sm-5">
                            <label for="exampleInputPassword" class="form-label mt-1">Repeat Password</label>
                            <i class="position-icon d-flex justify-content-end" onclick="password_show_hide();">
                                <i class="btn text-decoration-none ri-eye-line" id="hideConfirmPassword">
                                </i>
                            </i>
                            <input type="password" class="form-control" placeholder="Confirm Password"
                                aria-label="Confirm Password" aria-describedby="button-addon2" id="confirmPassword"
                                name="password2" />
                        </div>
                    </div>
                    <div class="d-flex flex-wrap mt-lg-4">
                        <div class="col-md-5 col-sm-5 col-lg-5 col-12">
                            <label for="nama" class="form-label fw-bold">Usia</label>
                            <input type="text" placeholder="Usia" class="form-control form-control-signup f-14"
                                id="exampleInputEmail1" aria-describedby="nama" name="usia">
                        </div>
                        <div class="col-md-5 col-sm-5 col-lg-5 col-12 ms-lg-5 ms-sm-5">
                            <label for="exampleInputEmail1" class="form-label fw-bold">Tempat,Tanggal Lahir</label>
                            <input type="text" placeholder="Pending" class="form-control f-14" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="ttl">
                        </div>
                    </div>
                    <div class="d-flex flex-wrap mt-lg-4">
                        <div class="col-md-5 col-sm-5 col-lg-5 col-12">
                            <label for="nama" class="form-label fw-bold">NIK</label>
                            <input type="number" placeholder="NIK" class="form-control form-control-signup f-14"
                                id="exampleInputEmail1" aria-describedby="nama" name="nik">
                        </div>
                        <div class="col-md-5 col-sm-5 col-lg-5 col-12 ms-lg-5 ms-sm-5">
                            <label for="exampleInputEmail1" class="form-label fw-bold">Usaha</label>
                            <input type="text" placeholder="Usaha" class="form-control f-14" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="usaha">
                        </div>
                    </div>
                    <div class="d-flex flex-wrap mt-lg-4">
                        <div class="col-md-5 col-sm-5 col-lg-5 col-12">
                            <label for="nama" class="form-label fw-bold">Instagram</label>
                            <input type="text" placeholder="@username" class="form-control form-control-signup f-14"
                                id="exampleInputEmail1" aria-describedby="nama" name="ig">
                        </div>
                        <div class="col-md-5 col-sm-5 col-lg-5 col-12 ms-lg-5 ms-sm-5">
                            <label for="exampleInputEmail1" class="form-label fw-bold">No.Telp/Whatsapp</label>
                            <input type="number" placeholder="Nomor" class="form-control f-14" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="nomer">
                        </div>
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
            <div class="col-lg-1 col-md-6 me-3">
                <div class="d-flex">
                    <h6 class="fw-bold border-custom">Selanjutnya </h6>
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <h6 class="href">Sudah punya akun ? <a href="login.php" class="text-decoration-none text-danger">Login
                        sekarang</a></h6>
            </div>
            <div class="col-md-12 ">
                <div class="d-flex justify-content-end">
                    <img src="../admin/assets/img/sign/fb.png" alt="">
                    <img src="../admin/assets/img/sign/yt.png" class="mx-4" alt="">
                    <img src="../admin/assets/img/sign/ig.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-center ">

                            <img src="../admin/assets/img/sign/people.png" class="people-img " alt="">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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