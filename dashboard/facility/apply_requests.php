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




    <section class="card-animation container py-5 p-5">
        <?php
        include '../../database/conn.php';
        $sql = "SELECT * FROM users_apply where facility_id = $id";
        $query = mysqli_query($conn, $sql);
        ?>

        <table class="table table-striped table-hover">
            <thead class="table-head">
                <tr class="table-dark">
                    <th scope="col">اسم الشخص</th>
                    <th scope="col">المؤهل</th>
                    <th scope="col">التخصص</th>
                    <th scope="col">المعدل</th>
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
                    <td>' . $row[4] . ' ' . $row[5] . ' ' . $row[6] . '</td>
                    <td>' . $row[18] . '</td>
                    <td>' . $row[19] . '</td>
                    <td>' . $row[20] . '/' . $row[21] . '</td>
                    <td>' . $row[30] . '</td>
                                                            <td><a href="dashboard/facility/details.php?$uid=' . $row[29] . '""><button type="button" class="btn btn-outline-secondary btn-sm">المزيد</button></a></td>
                </tr>';
                }
                ?>

            </tbody>


    </section>



    <?php include '../../includes/end.php'; ?>