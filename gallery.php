<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
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
    <section id="news" class="bgLeft">
        <div class="container container-custom">
            <div class="image">
                <h1 class="name">26-03-2022</h1>
                <img src="assets/img/1.jpg" alt="" class="imgDetail">
            </div>
            <div class="image">
                <h1 class="name">26-03-2022</h1>
                <img src="assets/img/2.jpg" alt="" class="imgDetail">
            </div>

            <div class="image">
                <h1 class="name">26-03-2022</h1>
                <img src="assets/img/2.jpg" alt="" class="imgDetail">
            </div>
            <div class="image">
                <h1 class="name">26-03-2022</h1>
                <img src="assets/img/3.jpg" alt="" class="imgDetail">
            </div>
            <div class="image">
                <h1 class="name">26-03-2022</h1>
                <img src="assets/img/3.jpg" alt="" class="imgDetail">
            </div>
            <div class="image">
                <h1 class="name">26-03-2022</h1>
                <img src="assets/img/4.jpg" alt="" class="imgDetail">
            </div>
            <div class="image">
                <h1 class="name">26-03-2022</h1>
                <img src="assets/img/5.jpg" alt="" class="imgDetail">
            </div>
            <div class="image">
                <h1 class="name">26-03-2022</h1>
                <img src="assets/img/4.jpg" alt="" class="imgDetail">
            </div>
            <div class="image">
                <h1 class="name">26-03-2022</h1>
                <img src="assets/img/5.jpg" alt="" class="imgDetail">
            </div>
            <div class="image">
                <h1 class="name">26-03-2022</h1>
                <img src="assets/img/4.jpg" alt="" class="imgDetail">
            </div>
            <div class="image">
                <h1 class="name">26-03-2022</h1>
                <img src="assets/img/5.jpg" alt="" class="imgDetail">
            </div>
            <div class="image">
                <h1 class="name">26-03-2022</h1>
                <img src="assets/img/3.jpg" alt="" class="imgDetail">
            </div>
            <div class="image">
                <h1 class="name">26-03-2022</h1>
                <img src="assets/img/3.jpg" alt="" class="imgDetail">
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