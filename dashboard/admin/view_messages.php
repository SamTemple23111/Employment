<head>

    <!-- Title & base link -->
    <title> Messages | Employment</title>
    <base href=" http://localhost/">
    <!-- Meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <!-- Website Favicon ico -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Styles: Font-aswsome, bootstrap5 & main style -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css" integrity="sha384-T5m5WERuXcjgzF8DAb7tRkByEZQGcpraRTinjpywg37AO96WoYN9+hrhDVoM6CaT" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/style.css">

</head>




<?php



session_start();

include '../../includes/sessions.php';

if (isset($id) && $role == 'admin') {
} else {

    header('location: ../../redirect/session_block.php');
}

?>



<body>

    <div class="mt-5"></div>



    <div class="col-md-12 text-center">
        <a href="dashboard/admin/messages">
            <button type="button" style="background-color: #467499" class="text-white fw-bold justify-content-center btn btn-lg"><i class="fa-solid fa-right-to-bracket"></i> الرجوع إلى الصفحة الرئيسية</button>

        </a>
    </div>

    <div class="mt-5"></div>


    <section class="card-animation container py-2 p-5">
        <?php
        $message_id = $_GET['$message_id'];
        include '../../database/conn.php';
        $sql = "SELECT * FROM contact WHERE id = $message_id";
        $query = mysqli_query($conn, $sql);
        ?>
        <table class="table table-striped table-hover">
            <thead class="table-head">
                <tr class="table-dark">
                    <th scope="col">رقم الرسالة</th>
                    <th scope="col">اسم المُرسل</th>
                    <th scope="col">البريد الإلكتروني للمُرسل</th>
                    <th scope="col">موضوع الرسالة</th>
                    <th scope="col">تاريخ ارسال الرسالة</th>
                    <th scope="col">وقت ارسال الرسالة</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_array($query)) {
                    $query1 = mysqli_query($conn, $sql);
                    echo '
                    <tr>
                    <td>' . $row['id'] . '</td>
                    <td>' . $row['name'] . '</td>
                    <td>' . $row['email'] . '</td>
                    <td>' . $row['subject'] . '</td>
                    <td>' . $row['message_sent_date'] . '</td>
                    <td>' . $row['message_sent_time'] . '</td>
                </tr>';




                    echo '
            </tbody>
        </table>

                                            <div class="form-group py-2">
            <label class="py-1 fw-bold" for="email">الرساله: </label>
            <textarea name="message" id="" class="form-control" cols="30" rows="11" maxlength="2000" disabled>' . $row['message'] . '</textarea>
        </div>
        
        ';
                }



                ?>


    </section>












</body>

</html>