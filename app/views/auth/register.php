<!-- <?php 

    // echo (empty($msg)?false:$msg);
?> -->

<!-- <form method="post" action="<?php echo _WEB_ROOT; ?>/site/register">
    <div>
        <input type="text" name="fullname" placeholder="Ho ten..." 
        value="<?php echo (empty($old['fullname'])?false:$old['fullname']);?>"></br>
        <span style="color: red">
        <?php echo (empty($errors['fullname'])?false:$errors['fullname']); ?>
        </span>
    </div>
    <div>
        <input type="text" name="phone_number" placeholder="So dien thoai" 
        value="<?php echo (empty($old['phone_number'])?false:$old['phone_number']);?>"></br>
        <span style="color: red">
        <?php echo (empty($errors['phone_number'])?false:$errors['phone_number']); ?>
        </span>
    </div>
    <div>
        <input type="text" name="email" placeholder="Email"
        value="<?php echo (empty($old['email'])?false:$old['email']);?>"></br>
        <span style="color: red">
        <?php echo (empty($errors['email'])?false:$errors['email']); ?>
        </span>
    </div>
    <div>
        <input type="password" name="password" placeholder="Password"
        value="<?php echo (empty($old['password'])?false:$old['password']);?>"></br>
        <span style="color: red">
        <?php echo (empty($errors['password'])?false:$errors['password']); ?>
        </span>
    </div>
    <div>
        <input type="password" name="confirm_password" placeholder="Confirm Password"
        value="<?php echo (empty($old['confirm_password'])?false:$old['confirm_password']);?>"></br>
        <span style="color: red">
        <?php echo (empty($errors['confirm_password'])?false:$errors['confirm_password']); ?>
        </span>
    </div> 
    <button type="submit">Submit</button>
</form> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
<section class="vh-100 bg-image"
  style="background-image: url('/public/assets/images/Background_home.png');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container-fluid h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-4">
              <h2 class="text-uppercase text-center mb-5">Tạo tài khoản</h2>

              <form method="post">
                <div>
                  <span class="text-danger">
                      <?php echo (empty($msg)?false:$msg); ?>
                  </span>
                </div>
                <div class="form-outline mb-4">
                  <input type="text" id="name" name="fullname"  placeholder="Họ và tên" class="form-control form-control-lg" 
                  value="<?php echo (empty($old['fullname'])?false:$old['fullname']);?>"/>
                <span class="text-danger">
                    <?php echo (empty($errors['fullname'])?false:$errors['fullname']); ?>
                </span>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="phonenumber" name="phone_number" placeholder="Số điện thoại" class="form-control form-control-lg" 
                  value="<?php echo (empty($old['phone_number'])?false:$old['phone_number']);?>"/>
                  <span class="text-danger">
                    <?php echo (empty($errors['phone_number'])?false:$errors['phone_number']); ?>
                </span>
                </div>
                <div class="form-outline mb-4">
                  <input type="text" id="email" name="email" placeholder="Email" class="form-control form-control-lg" 
                  value="<?php echo (empty($old['email'])?false:$old['email']);?>"/>
                  <span class="text-danger">
                    <?php echo (empty($errors['email'])?false:$errors['email']); ?>
                 </span>
                </div>
                <div class="form-outline mb-4">
                  <input type="password" id="password" name="password" placeholder="Mật khẩu" class="form-control form-control-lg" 
                  value="<?php echo (empty($old['password'])?false:$old['password']);?>"/>
                  <span class="text-danger">
                    <?php echo (empty($errors['password'])?false:$errors['password']); ?>
                  </span>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="repeatpassword" name="confirm_password" placeholder="Nhập lại mật khẩu" class="form-control form-control-lg" 
                  value="<?php echo (empty($old['confirm_password'])?false:$old['confirm_password']);?>"/>
                  <span class="text-danger">
                <?php echo (empty($errors['confirm_password'])?false:$errors['confirm_password']); ?>
                </span>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Đăng kí</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Bạn đã có tài khoản? <a href="#!"
                    class="fw-bold text-body">Đăng nhập tại đây</u></a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" 
      crossorigin="anonymous"></script>
</body>