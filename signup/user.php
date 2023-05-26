<?php
session_start();
$title = 'Signup - User';
include '../includes/beginning.php';

include "../includes/sessions.php";

ini_set('error_reporting', 0);
ini_set('display_errors', 0);

if (isset($id)) {
  header('location: ../redirect/already_signin.php');
} else {
}






// متغيرات اذا كانت الحقول فاضية
$first_name_empty_msg = "";
$middle_name_empty_msg = "";
$last_name_empty_msg = "";
$id_number_empty_msg = "";
$mobile_number_empty_msg = "";
$birthdate_empty_msg = "";
$gender_empty_msg = "";
$username_empty_msg = "";
$email_empty_msg = "";
$address1_empty_msg = "";
$address2_empty_msg = "";
$zipcode_empty_msg = "";
$city_empty_msg = "";
$degree_empty_msg = "";
$major_empty_msg = "";
$gpa_empty_msg = "";
$gpa_from_empty_msg = "";
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
$id_number_duplicate_msg = "";
$mobile_number_duplicate_msg = "";


$cv_empty_msg = "";
$cv_type_msg = "";
$cv_size_msg = "";
$cv_type_check = 0;

$id_photo_empty_msg = "";
$id_photo_type_msg = "";
$id_photo_size_msg = "";
$id_photo_type_check = 0;

$avatar_empty_msg = "";
$avatar_type_msg = "";
$avatar_size_msg = "";
$avatar_type_check = 0;

$degree_photo_empty_msg = "";
$degree_photo_type_msg = "";
$degree_photo_size_msg = "";
$degree_photo_type_check = 0;



// متغيرات الشرط صيغة الملف وحجم الملف



