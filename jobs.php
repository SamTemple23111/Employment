<?php
session_start();




include 'includes/sessions.php'




?>

<?php
$title = 'Jobs';
include 'includes/beginning.php';
include 'includes/nav.php';



?>

<div class="py-5 text-center">
  <h1 class="display-4 fw-bold">قائمة الوظائف المتاحة: </h1>
  <p class="text-muted lead" id="pra">هنا سوف تجد جميع الوظائف المتاحة سواء كانت من الشركات أو المؤسسات بشتى التخصصات</p>
</div>

<main class="container">
  <div class="row">
    <div class="col">


      <?php
      include 'database/conn.php';
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
                                    <a data-step="5" data-position="right" data-intro=" عند الدخول على صفحة البحث عن وظائف،تظهر قائمة الوظائف المتاحة،ويمكن للمستخدم البحث على مسمى الوظيفة">
                                        <h3 class="card-title d-inline-block secondary my-0 py-0">' . $row[2] . '</h3>
                                    </a>
                                    <h5 class="mb-1"><span><strong>اسم المنشأة: </strong>' . $row[1] . '</span></h5>
                                    <p class="mb-1 "><strong>التخصص: </strong>' . $row[3] . '</p>
                                    <p class="mb-1 "><strong>وصف الوظيفة:</strong> <br>' . $row[4] . '</p>
                                    
                                    
                                </div>

                                <img src="https://teleworks.sa/wp-content/themes/understrap-child/images/resort.svg" class="rounded-circle" alt="">
                            </div>
                                     <div class="py-2">
                                <a href="dashboard/user/apply_jobs"><button type="button" class="btn btn-primary sign-in">التقديم الآن</button></a>
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


<?php include 'includes/footer.php' ?>
<?php include 'includes/end.php' ?>