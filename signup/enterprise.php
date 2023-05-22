<?php
$title = 'Signup - Enterprise';
include '../includes/beginning.php';
?>
<section>
  <div class="container text-center">
    <div class="modal modal-sheet position-static d-block p-4 py-md-5" tabindex="-1" role="dialog" id="modalSignin">

      <div class="modal-content rounded-4 shadow">
        <div class="modal-header p-5 pb-4 border-bottom-0">
          <span class="badge bg-primary text-white">
            <h1 class="fw-bold mb-0 fs-3">تسجيل حساب جديد للمنشآت</h1>
          </span>
        </div>

        <div class="modal-body p-5 pt-0">
          <form method="POST" action="user.php">
            <div class="row g-3">

              <h4 class="text-start fw-bold">المعلومات العامة: </h4>

              <div class="form-floating mb-3 col-md-4">
                <input id="fname" type="text" class="form-control rounded-3" placeholder="اسم المنشأة">
                <label for="fname">اسم المنشأة</label>
              </div>

              <div class="form-floating mb-3 col-md-4">
                <input id="floatingmname" type="text" class="form-control rounded-3" placeholder="رقم المنشأة">
                <label for="floatingmname">رقم المنشأة</label>
              </div>

              <div class="form-floating mb-3 col-md-4">
                <select class="form-select" name="degree" placeholder="نوع المنشأة">
                  <option selected disabled>نوع المنشأة</option>
                  <option value="شركة">شركة</option>
                  <option value="مؤسسة">مؤسسة</option>
                </select>
              </div>


              <div class="form-floating mb-3 col-md-6">
                <input id="mobile-number" type="text" class="form-control rounded-3" placeholder="رقم الجوال للتواصل">
                <label for="mobile-number">رقم الجوال للتواصل</label>
              </div>

              <div class="form-floating mb-3 col-md-6">
                <input id="mobile-number" type="text" class="form-control rounded-3" placeholder="رقم الهاتف">
                <label for="mobile-number">رقم الهاتف</label>
              </div>


            </div>

            <div class="row g-3">
              <h4 class="text-start fw-bold">معلومات الحساب: </h4>

              <div class="form-floating mb-3 col-md-6">
                <input id="username" type="text" class="form-control rounded-3" placeholder="اسم المستخدم">
                <label for="username">اسم المستخدم</label>
              </div>

              <div class="form-floating mb-3 col-md-6">
                <input id="email" type="text" class="form-control rounded-3" placeholder="البريد الإلكتروني">
                <label for="email">البريد الإلكتروني</label>
              </div>
            </div>

            <div class="row g-3">
              <h4 class="text-start fw-bold">معلومات العنوان: </h4>

              <div class="form-floating mb-3 col-md-6">
                <input id="username" type="text" class="form-control rounded-3" placeholder="العنوان الأول">
                <label for="username">العنوان الأول</label>
              </div>

              <div class="form-floating mb-3 col-md-6">
                <input id="text" type="text" class="form-control rounded-3" placeholder="العنوان الثاني">
                <label for="email">العنوان الثاني</label>
              </div>


              <div class="form-floating mb-3 col-md-4">
                <input id="email" type="text" class="form-control rounded-3" placeholder="الدولة" value="المملكة العربية السعودية" disabled>
                <label for="email">الدولة</label>
              </div>


              <div class="form-floating mb-3 col-md-4">
                <input id="text" type="text" class="form-control rounded-3" placeholder="رمز المنطقة">
                <label for="email">رمز المنطقة</label>
              </div>


              <div class="form-floating mb-3 col-md-4">
                <input id="text" type="text" class="form-control rounded-3" placeholder="المدينة">
                <label for="email">المدينة</label>
              </div>
            </div>

            <div class="row g-3">
              <h4 class="text-start fw-bold">معلومات المنشأة: </h4>

              <div class="form-floating mb-3 col-md-6">
                <input id="text" type="text" class="form-control rounded-3" placeholder="عدد موظفين المنشأة">
                <label for="email">عدد موظفين المنشأة</label>
              </div>

              <div class="form-floating mb-3 col-md-6">
                <input id="text" type="text" class="form-control rounded-3" placeholder="دخل المنشأة">
                <label for="email">دخل المنشأة</label>
              </div>


            </div>

            <div class="row g-3">
              <h4 class="text-start fw-bold">المستندات: </h4>

              <div class="text-start mb-3 col-md-12">
                <label for="id-photo" class="fw-bold ">أرفاق صورة من السجل التجاري للمنشأة:</label>
                <input type="file" id="id-photo" name="id-photo" class=" form-control">
              </div>

            </div>

            <div class="row g-3">
              <h4 class="text-start fw-bold">كلمات المرور: </h4>
              <div class="form-floating mb-3 col-md-6">
                <input id="password1" type="password" class="form-control rounded-3" placeholder="كلمة المرور">
                <label for="email">كلمة المرور</label>
              </div>

              <div class="form-floating mb-3 col-md-6">
                <input id="password2" type="password" class="form-control rounded-3" placeholder="تأكيد كلمة المرور">
                <label for="email">تأكيد كلمة مرور</label>

              </div>
            </div>
            <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary text-white fw-bold " type="submit">تسجيل حساب جديد</button>
            <small class="fw-bold">لديك حساب بالفعل؟ <a href="signin/enterprise.php"> سجل دخول</a></small>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>


<?php include $_SERVER['DOCUMENT_ROOT'] . 'includes/end.php' ?>