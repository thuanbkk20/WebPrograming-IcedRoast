<html style="font-size: 16px;" lang="en">
<head>
    <link rel="stylesheet" href=<?php echo _WEB_ROOT."/public/assets/css/Home.css;"?> media="screen">
</head>
<br>
<div>
  <div class="row">
    <div class="col-2"></div>
    <div class="col-4 d-flex justify-content-center align-items-center">
      <p>Xin chào các bạn</p>
      <h1 style="color: #5F3813; animation: fly-in-text 2s ease-out;">IcedRoast và hành trình phát triển</h1>
        <style>
          @keyframes fly-in-text {
            0% {
              opacity: 0;
              transform: translateY(-100%);
            }
            100% {
              opacity: 1;
              transform: translateY(0);
            }
          }
        </style>
      <h6>Sample text. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </h6>
    </div>
    <div class="col-5 d-flex justify-content-center align-items-center">
      <img style="width: 70%; object-fit: cover;" src=<?php echo _WEB_ROOT."/public/assets/images/coffee_1.jpg" ?> alt="home-img">
    </div>
    <div class="col-1"></div>
  </div>

  <div class="row" style="background-image: linear-gradient(to bottom, #ffffff, #7CF0EB); height: 100vh;">
    <div class="col-1"></div>
    <div class="col-4 d-flex justify-content-center align-items-center">
      <img style="width: 50%; object-fit: cover;" src=<?php echo _WEB_ROOT."/public/assets/images/logo_IcedRoast.png" ?> alt="home-img">
    </div>
    <div class="col-6 d-flex justify-content-center align-items-center">
      <div>
        <h3>Logo</h3>
        <p>Sample text. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Image from</p>
      </div>
    </div>
    <div class="col-1"></div>
  </div>

  <div class="row" style="height: 100vh;">
    <div class="col-12 text-center">
      <br><br><br><br>
      <h1>Feedback của khách hàng</h3>
      <br><br>
      <p>Sample text. Click to Egestas egestas fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate. Pharetra magna ac placerat vestibulum. </p>
    </div>
    <div class="row d-flex align-items-center justify-content-center">
        <div class="col-12 col-md-8">
          <div class="card mb-3" style="background-color: #FEF9E6;">
            <div class="card-body d-flex flex-row align-items-center">
              <img src=<?php echo _WEB_ROOT."/public/assets/images/user-woman.jpg" ?> class="rounded-circle mr-3" width="100" height="100">
              <div>
                <p class="mb-0 mx-2">Quam lacus suspendisse faucibus interdum posuere lorem. Egestas tellus rutrum tellus pellentesque eu tincidunt. Neque vitae tempus quam pellentesque nec.</p>
                <small class="text-muted">- Nick Larson</small>
              </div>
            </div>
          </div>

          <div class="card mb-3" style="background-color: #FEF9E6;">
            <div class="card-body d-flex flex-row align-items-center">
              <img src=<?php echo _WEB_ROOT."/public/assets/images/user-1.jpg" ?> class="rounded-circle mr-3" width="100" height="100">
              <div>
                <p class="mb-0 mx-2">Quam lacus suspendisse faucibus interdum posuere lorem. Egestas tellus rutrum tellus pellentesque eu tincidunt. Neque vitae tempus quam pellentesque nec.</p>
                <small class="text-muted">- Hell Flame</small>
              </div>
            </div>
          </div>

          <div class="card mb-3" style="background-color: #FEF9E6;">
            <div class="card-body d-flex flex-row align-items-center">
              <img src=<?php echo _WEB_ROOT."/public/assets/images/user-2.jpg" ?> class="rounded-circle mr-3" width="100" height="100">
              <div>
                <p class="mb-0 mx-2">Quam lacus suspendisse faucibus interdum posuere lorem. Egestas tellus rutrum tellus pellentesque eu tincidunt. Neque vitae tempus quam pellentesque nec.</p>
                <small class="text-muted">- Lucy Hahaha</small>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>



  <div class="row" style="background-image: linear-gradient(to right, #FFD700, #FFA500); height: 100vh;">
    <div class="col-1"></div>
    <div class="col-5 d-flex justify-content-start align-items-center">
      <div>
        <h1>Bạn đang tìm kiếm một loại nước uống tuyệt vời?</h1>
        <p class="text-danger my-4"><strong>Hãy đến với IcedRoast</strong></p>
        <a href=<?php echo _WEB_ROOT."/site/login" ?>>
          <button type="button" class="btn btn-danger">Đăng nhập</button>
        </a>
      </div>
    </div>
    <div class="col-5 d-flex justify-content-center align-items-center">
      <img style="width: 70%; object-fit: cover;" src=<?php echo _WEB_ROOT."/public/assets/images/point.png" ?> alt="point-img">
    </div>
    <div class="col-1"></div>
  </div>
</div>



