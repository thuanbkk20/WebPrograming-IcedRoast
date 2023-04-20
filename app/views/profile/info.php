<!-- <h1>Hồ Sơ Của Tôi</h1>
<p>Quản lý thông tin hồ sơ để bảo mật tài khoản</p>
<form method="post" action="<?php echo _WEB_ROOT; ?>/profile">
    <div>
        Tên đăng nhập: <?php echo $user['username'];?>
    </div>
    <div>
        <label for="first_name">Tên</label>
        <input type="text" name="first_name" placeholder="Tên" 
        value="<?php echo empty($old['first_name'])?$user['first_name']:$old['first_name'];?>"></br>
        <span style="color: red">
        <?php echo empty($errors['first_name'])?false:$errors['first_name']; ?>
        </span>
    </div>
    <div>
        <label for="last_name">Họ và tên đệm</label>
        <input type="text" name="last_name" placeholder="Ho ten..." 
        value="<?php echo empty($old['last_name'])?$user['last_name']:$old['last_name'];?>"></br>
        <span style="color: red">
        <?php echo (empty($errors['last_name'])?false:$errors['last_name']); ?>
        </span>
    </div>
    <div>
        <label for="phone_number">Số điện thoại</label>
        <input type="text" name="phone_number" placeholder="So dien thoai" 
        value="<?php echo empty($old['phone_number'])?$user['phone_number']:$old['phone_number'];?>"></br>
        <span style="color: red">
        <?php echo (empty($errors['phone_number'])?false:$errors['phone_number']); ?>
        </span>
    </div>
    <button type="submit">Lưu</button>
</form> -->

<div class="container">
    <div class="row g-0 page-body mx-1 p-2 m-2">
        <div class="col-3 col-lg-3 col-md-3 col-sm-6 mt-0 ms-3">
            <div class="d-flex  flex-row mb-3 col-12">
            <div class="pe-3">                  
                <img
                  src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                  class="rounded-circle"
                  height="50"
                  alt="Black and White Portrait of a Man"
                  loading="lazy"
                />
            </div>
                <div class="d-flex flex-column pe-2"> 
                    <div class="pb-2"><?php echo $user['username'];?></div>
                    <div>                
                    <img
                  src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                  class="rounded-circle"
                  height="20"
                  alt="Black and White Portrait of a Man"
                  loading="lazy"
                /> Sửa hồ sơ</div>
                </div>
            </div>
            <div class="d-flex flex-column mb-3 col-12">
                <ul class="list-group">
                    <li class="list-group-item">
                    <a href="#" class="sidebar-link" data-bs-toggle="collapse" data-bs-target="#cafe-submenu" aria-expanded="false" aria-controls="cafe-submenu">
                        Tài khoản của tôi
                    </a>
                    <ul class="list-unstyled collapse" id="cafe-submenu">
                        <li><a href="#">Hồ sơ</a></li>
                        <li><a href="#">Đổi mật khẩu</a></li>
                    </ul>
                    </li>
                    <li class="list-group-item">
                    <a href="#" class="sidebar-link">
                        Đơn mua
                    </a>
                    </li>
                    <li class="list-group-item">
                    <a href="#" class="sidebar-link">
                        Giỏ hàng
                    </a>
                    </li>
                </ul>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
                $(document).ready(function() {
                    $('.sidebar .list-group-item').on('click', function() {
                        $(this).toggleClass('active').siblings().removeClass('active');
                        $(this).next('.sub-menu').slideToggle(200).siblings('.sub-menu').slideUp(200);
                    });
                });
            </script>
            </div>
        </div>
        <div class="col-8 col-lg-8 col-md-8 col-sm-6 mt-0 ms-3">
            <div class="d-flex flex-column">
                    <div class="d-block mb-3">
                        <h2 class="d-block fw-bold">Hồ sơ của tôi</h2>
                        <span>Quản lý thông tin hồ sơ để bảo mật tài khoản</span>
                    </div>
                    <div class="d-block mb-1">
                        <span>Tên đăng nhập: <?php echo $user['username'];?></span>
                    </div>
                    <div>
                    <form method="post" action="<?php echo _WEB_ROOT; ?>/profile">
                                <div class="form-group">
                                    <span for="first_name">Tên</span>
                                    <input type="text" name="first_name" placeholder="Tên"  class="form-control" 
                                    value="<?php echo empty($old['first_name'])?$user['first_name']:$old['first_name'];?>">
                                    <span class="text-danger">
                                        <?php echo empty($errors['first_name'])?false:$errors['first_name']; ?>
                                    </span> 
                                </div>
                                <div class="form-group">
                                <label for="last_name">Họ và tên đệm</label>
                                    <input type="text" name="last_name" placeholder="Họ và tên đệm" class="form-control"  
                                    value="<?php echo empty($old['last_name'])?$user['last_name']:$old['last_name'];?>">
                                    <span class="text-danger">
                                    <?php echo (empty($errors['last_name'])?false:$errors['last_name']); ?>
                                    </span>
                                </div>
                                <div class="form-group">
                                <label for="phone_number">Số điện thoại</label>
                                    <input type="text" name="phone_number" placeholder="So dien thoai" class="form-control"  
                                        value="<?php echo empty($old['phone_number'])?$user['phone_number']:$old['phone_number'];?>">
                                        <span class="text-danger">
                                        <?php echo (empty($errors['phone_number'])?false:$errors['phone_number']); ?>
                                    </span>
                                </div>
                                <button type="submit" class="btn btn-primary">Lưu</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>