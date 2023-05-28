<?php
session_start();
?>

<?php
$title = 'Signup';
include '../includes/beginning.php';
include '../includes/nav.php';

ini_set('error_reporting', 0);
ini_set('display_errors', 0);

if (isset($id)) {
  header('location: ../redirect/already_signin.php');
} else {
}

?>





<section class="card-animation align-items-center justify-content-center d-flex min-vh-100">

  <div class="container text-center">
    <div class="row">
      <h1 class="mx-auto fw-bold">تسجيل حساب</h1>
      <p class="text-muted">بإمكانك الآن الإنضمام إلينا كحساب باحث عن عمل أو منشأة</p>

      <div class="col-sm-6 p-4">
        <div class="card">
          <div class="card-body">
            <i class="img-fluid w-25 fa-solid fa-magnifying-glass-plus display-1 mt-2" style="color: rgba(0, 55, 113, 0.663);"></i>

            <h2 class="fw-bold mt-3">الباحثين عن عمل</h2>
            <div class="p-2">
              <a href="signup/user.php"><button type="button" class="btn text-white fw-bold btn-lg" style="background-color: rgba(0, 55, 113, 0.663); border-color: rgba(0, 55, 113, 0.663);">دخول كحساب منشأة</button></a>

            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 p-4">
        <div class="card">
          <div class="card-body">
            <i class="img-fluid w-25 fa-solid fa-building display-1 mt-2" style="color: rgba(0, 61, 40, 0.663)"></i>

            <h2 class="fw-bold mt-3">المنشآت</h2>
            <div class="p-2">
              <a href="signup/facilities.php"><button type="button" class="btn btn-primary text-white fw-bold btn-lg" style="background-color: rgba(0, 61, 40, 0.663); border-color: rgba(0, 61, 40, 0.663);">دخول كحساب منشأة</button></a>

            </div>
          </div>
        </div>
      </div>

    </div>
  </div>


</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . 'includes/footer.php' ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . 'includes/end.php' ?>