if (isset($_POST['submit'])) {


  if (empty($_POST['first_name'])) {
    $first_name_empty_msg = 'الرجاء ادخال الاسم الأول';
  }

  if (empty($_POST['middle_name'])) {
    $middle_name_empty_msg = 'الرجاء ادخال الاسم الثاني';
  }

  if (empty($_POST['last_name'])) {
    $last_name_empty_msg = 'الرجاء ادخال الاسم الاخير';
  }

  if (empty($_POST['id_number'])) {
    $id_number_empty_msg = 'الرجاء ادخال رقم الهوية';
  }

  if (empty($_POST['mobile_number'])) {
    $mobile_number_empty_msg = 'الرجاء ادخال رقم الجوال';
  }

  if (empty($_POST['birthdate'])) {
    $birthdate_empty_msg = 'الرجاء ادخال تاريخ الميلاد';
  }

  if (($_POST['gender'] == "null")) {
    $gender_empty_msg = 'الرجاء ادخال الجنس';
  }

  if (empty($_POST['username'])) {
    $username_empty_msg = 'الرجاء ادخال اسم المستخدم';
  }

  if (empty($_POST['email'])) {
    $email_empty_msg = 'الرجاء ادخال البريد الالكتروني';
  }

  if (empty($_POST['address1'])) {
    $address1_empty_msg = 'الرجاء ادخال العنوان الأول';
  }

  if (empty($_POST['address2'])) {
    $address2_empty_msg = 'الرجاء ادخال العنوان الثاني';
  }

  if (empty($_POST['zipcode'])) {
    $zipcode_empty_msg = 'الرجاء ادخال رمز المنطقة';
  }

  if (empty($_POST['city'])) {
    $city_empty_msg = 'الرجاء ادخال المدينة';
  }

  if (($_POST['degree'] == "null")) {
    $degree_empty_msg = 'الرجاء ادخال المؤهل الدراسي';
  }

  if (empty($_POST['major'])) {
    $major_empty_msg = 'الرجاء ادخال التخصص الدراسي';
  }

  if (empty($_POST['gpa'])) {
    $gpa_empty_msg = 'الرجاء ادخال المعدل الدراسي';
  }

  if (($_POST['gpa_from'] == "null")) {
    $gpa_from_empty_msg = 'الرجاء ادخال المعدل من كم';
  }

  if (empty($_POST['password1'])) {
    $password1_empty_msg = 'الرجاء ادخال كلمة المرور';
  }

  if (empty($_POST['password2'])) {
    $password2_empty_msg = 'الرجاء تأكيد كلمة المرور';
  }




  $first_name = $_POST['first_name'];
  $middle_name = $_POST['middle_name'];
  $last_name = $_POST['last_name'];
  $id_number = $_POST['id_number'];
  $mobile_number = $_POST['mobile_number'];
  $birthdate = $_POST['birthdate'];
  $gender = $_POST['gender'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $address1 = $_POST['address1'];
  $address2 = $_POST['address2'];
  $zipcode = $_POST['zipcode'];
  $city = $_POST['city'];
  $degree = $_POST['degree'];
  $major = $_POST['major'];
  $gpa = $_POST['gpa'];
  $gpa_from = $_POST['gpa_from'];

  $password1 = $_POST['password1'];
  $password2 = $_POST['password2'];
  date_default_timezone_set("Asia/Riyadh");
  $date = date("Y/m/d");
  $hours = date("h:i:s a");

  if ($password1 !== $password2) {
    $password_mismatched_msg = 'كلمات المرور غير متطابقة';
  }

  $uppercase = preg_match('@[A-Z]@', $password1);
  $lowercase = preg_match('@[a-z]@', $password1);
  $number = preg_match('@[0-9]@', $password1);
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



  // ------------------------- CV UPLOAD ------------------------

  if (empty($_FILES["cv"]["name"])) {
    $cv_empty_msg = 'يرجى إرفاق السيرة الذاتية' . '<br>';
  }

  $cv_location = '../uploads/cv/';
  $cv_name = time() . '_' . basename($_FILES["cv"]["name"]);
  $cv_path = $cv_location . $cv_name;
  $cv_size = $_FILES["cv"]["size"];
  $cv_type = strtolower(basename($_FILES["cv"]["type"]));

  if ($cv_size > 200000000) {
    $cv_size_msg = 'حجم الملف يجب ان يكون أقل من 200 mb' . '<br>';
  }

  if ($cv_type != 'pdf') {
    $cv_type_msg = 'الملف المرفق يجب أن يكون pdf';
    $cv_type_check = 1;
  }

  // ------------------------------ ID_PHOTO UPLOAD -------------------------------

  if (empty($_FILES["id_photo"]["name"])) {
    $id_photo_empty_msg = 'يرجى إرفاق الهوية الوطنية' . '<br>';
  }

  $id_photo_location = '../uploads/id_photo/';
  $id_photo_name = time() . '_' . basename($_FILES["id_photo"]["name"]);
  $id_photo_path = $id_photo_location . $id_photo_name;
  $id_photo_size = $_FILES["id_photo"]["size"];
  $id_photo_type = strtolower(basename($_FILES["id_photo"]["type"]));

  if ($id_photo_size > 200000000) {
    $id_photo_size_msg = 'حجم الملف يجب ان يكون أقل من 200 mb' . '<br>';
  }

  if ($id_photo_type != 'pdf' && $id_photo_type != 'png' && $id_photo_type != 'jpeg' && $id_photo_type != 'jpg' && $id_photo_type != 'gif') {
    $id_photo_type_msg = 'الملف المرفق يجب أن يكون png,jpeg,jpg,gif,pdf';
    $id_photo_type_check = 1;
  }

  // ------------------------------ avatar upload --------------------------------

  if (empty($_FILES["avatar"]["name"])) {
    $avatar_empty_msg = 'يرجى إرفاق الصورة الشخصية' . '<br>';
  }

  $avatar_location = '../uploads/avatar/';
  $avatar_name = time() . '_' . basename($_FILES["avatar"]["name"]);
  $avatar_path = $avatar_location . $avatar_name;
  $avatar_size = $_FILES["avatar"]["size"];
  $avatar_type = strtolower(basename($_FILES["avatar"]["type"]));

  if ($avatar_size > 200000000) {
    $avatar_size_msg = 'حجم الملف يجب ان يكون أقل من 200 mb' . '<br>';
  }

  if ($avatar_type != 'png' && $avatar_type != 'jpeg' && $avatar_type != 'jpg' && $avatar_type != 'gif') {
    $avatar_type_msg = 'الملف المرفق يجب أن يكون png,jpeg,jpg,gif';
    $avatar_type_check = 1;
  }


  // -------------------------------- degree photo upload --------------------------------

  if (empty($_FILES["degree_photo"]["name"])) {
    $degree_photo_empty_msg = 'يرجى إرفاق المؤهل العلمي' . '<br>';
  }

  $degree_photo_location = '../uploads/degree_photo/';
  $degree_photo_name = time() . '_' . basename($_FILES["degree_photo"]["name"]);
  $degree_photo_path = $degree_photo_location . $degree_photo_name;
  $degree_photo_size = $_FILES["degree_photo"]["size"];
  $degree_photo_type = strtolower(basename($_FILES["degree_photo"]["type"]));

  if ($degree_photo_size > 200000000) {
    $degree_photo_size_msg = 'حجم الملف يجب ان يكون أقل من 200 mb' . '<br>';
  }

  if ($degree_photo_type != 'pdf' && $degree_photo_type != 'png' && $degree_photo_type != 'jpeg' && $degree_photo_type != 'jpg' && $degree_photo_type != 'gif') {
    $degree_photo_type_msg = 'الملف المرفق يجب أن يكون png,jpeg,jpg,gif,pdf';
    $degree_photo_type_check = 1;
  }

  include '../database/conn.php';



  $query_check_username = "select * from users where username='$username'";
  $query = mysqli_query($conn, $query_check_username);
  if (mysqli_num_rows($query) > 0) {
    $username_duplicate_msg = "اسم المستخدم مسجل مسبقًا";
  }

  $query_check_email = "select * from users where email='$email'";
  $query = mysqli_query($conn, $query_check_email);
  if (mysqli_num_rows($query) > 0) {
    $email_duplicate_msg = "البريد الالكتروني مسجل مسبقًا";
  }

  $query_check_id_number = "select * from users where id_number='$id_number'";
  $query = mysqli_query($conn, $query_check_id_number);
  if (mysqli_num_rows($query) > 0) {
    $id_number_duplicate_msg = "رقم الهوية مسجل مسبقًا";
  }

  $query_check_mobile_number = "select * from users where mobile_number='$mobile_number'";
  $query = mysqli_query($conn, $query_check_mobile_number);
  if (mysqli_num_rows($query) > 0) {
    $mobile_number_duplicate_msg = "رقم الجوال مسجل مسبقًا";
  }

  if (

    $first_name_empty_msg == "" &&
    $middle_name_empty_msg == "" &&
    $last_name_empty_msg == "" &&
    $id_number_empty_msg == "" &&
    $mobile_number_empty_msg == "" &&
    $birthdate_empty_msg == "" &&
    $gender_empty_msg == "" &&
    $username_empty_msg == "" &&
    $email_empty_msg == "" &&
    $address1_empty_msg == "" &&
    $address2_empty_msg == "" &&
    $zipcode_empty_msg == "" &&
    $city_empty_msg == "" &&
    $degree_empty_msg == "" &&
    $major_empty_msg == "" &&
    $gpa_empty_msg == "" &&
    $gpa_from_empty_msg == "" &&
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
    $id_number_duplicate_msg == "" &&
    $mobile_number_duplicate_msg == "" &&

    $cv_empty_msg == "" &&
    $cv_type_msg == "" &&
    $cv_size_msg == "" &&
    $cv_type_check == 0 &&
    $cv_size < 200000000 && $id_photo_empty_msg == "" && $id_photo_type_msg == "" && $id_photo_size_msg == "" && $id_photo_type_check == 0 && $id_photo_size < 200000000 && $avatar_empty_msg == "" && $avatar_type_msg == "" && $avatar_size_msg == "" && $avatar_type_check == 0 && $avatar_size < 200000000 && $degree_photo_empty_msg == "" && $degree_photo_type_msg == "" && $degree_photo_size_msg == "" && $degree_photo_type_check == 0 && $degree_photo_size < 200000000
  ) {
    include '../database/conn.php';
    move_uploaded_file($_FILES["cv"]["tmp_name"], $cv_path);
    move_uploaded_file($_FILES["id_photo"]["tmp_name"], $id_photo_path);
    move_uploaded_file($_FILES["avatar"]["tmp_name"], $avatar_path);
    move_uploaded_file($_FILES["degree_photo"]["tmp_name"], $degree_photo_path);
    $password_hashed = sha1($password1);
    $sql = "insert into users (role,first_name,middle_name,last_name,id_number,mobile_number,birthdate,gender,username,email,address1,address2,country,zipcode,city,degree,major,gpa,gpa_from,cv,id_photo,avatar,degree_photo,password,account_create_date,account_create_time) 
    values('user','$first_name','$middle_name','$last_name','$id_number','$mobile_number','$birthdate','$gender','$username','$email','$address1','$address2','المملكة العربية السعودية','$zipcode','$city','$degree','$major','$gpa','$gpa_from','$cv_name','$id_photo_name','$avatar_name','$degree_photo_name','$password_hashed','$date','$hours')";
    $query = mysqli_query($conn, $sql);
    if ($query) {
      header('location: ../signin/user.php');
      echo 'You are successfully logged in!';
    }
  }
} ?>

<section>
  <div class="container text-center">
    <div class="modal modal-sheet position-static d-block p-4 py-md-5" tabindex="-1" role="dialog" id="modalSignin">

      <div class="modal-content rounded-4 shadow">
        <div class="modal-header p-5 pb-4 border-bottom-0">
          <span class="badge bg-dark text-white">
            <h1 class="fw-bold mb-0 fs-3">تسجيل حساب جديد</h1>
          </span>
        </div>

        <div class="modal-body p-5 pt-0">
          <form method="post" action="signup/user.php" enctype="multipart/form-data">
            <div class="row g-3">

              <h4 class="text-start fw-bold">المعلومات العامة: </h4>

              <div class="form-floating mb-3 col-md-4">
                <input type="text" name="first_name" class="form-control rounded-3" placeholder="الاسم الأول">
                <label>الاسم الأول</label>
                <div class="text-start">
                  <p class="text-danger"><?php echo $first_name_empty_msg ?></p>
                </div>
              </div>

              <div class="form-floating mb-3 col-md-4">
                <input type="text" name="middle_name" class="form-control rounded-3" placeholder="الاسم الأوسط">
                <label>الاسم الأوسط</label>
                <div class="text-start">
                  <p class="text-danger"><?php echo $middle_name_empty_msg ?></p>
                </div>
              </div>

              <div class="form-floating mb-3 col-md-4">
                <input type="text" name="last_name" class="form-control rounded-3" placeholder="الاسم الأخير">
                <label>الاسم الأخير</label>
                <div class="text-start">
                  <p class="text-danger"><?php echo $last_name_empty_msg ?></p>
                </div>
              </div>

              <div class="form-floating mb-3 col-md-3">
                <input type="text" name="id_number" class="form-control rounded-3" placeholder="رقم الهوية">
                <label>رقم الهوية</label>
                <div class="text-start">
                  <p class="text-danger"><?php echo $id_number_empty_msg; ?></p>
                </div>
                <div class="text-start">
                  <p class="text-danger"><?php echo $id_number_duplicate_msg; ?></p>
                </div>
              </div>

              <div class="form-floating mb-3 col-md-3">
                <input type="text" name="mobile_number" class="form-control rounded-3" placeholder="رقم الجوال">
                <label>رقم الجوال</label>
                <div class="text-start">
                  <p class="text-danger"><?php echo $mobile_number_empty_msg; ?></p>
                </div>
                <div class="text-start">
                  <p class="text-danger"><?php echo $mobile_number_duplicate_msg; ?></p>
                </div>
              </div>

              <div class="form-floating mb-3 col-md-3">
                <input type="date" name="birthdate" class="form-control rounded-3" placeholder="تاريخ الميلاد">
                <label>تاريخ الميلاد</label>
                <div class="text-start">
                  <p class="text-danger"><?php echo $birthdate_empty_msg ?></p>
                </div>
              </div>

              <div class="form-floating mb-3 col-md-3">
                <select class="form-select" name="gender" placeholder="الجنس">
                  <option selected value="null">الرجاء اختيار الجنس</option>
                  <option value="ذكر">ذكر</option>
                  <option value="انثى">انثى</option>
                </select>
                <div class="text-start">
                  <p class="text-danger"><?php echo $gender_empty_msg ?></p>
                </div>
              </div>
            </div>

            <div class="row g-3">
              <h4 class="text-start fw-bold">معلومات الحساب: </h4>

              <div class="form-floating mb-3 col-md-6">
                <input type="text" name="username" class="form-control rounded-3" placeholder="اسم المستخدم">
                <label>اسم المستخدم</label>
                <div class="text-start">
                  <p class="text-danger"><?php echo  $username_empty_msg; ?></p>
                </div>
                <div class="text-start">
                  <p class="text-danger"><?php echo $username_specialchars_msg; ?></p>
                </div>
                <div class="text-start">
                  <p class="text-danger"><?php echo $username_len15_msg; ?></p>
                </div>
                <div class="text-start">
                  <p class="text-danger"><?php echo  $username_len3_msg; ?></p>
                </div>
                <div class="text-start">
                  <p class="text-danger"><?php echo $username_duplicate_msg ?></p>
                </div>
              </div>

              <div class="form-floating mb-3 col-md-6">
                <input type="text" name="email" class="form-control rounded-3" placeholder="البريد الإلكتروني">
                <label>البريد الإلكتروني</label>
                <div class="text-start">
                  <p class="text-danger"><?php echo $email_empty_msg; ?></p>
                </div>
                <div class="text-start">
                  <p class="text-danger"><?php echo $email_duplicate_msg; ?></p>
                </div>
              </div>
            </div>

            <div class="row g-3">
              <h4 class="text-start fw-bold">معلومات العنوان: </h4>

              <div class="form-floating mb-3 col-md-6">
                <input type="text" name="address1" class="form-control rounded-3" placeholder="العنوان الأول">
                <label>العنوان الأول</label>
                <div class="text-start">
                  <p class="text-danger"><?php echo $address1_empty_msg ?></p>
                </div>
              </div>

              <div class="form-floating mb-3 col-md-6">
                <input type="text" name="address2" class="form-control rounded-3" placeholder="العنوان الثاني">
                <label>العنوان الثاني</label>
                <div class="text-start">
                  <p class="text-danger"><?php echo $address2_empty_msg ?></p>
                </div>
              </div>


              <div class="form-floating mb-3 col-md-4">
                <input type="text" name="country" class="form-control rounded-3" placeholder="الدولة" value="المملكة العربية السعودية" disabled>
                <label>الدولة</label>

              </div>


              <div class="form-floating mb-3 col-md-4">
                <input type="text" name="zipcode" class="form-control rounded-3" placeholder="رمز المنطقة">
                <label>رمز المنطقة</label>
                <div class="text-start">
                  <p class="text-danger"><?php echo $zipcode_empty_msg ?></p>
                </div>
              </div>


              <div class="form-floating mb-3 col-md-4">
                <input type="text" name="city" class="form-control rounded-3" placeholder="المدينة">
                <label>المدينة</label>
                <div class="text-start">
                  <p class="text-danger"><?php echo $city_empty_msg ?></p>
                </div>
              </div>
            </div>

            <div class="row g-3">
              <h4 class="text-start fw-bold">المعلومات الوظيفية: </h4>

              <div class="form-floating mb-3 col-md-6">
                <select class="form-select" name="degree">
                  <option selected value="null">الرجاء اختيار المؤهل الدراسي</option>
                  <option value="الثانويه">ثانوي</option>
                  <option value="دبلوم">دبلوم</option>
                  <option value="بكالوريوس">بكالوريوس</option>
                  <option value="ماجستير">ماجستير</option>
                  <option value="دكتوراه">دكتوراه</option>
                </select>
                <div class="text-start">
                  <p class="text-danger"><?php echo $degree_empty_msg ?></p>
                </div>
              </div>

              <div class="form-floating mb-3 col-md-6">
                <input type="text" name="major" class="form-control rounded-3" placeholder="التخصص">
                <label>التخصص</label>
                <div class="text-start">
                  <p class="text-danger"><?php echo $major_empty_msg ?></p>
                </div>
              </div>

              <div class="form-floating mb-3 col-md-6">
                <input type="text" name="gpa" class="form-control rounded-3" placeholder="المعدل الدراسي">
                <label>المعدل الدراسي</label>
                <div class="text-start">
                  <p class="text-danger"><?php echo $gpa_empty_msg ?></p>
                </div>
              </div>

              <div class="form-floating mb-3 col-md-6">
                <select class="form-select" name="gpa_from">
                  <option selected value="null">المعدل من</option>
                  <option value="5">5</option>
                  <option value="4">4</option>
                  <option value="%">%</option>
                </select>
                <div class="text-start">
                  <p class="text-danger"><?php echo $gpa_from_empty_msg ?></p>
                </div>
              </div>


            </div>

            <div class="row g-3">
              <h4 class="text-start fw-bold">المستندات: </h4>

              <div class="text-start mb-3 col-md-3">
                <label for="cv" class="fw-bold ">ارفاق السيرة الذاتية:</label>
                <input type="file" id="cv" name="cv" class=" form-control" accept=".pdf">
                <div class="text-start">
                  <p class="text-danger"><?php echo $cv_empty_msg; ?></p>
                </div>
                <div class="text-start">
                  <p class="text-danger"><?php echo $cv_type_msg; ?></p>
                </div>
                <div class="text-start">
                  <p class="text-danger"><?php echo  $cv_size_msg; ?></p>
                </div>
              </div>

              <div class="text-start mb-3 col-md-3">
                <label for="id_photo" class="fw-bold ">صورة من بطاقة الهوية:</label>
                <input type="file" id="id_photo" name="id_photo" class=" form-control" accept="image/gif, image/png, image/jpg, image/jpeg, .pdf">
                <div class="text-start">
                  <p class="text-danger"><?php echo $id_photo_empty_msg; ?></p>
                </div>
                <div class="text-start">
                  <p class="text-danger"><?php echo $id_photo_type_msg; ?></p>
                </div>
                <div class="text-start">
                  <p class="text-danger"><?php echo  $id_photo_size_msg; ?></p>
                </div>
              </div>

              <div class="text-start mb-3 col-md-3">
                <label for="avatar" class="fw-bold ">صورة شخصية:</label>
                <input type="file" id="avatar" name="avatar" class=" form-control" accept="image/gif, image/png, image/jpg, image/jpeg">
                <div class="text-start">
                  <p class="text-danger"><?php echo $avatar_empty_msg; ?></p>
                </div>
                <div class="text-start">
                  <p class="text-danger"><?php echo $avatar_type_msg; ?></p>
                </div>
                <div class="text-start">
                  <p class="text-danger"><?php echo  $avatar_size_msg; ?></p>
                </div>
              </div>

              <div class="text-start mb-3 col-md-3">
                <label for="degree_photo" class="fw-bold ">صورة لأحدث مؤهل دراسي:</label>
                <input type="file" id="degree_photo" name="degree_photo" class=" form-control" accept="image/gif, image/png, image/jpg, image/jpeg, .pdf">
                <div class="text-start">
                  <p class="text-danger"><?php echo $degree_photo_empty_msg; ?></p>
                </div>
                <div class="text-start">
                  <p class="text-danger"><?php echo $degree_photo_type_msg; ?></p>
                </div>
                <div class="text-start">
                  <p class="text-danger"><?php echo $degree_photo_size_msg; ?></p>
                </div>
              </div>

            </div>

            <div class="row g-3">
              <h4 class="text-start fw-bold">كلمات المرور: </h4>
              <div class="form-floating mb-3 col-md-6">
                <input type="password" name="password1" class="form-control rounded-3" placeholder="كلمة المرور">
                <label>كلمة المرور</label>
                <div class="text-start">
                  <p class="text-danger"><?php echo $password1_empty_msg ?></p>
                </div>
              </div>

              <div class="form-floating mb-3 col-md-6">
                <input type="password" name="password2" class="form-control rounded-3" placeholder="تأكيد كلمة المرور">
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


            <button name="submit" class="w-100 mb-2 btn btn-lg rounded-3 btn-dark text-white fw-bold " type="submit">تسجيل حساب جديد</button>
            <small class="fw-bold">لديك حساب بالفعل؟ <a href="signin/user.php"> سجل دخول</a></small>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>