    <!-- navbar -->
    <nav class="navbar navbar-expand-sm navbar-light"  style="background-color: rgb(194, 241, 244)">
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
    <a class="navbar-brand mt-2 mt-lg-0" href=<?php echo _WEB_ROOT; ?>>
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
            <form class="d-flex">
                <input 
                class="form-control me-2" 
                type="text" placeholder="Search">
                <button class="btn btn-primary" type="submit">Search</button>
              </form>
            <!-- Icon -->
            <a class="link-secondary me-3" href="#">
              <i class="fas fa-shopping-cart"></i>
            </a>
            <ul class="navbar-nav">
                <!-- Badge -->
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span class="badge badge-pill bg-danger">
                      <?php
                        if(!Session::data('cartQuantity')) echo 0;
                        else echo Session::data('cartQuantity');
                      ?>
                    </span>
                    <span><i class="fas fa-shopping-cart"></i></span>
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
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  <?php if(isset($first_name)) echo $first_name; else echo "User name";?>
                  <img
                  src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                  class="rounded-circle"
                  height="25"
                  alt="Black and White Portrait of a Man"
                  loading="lazy"
                />
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href=<?php echo _WEB_ROOT."/member/profile";?>>Thông tin cá nhân</a></li>
                  <li><a class="dropdown-item" href=<?php echo _WEB_ROOT."/site/logout"?>>Đăng xuất</a></li>
                </ul>
              </div>
          </div>
        </div>
      </nav>
