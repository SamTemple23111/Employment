<?php
session_start();
$title = 'Signin';
include '../includes/beginning.php';




include "../includes/sessions.php";

ini_set('error_reporting', 0);
ini_set('display_errors', 0);

if (isset($id)) {
  header('location: ../redirect/already_signin.php');
} else {
}


?>

<?php

$username_email_empty_msg = "";
$password_empty_msg = "";
$invaild = "";

if (isset($_POST['submit'])) {


  $username_email = $_POST['username_email'];
  $password = $_POST['password'];
  $hashed_password = sha1($password);

  if (empty($username_email)) {
    $username_email_empty_msg = 'الرجاء ادخال اسم المستخدم او البريد الإلكتروني';
  }

  if (empty($password)) {
    $password_empty_msg = 'الرجاء ادخل كلمة المرور';
  }

  if ($username_email_empty_msg == "" && $password_empty_msg == "") {
    include '../database/conn.php';
    $sql = "select * from facilities where (username ='$username_email' or email = '$username_email') and password ='$hashed_password'";
    $query = mysqli_query($conn, $sql);
    $fetch = mysqli_fetch_assoc($query);
    $row_num = mysqli_num_rows($query);
    if ($row_num == 1) {
      $_SESSION['id'] = $fetch['id'];
      $_SESSION['role'] = $fetch['role'];
      $_SESSION['name'] = $fetch['name'];
      $_SESSION['facility_number'] = $fetch['facility_number'];
      $_SESSION['type'] = $fetch['type'];
      $_SESSION['mobile_number'] = $fetch['mobile_number'];
      $_SESSION['phone_number'] = $fetch['phone_number'];
      $_SESSION['username'] = $fetch['username'];
      $_SESSION['email'] = $fetch['email'];
      $_SESSION['address1'] = $fetch['address1'];
      $_SESSION['address2'] = $fetch['address2'];
      $_SESSION['country'] = $fetch['country'];
      $_SESSION['zipcode'] = $fetch['zipcode'];
      $_SESSION['city'] = $fetch['city'];
      $_SESSION['employee_count'] = $fetch['employee_count'];
      $_SESSION['income'] = $fetch['income'];
      $_SESSION['cr_photo'] = $fetch['cr_photo'];
      $_SESSION['logo'] = $fetch['logo'];
      $_SESSION['account_create_date'] = $fetch['account_create_date'];
      $_SESSION['account_create_time'] = $fetch['account_create_time'];
      // $_SESSION['logo'] = $fetch['logo'];
      header('location: ../dashboard/facility/home.php');
    } else {
      $invaild = '<div class="alert alert-danger" role="alert">البريد الإلكتروني أو اسم المستخدم أو كلمة المرور غير صالحة. حاول مرة اخرى.</div>';
    }
  }
}

?>


<section>
  <div class="modal modal-sheet position-static d-block p-4 py-md-5" tabindex="-1" role="dialog" id="modalSignin">
    <div class="modal-dialog">
      <div class="modal-content rounded-4 shadow">
        <div class="modal-header p-5 pb-4 border-bottom-0">
          <span class="badge bg-light text-dark">
            <h1 class="fw-bold mb-0 fs-2">تسجيل دخول</h1>
          </span>
          <span class="badge bg-primary text-white">
            <h6 class="fw-bold mb-0">للمنشآت</h6>
          </span>
        </div>

        <div class="modal-body p-5 pt-0">
          <form method="POST" action="signin/facilities.php">
            <div class="form-floating mb-3">
              <input type="text" name="username_email" class="form-control rounded-3" placeholder="name@example.com">
              <label>أسم المستخدم أو البريد الإلكتروني</label>
              <p class="text-danger"><?php echo $username_email_empty_msg ?></p>
            </div>
            <div class="form-floating mb-3">
              <input name="password" type="password" class="form-control rounded-3" placeholder="Password">
              <label>كلمة المرور</label>
              <p class="text-danger"><?php echo $password_empty_msg ?></p>
            </div>

            <?php echo $invaild ?>

            <button name="submit" class="w-100 mb-2 btn btn-lg rounded-3 btn-primary text-white fw-bold " type="submit">تسجيل دخول</button>
            <small class="fw-bold">ليس لديك حساب؟ <a href="signup/enterprise.php"> سجل حساب جديد</a></small>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>