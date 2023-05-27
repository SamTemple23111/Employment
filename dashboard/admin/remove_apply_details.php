<head>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet" />
</head>
<?php

if (isset($id) && $role == 'admin') {
} else {

    header('location: ../../redirect/session_block.php');
}


include '../../database/conn.php';
$id = $_GET['$id'];

$sql = "select * from users where id = $id";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($query);


if (isset($_POST['delete'])) {
    $sql_delete = "DELETE from users where id = $id";
    $query_delete = mysqli_query($conn, $sql_delete);

    $sql_delete_apply = "DELETE from users_apply where id_fk = $id";
    $query_delete_apply = mysqli_query($conn, $sql_delete_apply);

    echo "<script>alert('تم حذف الحساب والتقديمات')</script>";
    echo "<script>window.location.href = 'remove_account'</script>";
}



?>

<body>


    <?php

    echo ' <section style="background-color: #eee;">
        <div class="container py-5">


            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="../../uploads/avatar/' . $data['avatar'] . '" alt="avatar" class="rounded-circle img-fluid" width="350px" height="350px">
                            <h5 class="my-4" dir="ltr">@' . $data['username'] . '</h5>
                            <div class="d-flex justify-content-center mb-2">
                                <form method="POST" action="remove_account_details?$id=' . $id . '">
                                <button name="delete" type="submit" class="btn btn-danger fw-bold">حذف الحساب</button>
                                </form>
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
                                    <a href="../../uploads/cv/' . $data['cv'] . '" download><button type="button" class="btn btn-lg p-4 text-white text-center" style="background-color:#4F4F4F"><i class="fa-solid fa-download fa-xl"> تحميل السيرة الذاتيه</i></button></a>
                                </li>
                                <li class="list-group-item d-flex justify-content-start  p-3">
                                    <a href="../../uploads/degree_photo/' . $data['degree_photo'] . '" download><button type="button" class="btn btn-lg p-4 text-white text-center" style="background-color:#4F4F4F"><i class="fa-solid fa-download fa-xl"> تحميل المؤهل الدراسي</i></button></a>
                                </li>
                                <li class="list-group-item d-flex justify-content-start  p-3">
                                    <a href="../../uploads/id_photo/' . $data['id_photo'] . '" download><button type="button" class="btn btn-lg p-4 text-white text-center" style="background-color:#4F4F4F"><i class="fa-solid fa-download fa-xl"> تحميل الهوية الوطنية</i></button></a>
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
                                    <p class="mb-0">الاسم الأول</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">' . $data['first_name'] . '</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">الاسم الأوسط</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">' . $data['middle_name'] . '</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">الأسم الاخير</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">' . $data['last_name'] . '</p>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">تاريخ الميلاد</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">' . $data['birthdate'] . '</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">الجنس</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">' . $data['gender'] . '</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">رقم الهوية</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">' . $data['id_number'] . '</p>
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
                                    <p class="mb-0">المؤهل الدراسي</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">' . $data['degree'] . '</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">التخصص الدراسي</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">' . $data['major'] . '</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">المعدل</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">' . $data['gpa'] . '/' . $data['gpa_from'] . '</p>
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