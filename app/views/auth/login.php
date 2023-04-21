<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<section style="background-color: rgb(111, 78, 55)">
  <div class="vh-100 container py-3">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-8">
            <div class="col-md-6 col-lg-5 d-md-block">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form method="post" action="<?php echo _WEB_ROOT; ?>/site/login">

                  <div class="d-flex align-items-center mb-3 pb-3">
                  <a class="navbar-brand mt-2 mt-lg-0" href="#">
                    <img
                    src="/public/assets/images/logo_IcedRoast.png"
                    height="75"
                    weight="75"
                    alt="IcedRoastLogo"
                    loading="lazy"
                    style="vertical-align: bottom;"
                    />
                    <i class="fas fa-cubes fa-2x me-3"></i>
                    <span class="h1 fw-bold mb-0" style="color: #2cabe2">IcedRoast</span>
                  </div>

                  <h5 class="fw-normal mb-3 text-black-50 pb-lg-3"><i>Cảm nhận hương vị cà phê rang xay cùng IcedRoast!</i></h5>
                  <div class="form-outline mb-2">
                  <input type="text" name="email" placeholder="Email" class="form-control form-control-lg" value="<?php echo (empty($old['email'])?false:$old['email']);?>" required>
                    <label class="form-label" for="Email address"></label>
                    <span class="text-danger">
                      <?php echo (empty($errors['email'])?false:$errors['email']); ?>
                    </span>
                  </div>
                  <div class="form-outline mb-2">
                  <input type="password" name="password" placeholder="Password" class="form-control form-control-lg"
                    value="<?php echo (empty($old['password'])?false:$old['password']);?>">
                    <label class="form-label" for="password"></label>
                    <span class="text-danger">
                    <?php echo (empty($errors['password'])?false:$errors['password']); ?>
                    </span>
                  </div>
                  <div class="pt-1 mb-4">
                    <button class="btn btn-lg btn-block" style="background-color: rgb(111, 78, 55); color: white;" type="submit">Đăng nhập</button>
                  </div>
                  <p class="mb-6 pb-lg-2">Bạn chưa có tài khoản? 
                  <a href="/site/register" style="color: rgb(111, 78, 55);">Vui lòng đăng ký tại đây</a></p>
                </form>
              </div>
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

<!-- <form method="post" action="<?php echo _WEB_ROOT; ?>/site/login">
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
    <button type="submit">Submit</button>
</form> -->