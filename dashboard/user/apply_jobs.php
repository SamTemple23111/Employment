<?php




session_start();




$id = $_SESSION['id'];
$first_name = $_SESSION['first_name'];
$last_name = $_SESSION['last_name'];
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
<link rel="stylesheet" href="../../assets/css/style.css">
</head>



<body>

    <nav class="navbar navbar-dark bg-dark navbar-expand-md py-4 justify-content-center ">
        <div class="container">
            <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
                <ul class="navbar-nav w-100 justify-content-center">
                    <div class='dropdown text-end'>
                        <a href='#' class='d-block link-light text-decoration-none dropdown-toggle dropend' id='dropdownUser1' data-bs-toggle='dropdown' aria-expanded='false'> <?php echo $first_name . " " . $last_name ?> <img src='https://github.com/mdo.png' alt='mdo' width='32' height='32' class='rounded-circle'>
                        </a>
                        <ul class='dropdown-menu text-small' aria-labelledby='dropdownUser1'>
                            <li><a class='dropdown-item' href='database/logout'><span class='badge bg-danger'>تسجيل خروج</span></a></li>
                        </ul>
                    </div>
                </ul>

            </div>
        </div>
    </nav>

    <main class="container">
        <div class="row">
            <div class="col">

                <div class="p-3"></div>
                <?php
                include '../../database/conn.php';
                $sql = "SELECT id_request,name,ads_title,ads_major,ads_description,ads_created_date,ads_created_time FROM facilities_request";
                $query = mysqli_query($conn, $sql);
                ?>

                <?php
                while ($row = mysqli_fetch_row($query)) {
                    $query1 = mysqli_query($conn, $sql);
                    $row1 = mysqli_fetch_assoc($query1);
                    echo '                
                    <section class="card-animation py-3">
                    <div class="mx-auto card col-7 p-3 ">
                        <div class="card-body">
                            <div class="d-md-flex">
                                <div class="flex-grow-1">
                                    <a href="https://teleworks.sa/ar/job/specialist-marketing-1683804790" data-step="5" data-position="right" data-intro=" عند الدخول على صفحة البحث عن وظائف،تظهر قائمة الوظائف المتاحة،ويمكن للمستخدم البحث على مسمى الوظيفة">
                                        <h3 class="card-title d-inline-block secondary my-0 py-0">' . $row[2] . '</h3>
                                    </a>
                                    <h5 class="mb-1"><span><strong>اسم المنشأة: </strong>' . $row[1] . '</span></h5>
                                    <p class="mb-1 "><strong>التخصص: </strong>' . $row[3] . '</p>
                                    <p class="mb-1 "><strong>وصف الوظيفة:</strong> <br>' . $row[4] . '</p>
                                    
                                    
                                </div>

                                <img src="https://teleworks.sa/wp-content/themes/understrap-child/images/resort.svg" class="rounded-circle" alt="">
                            </div>
                            <div class="py-2">
                                <button type="button" class="btn btn-primary sign-in">التقديم الآن</button>
                            </div>
                        </div>
                        <p class="text-muted mb-1"><small>تاريخ النشر: ' . $row[5] . ' </small></p>
                        <p class="text-muted mb-1"><small>وقت النشر: ' . $row[6] . '</small></p>
                        
                    </div>

            </div>
        </div>
        </section>';
                }
                ?>





                <div class="p-3"></div>


    </main>

    <?php include '../../includes/footer.php'; ?>
    <?php include '../../includes/end.php'; ?>