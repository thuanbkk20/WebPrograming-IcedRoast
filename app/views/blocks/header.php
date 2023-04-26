    <!-- navbar -->
<nav class="navbar navbar-expand-sm navbar-light"  style="background-color: #FEF3D7">
  <div class="container">
      <!-- Toggle button -->
      <button
          class="navbar-toggler"
          type="button"
          data-mdb-toggle="collapse"
          data-mdb-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
      >
      <i class="fas fa-bars"></i>
      </button>

<!-- Collapsible wrapper -->
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<!-- Navbar brand -->
<a class="navbar-brand mt-2 mt-lg-0" href=<?php echo _WEB_ROOT;?>>
<img
  src=<?php echo _WEB_ROOT.'/public/assets/images/logo_IcedRoast.png';?>
  height="30"
  weight="40"
  alt="IcedRoastLogo"
  loading="lazy"
/>
<small>IcedRoast</small>
</a>
    <button class="navbar-toggler" 
    type="button" data-bs-toggle="collapse" 
    data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href=<?php echo _WEB_ROOT; ?>>Trang chủ</a> 
        </li>
        <li class="nav-item">
          <a class="nav-link" href=<?php echo _WEB_ROOT.'/aboutUs'; ?>>Giới thiệu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=<?php echo _WEB_ROOT.'/news'; ?>>Tin tức</a> 
        </li>
        <li class="nav-item">
          <a class="nav-link" href=<?php echo _WEB_ROOT.'/product'; ?>>Sản phẩm</a> 
        </li>
        <li class="nav-item">
          <a class="nav-link" href=<?php echo _WEB_ROOT.'/contact'; ?>>Liên hệ</a> 
        </li>
      </ul>
      </div>
    </div>
    <div class="d-flex align-items-center">
      <!-- Icon -->
      <a class="link-secondary me-3" href="#">
        <i class="fas fa-shopping-cart"></i>
      </a>
      <ul class="navbar-nav">
          <!-- Badge -->
          <li class="nav-item">
            <a class="nav-link" href=<?php echo _WEB_ROOT.'/member/cart';?>>
              <span class="badge badge-pill bg-danger" id="cartQuantity">
                <?php
                  if(!Session::data('cartQuantity')) echo 0;
                  else echo Session::data('cartQuantity');
                ?>
              </span>
              <img
              src=<?php echo _WEB_ROOT."/public/assets/images/Giohang.png";?>
              height="25"
              alt="Black and White Portrait of a Man"
              loading="lazy"
              />
            </a>
          </li>
      </ul>
        <div class="dropdown">
          <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <?php if(isset($first_name)) echo $first_name; else echo "User name";?>
            <img
            src="https://bootdey.com/img/Content/avatar/avatar7.png"
            class="rounded-circle"
            height="25"
            alt="Black and White Portrait of a Man"
            loading="lazy"
          />
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href=<?php echo _WEB_ROOT."/site/login"?>>Đăng nhập</a></li>
            <li><a class="dropdown-item" href=<?php echo _WEB_ROOT."/member/profile";?>>Thông tin cá nhân</a></li>
            <li><a class="dropdown-item" href=<?php echo _WEB_ROOT."/admin/dashboard"?>>Admin</a></li>
            <li><a class="dropdown-item" href=<?php echo _WEB_ROOT."/site/logout"?>>Đăng xuất</a></li>
          </ul>
        </div>
    </div>
  </div>
</nav>
