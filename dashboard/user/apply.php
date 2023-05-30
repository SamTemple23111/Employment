<?php

session_start();

include '../../includes/sessions.php';

if (isset($id) && $role == 'user') {
} else {

    header('location: ../../redirect/session_block.php');
}

include '../../database/conn.php';

$id_request = $_GET['$id_request'];
$id_fk = $_GET['$id_fk'];
$role = $_GET['$role'];
$name = $_GET['$name'];
$facility_id = $_GET['$facility_id'];
$first_name = $_GET['$first_name'];
$middle_name = $_GET['$middle_name'];
$last_name = $_GET['$last_name'];
$id_number = $_GET['$id_number'];
$mobile_number = $_GET['$mobile_number'];
$birthdate = $_GET['$birthdate'];
$gender = $_GET['$gender'];
$username = $_GET['$username'];
$email = $_GET['$email'];
$address1 = $_GET['$address1'];
$address2 = $_GET['$address2'];
$country = $_GET['$country'];
$zipcode = $_GET['$zipcode'];
$city = $_GET['$city'];
$degree = $_GET['$degree'];
$major = $_GET['$major'];
$gpa = $_GET['$gpa'];
$gpa_from = $_GET['$gpa_from'];
$cv = $_GET['$cv'];
$id_photo = $_GET['$id_photo'];
$avatar = $_GET['$avatar'];
$degree_photo = $_GET['$degree_photo'];
$account_create_date = $_GET['$account_create_date'];
$account_create_time = $_GET['$account_create_time'];

date_default_timezone_set("Asia/Riyadh");
$date = date("Y/m/d");
$hours = date("h:i:s a");


$sql1 = "SELECT * FROM users_apply where id_fk = $id_fk";
$query1 = mysqli_query($conn, $sql1);


$checkq = mysqli_num_rows($query1);
if ($checkq >= 1) {
    echo "<script>alert('تم التقديم مسبقًا');</script>";
    echo "<script>window.location.href = 'home';</script>";
    exit;
}


$sql = "INSERT INTO users_apply (facility_id,role,name,first_name,middle_name,last_name,id_number,mobile_number,birthdate,gender,username,email,address1,address2,country,zipcode,city,degree,major,gpa,gpa_from,cv,id_photo,avatar,degree_photo,account_create_date,account_create_time,id_request_fk,id_fk,apply_status,apply_date,apply_time) 
        VALUES('$facility_id','$role','$name','$first_name','$middle_name','$last_name','$id_number','$mobile_number','$birthdate','$gender','$username','$email','$address1','$address2','$country','$zipcode','$city','$degree','$major','$gpa','$gpa_from','$cv','$id_photo','$avatar','$degree_photo','$account_create_date','$account_create_time','$id_request','$id_fk','تحت المراجعة','$date','$hours')";

$query = mysqli_query($conn, $sql);




if ($query) {
    echo "<script>alert('تم التقديم بنجاح');</script>";
    echo "<script>window.location.href = 'home';</script>";
} else {
    echo "<script>alert('خطأ لم يتم التقديم حاول مرة اخرى);</script>";
    echo "<script>window.location.href = 'home';</script>";
}
