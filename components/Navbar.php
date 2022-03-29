<!-- Navbar -->
<nav class="navbar navbar-expand-lg p-4 fixed-top" id="dynamic">
    <div class="container d-flex align-items-center justify-content-between gap-4">
        <div class="logo">
            <a href="index.php"><img src="assets/img/logoFkp.svg" alt=""></a>
        </div>
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn">
            <i class="fas fa-bars"></i>
        </label>

        <!-- Desktop -->
        <ul class="pt-3 ps-0 ms-0 d-none d-xl-flex menu-desktop" id="nav">
            <li><a class="me-3 menu-desktop-list" href="index.php#">Home</a></li>
            <li><a class="me-3 menu-desktop-list" href="index.php#history">History</a></li>
            <li><a class="me-3 menu-desktop-list" href="index.php#program">Program</a></li>
            <li><a class="me-3 menu-desktop-list" href="index.php#news">News</a></li>
            <li><a class="me-3 menu-desktop-list" href="index.php#activities">Activities</a></li>
            <li><a class="me-3 menu-desktop-list" href="index.php#organization">Organization Values</a></li>
            <li><a class="me-3 menu-desktop-list" href="index.php#structure">Structure</a></li>
            <li><a class="me-3 menu-desktop-list" href="index.php#contact">Contact Us</a></li>
        </ul>

        <!-- Mobile -->
        <ul class="pt-3 ps-0 ms-0 d-block d-xl-none menu-mobile">
            <li><a class="me-3" href="index.php#">Home</a></li>
            <li><a class="me-3" href="index.php#history">History</a></li>
            <li><a class="me-3" href="index.php#organization">Organization Values</a></li>
            <li><a class="me-3" href="index.php#structure">Structure</a></li>
            <li><a class="me-3" href="index.php#program">Program</a></li>
            <li><a class="me-3" href="index.php#news">News</a></li>
            <li><a class="me-3" href="index.php#activities">Activities</a></li>
            <li><a class="me-3" href="index.php#contact">Contact Us</a></li>
            <a href="admin/login.php" class="btn btn-danger">Login</a>
        </ul>

        <a href="admin/login.php" class="btn btn-danger d-none d-xl-flex">Login</a>

    </div>
</nav>