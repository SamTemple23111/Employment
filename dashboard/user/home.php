<?php



session_start();

ini_set('error_reporting', 0);
ini_set('display_errors', 0);


$id = $_SESSION['id'];
$first_name = $_SESSION['first_name'];
$name = $_SESSION['name'];
$first_name = $_SESSION['first_name'];
$role = $_SESSION['role'];

if (isset($id) && $role == 'user') {
} else {

    header('location: ../../redirect/session_block.php');
}

?>

<!DOCTYPE html>
<html lang="ar"">

<head>
    <!-- Title & base link -->
    <title> | Employment</title>
    <base href=" http://localhost/">
<!-- Meta tags -->
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<!-- Website Favicon ico -->
<link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
<!-- Styles: Font-aswsome, bootstrap5 & main style -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css" integrity="sha384-T5m5WERuXcjgzF8DAb7tRkByEZQGcpraRTinjpywg37AO96WoYN9+hrhDVoM6CaT" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/style.css">
</head>



<body>

    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-light text-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-dark min-vh-100">
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                        <span class="fs-2 d-none d-sm-inline">لوحة التحكم</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link align-middle px-0">
                                <i class="fs-3 fa-solid fa-file-signature" style="color: #3e3e3e"></i> <span class="ms-1 d-none d-sm-inline text-dark fw-bold">طلبات التوظيف</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link align-middle px-0">
                                <i class="fs-3 fa-solid fa-address-card" style="color: #3e3e3e"></i> <span class="ms-1 d-none d-sm-inline text-dark fw-bold">معلوماتي</span>
                            </a>
                        </li>

                    </ul>
                    <hr>
                    <div class="dropdown text-end">
                        <a href="#" class="d-block link-dark text-dark text-decoration-none dropdown-toggle dropend mb-3" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $first_name ?> <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                            <li><a class="dropdown-item" href="database/logout">تسجيل خروج</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col py-5 px-5">
                <h3>Left Sidebar with Submenus</h3>
                <p class="lead">
                    An example 2-level sidebar with collasible menu items. The menu functions like an "accordion" where only a single
                    menu is be open at a time. While the sidebar itself is not toggle-able, it does responsively shrink in width on smaller screens.</p>
                <ul class="list-unstyled">
                    <li>
                        <h5>Responsive</h5> shrinks in width, hides text labels and collapses to icons only on mobile
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/7f3fc0e40c.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</body>

</html>