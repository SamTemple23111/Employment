<?php

session_start();



?>

<?php
$title = 'Home';
include 'includes/beginning.php';
include 'includes/nav.php';
include 'includes/sessions.php';
include 'database/conn.php';

$sql_users = "SELECT * FROM users";
$query_users = mysqli_query($conn, $sql_users);
$rows_users = mysqli_num_rows($query_users);

$sql_facilities = "SELECT * FROM facilities";
$query_facilities = mysqli_query($conn, $sql_facilities);
$rows_facilities = mysqli_num_rows($query_facilities);

$sql_facilities_request = "SELECT * FROM facilities_request";
$query_facilities_request = mysqli_query($conn, $sql_facilities_request);
$rows_facilities_request = mysqli_num_rows($query_facilities_request);


?>







<section>

  <div class="container marketing">
    <div class="row featurette py-5">
      <div class="col-md-6">
        <h2 class="featurette-heading fw-bold">من نحن؟</h2>
        <p class="lead" id="pra">نحن منصة توظيف تتيح للباحثين عن عمل الإستفادة من منصتنا للبحث عن وظائف بشتى الأنواع وايضًا نتيح للشركات التسجيل معنا لعرض وظائفهم للباحين عن عمل وتسهيل التواصل مابينهم.</p>
      </div>
      <div class="col-md-5">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="images/backgrounds/bg-1.png">
      </div>
    </div>

</section>

<section style="background-color: #f5f5f5">
  <div class="container marketing">
    <div class="row featurette py-5">
      <div class="col-md-6 order-md-2">
        <h2 class="featurette-heading fw-bold">البحث عن وظيفة!</h2>
        <p class="lead" id="pra">إن كُنت تبحث عن وظيفة فسهلنا عليك المشوار كل اللي عليك الضغط على الأيقونة بالأسفل واختر الوظيفه اللي تناسبك.</p>
        <a href="jobs.php"><button type="button" style="background-color: #1B9B85 !important; border-color: #178573 !important" class="btn btn-primary btn-lg">قائمة الوظائف</button></a>
      </div>
      <div class="col-md-5 order-md-1">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="images/backgrounds/bg-2.png">
      </div>
    </div>
</section>




<section class="card-animation">
  <div class="container marketing">
    <div class="row featurette py-5">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-bold">موظفيننا</span></h2>
        <p class="lead" id="pra">من شهادات شباب طوَروا المهارات وزادوا الدخل عبر وظائف منصة توظيف.</p>




        <div class="py-3 row text-center d-flex align-items-stretch">
          <div class="col-md-4 mb-5 mb-md-0 d-flex align-items-stretch">
            <div class="card testimonial-card ">

              <div class="avatar mx-auto bg-white">
                <img src="images/avatars/avatar-purple.png" width="100px" height="100px" class="py-3 rounded-circle img-fluid" />
              </div>
              <div class="card-body">
                <h4 class="mb-4">ساره احمد</h4>
                <hr />
                <p class="dark-grey-text mt-4">
                  <i class="fas fa-quote-left pe-2"></i> من لا يشكر الناس لا يشكره الله، شكرًا توظيف على إتاحة فرص عمل
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-5 mb-md-0 d-flex align-items-stretch">
            <div class="card testimonial-card">

              <div class="avatar mx-auto bg-white">
                <img src="images/avatars/avatar-red.png" width="100px" height="100px" class="py-3 rounded-circle img-fluid" />
              </div>
              <div class="card-body">
                <h4 class="mb-4">خالد عبدالله</h4>
                <hr />
                <p class="dark-grey-text mt-4">
                  <i class="fas fa-quote-left pe-2"></i>رائعة وتوفر فرص وخبرة ممتازة للطلاب والراغبين بالعمل أسال الله لكم التوفيق
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-0 d-flex align-items-stretch">
            <div class="card testimonial-card">
              <div class="avatar mx-auto bg-white">
                <img src="images/avatars/avatar-green.png" width="100px" height="100px" class="py-3 rounded-circle img-fluid" />
              </div>
              <div class="card-body">
                <h4 class="mb-4">سلطان عبدالعزيز</h4>
                <hr />
                <p class="dark-grey-text mt-4">
                  <i class="fas fa-quote-left pe-2"></i>تجربة رائعة بكل ماتحمله الكلمة من معنى ، الله يعطيكم العافية يارب ويقويكم
                </p>
              </div>
            </div>
          </div>
        </div>



      </div>
      <div class="col-md-5">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="images/backgrounds/bg-3.png">

      </div>
    </div>


    <!-- /END THE FEATURETTES -->


</section>

<section class="card-animation style=" style="background-color: #f5f5f5">
  <div class=" container marketing">
    <div class="row featurette py-5">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-bold">احصائيات</span></h2>

        <p class="lead" id="pra">هنا سوف تجد جميع الإحصائيات الخاصة بمنصة توظيف سواء كانت الشركات أم الباحثين عن عمل أو الموظفين لدينا.</p>




        <div class="py-3 row text-center d-flex align-items-stretch">

          <div class="col-sm-4 mb-3 ">
            <div class="card testimonial-card ">
              <div class="avatar mx-auto bg-white">
                <i class="fa-solid fa-suitcase mt-4 fa-4x" style="color: #5725A5"></i>
              </div>
              <div class="card-body">
                <h4 class="mb-3">الباحثين عن عمل</h4>
                <h2 class="dark-grey-text mt-4"><?php echo $rows_users ?></h2>
              </div>
            </div>
          </div>

          <div class="col-sm-4 mb-3">
            <div class="card testimonial-card ">
              <div class="avatar mx-auto bg-white">
                <i class="fa-solid fa-building mt-4 fa-4x" style="color: #2B4177"></i>
              </div>
              <div class="card-body">
                <h4 class="">المنشآت</h4>
                <h2 class="dark-grey-text mt-4"><?php echo $rows_facilities ?></h2>
              </div>
            </div>
          </div>

          <div class="col-sm-4 mb-3">
            <div class="card testimonial-card ">
              <div class="avatar mx-auto bg-white">
                <i class="fa-solid fa-file-signature mt-4 fa-4x" style="color: #178573"></i>
              </div>
              <div class="card-body">
                <h4 class="mb-3">عدد الوظائف</h4>
                <h2 class="dark-grey-text mt-4"><?php echo $rows_facilities_request ?></h2>
              </div>
            </div>
          </div>



        </div>



      </div>
      <div class="col-md-5">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="images/backgrounds/bg-4.png">

      </div>
    </div>


    <!-- /END THE FEATURETTES -->


</section>

</div>
</div>

<?php include 'includes/footer.php' ?>
<?php include 'includes/end.php' ?>