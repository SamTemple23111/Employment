<?php
$title = "Session block";
include "../includes/beginning.php";
header("refresh:5;url=../home.php");
?>

<section>
    <div class="container col-xxl-8 px-4 py-5 min-vh-100 d-flex">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="../images/backgrounds/block.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">خطأ</h1>
                <p class="lead">لا يمكنك التقديم على وظيفة وأنت مسجل بحساب منشأة هذه الخاصية فقط للباحثين عن عمل/p>
                <p class="text-muted text-dark mt-5">سوف يتم نقلك بعد 5 ثواني إذا لم يتم ذلك الرجاء الضغط على الزر بالأسفل</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="../home.php"><button type="button" class="btn btn-primary btn-lg px-4 me-md-2">الرجوع إلى الصفحة الرئيسية</button></a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "../includes/end.php" ?>