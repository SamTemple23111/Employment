 <head>
     <script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js
"></script>
     <link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css
" rel="stylesheet">
 </head>

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





    ?>

 <script type="text/javascript">
     function myFirst() {
         Swal.fire('Any fool can use a computer')

     }
 </script>