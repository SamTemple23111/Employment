<?php



session_start();

include '../../includes/sessions.php';

if (isset($id) && $role == 'facility') {
} else {

    header('location: ../../redirect/session_block.php');
}
include '../../database/conn.php';
$sql = "select * from facilities where id = $id";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($query);





?>

<head>
    <title><?php echo $username ?> | Information</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet" />
</head>


<body>


    <?php

    echo ' <section style="background-color: #eee;">
        <div class="container py-5">


            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="../../uploads/logo/' . $data['logo'] . '" alt="logo" class="rounded-circle img-fluid" width="250px" height="250px">
                            <h5 class="my-4" dir="ltr">@' . $data['username'] . '</h5>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="home"><button type="button" class="btn btn-secondary ms-1 me-4 fw-bold"><i class="fa-solid fa-right-to-bracket fa-lg"></i> الرجوع</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body p-0">
                            <ul class="list-group list-group-flush rounded-3">
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">

                                    <p class="mb-0"><i class="fa-solid fa-calendar-days fa-xl"> </i> تاريخ إنشاء الحساب: ' . $data['account_create_date'] . '</p>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">

                                    <p class="mb-0"><i class="fa-solid fa-clock fa-xl"> </i> وقت إنشاء الحساب: ' . $data['account_create_time'] . '</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card mb-4 mb-lg-0 mt-3">
                        <div class="card-body p-0">
                            <ul class="list-group list-group-flush rounded-3">
                                <li class="list-group-item d-flex justify-content-start  p-3">
                                    <a href="../../uploads/cr_photo/' . $data['cr_photo'] . '" download><button type="button" class="btn btn-lg p-4 text-white text-center" style="background-color:#4F4F4F"><i class="fa-solid fa-download fa-xl"> تحميل صورة السجل التجاري</i></button></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">اسم الأول</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><strong>' . $data['type'] . '</strong> ' . $data['name'] . '</p>
                                </div>
                            </div>
                            
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">رقم المنشأة</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">' . $data['facility_number'] . '</p>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">رقم الهاتف</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">' . $data['phone_number'] . '</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">رقم الجوال</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">' . $data['mobile_number'] . '</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">البريد الإلكتروني</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">' . $data['email'] . '</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">العنوان الأول</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">' . $data['address1'] . '</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">العنوان الثاني</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">' . $data['address2'] . '</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">المدينة</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">' . $data['city'] . '</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">الدولة</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">' . $data['country'] . '</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">رمز المنطقة</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">' . $data['zipcode'] . '</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">عدد الموظفين</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">' . $data['employee_count'] . '</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">دخل المنشأة</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">' . $data['income'] . '</p>
                                </div>
                            </div>
                           

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>';

    ?>

    <script src="https://kit.fontawesome.com/7f3fc0e40c.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>