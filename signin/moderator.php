<?php
session_start();
$title = 'Signin - Moderator';
include '../includes/beginning.php';

include "../includes/sessions.php";


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


  $username = $_POST['username'];
  $password = $_POST['password'];
  $hashed_password = sha1($password);

  if (empty($username)) {
    $username_empty_msg = 'الرجاء ادخال اسم المستخدم او كلمة المرور';
  }

  if (empty($password)) {
    $password_empty_msg = 'الرجاء ادخل كلمة المرور';
  }

  if ($username_empty_msg == "" && $password_empty_msg == "") {
    include '../database/conn.php';
    $sql = "select * from moderator where username ='$username'  and password ='$hashed_password'";
    $query = mysqli_query($conn, $sql);
    $fetch = mysqli_fetch_assoc($query);
    $row_num = mysqli_num_rows($query);
    if ($row_num == 1) {
      $_SESSION['id'] = $fetch['id'];
      $_SESSION['username'] = $fetch['username'];
      $_SESSION['role'] = $fetch['role'];
      // $_SESSION['logo'] = $fetch['logo'];
      header('location: ../dashboard/moderator/home.php');
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
          <span class="badge bg-danger text-white">
            <h6 class="fw-bold mb-0">Moderator</h6>
          </span>
        </div>

        <div class="modal-body p-5 pt-0">
          <form method="POST" action="signin/moderator.php">
            <div class="form-floating mb-3">
              <input type="text" name="username" class="form-control rounded-3" placeholder="name@example.com">
              <label>أسم المستخدم</label>
              <p class="text-danger"><?php echo $username_empty_msg ?></p>
            </div>
            <div class="form-floating mb-3">
              <input name="password" type="password" class="form-control rounded-3" placeholder="Password">

              <label>كلمة المرور</label>
              <p class="text-danger"><?php echo $password_empty_msg ?></p>
            </div>

            <?php echo $invaild ?>

            <button name="submit" class="w-100 mb-2 btn btn-lg rounded-3 btn-danger text-white fw-bold " type="submit">تسجيل دخول</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . 'includes/end.php' ?>