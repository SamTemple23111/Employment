<?php


    session_start();

    include '../../includes/sessions.php';

if (isset($id) && $role == 'moderator') {
} else {

    header('location: ../../redirect/session_block.php');
}

?>



<body>

    <?php
    include '../../database/conn.php';
    $id_request = $_GET['$id_request'];


    $sql_delete_request_users = "DELETE FROM users_apply WHERE id_request_fk = $id_request";
    $query_delete_request_users = mysqli_query($conn, $sql_delete_request_users);
    
    $sql_delete_request = "DELETE FROM facilities_request WHERE id_request = $id_request";
    $query_delete_request = mysqli_query($conn, $sql_delete_request);



    if ($query_delete_request_users && $query_delete_request) {
        echo "<script>alert('تم حذف الإعلان والمُتقدمين بنجاح');</script>";
        echo "<script>window.location.href = 'remove_ads';</script>";
    } else {
        echo "<script>alert('خطأ لم يتم حذف الإعلان والمُتقدمين);</script>";
        echo "<script>window.location.href = 'remove_ads';</script>";
    }






    ?>


</body>

</html>