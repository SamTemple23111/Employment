<?php
session_start();
$title = 'Signin - User';
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
    $username_email_empty_msg = 'الرجاء ادخال اسم المستخدم او كلمة المرور';
  }

  if (empty($password)) {
    $password_empty_msg = 'الرجاء ادخل كلمة المرور';
  }

  if ($username_email_empty_msg == "" && $password_empty_msg == "") {
    include '../database/conn.php';
    $sql = "select * from users where (username ='$username_email' or email = '$username_email') and password ='$hashed_password'";
    $query = mysqli_query($conn, $sql);
    $fetch = mysqli_fetch_assoc($query);
    $row_num = mysqli_num_rows($query);
    if ($row_num == 1) {
      $_SESSION['id'] = $fetch['id'];
      $_SESSION['role'] = $fetch['role'];
      $_SESSION['first_name'] = $fetch['first_name'];
      $_SESSION['middle_name'] = $fetch['middle_name'];
      $_SESSION['last_name'] = $fetch['last_name'];
      $_SESSION['id_number'] = $fetch['id_number'];
      $_SESSION['mobile_number'] = $fetch['mobile_number'];
      $_SESSION['birthdate'] = $fetch['birthdate'];
      $_SESSION['gender'] = $fetch['gender'];
      $_SESSION['username'] = $fetch['username'];
      $_SESSION['email'] = $fetch['email'];
      $_SESSION['address1'] = $fetch['address1'];
      $_SESSION['address2'] = $fetch['address2'];
      $_SESSION['country'] = $fetch['country'];
      $_SESSION['zipcode'] = $fetch['zipcode'];

      $_SESSION['city'] = $fetch['city'];
      $_SESSION['degree'] = $fetch['degree'];
      $_SESSION['major'] = $fetch['major'];
      $_SESSION['gpa'] = $fetch['gpa'];
      $_SESSION['gpa_from'] = $fetch['gpa_from'];
      $_SESSION['cv'] = $fetch['cv'];
      $_SESSION['id_photo'] = $fetch['id_photo'];
      $_SESSION['avatar'] = $fetch['avatar'];
      $_SESSION['degree_photo'] = $fetch['degree_photo'];
      $_SESSION['account_create_date'] = $fetch['account_create_date'];
      $_SESSION['account_create_time'] = $fetch['account_create_time'];
      // $_SESSION['logo'] = $fetch['logo'];
      header('location: ../dashboard/user/home.php');
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
          <span class="badge text-white" style="background-color: rgba(0, 55, 113, 0.663); border-color: rgba(0, 55, 113, 0.663);">
            <h6 class="fw-bold mb-0">الباحثين عن عمل</h6>
          </span>
        </div>

        <div class="modal-body p-5 pt-0">
          <form method="POST" action="signin/user.php">
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

            <button name="submit" class="w-100 mb-2 btn btn-lg rounded-3 text-white fw-bold " style="background-color: rgba(0, 55, 113, 0.663); border-color: rgba(0, 55, 113, 0.663);" type="submit">تسجيل دخول</button>
            <small class="fw-bold">ليس لديك حساب؟ <a href="signup/user.php"> سجل حساب جديد</a></small>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . 'includes/end.php' ?>