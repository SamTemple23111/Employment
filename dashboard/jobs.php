<!DOCTYPE html>
<html lang="ar"">

    <head>
    <!-- Title & base link -->
    <title>Employment | Dashboard</title>
    <base href=" https://emp-cti.com/dashboard">
<!-- Meta tags -->
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<!-- Website Favicon ico -->
<link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
<!-- Styles: Font-aswsome, bootstrap5 & main style -->
<link rel="stylesheet" href="assets/fontawesome/css/all.css" />
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.rtl.min.css">
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
                    <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1">loser</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col py-5 px-5">

                <div class="py-5">
                    <h1 class="display-4 fw-bold">حالة الطلب</h1>
                    <p class="text-muted lead" id="pra">بإمكانك من هنا معرفة حالة طلبكم</p>

                    <div class="card bg-light border-light" style="width: auto;">
                        <div class="card-body">
                            <h1 class="card-title fw-bold text-dark">لا يوجد طلبات مسجلة لحسابكم</h1>
                        </div>
                    </div>

                </div>
                <div class="row ">

                    <div class="col-sm-6 py-2">
                        <div class="card bg-light border-light" style="width: auto;">
                            <div class="card-body">
                                <h2 class="card-title fw-bold text-dark">برمجة الاجهزة</h2>
                                <h5 class="card-title text-dark">مؤسسة فيصل واخوانه</h5>
                                <h5><span class="badge text-bg-danger">تم رفض طلبكم</span></h5>

                                <div class="card-footer text-center">
                                    <p class="mt-2 fw-bold">تم رفض طلبكم من قبل المنشأة</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 py-2">
                        <div class="card bg-light border-light" style="width: auto;">
                            <div class="card-body">
                                <h2 class="card-title fw-bold text-dark">برمجة الاجهزة</h2>
                                <h5 class="card-title text-dark">مؤسسة فيصل واخوانه</h5>
                                <h5><span class="badge text-bg-warning">في إنتظار مراجعة المنشأة لطلبكم</span></h5>
                            </div>
                            
                            <div class="card-footer text-center">
                                <h5><span class="badge text-bg-danger p-3 mt-2">الغاء الطلب</span></h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 py-2">
                        <div class="card bg-light border-light" style="width: auto;">
                            <div class="card-body">
                                <h2 class="card-title fw-bold text-dark">برمجة الاجهزة</h2>
                                <h5 class="card-title text-dark">مؤسسة فيصل واخوانه</h5>
                                <h5><span class="badge text-bg-success">تم قبول طلبكم</span></h5>

                            </div>

                            <div class="card-footer text-center">
                                <p class="mt-2 fw-bold">تم قبول طلبكم من قبل المنشأة سوف تقوم الشركة بالتواصل معك في أقرب وقت ممكن</p>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>

        <script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>