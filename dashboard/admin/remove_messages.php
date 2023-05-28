<?php


session_start();

include '../../includes/sessions.php';

if (isset($id) && $role == 'admin') {
} else {

    header('location: ../../redirect/session_block.php');
}

?>



<body>

    <?php
    include '../../database/conn.php';
    $message_id = $_GET['$message_id'];


    $sql_delete_message = "DELETE FROM contact WHERE id = $message_id";
    $query_delete_message = mysqli_query($conn, $sql_delete_message);




    if ($query_delete_message) {
        echo "<script>alert('تم حذف الرسالة');</script>";
        echo "<script>window.location.href = 'messages';</script>";
    }






    ?>


</body>

</html>