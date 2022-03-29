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

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
}
//whether ip is from proxy
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
}
//whether ip is from remote address
else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
$date = date("Y-m-d");

$check = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM viewer WHERE ip = '$ip' ORDER BY id DESC"));
if ($ip == $check['ip']) {
    if ($date != $check['tanggal']) {
        mysqli_query($koneksi, "INSERT INTO viewer (ip, tanggal) VALUES ('$ip', '$date')");
    }
} else {
    mysqli_query($koneksi, "INSERT INTO viewer (ip, tanggal) VALUES ('$ip', '$date')");
}

$viewer = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM viewer"));

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
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
                <?php
                $news = mysqli_query($koneksi, "SELECT * FROM berita ORDER BY id DESC LIMIT 6");
                $berita = mysqli_fetch_assoc($news);
                ?>
                <div class="col-xl-5 col-12 ps-0 ms-0 mt-5">
                    <p class="fz-14"><?= $berita['oleh'] ?> - <?= tanggal($berita['tanggal']) ?> WIB
                    </p>
                    <h4 class="fw-600">Menepis Pandangan Berbisnis yang Menyesatkan
                    </h4>
                    <img src="assets/img/imgNews.svg" class="mt-4" alt="">
                    <p class="fz-14 mt-4">
                        <?= substr(strip_tags($berita['isi']), 0, 300) ?>...
                        <!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit
                        amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim
                        praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam
                        dignissim diam quis enim lobortis scelerisque fermentum dui faucibus in ornare quam viverra -->
                    </p>
                    <a href="news-detail.php?id=<?= $berita['id'] ?>" class="text-dark" href="#">
                        <div class="d-flex-align-items-center">
                            <span class="fz-14 fw-600">Read More</span>
                            <img src="assets/img/arrowNews.svg" alt="">
                        </div>
                    </a>
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
            <div class="row mx-auto gap-3 gap-xl-0 d-flex align-items-start justify-content-between mb-4">
                <div class="col-12 ps-0">
                    <h5 class="fw-600">Berita Terbaru</h5>
                    <img src="assets/img/garisMerah.png" alt="">
                </div>
                <?php
                $news = mysqli_query($koneksi, "SELECT * FROM berita ORDER BY id DESC LIMIT 6");
                $align = "left";
                foreach ($news as $berita) {
                    if ($align == "left") {
                ?>
                <div class="col-xl-5 col-12 ps-0 ms-0 mt-5">
                    <div class="d-flex">
                        <img src="assets/img/newsList1.svg" alt="" class="newList">
                        <div class="d-flex flex-column ms-4">
                            <p class="fz-14"><?= $berita['oleh'] ?> - 08/03/2022, 07:00 WIB</p>
                            <h6 class="fz-14 fw-600"><?= $berita['judul'] ?></h6>
                            <a class="text-dark" class="#" href="news-detail.php?id=<?= $berita['id'] ?>">
                                <div class="d-flex-align-items-center">
                                    <span class="fz-14 fw-600">Read More</span>
                                    <img src="assets/img/arrowNews.svg" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
                        $align = "right";
                    } else {
                    ?>
                <div class="col-xl-6 col-12 ps-md-5 pt-5">
                    <div class="row mb-4 d-flex align-items-center">
                        <div class="col-12 col-md-4">
                            <img src="assets/img/newsList1.svg" alt="" class="newList">
                        </div>
                        <div class="col-12 col-md-8">
                            <p class="fz-14"><?= $berita['oleh'] ?> - 08/03/2022, 07:00 WIB</p>
                            <h6 class="fz-14 fw-600"><?= $berita['judul'] ?></h6>
                            <a class="text-dark" class="#" href="news-detail.php?id=<?= $berita['id'] ?>">
                                <div class="d-flex-align-items-center">
                                    <span class="fz-14 fw-600">Read More</span>
                                    <img src="assets/img/arrowNews.svg" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
                        $align = "left";
                    }
                }
                ?>
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