<?php
session_start();
if ($_SESSION['role'] == '0') {
    header('location:anggota/index.php');
} elseif ($_SESSION['role'] == '1') {
    header('location:pengurus/index.php');
} else {
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
    <link rel="icon" type="image/" href="../assets/img/logoFkp.svg">

    <title>Login </title>
</head>

<body>
    <div class="container">
        <div class="row row-responsive">
            <div class="col-12 col-xl-6 register px-3 px-xl-0">
                <a href="../index.php"><img src="../admin/assets/img/sign/sign-logo.png" class="mt-4" alt=""></a>
                <h2 class="fw-bold pt-5 mt-2">Login FKP </h2>
                <h6>Masuk dengan akun FKP-mu</h6>
                <form class="mt-5" action="/server/login.php" method="post">
                    <div class="col-12 col-xl-8">
                        <label for="exampleInputEmail1" class="form-label fw-bold">Email</label>
                        <input type="email" class="form-control f-14" id="exampleInputEmail1"
                            aria-describedby="emailHelp" name="email" required="true">
                    </div>
                    <div class="col-12 col-xl-8 mt-4">
                        <label for="exampleInputPassword1" class="form-label fw-bold">Sandi</label>
                        <div class="position-relative">
                            <i class="position-icon position-absolute top-cus d-flex justify-content-end me-3"
                                onclick="password_show_hide();">
                                <i class="fas fa-eye" id="show_eye"></i>
                                <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                            </i>
                            <input name="password" type="password" value="" class="input form-control f-14 mt-3"
                                id="password" required="true" aria-label="password" aria-describedby="basic-addon1" />
                        </div>
                    </div>
                    <div class="col-md-12 pt-5 ">
                        <button type="submit" class="btn btn-danger  me-5">Login</button>
                    </div>
                    <div class="col-md-12 pt-3">
                        <small>
                            <p> Belum punya akun ? <a href="regis.php" class="text-decoration-none text-danger">Daftar
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
    <div class="position-fixed top-0 end-0 p-3" style="z-index: 110">
        <div id="notifToast" class="toast fade hide" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <svg class="bd-placeholder-img rounded me-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#007aff"></rect>
                </svg>

                <strong class="me-auto">FKP</strong>
                <small>Just Now</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body" id="msgNotif">

            </div>
        </div>
    </div>


    <script src="../admin/assets/js/sign/pw.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>
<?php
if(isset($_GET['p'])){
    echo'
<script>
document.addEventListener("DOMContentLoaded", function() {
    var btn = document.getElementById("myBtn");
    var element = document.getElementById("notifToast");
    var msg = document.getElementById("msgNotif");

    // Create toast instance
    var myToast = new bootstrap.Toast(element);
    msg.innerHTML = "'.$_GET['p'].'";

    myToast.show();
});
</script>
';
}
?>

</html>