<?php



session_start();

include '../../includes/sessions.php';


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
<script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css
" rel="stylesheet">

</head>



<main class="container">
    <div class="row">
        <div class="col">


            <?php
            include '../../database/conn.php';
            $sql = "SELECT id_request,name,ads_title,ads_major,ads_description,ads_created_date,ads_created_time FROM facilities_request where id_fk = $id";
            $query = mysqli_query($conn, $sql);
            ?>

            <?php
            while ($row = mysqli_fetch_row($query)) {
                $query1 = mysqli_query($conn, $sql);
                $row1 = mysqli_fetch_assoc($query1);
                echo '                
                    <section class="row card-animation py-3">
                    <div class="mx-auto card col-md-6 p-3 ">
                        <div class="card-body">
                            <div class="d-md-flex">
                                <div class="flex-grow-1">
                                    <a href="https://teleworks.sa/ar/job/specialist-marketing-1683804790" data-step="5" data-position="right" data-intro=" عند الدخول على صفحة البحث عن وظائف،تظهر قائمة الوظائف المتاحة،ويمكن للمستخدم البحث على مسمى الوظيفة">
                                        <h3 class="card-title d-inline-block secondary my-0 py-0 mb-3">' . $row[2] . '</h3>
                                    </a>
                                    
                                    <h5 class="mb-1"><span><strong>اسم المنشأة: </strong>' . $row[1] . '</span></h5>
                                    <p class="mb-2 "><strong>التخصص: </strong>' . $row[3] . '</p>
                                    <p class="mb-1 "><strong>وصف الوظيفة:</strong> <br>' . $row[4] . '</p>
                                    
                                    
                                </div>

                                <img src="https://teleworks.sa/wp-content/themes/understrap-child/images/resort.svg" class="rounded-circle" alt="">
                            </div>
                                     <div class="py-2">
                                <a href="dashboard/facility/delete.php?$id_request=' . $row[0] . '"><button type="button" class="btn btn-danger sign-in">حذف</button></a>
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



<?php include '../../includes/end.php'; ?>