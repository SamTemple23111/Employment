<?php


include '../../database/conn.php';
$id_request_fk = $_GET['$id_request_fk'];



$sql = "delete from users_apply where id_request_fk =  $id_request_fk";
$query = mysqli_query($conn, $sql);



if ($query) {
    echo "<script>alert('تم حذف الإعلان بنجاح');</script>";
    echo "<script>window.location.href = 'home';</script>";
} else {
    echo "<script>alert('خطأ لم يتم حذف الإعلان);</script>";
    echo "<script>window.location.href = 'home';</script>";
}
