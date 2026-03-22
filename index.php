<?php 
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/dataBase_close.php';
?> 

    <?php include_once './parts/header.php'; ?>
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto">
            <img src="images/camtasia.webp" alt="">
            <h1 class="display-4 fw-normal">اربح مع عاصم</h1>
            <p class="lead fw-normal">باقي على فتح التسجيل</p>
            <h3 id="CD"></h3>
            <p class="lead fw-normal">للسحب على نسخه مجانيه من برنامج</p>
            
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block">
            </div>
            
           <div class="container">
            <h3>للدخول في السحب الرجاء متابعة ما يلي</h3>
             <ul class="list-group list-group-flush">
                <li class="list-group-item">تابع البث المباشر على قناتي في الكيك بالتاريخ المذكور اعلاه</li>
                <li class="list-group-item">ببث ساعه كامله والبث عباره عن اسئلة و اجوبه عامه للجميع</li>
                <li class="list-group-item">هذه هي صفحة التسجيل سجل اسمك و ايميلك تحت </li>
                <li class="list-group-item">بيفوز شخص واحد فقط</li>
                <li class="list-group-item">الجائزه هي نسخه مجانيه من برنامج كامتازيا</li>
            </ul> 
           </div>           
        </div>
        
        <div class="container">
    <div class="position-relative text-center ">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <h3>ادخل معلوماتك</h3>
    <div class="mb-3">
        <label for="firstName" class="form-label">الإسم الأول </label>
        <input type="text" name="firstName" class="form-control" id="firstName" value="<?php echo $firstName ?>">
    <div  class="form-text error"><?php echo $errors ['firstNameError'] ?></div>
    </div>
    <div class="mb-3">
        <label for="lastName" class="form-label">الإسم الأخير</label>
        <input type="text" name="lastName" class="form-control" id="lastName" value="<?php echo $lastName ?>" >
    <div  class="form-text error"><?php echo $errors ['lastNameError'] ?></div>
    </div>
    <div class="mb-3">
    <label for="email" class="form-label">البريد الالكتروني</label>
    <input type="text" name="email" class="form-control" id="email" value="<?php echo $email ?>">
    <div class="form-text error">
        <?php echo $errors['emailError']; ?>
    </div>
</div>
        <button type="submit" name="submit" class="btn btn-primary">إرسال المعلومات</button>
    </form>
    </div>
    </div>
    </div>

    <div class="loader-con">
        <div id="loader">
        <canvas id="circularLoader" width="200" height="200"></canvas>
        </div>
    </div>

    <div class="d-grid gap-2 col-6 mx-auto my-5"> 
        <button type="button" id="winner" class="btn btn-primary">
            إختيار الرابح
        </button>
    </div>

<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">الرابح هو </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <?php foreach($users as $user): ?>
                <h5 class="display-3 text-center modal-title" id="modalLabel"><?php echo htmlspecialchars($user['firstName']) .' '.htmlspecialchars($user['lastName']); ?> </h5>
            <?php endforeach; ?>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>



<?php include_once './parts/footer.php'; ?>