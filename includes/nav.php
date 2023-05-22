<?php
$activePage = basename($_SERVER['PHP_SELF'], ".php");
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
                <li class="nav-item">
                    <a href="signup/home.php"><button type="button" class="btn btn-secondary me-3 sign-in">تسجيل</button></a>
                </li>
                <li class="nav-item">
                    <a href="signin/home.php"><button type="button" class="btn btn-light sign-in">تسجيل دخول</button></a>
                </li>

            </ul>


            <!-- 
            <div class="dropdown text-end">
          <a href="#" class="d-block link-light text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
                      <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" style="">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
          </ul>

             -->
        </div>

    </div>
    </div>
</nav>