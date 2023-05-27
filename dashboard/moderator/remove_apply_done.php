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
    $apply_id = $_GET['$apply_id'];


    $sql_delete_apply = "DELETE FROM users_apply WHERE apply_id = $apply_id";
    $query_delete_apply = mysqli_query($conn, $sql_delete_apply);




    if ($query_delete_apply) {
        echo "<script>alert('تم حذف المتقدم');</script>";
        echo "<script>window.location.href = 'remove_apply';</script>";
    } else {
        echo "<script>alert('خطأ لم يتم حذف الإعلان والمُتقدمين);</script>";
        echo "<script>window.location.href = 'remove_apply';</script>";
    }






    ?>


</body>

</html>