<?php
include '../../database/conn.php';
$id = $_GET['$id_request'];

$sql = "delete from facilities_request where id_request = " . $id;
$query = mysqli_query($conn, $sql);



if ($query) {



    echo "<script>alert('تم حذف الإعلان بنجاح');</script>";
    echo "<script>window.location.href = 'home';</script>";
} else {




    echo "<script>alert('خطأ لم يتم حذف الإعلان);</script>";
    echo "<script>window.location.href = 'home';</script>";
}
