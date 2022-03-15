<?php
if (isset($_GET['key'])) {
    switch ($_GET['key']) {
        case 1:
            echo "  <script>
                        alert('Password salah');
                        window.location = 'login.php';
                    </script>";
            break;
        case 2:
            echo "  <script>
                        alert('Email tidak terdaftar');
                        window.location = 'login.php';
                    </script>";
            break;
        default:
            $a = "";
    }
}
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
    <link rel="stylesheet" href="../admin/assets/css/style-sign.css?<?php echo time() ?>">

    <title>Login </title>
</head>

<body>

    <div class="container  ">
        <div class="row pb-5">
            <div class="col-md-6 pt-3">
                <img src="../admin/assets/img/sign/sign-logo.png" alt="">
            </div>
            <div class="col-md-6">
                <img src="../admin/assets/img/sign/sign-bg-img.png" class=" sign-background" alt="">
            </div>
        </div>

        <div class="row pt-3">
            <div class="col-md-6">
                <h2 class="fw-bold">Login FKP </h2>
                <h6>Masuk dengan akun FKP-mu</h6>


                <form class="mt-5" action="/server/login.php" method="post">
                    <div class="col-md-12  col-lg-5 col-xs-6  mb-3">
                        <label for="exampleInputEmail1" class="form-label fw-bold">Email</label>
                        <input type="email" placeholder="Email" class="form-control f-14" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required="true">
                    </div>
                    <div class="col-md-12  col-lg-5 col-xs-6  pt-5">
                        <label for="exampleInputPassword1" class="form-label fw-bold">Sandi</label>
                        <i class="position-icon  d-flex justify-content-end me-3 " onclick="password_show_hide();">
                            <i class="fas fa-eye" id="show_eye"></i>
                            <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                        </i>
                        <input name="password" placeholder="Sandi" type="password" value="" class="input form-control f-14" id="password" required="true" aria-label="password" aria-describedby="basic-addon1" />
                    </div>
                    <div class="d-flex pt-5 mt-5">
                        <button type="submit" class="btn btn-danger ms-3 me-5">Login</button>
                        <p> Belum punya akun ? <a href="regis.php" class="text-decoration-none text-danger">Daftar
                                sekarang</a></p>
                    </div>
                </form>
            </div>
            <div class="col-md-6  ">
                <div class="text ms-5">
                    <h1 class="ms-5 text-light fw-bold f-48">Selamat datang kembali </h1>
                    <h6 class="ms-5 ps-5 mt-4 text-light">Bersama kita wujudkan Muda Berkompetisi, Berkolaborasi &
                        Berkontribusi</h6>
                </div>
            </div>
        </div>
        <div class="row social">
            <div class="col-md-12  ">
                <div class="d-flex justify-content-end">
                    <h6 class="text-light me-4 ">Social Media</h6>
                </div>
            </div>
        </div>
        <div class="row social">
            <div class="col-md-12  ">
                <div class="d-flex justify-content-end">
                    <img src="../admin/assets/img/sign/fb.png" alt="">
                    <img src="../admin/assets/img/sign/yt.png" class="mx-4" alt="">
                    <img src="../admin/assets/img/sign/ig.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- pw -->
    <script src="../admin/assets/js/sign/pw.js"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>