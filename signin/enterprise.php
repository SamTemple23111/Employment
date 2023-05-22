<?php
$title = 'Signup';
include '../includes/beginning.php';
?>

<section>
  <div class="modal modal-sheet position-static d-block p-4 py-md-5" tabindex="-1" role="dialog" id="modalSignin">
    <div class="modal-dialog">
      <div class="modal-content rounded-4 shadow">
        <div class="modal-header p-5 pb-4 border-bottom-0">
          <span class="badge bg-light text-dark">
            <h1 class="fw-bold mb-0 fs-2">تسجيل دخول</h1>
          </span>
          <span class="badge bg-primary text-white">
            <h6 class="fw-bold mb-0">للمنشآت</h6>
          </span>
        </div>

        <div class="modal-body p-5 pt-0">
          <form method="POST" action="user.php">
            <div class="form-floating mb-3">
              <input type="text" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">رقم المنشاة</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">كلمة المرور</label>
            </div>
            <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary text-white fw-bold " type="submit">تسجيل دخول</button>
            <small class="fw-bold">ليس لديك حساب؟ <a href="signup/enterprise.php"> سجل حساب جديد</a></small>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . 'includes/end.php' ?>