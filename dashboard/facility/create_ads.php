<?php



session_start();




$id = $_SESSION['id'];
$name = $_SESSION['name'];
$role = $_SESSION['role'];

if (isset($id) && $role == 'facility') {
} else {

    header('location: ../../redirect/session_block.php');
}

?>

<!DOCTYPE html>
<html lang="ar"">

<head>
    
    <!-- Title & base link -->
    <title> Create ads | Employment</title>
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

    <?php

    $ads_title_empty_msg = "";
    $ads_major_empty_msg = "";
    $ads_description_empty_msg = "";
    $ads_submit = "";

    if (isset($_POST['submit'])) {

        $ads_title = $_POST['ads_title'];
        $ads_major = $_POST['ads_major'];
        $ads_description = $_POST['ads_description'];

        if (empty($ads_title)) {
            $ads_title_empty_msg = 'الرجاء ادخال العنوان';
        }

        if (empty($ads_major)) {
            $ads_major_empty_msg = 'الرجاء ادخال التخصص';
        }

        if (empty($ads_description)) {
            $ads_description_empty_msg = 'الرجاء ادخال وصف الوظيفة';
        }
        date_default_timezone_set("Asia/Riyadh");
        $date = date("Y/m/d");
        $time = date("h:i:s A");

        if ($ads_title_empty_msg == "" && $ads_major_empty_msg == "" && $ads_description_empty_msg == "") {
            include '../../database/conn.php';

            $sql = "insert into facilities_request (name,ads_title,ads_major,ads_description,ads_created_date,ads_created_time,id_fk) values('$name','$ads_title','$ads_major','$ads_description','$date','$time','$id')";
            $query = mysqli_query($conn, $sql);
            $ads_submit = "<div class='alert alert-success fw-bold' role='alert'> <i class='fa-solid fa-square-check fa-2xl'> </i> تم إرسال الإعلان الوظيفي  </div>";
        }
    }

    ?>





    <nav class="navbar navbar-dark bg-dark navbar-expand-md py-4 justify-content-center ">
        <div class="container">




            <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
                <ul class="navbar-nav w-100 justify-content-center">
                    <div class='dropdown text-end'>
                        <a href='#' class='d-block link-light text-decoration-none dropdown-toggle dropend' id='dropdownUser1' data-bs-toggle='dropdown' aria-expanded='false'> <?php echo $name ?> <img src='https://github.com/mdo.png' alt='mdo' width='32' height='32' class='rounded-circle'>
                        </a>
                        <ul class='dropdown-menu text-small' aria-labelledby='dropdownUser1'>
                            <li><a class='dropdown-item' href='database/logout'><span class='badge bg-danger'>تسجيل خروج</span></a></li>
                        </ul>
                    </div>
                </ul>

            </div>
        </div>
    </nav>

    <section class="card-animation">


        <!-- vh-100 here-->


        <section>
            <div class="modal modal-sheet position-static d-block p-4 py-md-5" tabindex="-1" role="dialog" id="modalSignin">
                <div class="col-md-12 text-center">
                    <a href="dashboard/facility/home">
                        <button type="button" style="background-color: #467499" class="text-white fw-bold justify-content-center btn btn-lg"><i class="fa-solid fa-right-to-bracket"></i> الرجوع إلى الصفحة الرئيسية</button>

                    </a>
                </div>
                <div class="modal-dialog">
                    <div class="modal-content rounded-4 shadow">
                        <div class="modal-header p-5 pb-4 border-bottom-0">
                            <span class="badge bg-light text-dark">
                                <h1 class="fw-bold mb-0 fs-2 text-center">إنشاء إعلان توظيف</h1>
                            </span>
                        </div>

                        <div class="modal-body p-5 pt-0">
                            <form method="POST" action="dashboard/facility/create_ads.php">
                                <div class="mb-3">
                                    <label class="fw-bold mb-2">العنوان: </label>
                                    <input type="text" name="ads_title" class="form-control rounded-3">
                                    <p class="text-danger"><?php echo $ads_title_empty_msg ?></p>
                                </div>
                                <div class="mb-3">
                                    <label class="fw-bold mb-2">التخصص: </label>
                                    <input type="text" name="ads_major" class="form-control rounded-3">
                                    <p class="text-danger"><?php echo $ads_major_empty_msg ?></p>
                                </div>
                                <div class="mb-3">
                                    <label class="fw-bold mb-2">الوصف: </label>
                                    <textarea name="ads_description" class="form-control" id="floatingTextarea2" style="height: 150px"></textarea>
                                    <p class="text-danger"><?php echo $ads_description_empty_msg ?></p>
                                </div>

                                <?php echo $ads_submit ?>

                                <button name="submit" style="background-color: #467499" class="w-100 mb-2 btn btn-lg rounded-3 text-white fw-bold " type="submit">ارسال الإعلان</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        </div>


    </section>



    <?php include '../../includes/end.php'; ?>