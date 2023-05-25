<?php
session_start();
$title = 'Signup - Facilities';
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

$name_empty_msg = "";
$number_empty_msg = "";
$type_empty_msg = "";
$mobile_number_empty_msg = "";
$phone_number_empty_msg = "";
$username_empty_msg = "";
$email_empty_msg = "";
$address1_empty_msg = "";
$address2_empty_msg = "";
$country_empty_msg = "";
$zipcode_empty_msg = "";
$city_empty_msg = "";
$employee_count_empty_msg = "";
$income_empty_msg = "";
$password1_empty_msg = "";
$password2_empty_msg = "";

$password_mismatched_msg = "";

$password_uppercase_msg = "";
$password_lowercase_msg = "";
$password_number_msg = "";
$password_specialchars_msg = "";
$password_strlen_msg = "";

$username_specialchars_msg = "";
$username_len15_msg = "";
$username_len3_msg = "";
$password_strlen_msg = "";

$username_duplicate_msg = "";
$email_duplicate_msg = "";
$number_duplicate_msg = "";
$mobile_number_duplicate_msg = "";
$phone_number_duplicate_msg = "";


$cr_photo_empty_msg = "";
$cr_photo_type_msg = "";
$cr_photo_size_msg = "";
$cr_photo_type_check = 0;

$logo_empty_msg = "";
$logo_type_msg = "";
$logo_size_msg = "";
$logo_type_check = 0;


