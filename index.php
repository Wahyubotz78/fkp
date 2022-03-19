<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="assets/css/style.css?<?php echo time(); ?>">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>
    <!-- Navbar -->
    <?php include "components/Navbar.php" ?>

    <!-- Hero -->
    <div class="container mt-5 pt-5 position-relative text-center text-md-start">
        <img src="assets/img/decorHero.svg" class="decorHero position-absolute d-none d-md-block" alt="">
        <div class="row mt-5 pt-5 d-flex justify-content-center justify-content-md-between gap-4 flex-wrap">
            <div class="col-12 col-md-3 bg-hero">
                <h6 class="text-uppercase fw-700">selamat datang di</h6>
                <h1 class="text-capitalize fw-bold lh-base">forum kewirausahaan pemuda</h1>
                <p class="mt-5 fs-6">
                    Ayo gabung jadi anggota FKP sekarang juga!
                </p>
                <a href="admin/regis.php " class="btn btn-danger fs-6">Gabung Sekarang </a>

            </div>
            <div class="col-12 col-md-7 d-flex">
                <img src="assets/img/imgHero2.svg" alt="Hero Image" class="imgHero object-cover img-fluid">
                <a href="#history" class="scrollHero d-flex align-items-center text-dark d-none d-md-flex">
                    <div class="scroll-prompt" scroll-prompt="" ng-show="showPrompt" style="opacity: 1;">
                        <div class="scroll-prompt-arrow-container">
                            <div class="scroll-prompt-arrow">
                                <div></div>
                            </div>
                            <div class="scroll-prompt-arrow">
                                <div></div>
                            </div>
                        </div>
                    </div>
                    <span class="scroll fw-600">scroll</span>
                </a>
            </div>
        </div>
    </div>

    <!-- History -->
    <section id="history" class="mx-auto position-relative">
        <div class="container">
            <h3 class="fw-700 text-center bgDecor">Our History</h3>
            <img src="assets/img/decorHero.svg" alt="" class="position-absolute decorHistory d-none d-md-block">
            <div class="">
                <!-- <img src="assets/img/imgHistoryRight.svg" class="imgHistoryRight position-absolute end-0" alt=""> -->
            </div>
            <div class="row mt-5 pt-5">
                <div class="col-md-3">
                    <h3 class="fw-600 text-center">2010</h3>
                    <p class="fz-14 text-center">Didirikan pada tgl 1 November 2010 di Anyer, Provinsi Banten</p>
                </div>
                <div class="col-md-3">
                    <h3 class="fw-600 text-center">2011</h3>
                    <p class="fz-14 text-center">Pertama kali membentuk Pengurus Wilayah di 3 Provinsi</p>
                </div>
                <div class="col-md-3">
                    <h3 class="fw-600 text-center">2012</h3>
                    <p class="fz-14 text-center">Pertama lali membentuk Pengurus Daeah FKP beberapa Kota dan Kabupaten
                        di Indonesia</p>
                </div>
                <div class="col-md-3">
                    <h3 class="fw-600 text-center">2014</h3>
                    <p class="fz-14 text-center">Melakukan kegiatan bisnis bertaraf ernasional dan membawa produk -
                        produk milik anggota FKP</p>
                </div>
                <div class="mb-5 pb-3 col-md-3 text-end d-none d-md-block">
                    <span class="me-1"><img src="assets/img/garisHistory.svg" alt=""></span>
                    <span class="me-1"><img src="assets/img/garisSmallHistory.svg" alt=""></span>
                </div>
                <div class="mb-5 pb-3 col-md-3 text-end d-none d-md-block">
                    <span class=" me-1"><img src="assets/img/garisSmallHistory.svg" alt=""></span>
                    <span class="me-1"><img src="assets/img/garisHistory.svg" alt=""></span>
                    <span class="me-1"><img src="assets/img/garisSmallHistory.svg" alt=""></span>
                </div>
                <div class="mb-5 pb-3 col-md-3 text-end d-none d-md-block">
                    <span class=" me-1"><img src="assets/img/garisSmallHistory.svg" alt=""></span>
                    <span class="me-1"><img src="assets/img/garisHistory.svg" alt=""></span>
                    <span class="me-1"><img src="assets/img/garisSmallHistory.svg" alt=""></span>
                </div>
                <div class="mb-5 pb-3 col-md-3 text-start d-none d-md-block">
                    <span class=" me-1"><img src="assets/img/garisSmallHistory.svg" alt=""></span>
                    <span class="me-1"><img src="assets/img/garisHistory.svg" alt=""></span>
                </div>

                <div class="">
                    <img src="assets/img/imgHistoryLeft.svg" class="imgHistoryLeft position-absolute bottom-cus start-0"
                        alt="">
                    <img src="assets/img/imgHistoryRight.svg"
                        class="imgHistoryRight position-absolute bottom-cus end-0 d-none d-md-block" alt="">
                </div>

                <div class="col-md-3">
                    <h3 class="fw-600 text-center">2016</h3>
                    <p class="fz-14 text-center">Menyelenggarakan Silaturahmi Pengusaha Muda Nasional dalam kegiatan
                        Gaya Muda 2016</p>
                </div>
                <div class="col-md-3">
                    <h3 class="fw-600 text-center">2017</h3>
                    <p class="fz-14 text-center">Melakukan pemilihan ketua pertama kali dengan dukungan DPW dari setiap
                        provinsi di indonesia</p>
                </div>
                <div class="col-md-3">
                    <h3 class="fw-600 text-center">2020</h3>
                    <p class="fz-14 text-center">Memiliki pengurus wilayah tersebar di 30 Provinsi di Indonesia</p>
                </div>
                <div class="col-md-3">
                    <h3 class="fw-600 text-center">2021</h3>
                    <p class="fz-14 text-center">telah memiliki anggota aktif di setiap provinsi, kota dan kabupaten ±
                        sekitar 12.000 anggota aktif berwirausaha</p>
                </div>
                <div class="mb-5 pb-3 col-md-3 d-none d-md-block text-end">
                    <span class="me-1"><img src="assets/img/garisHistory.svg" alt=""></span>
                    <span class="me-1"><img src="assets/img/garisSmallHistory.svg" alt=""></span>
                </div>
                <div class="mb-5 pb-3 col-md-3 d-none d-md-block text-end">
                    <span class="me-1"><img src="assets/img/garisSmallHistory.svg" alt=""></span>
                    <span class="me-1"><img src="assets/img/garisHistory.svg" alt=""></span>
                    <span class="me-1"><img src="assets/img/garisSmallHistory.svg" alt=""></span>
                </div>
                <div class="mb-5 pb-3 col-md-3 d-none d-md-block text-end">
                    <span class="me-1"><img src="assets/img/garisSmallHistory.svg" alt=""></span>
                    <span class="me-1"><img src="assets/img/garisHistory.svg" alt=""></span>
                    <span class="me-1"><img src="assets/img/garisSmallHistory.svg" alt=""></span>
                </div>
                <div class="mb-5 pb-3 col-md-3 d-none d-md-block text-start">
                    <span class="me-1"><img src="assets/img/garisSmallHistory.svg" alt=""></span>
                    <span class="me-1"><img src="assets/img/garisHistory.svg" alt=""></span>
                </div>
            </div>
        </div>
    </section>

    <!-- Organization Values -->
    <section id="organization" class="mx-auto text-center position-relative">
        <div class="container">
            <img src="assets/img/decorOrganization.svg" class="position-absolute decorOrganization  d-none d-md-block"
                alt="">
            <h3 class="fw-700 text-center">Our Organization Values</h3>
            <div class="d-flex align-items-center justify-content-center mb-5">
                <img src="assets/img/arrowLeft.svg" class="arrowOrganization position-absolute start-0" alt="">
                <div class="d-flex flex-column">
                    <h3 class="fw-700 text-center text-uppercase mt-5 pt-5">vision</h3>
                    <img src="assets/img/garisOrganization.svg" alt="">
                </div>
                <img src="assets/img/arrowRight.svg" class="arrowOrganization position-absolute end-0" alt="">
            </div>
            <p class="mx-auto descOrganization">Menjadi organisasi terdepan dalam mengembangkan semangat kewirausahawaan
                di kalangan pemuda</p>
            <div class="d-flex align-items-center justify-content-center mb-md-5">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <h3 class="fw-700 text-center text-uppercase mt-5 pt-5">mision</h3>
                    <img src="assets/img/garisHistory.svg" alt="">
                </div>
            </div>
            <div class="row d-flex justify-content-between mx-auto">
                <div class="col-md-3 bg-1">
                    <p class="fz-14 mt-5 pt-5">Menjadi wadah dalam peningkatan kewirausahaan pemuda baik anggota maupun
                        masyarakat melalui program kerja organisasi</p>
                    <img src="assets/img/garisHistory.svg" alt="">
                </div>
                <div class="col-md-3 bg-2">
                    <p class="fz-14 mt-5 pt-5">Menjadi organisasi yang berperan aktif dan ikut serta dalam program
                        kewirausahaan di internal maupun eksternal</p>
                    <img src="assets/img/garisHistory.svg" alt="">
                </div>


                <div class="col-md-3 bg-3">
                    <p class="fz-14 mt-5 pt-5">Menjalin komunkasi dan hubungan dengan para mitra strategis dalam
                        peningkatan kerjasama positif untuk kemajuan organisasi</p>
                    <img src="assets/img/garisHistory.svg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="mt-md-5 container">
        <div class="row mt-md-5 pt-md-5 d-flex justify-content-between gap-4">
            <div class="col-12 col-md-5">
                <p class="fz-15">Slogan FKP Periode 2021 -2024</p>
                <h1 class="text-capitalize fw-bold lh-base">Muda Berkompetisi, Berkolaborasi & Berkontribusi</h1>
                <p class="mt-5 fz-15">
                    Seluruh pengurus tahun 2021 - 2024 telah berkomitmen untuk mencapai tujuan FKP, yaitu:
                </p>
                <ul class="fz-15" style="list-style: none; padding-left: 0;">
                    <li class="fw-600 d-flex align-items-center my-3">
                        <img src="assets/img/imgList.svg" alt="" class="imgList me-2">
                        <span>80% Anggota FKP Omset Meningkat</span>
                    </li>
                    <li class="fw-600 d-flex align-items-center my-3">
                        <img src="assets/img/imgList.svg" alt="" class="imgList me-2">
                        <span>50% Anggota Berkolaborasi Bisnis</span>
                    </li>
                    <li class="fw-600 d-flex align-items-center my-3">
                        <img src="assets/img/imgList.svg" alt="" class="imgList me-2">
                        <span>20% Anggota Menyalurkan CSR</span>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-6 d-flex">
                <img src="assets/img/imgOrganization.png" alt="Hero Image"
                    class="imgOrganization img-fluid me-5 object-cover">
                <a href="#structure" class="d-flex align-items-center text-dark">
                    <div class="scroll-prompt" scroll-prompt="" ng-show="showPrompt" style="opacity: 1;">
                        <div class="scroll-prompt-arrow-container">
                            <div class="scroll-prompt-arrow">
                                <div></div>
                            </div>
                            <div class="scroll-prompt-arrow">
                                <div></div>
                            </div>
                        </div>
                    </div>
                    <span class="scroll fw-600">scroll</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Structure -->
    <section id="structure" class="container mx-auto position-relative">
        <img src="assets/img/decorOrganization.svg" class="position-absolute decorStructure d-none d-md-block" alt="">
        <h3 class="fw-700 text-center">Our Structure</h3>
        <div class="row d-flex justify-content-center text-center">
            <div class="col-10">
                <p class="text-center mt-5">Komitmen kami dalam menjalankan fungsi organisasi yang baik, maka kami
                    membentuk kepengurusan yang kuat dan berkompeten sebagai berikut</p>
                <img src="assets/img/garisHistory.svg" alt="">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 mb-3">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapse1" aria-expanded="false" aria-controls="flush-collapse1">
                                Ketua Biro Organisasi Kaderisasi & Keanggotaan
                            </button>
                        </h2>
                        <div id="flush-collapse1" class="accordion-collapse collapse" aria-labelledby="flush-heading1"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body d-flex align-items-start justify-content-between">
                                <span class="fz-14">Mikail Rakhimi - Ketua Umum</span>
                                <img src="assets/img/imgList.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapse2" aria-expanded="false" aria-controls="flush-collapse2">
                                Ketua Biro Ekonomi, Keuangan & Perbankan
                            </button>
                        </h2>
                        <div id="flush-collapse2" class="accordion-collapse collapse" aria-labelledby="flush-heading2"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body d-flex align-items-start justify-content-between">
                                <span class="fz-14">Mikail Rakhimi - Ketua Umum</span>
                                <img src="assets/img/imgList.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapse3" aria-expanded="false" aria-controls="flush-collapse3">
                                Ketua Biro Agribisnis, Agroindustri & Kemaritiman
                            </button>
                        </h2>
                        <div id="flush-collapse3" class="accordion-collapse collapse" aria-labelledby="flush-heading3"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body d-flex align-items-start justify-content-between">
                                <span class="fz-14">Mikail Rakhimi - Ketua Umum</span>
                                <img src="assets/img/imgList.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                                Ketua Biro Perdagangan Perindustrian & BUMN
                            </button>
                        </h2>
                        <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body d-flex align-items-start justify-content-between">
                                <span class="fz-14">Mikail Rakhimi - Ketua Umum</span>
                                <img src="assets/img/imgList.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                                Ketua Biro Ekraf, Perhubungan & Properti
                            </button>
                        </h2>
                        <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body d-flex align-items-start justify-content-between">
                                <span class="fz-14">Mikail Rakhimi - Ketua Umum</span>
                                <img src="assets/img/imgList.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="accordion accordion-flush" id="accordionFlushExample2">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading6">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">
                                Ketua Dewan Penasehat
                            </button>
                        </h2>
                        <div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-heading6"
                            data-bs-parent="#accordionFlushExample2">
                            <div class="accordion-body d-flex align-items-start justify-content-between">
                                <span class="fz-14">Mikail Rakhimi - Ketua Umum</span>
                                <img src="assets/img/imgList.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading7">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collapse7">
                                Ketua & Wakil Ketua Umum
                            </button>
                        </h2>
                        <div id="flush-collapse7" class="accordion-collapse collapse" aria-labelledby="flush-heading7"
                            data-bs-parent="#accordionFlushExample2">
                            <div class="accordion-body d-flex align-items-start justify-content-between">
                                <span class="fz-14">Mikail Rakhimi - Ketua Umum</span>
                                <img src="assets/img/imgList.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading8">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapse8" aria-expanded="false" aria-controls="flush-collapse8">
                                Sekretaris & Bendahara Umum
                            </button>
                        </h2>
                        <div id="flush-collapse8" class="accordion-collapse collapse" aria-labelledby="flush-heading8"
                            data-bs-parent="#accordionFlushExample2">
                            <div class="accordion-body d-flex align-items-start justify-content-between">
                                <span class="fz-14">Mikail Rakhimi - Ketua Umum</span>
                                <img src="assets/img/imgList.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="accordion accordion-flush" id="accordionFlushExample3">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading9">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapse9" aria-expanded="false" aria-controls="flush-collapse9">
                                Ketua Biro Kerjasama antar Lembaga & Instansi
                            </button>
                        </h2>
                        <div id="flush-collapse9" class="accordion-collapse collapse" aria-labelledby="flush-heading9"
                            data-bs-parent="#accordionFlushExample3">
                            <div class="accordion-body d-flex align-items-start justify-content-between">
                                <span class="fz-14">Mikail Rakhimi - Ketua Umum</span>
                                <img src="assets/img/imgList.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading10">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapse10" aria-expanded="false"
                                aria-controls="flush-collapse10">
                                Ketua Biro Koperasi, UMKM & Pengembangan Usaha
                            </button>
                        </h2>
                        <div id="flush-collapse10" class="accordion-collapse collapse" aria-labelledby="flush-heading10"
                            data-bs-parent="#accordionFlushExample3">
                            <div class="accordion-body d-flex align-items-start justify-content-between">
                                <span class="fz-14">Mikail Rakhimi - Ketua Umum</span>
                                <img src="assets/img/imgList.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading11">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapse11" aria-expanded="false"
                                aria-controls="flush-collapse11">
                                Ketua Biro ESDM, Pariwisata & Lingkungan Hidup
                            </button>
                        </h2>
                        <div id="flush-collapse11" class="accordion-collapse collapse" aria-labelledby="flush-heading11"
                            data-bs-parent="#accordionFlushExample3">
                            <div class="accordion-body d-flex align-items-start justify-content-between">
                                <span class="fz-14">Mikail Rakhimi - Ketua Umum</span>
                                <img src="assets/img/imgList.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading12">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapse12" aria-expanded="false"
                                aria-controls="flush-collapse12">
                                Ketua Biro Pemuda, Tenaga Kerja, Kesehatan & Olahraga
                            </button>
                        </h2>
                        <div id="flush-collapse12" class="accordion-collapse collapse" aria-labelledby="flush-heading12"
                            data-bs-parent="#accordionFlushExample3">
                            <div class="accordion-body d-flex align-items-start justify-content-between">
                                <span class="fz-14">Mikail Rakhimi - Ketua Umum</span>
                                <img src="assets/img/imgList.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading13">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapse13" aria-expanded="false"
                                aria-controls="flush-collapse13">
                                Ketua Biro Teknologi, Informasi & Hubungan Internasional
                            </button>
                        </h2>
                        <div id="flush-collapse13" class="accordion-collapse collapse" aria-labelledby="flush-heading13"
                            data-bs-parent="#accordionFlushExample3">
                            <div class="accordion-body d-flex align-items-start justify-content-between">
                                <span class="fz-14">Mikail Rakhimi - Ketua Umum</span>
                                <img src="assets/img/imgList.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs -->
    <section id="program" class="mx-auto position-relative">
        <div class="container">
            <img src="assets/img/imgProgramLeft.svg" class="position-absolute imgProgramLeft" alt="">
            <img src="assets/img/imgProgramRight.svg" class="position-absolute imgProgramRight" alt="">
            <img src="assets/img/decorOrganization.svg" class="position-absolute decorPrograms d-none d-md-block"
                alt="">
            <h3 class="fw-700 text-center">Our Programs</h3>
            <div class="row mt-5 pt-5 gap-1 d-flex justify-content-center">
                <img src="assets/img/bgGarisProgram.svg" alt="" class="position-absolute w-100 start-0 end-0">
                <div class="col-md-3 position-relative mb-5 pb-5">
                    <div class="bg-blue-young px-4 pt-5 pb-3">
                        <img src="assets/img/garisProgram.svg" alt=""
                            class="position-absolute top-cus start-cus w-100" />
                        <p class="fw-600"><img src="assets/img/garisSmallProgram.svg" alt="">&nbsp; First Program</p>
                        <h5 class="fw-700 mt-4 mb-4">Inkubator Bisnis</h5>
                        <p class="fz-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit
                            amet l</p>
                        <div class="mt-4">
                            <a class="text-dark" href="#">
                                <p class="fw-700">See more <img src="assets/img/arrowProgram.svg" alt=""></p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 position-relative mb-5 pb-5">
                    <div class="bg-blue-young px-4 pt-5 pb-3">
                        <img src="assets/img/garisProgram.svg" alt=""
                            class="position-absolute top-cus start-cus w-100" />
                        <p class="fw-600"><img src="assets/img/garisSmallProgram.svg" alt="">&nbsp; Second Program</p>
                        <h5 class="fw-700 mt-4 mb-4">Pelatihan Bisnis Teknis & Non Teknis</h5>
                        <p class="fz-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit
                            amet l</p>
                        <div class="mt-4">
                            <a class="text-dark" href="#">
                                <p class="fw-700">See more <img src="assets/img/arrowProgram.svg" alt=""></p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 position-relative mb-5 pb-5">
                    <div class="bg-blue-young px-4 pt-5 pb-3">
                        <img src="assets/img/garisProgram.svg" alt=""
                            class="position-absolute top-cus start-cus w-100" />
                        <p class="fw-600"><img src="assets/img/garisSmallProgram.svg" alt="">&nbsp; Third Program</p>
                        <h5 class="fw-700 mt-4 mb-4">Coaching & Mentoring Bisnis</h5>
                        <p class="fz-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit
                            amet l</p>
                        <div class="mt-4">
                            <a class="text-dark" href="#">
                                <p class="fw-700">See more <img src="assets/img/arrowProgram.svg" alt=""></p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 position-relative mb-5 pb-5">
                    <div class="bg-blue-young px-4 pt-5 pb-3">
                        <img src="assets/img/garisProgram.svg" alt=""
                            class="position-absolute top-cus start-cus w-100" />
                        <p class="fw-600"><img src="assets/img/garisSmallProgram.svg" alt="">&nbsp; Fourth Program</p>
                        <h5 class="fw-700 mt-4 mb-4">Pameran Onine dan Offline</h5>
                        <p class="fz-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit
                            amet l</p>
                        <div class="mt-4">
                            <a class="text-dark" href="#">
                                <p class="fw-700">See more <img src="assets/img/arrowProgram.svg" alt=""></p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 position-relative mb-5 pb-5">
                    <div class="bg-blue-young px-4 pt-5 pb-3">
                        <img src="assets/img/garisProgram.svg" alt=""
                            class="position-absolute top-cus start-cus w-100" />
                        <p class="fw-600"><img src="assets/img/garisSmallProgram.svg" alt="">&nbsp; Fifth Program</p>
                        <h5 class="fw-700 mt-4 mb-4">Konsultasi Legalitas & Keuangan</h5>
                        <p class="fz-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit
                            amet l</p>
                        <div class="mt-4">
                            <a class="text-dark" href="#">
                                <p class="fw-700">See more <img src="assets/img/arrowProgram.svg" alt=""></p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 position-relative mb-5 pb-5">
                    <div class="bg-blue-young px-4 pt-5 pb-3">
                        <img src="assets/img/garisProgram.svg" alt=""
                            class="position-absolute top-cus start-cus w-100" />
                        <p class="fw-600"><img src="assets/img/garisSmallProgram.svg" alt="">&nbsp; Sixth Program</p>
                        <h5 class="fw-700 mt-4 mb-4">Akses Permodalan</h5>
                        <p class="fz-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit
                            amet l</p>
                        <div class="mt-4">
                            <a class="text-dark" href="#">
                                <p class="fw-700">See more <img src="assets/img/arrowProgram.svg" alt=""></p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 position-relative mb-5 pb-5">
                    <div class="bg-blue-young px-4 pt-5 pb-3">
                        <img src="assets/img/garisProgram.svg" alt=""
                            class="position-absolute top-cus start-cus w-100" />
                        <p class="fw-600"><img src="assets/img/garisSmallProgram.svg" alt="">&nbsp; Seventh Program</p>
                        <h5 class="fw-700 mt-4 mb-4">Ekspor Bisnis</h5>
                        <p class="fz-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit
                            amet l</p>
                        <div class="mt-4">
                            <a class="text-dark" href="#">
                                <p class="fw-700">See more <img src="assets/img/arrowProgram.svg" alt=""></p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 position-relative mb-5 pb-5">
                    <div class="bg-blue-young px-4 pt-5 pb-3">
                        <img src="assets/img/garisProgram.svg" alt=""
                            class="position-absolute top-cus start-cus w-100" />
                        <p class="fw-600"><img src="assets/img/garisSmallProgram.svg" alt="">&nbsp; Eighth Program</p>
                        <h5 class="fw-700 mt-4 mb-4">Study Tour dan Magang Bisnis</h5>
                        <p class="fz-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit
                            amet l</p>
                        <div class="mt-4">
                            <a class="text-dark" href="#">
                                <p class="fw-700">See more <img src="assets/img/arrowProgram.svg" alt=""></p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 position-relative mb-5 pb-5">
                    <div class="bg-blue-young px-4 pt-5 pb-3">
                        <img src="assets/img/garisProgram.svg" alt=""
                            class="position-absolute top-cus start-cus w-100" />
                        <p class="fw-600"><img src="assets/img/garisSmallProgram.svg" alt="">&nbsp; Nineth Program</p>
                        <h5 class="fw-700 mt-4 mb-4">Charity</h5>
                        <p class="fz-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit
                            amet l</p>
                        <div class="mt-4">
                            <a class="text-dark" href="#">
                                <p class="fw-700">See more <img src="assets/img/arrowProgram.svg" alt=""></p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Activies -->
    <section id="activies" class="mx-auto text-center">
        <div class="position-relative d-flex flex-column align-items-center">
            <img src="assets/img/imgActivies.svg" alt="" class="w-100 h-100 img-fluid imgActivies">
            <button class="btn btn-danger fs-6 mt-md-3 position-absolute btn-activies">View More</button>
            <p class="fw-600 mt-5 pt-5">Saat ini kami telah memiliki</p>
        </div>
        <div class="row d-flex justify-content-center mt-4">
            <div class="col-md-3 mx-5 px-5">
                <h2 class="fw-800 fz-20">28</h2>
                <p class="fz-14">Dewan Pengurus Wilayah ( DPW ) Provinsi</p>
            </div>
            <div class="col-md-3 mx-5 px-5">
                <h2 class="fw-800 fz-20">12.000</h2>
                <p class="fz-14">Anggota Aktif FKP se - Indonesia</p>
            </div>
            <div class="col-md-3 mx-5 px-5">
                <h2 class="fw-800 fz-20">148</h2>
                <p class="fz-14">Dewan Pengurus Daerah ( DPD )
                    Kota & Kabupaten</p>
            </div>
        </div>
    </section>

    <!-- News -->
    <section id="news" class="mx-auto position-relative">
        <img src="assets/img/decorOrganization.svg" class="position-absolute  decorNews d-none d-md-block" alt="">
        <div class="container">
            <h3 class="fw-700 text-center">News</h3>
            <img src="assets/img/imgNewsLeft.svg" class="imgNewsLeft position-absolute top-25 start-0" alt="">
            <img src="assets/img/imgNewsRight.svg" class="imgNewsRight position-absolute top-50 end-0" alt="">
            <div class="row mx-auto gap-3 gap-xl-0 mt-5 pt-5 d-flex align-items-center">
                <div class="col-xl-1">
                    <a href="#contact" class="scrollHero d-flex align-items-center text-dark d-none d-md-flex">
                        <div class="scroll-prompt" scroll-prompt="" ng-show="showPrompt" style="opacity: 1;">
                            <div class="scroll-prompt-arrow-container">
                                <div class="scroll-prompt-arrow">
                                    <div></div>
                                </div>
                                <div class="scroll-prompt-arrow">
                                    <div></div>
                                </div>
                            </div>
                        </div>
                        <span class="scroll fw-600">scroll</span>
                    </a>
                </div>
                <div class="col-xl-5 col-12 ps-0 ms-0">
                    <p class="fz-14">Kompas.com - 08/03/2022, 07:00 WIB
                    </p>
                    <h4 class="fw-600">Menepis Pandangan Berbisnis yang Menyesatkan
                    </h4>
                    <img src="assets/img/imgNews.svg" class="mt-4" alt="">
                    <p class="fz-14 mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit
                        amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim
                        praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam
                        dignissim diam quis enim lobortis scelerisque fermentum dui faucibus in ornare quam viverra</p>
                    <a class="text-dark" class="text-dark" href="#">
                        <div class="d-flex-align-items-center">
                            <span class="fz-14 fw-600">Read More</span>
                            <img src="assets/img/arrowNews.svg" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-xl-6 col-12 ps-5 pt-5">
                    <div class="row mb-4 d-flex align-items-center">
                        <div class="col-12 col-md-4">
                            <img src="assets/img/newsList1.svg" alt="" class="newList">
                        </div>
                        <div class="col-12 col-md-8">
                            <p class="fz-14">Kompas.com - 08/03/2022, 07:00 WIB</p>
                            <h6 class="fw-600">Cetak Wirausaha Baru Lewat Pesantren, KemenKopUKM Kerjasama dengan PBNU
                            </h6>
                            <a class="text-dark" class="#" href="#">
                                <div class="d-flex-align-items-center mt-4">
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
                            <h6 class="fw-600">Cetak Wirausaha Baru Lewat Pesantren, KemenKopUKM Kerjasama dengan PBNU
                            </h6>
                            <a class="text-dark" class="#" href="#">
                                <div class="d-flex-align-items-center mt-4">
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
                            <h6 class="fw-600">Cetak Wirausaha Baru Lewat Pesantren, KemenKopUKM Kerjasama dengan PBNU
                            </h6>
                            <a class="text-dark" class="#" href="#">
                                <div class="d-flex-align-items-center mt-4">
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
                            <h6 class="fw-600">Cetak Wirausaha Baru Lewat Pesantren, KemenKopUKM Kerjasama dengan PBNU
                            </h6>
                            <a class="text-dark" class="#" href="#">
                                <div class="d-flex-align-items-center mt-4">
                                    <span class="fz-14 fw-600">Read More</span>
                                    <img src="assets/img/arrowNews.svg" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="mx-auto position-relative">
        <img src="assets/img/decorOrganization.svg" class="position-absolute decorContact d-none d-md-block" alt="">
        <div class="container">
            <h3 class="fw-700 text-center">Contact Us</h3>
            <div class="row mt-5 pt-3">
                <div class="col-md-6">
                    <div class="d-flex my-4">
                        <img src="assets/img/telpContact.svg" class="me-3" alt="">
                        <span class="fz-14 me-3">+62 812 6909 7223</span>
                        <img src="assets/img/garisContactSmall.svg" class="me-3" alt="">
                        <span class="fz-14">+62 813 1094 7775</span>
                    </div>
                    <div class="d-flex my-4">
                        <img src="assets/img/gmailContact.svg" class="me-3" alt="">
                        <span class="fz-14">fkppusat@gmail.com</span>
                    </div>
                    <div class="d-flex my-4">
                        <img src="assets/img/mapsContact.svg" class="me-3" alt="">
                        <span class="fz-14">Komplek Departemen Keuangan C70, Kembangan Jakarta Barat, Indonesia
                            11610</span>
                    </div>
                    <div class="mt-5  text-center text-md-start">
                        <p class="fz-14 fw-600">Social Media</p>
                        <a class="me-4" href="#"><img src="assets/img/fbContact.svg" alt=""></a>
                        <a class="me-4" href="#"><img src="assets/img/ytContact.svg" alt=""></a>
                        <a class="me-4" href="#"><img src="assets/img/igContact.svg" alt=""></a>
                    </div>
                </div>
                <div class="col-md-6 mt-5">
                    <form class="fz-14">
                        <div class="mb-3">
                            <label for="text" class="form-label">Your Name</label>
                            <input style="background-color: #f9f9fb; border:none" type="text"
                                class="form-control bg-abu" id="text" placeholder="Name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Your Email</label>
                            <input style="background-color: #f9f9fb; border:none" type="email"
                                class="form-control bg-abu" id="email" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Messages</label>
                            <textarea style="background-color: #f9f9fb; border: none" class="form-control bg-abu"
                                placeholder="Messages" id="floatingTextarea"></textarea>
                        </div>
                        <button type="submit" class="btn btn-danger float-end fz-14">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- <div class="mx-auto position-relative mt-5 w-100 text-center mx-auto">
        <img src="assets/img/imgContact.svg" class="img-fluid" style="width: 100%;" alt="">
        <button class="btn btn-danger text-center position-absolute">Gabung Sekarang</button>
    </div> -->

    <div class="position-relative d-flex flex-column align-items-center mt-5">
        <a href="admin/regis.php" class="btn btn-danger fs-6 mt-md-3 btn-activies">Gabung Sekarang</a>
    </div>

    <footer class="container mx-auto mt-5 pt-5 pt-md-0 text-center text-md-start">
        <div class="row">
            <div class="col-md-3">
                <img src="assets/img/logoFkp.svg" alt="">
                <p class="fw-600 mt-4">Muda Berkompetisi, Berkolaborasi & Berkontribusi</p>
                <div class="mt-3 fz-14">FKP, 2022 Allright reserved</div>
                <img src="assets/img/arrowFooter.svg" class="position-absolute start-0 d-none d-md-block" alt="">
            </div>
            <div class="col-md-3 fz-14">
                <ul class="ps-0" style="list-style: none; line-height: 40px">
                    <li class="fw-600">Home</li>
                    <li>History</li>
                    <li>Organization Values</li>
                    <li>Structure</li>
                    <li>Programs</li>
                    <li>News</li>
                    <li>Activies</li>
                </ul>
            </div>
            <div class="col-md-3 fz-14">
                <ul class="ps-0" style="list-style: none; line-height: 40px">
                    <li class="fw-600">Contact Us</li>
                    <li>+62 812 6909 7223</li>
                    <li>+62 813 1094 7775</li>
                    <li>fkppusat@gmail.com</li>
                    <li>Komplek Departemen Keuangan C70, Kembangan Jakarta Barat, Indonesia 11610</li>
                </ul>
            </div>
            <div class="col-md-3 fz-14">
                <ul class="ps-0" style="list-style: none; line-height: 40px">
                    <li class="fw-600">Social Media</li>
                    <li>
                        <a href="#"><img src="assets/img/fbFooter.svg" class="me-4" alt=""></a>
                        <a href="#"><img src="assets/img/ytFooter.svg" class="me-4" alt=""></a>
                        <a href="#"><img src="assets/img/igFooter.svg" class="me-4" alt=""></a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>

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