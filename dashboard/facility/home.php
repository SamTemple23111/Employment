<?php




session_start();

include '../../includes/sessions.php';


if (isset($id) && $role == 'facility') {
} else {

    header('location: ../../redirect/session_block.php');
}

?>

<!DOCTYPE html>
<html lang="ar"">

<head>
    
    <!-- Title & base link -->
    <title> <?php echo $username ?> | Employment</title>
    <base href=" http://localhost/">
<!-- Meta tags -->
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<!-- Website Favicon ico -->
<link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
<!-- Styles: Font-aswsome, bootstrap5 & main style -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css" integrity="sha384-T5m5WERuXcjgzF8DAb7tRkByEZQGcpraRTinjpywg37AO96WoYN9+hrhDVoM6CaT" crossorigin="anonymous">
<link rel="stylesheet" href="../../assets/css/style.css">
</head>



<body>

    <nav class="navbar navbar-dark bg-dark navbar-expand-md py-4 justify-content-center ">
        <div class="container">
            <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
                <ul class="navbar-nav w-100 justify-content-center">
                    <div class='dropdown text-end'>
                        <a href='#' class='d-block link-light text-decoration-none dropdown-toggle dropend' id='dropdownUser1' data-bs-toggle='dropdown' aria-expanded='false'> <?php echo $name ?> <img src="../../uploads/logo/<?php echo $logo ?>" alt='mdo' width='32' height='32' class='rounded-circle'>
                        </a>
                        <ul class='dropdown-menu text-small' aria-labelledby='dropdownUser1'>
                            <li><a class='dropdown-item' href='../../home'>الصفحة الرئيسية</a></li>
                            <li><a class='dropdown-item' href='database/logout'><span class='badge bg-danger'>تسجيل خروج</span></a></li>
                        </ul>
                    </div>
                </ul>

            </div>
        </div>
    </nav>

    <div class="mt-5"></div>

    <div class="py-5 text-center">
        <h1 class="display-4 fw-bold">لوحة التحكم: </h1>
        <p class="text-muted lead" id="pra">بإمكانك من هنا إنشاء إعلان توظيف ورئويسة الإعلانات الخاصة بك وعرض طلبات التوظيف وايضًا رؤية معلومات منشأتك</p>
    </div>



    <section class="card-animation">


        <!-- vh-100 here-->
        <div class="d-flex align-items-center justify-content-center ">

            <div class="row text-center d-flex align-items-stretch">

                <div class="col-md-6 col-12 mb-2">
                    <a href="dashboard/facility/create_ads" class="text-decoration-none">
                        <div class="card testimonial-card ">
                            <div class="avatar mx-auto bg-white">
                                <i class="fa-solid fa-circle-plus mt-4 fa-4x" style="color: #2B4177"></i>
                            </div>
                            <div class="card-body">
                                <h4 class="text-decoration-none fw-bold">إنشاء إعلان توظيف</h4>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-12 mb-2">
                    <a href="dashboard/facility/ads" class="text-decoration-none">
                        <div class="card testimonial-card ">
                            <div class="avatar mx-auto bg-white">
                                <i class="fa-solid fa-list-ul mt-4 fa-4x" style="color: #2F5299"></i>
                            </div>
                            <div class="card-body">
                                <h4 class="text-decoration-none fw-bold">الإعلانات</h4>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-12 mb-2">
                    <a href="dashboard/facility/apply_requests" class="text-decoration-none">
                        <div class="card testimonial-card ">
                            <div class="avatar mx-auto bg-white">
                                <i class="fa-solid fa-users mt-4 fa-4x" style="color: #007078"></i>
                            </div>
                            <div class="card-body">
                                <h4 class="text-decoration-none fw-bold">طلبات التوظيف</h4>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-12 mb-2">
                    <a href="dashboard/facility/information" class="text-decoration-none">
                        <div class="card testimonial-card ">
                            <div class="avatar mx-auto bg-white">
                                <i class="fa-solid fa-address-card mt-4 fa-4x" style="color: #420078"></i>
                            </div>
                            <div class="card-body">
                                <h4 class="text-decoration-none fw-bold">معلومات المنشأة</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-12 col-12 mb-2">
                    <a href="../../contact.php" class=" text-decoration-none">
                        <div class="card testimonial-card ">
                            <div class="avatar mx-auto bg-white">
                                <i class="fa-solid fa-phone mt-4 fa-4x" style="color: #891E1E"></i>
                            </div>
                            <div class="card-body">
                                <h4 class="text-decoration-none fw-bold">للتواصل</h4>
                            </div>
                        </div>
                    </a>
                </div>


            </div>



        </div>


    </section>

    <?php include '../../includes/end.php'; ?>