if (isset($_POST['submit'])) {

  if (empty($_POST['name'])) {
    $name_empty_msg = "الرجاء ادخل اسم المنشأة";
  }
  if (empty($_POST['number'])) {
    $number_empty_msg = "الرجاء ادخال رقم المنشأة";
  }
  if (($_POST['type'] == "null")) {
    $type_empty_msg = "الرجاء ادخال نوع المنشأة";
  }
  if (empty($_POST['mobile_number'])) {
    $mobile_number_empty_msg = "الرجاء ادخال رقم الجوال";
  }
  if (empty($_POST['phone_number'])) {
    $phone_number_empty_msg = "الرجاء ادخل رقم الهاتف";
  }
  if (empty($_POST['username'])) {
    $username_empty_msg = "الرجاء ادخال اسم المستخدم";
  }
  if (empty($_POST['email'])) {
    $email_empty_msg = "الرجاء ادخل البريد الالكتروني";
  }
  if (empty($_POST['address1'])) {
    $address1_empty_msg = "الرجاء ادخل العنوان الأول";
  }
  if (empty($_POST['address2'])) {
    $address2_empty_msg = "الرجاء ادخال العنوان الثاني";
  }

  if (empty($_POST['zipcode'])) {
    $zipcode_empty_msg = "الرجاء ادخال رمز المنطقة";
  }
  if (empty($_POST['city'])) {
    $city_empty_msg = "الرجاء ادخل المدينة";
  }
  if (empty($_POST['employee_count'])) {
    $employee_count_empty_msg = "الرجاء ادخال عدد موظفين المنشأة";
  }
  if (empty($_POST['income'])) {
    $income_empty_msg = "الرجاء ادخال دخل المنشأة";
  }
  if (empty($_POST['password1'])) {
    $password1_empty_msg = 'الرجاء ادخال كلمة المرور';
  }
  if (empty($_POST['password2'])) {
    $password2_empty_msg = 'الرجاء تأكيد كلمة المرور';
  }

  $name = $_POST['name'];
  $number = $_POST['number'];
  $type = $_POST['type'];
  $mobile_number = $_POST['mobile_number'];
  $phone_number = $_POST['phone_number'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $address1 = $_POST['address1'];
  $address2 = $_POST['address2'];
  $zipcode = $_POST['zipcode'];
  $city = $_POST['city'];
  $employee_count = $_POST['employee_count'];
  $income = $_POST['income'];


  $password1 = $_POST['password1'];
  $password2 = $_POST['password2'];
  $date = date("Y/m/d");
  $hours = date("h:i:s a");

  if ($password1 !== $password2) {
    $password_mismatched_msg = 'كلمات المرور غير متطابقة';
  }

  $uppercase    = preg_match('@[A-Z]@', $password1);
  $lowercase    = preg_match('@[a-z]@', $password1);
  $number       = preg_match('@[0-9]@', $password1);
  $specialchars = preg_match('@[^\w]@', $password1);
  $specialchars_username = preg_match('@[^\w]@', $username);

  if (!$uppercase) {
    $password_uppercase_msg = 'يجب ان تحتوي كلمة المرور على حرف كبير واحد على الأقل';
  }
  if (!$lowercase) {
    $password_lowercase_msg = 'يجب أن تحتوي كلمة المرور على حرف صغير واحد على الأقل';
  }
  if (!$number) {
    $password_number_msg = 'يجب أن تحتوي كلمة المرور على رقم واحد على الأقل';
  }
  if (!$specialchars) {
    $password_specialchars_msg = 'يجب ان تحتوي كلمة المرور على رمز واحد على الأقل';
  }
  if (strlen($password1) < 8) {
    $password_strlen_msg = 'يجب أن لا يقل طول كلمة المرور عن 8 خانات';
  }

  if (strlen($username) < 3) {
    $username_len3_msg = 'يجب أن يكون اسم المستخدم 3 أحرف على الأقل';
  }

  if (strlen($username) > 15) {
    $username_len15_msg = 'يجب أن يكون طول اسم المستخدم كحد أقصى 15 رقم';
  }

  if ($specialchars_username) {
    $username_specialchars_msg = 'يجب أن يكون اسم المستخدم لا يحتوي على رموز خاصة';
  }

  /// ----------------------------------------------------------------

  if (empty($_FILES["logo"]["name"])) {
    $logo_empty_msg = 'يرجى إرفاق شعار المنشأة' . '<br>';
  }

  $logo_location = '../uploads/logo/';
  $logo_name = time() . '_' . basename($_FILES["logo"]["name"]);
  $logo_path = $logo_location . $logo_name;
  $logo_size = $_FILES["logo"]["size"];
  $logo_type = strtolower(basename($_FILES["logo"]["type"]));

  if ($logo_size > 200000000) {
    $logo_size_msg = 'حجم الملف يجب ان يكون أقل من 200 mb' . '<br>';
  }

  if ($logo_type != 'png' && $logo_type != 'jpeg' && $logo_type != 'jpg' && $logo_type != 'gif') {
    $logo_type_msg = 'الملف المرفق يجب أن يكون png,jpeg,jpg,gif';
    $logo_type_check = 1;
  }

  // --------------------------------

  if (empty($_FILES["cr_photo"]["name"])) {
    $cr_photo_empty_msg = 'يرجى إرفاق السجل التجاري' . '<br>';
  }

  $cr_photo_location = '../uploads/cr_photo/';
  $cr_photo_name = time() . '_' . basename($_FILES["cr_photo"]["name"]);
  $cr_photo_path = $cr_photo_location . $cr_photo_name;
  $cr_photo_size = $_FILES["cr_photo"]["size"];
  $cr_photo_type = strtolower(basename($_FILES["cr_photo"]["type"]));

  if ($cr_photo_size > 200000000) {
    $cr_photo_size_msg = 'حجم الملف يجب ان يكون أقل من 200 mb' . '<br>';
  }

  if ($cr_photo_type != 'pdf') {
    $cr_photo_type_msg = 'الملف المرفق يجب أن يكون pdf';
    $cr_photo_type_check = 1;
  }



  include '../database/conn.php';

  $query_check_name = "select * from facilities where name='$name'";
  $query = mysqli_query($conn, $query_check_name);
  if (mysqli_num_rows($query) > 0) {
    $name_duplicate_msg = "اسم المنشأة مسجل مسبقًا";
  }

  $query_check_username = "select * from facilities where username='$username'";
  $query = mysqli_query($conn, $query_check_username);
  if (mysqli_num_rows($query) > 0) {
    $username_duplicate_msg = "اسم المستخدم مسجل مسبقًا";
  }

  $query_check_email = "select * from facilities where email='$email'";
  $query = mysqli_query($conn, $query_check_email);
  if (mysqli_num_rows($query) > 0) {
    $email_duplicate_msg = "البريد الالكتروني مسجل مسبقًا";
  }

  $query_check_number = "select * from facilities where number='$number'";
  $query = mysqli_query($conn, $query_check_number);
  if (mysqli_num_rows($query) > 0) {
    $number_duplicate_msg = "رقم الهوية مسجل مسبقًا";
  }

  $query_check_mobile_number = "select * from facilities where mobile_number='$mobile_number'";
  $query = mysqli_query($conn, $query_check_mobile_number);
  if (mysqli_num_rows($query) > 0) {
    $mobile_number_duplicate_msg = "رقم الجوال مسجل مسبقًا";
  }

  $query_check_phone_number = "select * from facilities where phone_number='$phone_number'";
  $query = mysqli_query($conn, $query_check_phone_number);
  if (mysqli_num_rows($query) > 0) {
    $phone_number_duplicate_msg = "رقم الهاتف مسجل مسبقًا";
  }

  if (

    $name_empty_msg == "" &&
    $number_empty_msg == "" &&
    $type_empty_msg == "" &&
    $mobile_number_empty_msg == "" &&
    $phone_number_empty_msg == "" &&
    $username_empty_msg == "" &&
    $email_empty_msg == "" &&
    $address1_empty_msg == "" &&
    $address2_empty_msg == "" &&
    $zipcode_empty_msg == "" &&
    $city_empty_msg == "" &&
    $employee_count_empty_msg == "" &&
    $income_empty_msg == "" &&
    $password1_empty_msg == "" &&
    $password2_empty_msg == "" &&

    $password_mismatched_msg == "" &&

    $password_uppercase_msg == "" &&
    $password_lowercase_msg == "" &&
    $password_number_msg == "" &&
    $password_specialchars_msg == "" &&
    $password_strlen_msg == "" &&

    $username_specialchars_msg == "" &&
    $username_len15_msg == "" &&
    $username_len3_msg == "" &&
    $password_strlen_msg == "" &&

    $username_duplicate_msg == "" &&
    $email_duplicate_msg == "" &&
    $number_duplicate_msg == "" &&
    $mobile_number_duplicate_msg == "" &&
    $phone_number_duplicate_msg == "" &&


    $cr_photo_empty_msg == "" &&
    $cr_photo_type_msg == "" &&
    $cr_photo_type_check == 0 &&
    $cr_photo_size_msg < 200000000 &&

    $logo_empty_msg == "" &&
    $logo_type_msg == "" &&
    $logo_type_check == 0 &&
    $logo_size_msg < 200000000




  ) {


    include '../database/conn.php';

    move_uploaded_file($_FILES["cr_photo"]["tmp_name"], $cr_photo_path);
    move_uploaded_file($_FILES["logo"]["tmp_name"], $logo_path);

    $password_hashed = sha1($password1);

    $sql = "insert into facilities (role,name,number,type,mobile_number,phone_number,username,email,address1,address2,country,zipcode,city,employee_count,income,cr_photo,logo,password,account_create_date,account_create_time) 
    values('facility','$name','$number','$type','$mobile_number','$phone_number','$username','$email','$address1','$address2','المملكة العربية السعودية','$zipcode','$city','$employee_count','$income','$cr_photo_name','$logo_name','$password_hashed','$date','$hours')";
    $query = mysqli_query($conn, $sql);

    if ($query) {
      header('location:login.php');
      echo 'You are successfully logged in!';
    }
  }
}




?>

<section>
  <div class="container text-center">
    <div class="modal modal-sheet position-static d-block p-4 py-md-5" tabindex="-1" role="dialog" id="modalSignin">

      <div class="modal-content rounded-4 shadow">
        <div class="modal-header p-5 pb-4 border-bottom-0">
          <span class="badge bg-primary text-white">
            <h1 class="fw-bold mb-0 fs-3">تسجيل حساب جديد للمنشآت</h1>
          </span>
        </div>

        <div class="modal-body p-5 pt-0">
          <form method="POST" action="signup/facilities.php" enctype="multipart/form-data">
            <div class="row g-3">

              <h4 class="text-start fw-bold">المعلومات العامة: </h4>

              <div class="form-floating mb-3 col-md-4">
                <input name="name" type="text" class="form-control rounded-3" placeholder="اسم المنشأة">
                <label>اسم المنشأة</label>
                <div class="text-start">
                  <p class="text-danger"><?php echo $name_empty_msg ?></p>
                </div>
              </div>

              <div class="form-floating mb-3 col-md-4">
                <input name="number" type="text" class="form-control rounded-3" placeholder="رقم المنشأة">
                <label>رقم المنشأة</label>
                <div class="text-start">
                  <p class="text-danger"><?php echo $number_empty_msg ?></p>
                </div>
                <div class="text-start">
                  <p class="text-danger"><?php echo $number_duplicate_msg ?></p>
                </div>
              </div>

              <div class="form-floating mb-3 col-md-4">
                <select class="form-select" name="type" placeholder="نوع المنشأة">
                  <option selected value="null">نوع المنشأة</option>
                  <option value="شركة">شركة</option>
                  <option value="مؤسسة">مؤسسة</option>
                </select>
                <div class="text-start">
                  <p class="text-danger"><?php echo $type_empty_msg ?></p>
                </div>
              </div>


              <div class="form-floating mb-3 col-md-6">
                <input name="mobile_number" type="text" class="form-control rounded-3" placeholder="رقم الجوال للتواصل">
                <label>رقم الجوال للتواصل</label>
                <div class="text-start">
                  <p class="text-danger"><?php echo $mobile_number_empty_msg ?></p>
                </div>
                <div class="text-start">
                  <p class="text-danger"><?php echo $mobile_number_duplicate_msg ?></p>
                </div>

              </div>

              <div class="form-floating mb-3 col-md-6">
                <input name="phone_number" type="text" class="form-control rounded-3" placeholder="رقم الهاتف">
                <label>رقم الهاتف</label>
                <div class="text-start">
                  <p class="text-danger"><?php echo $phone_number_empty_msg ?></p>
                </div>
                <div class="text-start">
                  <p class="text-danger"><?php echo $phone_number_duplicate_msg ?></p>
                </div>
              </div>


            </div>

            <div class="row g-3">
              <h4 class="text-start fw-bold">معلومات الحساب: </h4>

              <div class="form-floating mb-3 col-md-6">
                <input name="username" type="text" class="form-control rounded-3" placeholder="اسم المستخدم">
                <label>اسم المستخدم</label>
                <div class="text-start">
                  <p class="text-danger"><?php echo $username_empty_msg ?></p>
                </div>
                <div class="text-start">
                  <p class="text-danger"><?php echo $username_duplicate_msg ?></p>
                </div>
              </div>

              <div class="form-floating mb-3 col-md-6">
                <input name="email" type="text" class="form-control rounded-3" placeholder="البريد الإلكتروني">
                <label>البريد الإلكتروني</label>
                <div class="text-start">
                  <p class="text-danger"><?php echo $email_empty_msg ?></p>
                </div>
                <div class="text-start">
                  <p class="text-danger"><?php echo $email_duplicate_msg ?></p>
                </div>
              </div>
            </div>

            <div class="row g-3">
              <h4 class="text-start fw-bold">معلومات العنوان: </h4>

              <div class="form-floating mb-3 col-md-6">
                <input name="address1" type="text" class="form-control rounded-3" placeholder="العنوان الأول">
                <label>العنوان الأول</label>
                <div class="text-start">
                  <p class="text-danger"><?php echo $address1_empty_msg ?></p>
                </div>
              </div>

              <div class="form-floating mb-3 col-md-6">
                <input name="address2" type=" text" class="form-control rounded-3" placeholder="العنوان الثاني">
                <label>العنوان الثاني</label>
                <div class="text-start">
                  <p class="text-danger"><?php echo $address2_empty_msg ?></p>
                </div>
              </div>


              <div class="form-floating mb-3 col-md-4">
                <input name="country" type="text" class="form-control rounded-3" placeholder="الدولة" value="المملكة العربية السعودية" disabled>
                <label>الدولة</label>

              </div>


              <div class="form-floating mb-3 col-md-4">
                <input name="zipcode" type="text" class="form-control rounded-3" placeholder="رمز المنطقة">
                <label>رمز المنطقة</label>
                <div class="text-start">
                  <p class="text-danger"><?php echo $zipcode_empty_msg ?></p>
                </div>
              </div>


              <div class="form-floating mb-3 col-md-4">
                <input name="city" type="text" class="form-control rounded-3" placeholder="المدينة">
                <label>المدينة</label>
                <div class="text-start">
                  <p class="text-danger"><?php echo $city_empty_msg ?></p>
                </div>
              </div>
            </div>

            <div class="row g-3">
              <h4 class="text-start fw-bold">معلومات المنشأة: </h4>

              <div class="form-floating mb-3 col-md-6">
                <input name="employee_count" type="text" class="form-control rounded-3" placeholder="عدد موظفين المنشأة">
                <label>عدد موظفين المنشأة</label>
                <div class="text-start">
                  <p class="text-danger"><?php echo $employee_count_empty_msg ?></p>
                </div>
              </div>

              <div class="form-floating mb-3 col-md-6">
                <input name="income" type="text" class="form-control rounded-3" placeholder="دخل المنشأة">
                <label>دخل المنشأة</label>
                <div class="text-start">
                  <p class="text-danger"><?php echo $income_empty_msg ?></p>
                </div>
              </div>


            </div>

            <div class="row g-3">
              <h4 class="text-start fw-bold">المستندات: </h4>

              <div class="text-start mb-3 col-md-6">
                <label for="cr_photo" class="fw-bold ">أرفاق صورة من السجل التجاري للمنشأة:</label>
                <input name="cr_photo" type="file" id="cr_photo" class=" form-control" accept=".pdf">
                <div class="text-start">
                  <p class="text-danger"><?php echo $cr_photo_empty_msg; ?></p>
                </div>
                <div class="text-start">
                  <p class="text-danger"><?php echo $cr_photo_type_msg; ?></p>
                </div>
                <div class="text-start">
                  <p class="text-danger"><?php echo  $cr_photo_size_msg; ?></p>
                </div>
              </div>

              <div class="text-start mb-3 col-md-6">
                <label for="logo" class="fw-bold ">أرفاق شعار المنشأة:</label>
                <input name="logo" type="file" id="logo" class=" form-control" accept="image/gif, image/png, image/jpg, image/jpeg">
                <div class="text-start">
                  <p class="text-danger"><?php echo $logo_empty_msg; ?></p>
                </div>
                <div class="text-start">
                  <p class="text-danger"><?php echo $logo_type_msg; ?></p>
                </div>
                <div class="text-start">
                  <p class="text-danger"><?php echo  $logo_size_msg; ?></p>
                </div>
              </div>

            </div>

            <div class="row g-3">
              <h4 class="text-start fw-bold">كلمات المرور: </h4>
              <div class="form-floating mb-3 col-md-6">
                <input name="password1" type="password" class="form-control rounded-3" placeholder="كلمة المرور">
                <label>كلمة المرور</label>
                <div class="text-start">
                  <p class="text-danger"><?php echo $password1_empty_msg ?></p>
                </div>
              </div>

              <div class="form-floating mb-3 col-md-6">
                <input name="password2" type="password" class="form-control rounded-3" placeholder="تأكيد كلمة المرور">
                <label>تأكيد كلمة مرور</label>
                <div class="text-start">
                  <p class="text-danger"><?php echo $password2_empty_msg ?></p>
                </div>

              </div>
            </div>

            <div>
              <p class="text-danger text-start"><?php echo  $password_mismatched_msg; ?></p>
            </div>
            <div>
              <p class="text-danger text-start"><?php echo $password_uppercase_msg; ?></p>
            </div>

            <div>
              <p class="text-danger text-start"><?php echo $password_lowercase_msg; ?></p>
            </div>

            <div>
              <p class="text-danger text-start"><?php echo $password_number_msg; ?></p>
            </div>

            <div>
              <p class="text-danger text-start"><?php echo $password_specialchars_msg; ?></p>
            </div>

            <div>
              <p class="text-danger text-start"><?php echo $password_strlen_msg ?></p>
            </div>

            <button name="submit" class="w-100 mb-2 btn btn-lg rounded-3 btn-primary text-white fw-bold" type="submit">تسجيل حساب جديد</button>
            <small class="fw-bold">لديك حساب بالفعل؟ <a href="signin/facilities.php"> سجل دخول</a></small>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>