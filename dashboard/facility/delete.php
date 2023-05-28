<?php

session_start();




include '../../includes/sessions.php';

if (isset($id) && $role == 'facility') {
} else {

    header('location: ../../redirect/session_block.php');
}

include '../../database/conn.php';
$id_request = $_GET['$id_request'];

$sql1 = "delete from users_apply where id_request_fk = " . $id_request;
$query1 = mysqli_query($conn, $sql1);
$sql = "delete from facilities_request where id_request = " . $id_request;
$query = mysqli_query($conn, $sql);




if ($query) {
    echo "<script>alert('تم حذف الإعلان بنجاح');</script>";
    echo "<script>window.location.href = 'home';</script>";
} else {
    echo "<script>alert('خطأ لم يتم حذف الإعلان);</script>";
    echo "<script>window.location.href = 'home';</script>";
}
