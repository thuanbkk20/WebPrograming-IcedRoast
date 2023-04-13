<!-- <h1>HEADER</h1> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>IcedRoast</title>
</head>
<body>
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
    <a class="navbar-brand mt-2 mt-lg-0" href="#">
      <img
        src='public/assets/images/logo_IcedRoast.png'
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
                <a class="nav-link" href="#">Trang chủ</a> 
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Giới thiệu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Tin tức</a> 
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Sản phẩm</a> 
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Liên hệ</a> 
              </li>
            </ul>
            </div>
         </div>
         <div class="d-flex align-items-center">
            <form class="d-flex">
                <input 
                class="form-control me-2" 
                type="text" placeholder="Search">
                <button class="btn btn-primary" type="submit">Seacrh</button>
              </form>
            <!-- Icon -->
            <a class="link-secondary me-3" href="#">
              <i class="fas fa-shopping-cart"></i>
            </a>
            <ul class="navbar-nav">
                <!-- Badge -->
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span class="badge badge-pill bg-danger">1</span>
                    <span><i class="fas fa-shopping-cart"></i></span>
                    <img
                    src="public/assets/images/Giohang.png"
                    height="25"
                    alt="Black and White Portrait of a Man"
                    loading="lazy"
                  />
                  </a>
                </li>
              </ul>
              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  User name
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
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="site/logout">Đăng xuất</a></li>
                </ul>
              </div>
          </div>
        </div>
      </nav>
      <!-- header -->
</hr>
