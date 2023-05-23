<?php
$title = 'Signin';
include '../includes/beginning.php';
include '../includes/nav.php';
?>

<section class="card-animation align-items-center justify-content-center d-flex min-vh-100">

  <div class="container text-center">
    <div class="row">

      <h1 class="mx-auto fw-bold">تسجيل دخول</h1>
      <p class="text-muted">بإمكانك الأن التسجيل دخول كحساب منشأة او باحث عن عمل</p>

      <div class="col-md-6 p-4">
        <div class="card">
          <div class="card-body">
            <img class="img-fluid w-50" src="images/other/user.png" alt="">
            <h2 class="fw-bold">باحث عن عمل</h2>
            <div class="p-2">
              <a href="signin/user.php"><button type="button" class="btn btn-dark text-white fw-bold btn-lg">دخول كباحث عن عمل</button></a>
            </div>
          </div>
        </div>
      </div> <!-- end -->

      <div class="col-md-6 p-4">
        <div class="card">
          <div class="card-body">
            <img class="img-fluid w-50" src="images/other/facilities.png" alt="">
            <h2 class="fw-bold">المنشآت</h2>
            <div class="p-2">
              <a href="signin/facilities.php"><button type="button" class="btn btn-primary text-white fw-bold btn-lg">دخول كحساب منشأة</button></a>

            </div>
          </div>



        </div>
      </div> <!-- end -->

    </div>
  </div>


</section>


<?php include $_SERVER['DOCUMENT_ROOT'] . 'includes/footer.php' ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . 'includes/end.php' ?>