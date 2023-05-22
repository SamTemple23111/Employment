<?php
$title = 'Contact';
include 'includes/beginning.php';
include 'includes/nav.php';
?>



<div class="py-5 text-center">
  <h1 class="display-4 fw-bold">تواصل معنا</h1>
  <p class="text-muted lead" id="pra">بإمكانك التواصل معنا عبر الإيميل وسوف يتم التواصل معك في أقرب وقت ممكن</p>
</div>

<div class="container w-25 justify-content-center align-items-center">
  <form action="contact.php" method="post" autocomplete="off">
    <div class="form-group">
      <label class="py-1 fw-bold" for="name">الاسم: </label>
      <input type="text" id="name" class="form-control">
    </div>

    <div class="form-group py-2">
      <label class="py-1 fw-bold" for="subject">الموضوع: </label>
      <input type="text" id="subject" class="form-control">
    </div>

    <div class="form-group py-2">
      <label class="py-1 fw-bold" for="email">البريد اللإلكتروني: </label>
      <input type="email" name="email" class="form-control" id="email">
    </div>

    <div class="form-group py-2">
      <label class="py-1 fw-bold" for="email">الرساله: </label>
      <textarea name="message" id="" class="form-control" cols="30" rows="10"></textarea>
    </div>

    <div class="form-group py-1">
      <input type="submit" value="إرسال" class="form-control btn btn-primary" name="submit">
    </div>

    <div class="py-3"></div>

</div>
</form>

<?php include 'includes/footer.php' ?>
<?php include 'includes/end.php' ?>