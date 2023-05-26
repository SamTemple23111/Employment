<?php
$activePage = basename($_SERVER['PHP_SELF'], ".php");


ini_set('error_reporting', 0);
ini_set('display_errors', 0);


                session_start();

                include 'includes/sessions.php';


?>



<nav class="navbar navbar-dark bg-dark navbar-expand-md py-4 justify-content-center">
    <div class="container">
        <a href="/" class="navbar-brand d-flex w-50 me-auto">تــــوظيف</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsingNavbar3">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
            <ul class="navbar-nav w-100 justify-content-center">
                <li class="nav-item active">
                    <a class="<?= ($activePage == 'home') ? 'nav-link active' : 'nav-link'; ?>" href="home.php">الرئيسية</a>
                </li>
                <li class="nav-item">
                    <a class="<?= ($activePage == 'jobs') ? 'nav-link active' : 'nav-link'; ?>" href="jobs.php">الوظائف</a>
                </li>
                <li class="nav-item">
                    <a class="<?= ($activePage == 'contact') ? 'nav-link active' : 'nav-link'; ?>" href="contact.php">التواصل</a>
                </li>
            </ul>
            <ul class="nav navbar-nav ms-auto w-100 justify-content-end">


                <?php

                if ($role == 'user') {
                    echo "                <div class='dropdown text-end'>
                        <a href='#' class='d-block link-light text-decoration-none dropdown-toggle dropend' id='dropdownUser1' data-bs-toggle='dropdown' aria-expanded='false'>$first_name $last_name <img src='uploads/avatar/$avatar ' alt='$username avatar' width='32' height='32' class='rounded-circle'>
                    </a>
                    <ul class='dropdown-menu text-small' aria-labelledby='dropdownUser1'>
                        <li><a class='dropdown-item' href='dashboard/user/home'>لوحة التحكم</a></li>
                        <li><a class='dropdown-item' href='database/logout'><span class='badge bg-danger'>تسجيل خروج</span></a></li>
                    </ul>
                </div>";
                }

                if ($role == 'facility') {
                    echo "                <div class='dropdown text-end'>
                        <a href='#' class='d-block link-light text-decoration-none dropdown-toggle dropend' id='dropdownUser1' data-bs-toggle='dropdown' aria-expanded='false'> $name <img src='uploads/logo/$logo' alt='$username logo' width='32' height='32' class='rounded-circle'>
                    </a>
                    <ul class='dropdown-menu text-small' aria-labelledby='dropdownUser1'>
                        <li><a class='dropdown-item' href='dashboard/facility/home'>لوحة التحكم</a></li>
                        <li><a class='dropdown-item' href='database/logout'><span class='badge bg-danger'>تسجيل خروج</span></a></li>
                    </ul>
                </div>";
                }

                if ($username == 'admin') {
                    echo "                <div class='dropdown text-end'>
                        <a href='#' class='d-block link-light text-decoration-none dropdown-toggle dropend' id='dropdownUser1' data-bs-toggle='dropdown' aria-expanded='false'> $username <img src='images/avatars/avatar.png' alt='$username logo' width='32' height='32' class='rounded-circle'>
                    </a>
                    <ul class='dropdown-menu text-small' aria-labelledby='dropdownUser1'>
                        <li><a class='dropdown-item' href='dashboard/admin/home'>لوحة التحكم</a></li>
                        <li><a class='dropdown-item' href='database/logout'><span class='badge bg-danger'>تسجيل خروج</span></a></li>
                    </ul>
                </div>";
                }


                if ($role !== 'facility' && $role !== 'user' && $username !== 'admin') {
                    echo '                <li class="nav-item">
                    <a href="signup/home.php"><button type="button" class="btn btn-secondary me-3 sign-in">تسجيل</button></a>
                </li>
                <li class="nav-item">
                    <a href="signin/home.php"><button type="button" class="btn btn-light sign-in">تسجيل دخول</button></a>
                </li>';
                }


                ?>




            </ul>
        </div>
    </div>
</nav>