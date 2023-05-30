<?php
session_start();
include 'includes/sessions.php';

?>

<?php
$title = 'Contact';
include 'includes/beginning.php';
include 'includes/nav.php';



?>

<?php

date_default_timezone_set("Asia/Riyadh");
$date = date("Y/m/d");
$hours = date("h:i:s a");

$name_empty_msg = "";
$email_empty_msg = "";
$subject_empty_msg = "";
$message_empty_msg = "";
$contact_submit = "";

if (isset($_POST['submit'])) {

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

if (empty($name)) {
$name_empty_msg = 'الرجاء ادخال اسمك الكامل';
}

if (empty($email) ) {
$email_empty_msg = 'الرجاء ادخال البريد الإلكتروني';
}

if (empty($subject)) {
$subject_empty_msg = 'الرجاء ادخال عنوان الرسالة';
}

if (empty($message)) {
$message_empty_msg = 'الرجاء ادخال الرسالة';
}

if ($name_empty_msg == "" && $email_empty_msg == "" && $subject_empty_msg == "" && $message_empty_msg == ""){

include 'database/conn.php';

$sql = "INSERT INTO contact (name,email,subject,message,message_sent_date,message_sent_time) VALUES('$name','$email','$subject','$message','$date','$hours')";
$query = mysqli_query($conn, $sql);

if ($query) {
$ads_submit = "<div class='alert alert-success fw-bold' role='alert'> <i class='fa-solid fa-square-check fa-2xl'> </i>تم إرسال الرسالة</div>";
}


}

}

?>



<div class="py-5 text-center">
  <h1 class="display-4 fw-bold">تواصل معنا</h1>
  <p class="text-muted lead" id="pra">بإمكانك التواصل معنا عبر الإيميل وسوف يتم التواصل معك في أقرب وقت ممكن</p>
</div>

<div class="container w-25 justify-content-center align-items-center">

  <?php

    echo '  <form action="contact.php" method="post" >
    <div class="form-group">
      <label class="py-1 fw-bold" for="name">الاسم: </label>
      <input name="name" type="text" id="name" class="form-control">
      <p class="text-danger">' . $name_empty_msg . '</p>
    </div>



    <div class="form-group py-2">
      <label class="py-1 fw-bold" for="email">البريد اللإلكتروني: </label>
      <input  type="email" name="email" class="form-control" id="email">
            <p class="text-danger">' . $email_empty_msg . '</p>
    </div>

    <div class="form-group py-2">
      <label class="py-1 fw-bold" for="subject">الموضوع: </label>
      <input type="text" id="subject" name="subject" class="form-control">
            <p class="text-danger">' . $subject_empty_msg . '</p>
    </div>

    <div class="form-group py-2">
      <label class="py-1 fw-bold" for="email">الرساله: </label>
      <textarea name="message" id="" class="form-control" cols="30" rows="10"></textarea>
      <p class="text-danger">' . $message_empty_msg . '</p>
    </div>

    ' . $ads_submit . '
    
    <div class="form-group py-1">
      <input type="submit" value="إرسال" class="form-control btn btn-primary" name="submit">
    </div>



    <div class="py-3"></div>

</div>
</form>';
  
  ?>
</div>
<?php include 'includes/footer.php' ?>
<?php include 'includes/end.php' ?>