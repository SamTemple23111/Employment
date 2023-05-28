<?php




session_start();



include '../../includes/sessions.php';


if (isset($id) && $role == 'user') {
} else {

    header('location: ../../redirect/session_block.php');
}

?>

<!DOCTYPE html>
<html lang="ar"">

<head>
    
    <!-- Title & base link -->
    <title> Home | Employment</title>
    <base href=" http://localhost/">
<!-- Meta tags -->
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<!-- Website Favicon ico -->
<link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
<!-- Styles: Font-aswsome, bootstrap5 & main style -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css" integrity="sha384-T5m5WERuXcjgzF8DAb7tRkByEZQGcpraRTinjpywg37AO96WoYN9+hrhDVoM6CaT" crossorigin="anonymous">
<link rel="stylesheet" href="../../assets/css/style.css?v=<?php echo time(); ?>">
</head>



<body>

    <nav class="navbar navbar-dark bg-dark navbar-expand-md py-4 justify-content-center ">
        <div class="container">
            <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
                <ul class="navbar-nav w-100 justify-content-center">
                    <div class='dropdown text-end'>
                        <a href='#' class='d-block link-light text-decoration-none dropdown-toggle dropend' id='dropdownUser1' data-bs-toggle='dropdown' aria-expanded='false'> <?php echo $first_name .  ' '  . $last_name ?> <img src='../../uploads/avatar/<?php echo $avatar ?>' alt='<?php echo $username ?> avatar' width='32' height='32' class='rounded-circle'>
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







    <section class="card-animation container py-5 p-5">
        <?php
        include '../../database/conn.php';
        $sql = "SELECT * FROM users_apply where id_fk = $id";
        $query = mysqli_query($conn, $sql);

    $sql_jobs = "SELECT * FROM users_apply where id_fk = $id";
    $query_jobs = mysqli_query($conn, $sql_jobs);
    $rows_jobs = mysqli_num_rows($query_jobs);

    if ($rows_jobs > 1) {

        echo '        <div class="text-center">
        <h1 class="display-4 fw-bold">حالة التقديم </h1>
        <p class="text-muted lead" id="pra">من هنا بإمكان عرض حالة تقديمك للشركات والمؤسسات</p>
    </div>
    <div class="col-md-12 text-center">
        <a href="dashboard/user/home">
            <button type="button" style="background-color: #467499" class="text-white fw-bold justify-content-center btn btn-lg"><i class="fa-solid fa-right-to-bracket"></i> الرجوع إلى الصفحة الرئيسية</button>

        </a>
    </div>
        <div class="mt-5"></div>
    ';
    } else {
        echo '

                        <div class="mt-5" style="padding-bottom: 204px;"></div>
                    <div class="text-center ">
        <h1 class="display-4 fw-bold">لاتوجد تقديمات لديك متاحة </h1>
    </div>
    
    <div class="col-md-12 text-center">
        <a href="dashboard/user/home">
            <button type="button" style="background-color: #467499" class="text-white fw-bold justify-content-center btn btn-lg"><i class="fa-solid fa-right-to-bracket"></i> الرجوع إلى الصفحة الرئيسية</button>

        </a>
    </div>
    <div class="mt-5" style="padding-top: 15.6%;"></div>
    ';
    }

        ?>

        <table class="apply table table-striped table-hover">
            <thead class="table-head">
                <tr class="table-dark">
                    <th scope="col">اسم الشركة</th>
                    <th scope="col">رقم الطلب</th>
                    <th scope="col">تاريخ التقديم</th>
                    <th scope="col">وقت التقديم</th>
                    <th scope="col">حالة الطلب</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_row($query)) {
                    $query1 = mysqli_query($conn, $sql);
                    $row1 = mysqli_fetch_assoc($query1);
                    echo '
                    <tr>
                    <td>' . $row[3] . '</td>
                    <td>' . $row[28] . '</td>
                    <td>' . $row[31] . '</td>
                    <td>' . $row[32] . '</td>
                    <td>' . $row[30] . '</td>
                                                                              <td><a href="dashboard/user/delete.php?$id_request_fk=' . $row[28] . '""><button type="button" class="btn btn-outline-danger btn-sm">حذف الطلب</button></a></td>

                </tr>';
                }
                ?>

            </tbody>
        </table>


    </section>

    <?php include '../../includes/end.php'; ?>