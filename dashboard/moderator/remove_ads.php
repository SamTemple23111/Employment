<?php



session_start();

include '../../includes/sessions.php';

if (isset($id) && $role == 'moderator') {
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



    <nav class="navbar navbar-dark bg-dark navbar-expand-md py-4 justify-content-center ">
        <div class="container">




            <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
                <ul class="navbar-nav w-100 justify-content-center">
                    <div class='dropdown text-end'>
                        <a href='#' class='d-block link-light text-decoration-none dropdown-toggle dropend' id='dropdownUser1' data-bs-toggle='dropdown' aria-expanded='false'> <?php echo $username ?> <img src='../../images/avatars/avatar.png' alt='<?php echo $username ?> avatar' width='32' height='32' class='rounded-circle'>
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

    <div class="text-center">
        <h1 class="display-4 fw-bold">قائمة الإعلانات: </h1>
    </div>

    <div class="col-md-12 text-center">
        <a href="dashboard/moderator/home">
            <button type="button" style="background-color: #467499" class="text-white fw-bold justify-content-center btn btn-lg"><i class="fa-solid fa-right-to-bracket"></i> الرجوع إلى الصفحة الرئيسية</button>

        </a>
    </div>

    <div class="mt-5"></div>

    <section class="card-animation container py-2 p-5">
        <?php
        include '../../database/conn.php';
        $sql = "SELECT * FROM facilities_request";
        $query = mysqli_query($conn, $sql);












?>

        

        <table class="table table-striped table-hover">
            <thead class="table-head">
                <tr class="table-dark">
                    <th scope="col">رقم الإعلان</th>
                    <th scope="col">اسم الإعلان</th>
                    <th scope="col">تخصص الإعلان</th>
                    <th scope="col">تاريخ إنشاء الإعلان</th>
                    <th scope="col">وقت إنشاء الإعلان</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_array($query)) {
                    $query1 = mysqli_query($conn, $sql);
                    echo '
                    <tr>
                    <td>' . $row['id_request'] . '</td>
                    <td>' . $row['name'] . '</td>
                    <td>' . $row['ads_major'] . '</td>
                    <td>' . $row['ads_created_date'] . '</td>
                    <td>' . $row['ads_created_time'] . '</td>

                                                            <td><a href="dashboard/moderator/remove_ads_done.php?$id_request=' . $row['id_request'] . '""><button type="button" class="btn btn-outline-danger btn-sm">حذف الإعلان</button></a></td>
                </tr>';
                }
                ?>

            </tbody>


    </section>



    <?php include '../../includes/end.php'; ?>