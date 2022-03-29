<?php
include('server/koneksi.php');

function tanggal($data)
{
    $tanggal = explode(" ", $data);
    $date = date("d-m-Y", strtotime($tanggal[0]));
    $date = str_replace("-", "/", $date);
    $hasil = $date . ", " . $tanggal[1];
    return $hasil;
}

$data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM berita WHERE id = '$_GET[id]'"));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Detail</title>
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

    <!-- Navbar -->
    <?php include "components/Navbar.php" ?>

    <!-- News -->
    <section id="news" class="bgLeft mx-auto position-relative">
        <div class="container">
            <div class="row mx-auto gap-3 gap-xl-0 d-flex align-items-start justify-content-between">
                <div class="col-xl-5 col-12 ps-0 ms-0 mt-5">
                    <p class="fz-14"><?= $data['oleh'] ?> - <?= tanggal($data['tanggal']) ?> WIB
                    </p>
                    <h4 class="fw-600"><?= $data['judul'] ?>
                    </h4>
                    <?= $data['isi'] ?>
                </div>
                <div class="col-xl-6 col-12 ps-md-5 pt-5">
                    <div class="d-flex justify-content-between">
                        <div class="left ms-3">
                            <h5 class="fw-600">Berita Serupa</h5>
                            <img src="assets/img/garisMerah.png" alt="">
                        </div>
                        <div class="right">
                            <a href="#" class="text-dark"><span class="fz-12 fw-600">Selanjutnya ></span></a>
                        </div>
                    </div>
                    <div class="p-3">
                        <!-- <?php
                                foreach ($news as $n) {
                                    if ($i != 0) {
                                ?> -->
                        <div class="row mb-4 d-flex align-items-center">
                            <div class="col-12 col-md-4">
                                <img src="assets/img/newsList1.svg" alt="" class="newList">
                            </div>
                            <div class="col-12 col-md-8">
                                <p class="fz-14">Kompas.com - 08/03/2022, 07:00 WIB</p>
                                <h6 class="fz-14 fw-600">Cetak Wirausaha Baru Lewat Pesantren, KemenKopUKM Kerjasama
                                    dengan
                                    PBNU
                                </h6>
                                <a class="text-dark" class="#" href="#">
                                    <div class="d-flex-align-items-center">
                                        <span class="fz-14 fw-600">Read More</span>
                                        <img src="assets/img/arrowNews.svg" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- <?php
                                    } else {
                                        $i++;
                                    }
                                }
                                ?> -->
                        <div class="row mb-4 d-flex align-items-center">
                            <div class="col-12 col-md-4">
                                <img src="assets/img/newsList1.svg" alt="" class="newList">
                            </div>
                            <div class="col-12 col-md-8">
                                <p class="fz-14">Kompas.com - 08/03/2022, 07:00 WIB</p>
                                <h6 class="fz-14 fw-600">Cetak Wirausaha Baru Lewat Pesantren, KemenKopUKM Kerjasama
                                    dengan
                                    PBNU
                                </h6>
                                <a class="text-dark" class="#" href="#">
                                    <div class="d-flex-align-items-center">
                                        <span class="fz-14 fw-600">Read More</span>
                                        <img src="assets/img/arrowNews.svg" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row mb-4 d-flex align-items-center">
                            <div class="col-12 col-md-4">
                                <img src="assets/img/newsList1.svg" alt="" class="newList">
                            </div>
                            <div class="col-12 col-md-8">
                                <p class="fz-14">Kompas.com - 08/03/2022, 07:00 WIB</p>
                                <h6 class="fz-14 fw-600">Cetak Wirausaha Baru Lewat Pesantren, KemenKopUKM Kerjasama
                                    dengan
                                    PBNU
                                </h6>
                                <a class="text-dark" class="#" href="#">
                                    <div class="d-flex-align-items-center">
                                        <span class="fz-14 fw-600">Read More</span>
                                        <img src="assets/img/arrowNews.svg" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row mb-4 d-flex align-items-center">
                            <div class="col-12 col-md-4">
                                <img src="assets/img/newsList1.svg" alt="" class="newList">
                            </div>
                            <div class="col-12 col-md-8">
                                <p class="fz-14">Kompas.com - 08/03/2022, 07:00 WIB</p>
                                <h6 class="fz-14 fw-600">Cetak Wirausaha Baru Lewat Pesantren, KemenKopUKM Kerjasama
                                    dengan
                                    PBNU
                                </h6>
                                <a class="text-dark" class="#" href="#">
                                    <div class="d-flex-align-items-center">
                                        <span class="fz-14 fw-600">Read More</span>
                                        <img src="assets/img/arrowNews.svg" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </section>

    <!-- Footer -->
    <?php include "components/Footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
    $(window).scroll(function() {
        if ($(this).scrollTop() > 5) {
            $('#dynamic').addClass('nav-bg');
            $('#dynamic').addClass('nav-bg');
        } else {
            $('#dynamic').removeClass('nav-bg');
            $('#dynamic').removeClass('nav-bg');
        }
    });

    var slides = document.querySelectorAll('.slide');
    var btns = document.querySelectorAll('.indicator');
    let currentSlide = 1;

    btns.forEach((btn, i) => {
        btn.addEventListener("click", () => {
            manualNav(i);
            currentSlide = i;
        });
    });

    $('#nav a').click(function() {
        $('#nav a.active').removeClass('active');
        $(this).addClass('active');
    });
    $(window).scroll(function() {
        var href = $(this).scrollTop();
        $('.link').each(function(event) {
            if (href >= $($(this).attr('href')).offset().top - 1) {
                $('#nav a.active').removeClass('active');
                $(this).addClass('active');
            }
        });
    });
    </script>
</body>

</html>