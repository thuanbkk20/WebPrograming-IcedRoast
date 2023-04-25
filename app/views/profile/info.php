<link rel="stylesheet" href=<?php echo _WEB_ROOT."/public/assets/css/nav.css";?>>

<!-- <h1>Hồ Sơ Của Tôi</h1>
<p>Quản lý thông tin hồ sơ để bảo mật tài khoản</p>
<form method="post" action="<?php echo _WEB_ROOT; ?>/member/profile">
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
<br><br>
<div class="row gy-4">  
    <div class="col-12 col-lg-3 border-end">
        <div class="sidebar">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                        <div class="mt-3">
                            <h4><?php echo $user['last_name']." ".$user['first_name'];?></h4>
                            <p class="text-secondary mb-1"><?php echo $user['phone_number'];?></p>
                        </div>
                    </div>

                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="#" class="sidebar-link" data-bs-toggle="collapse" data-bs-target="#cafe-submenu" aria-expanded="false" aria-controls="cafe-submenu">
                                Tài khoản của tôi
                            </a>
                            <ul class="collapse submenu" id="cafe-submenu">
                                <li><a class="text-decoration-none text-body" href="#">Hồ sơ</a></li>
                                <li><a class="text-decoration-none text-body" href="#">Đổi mật khẩu</a></li>
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
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-lg-9">
        <div class="card mb-3">
            <div class="card-body m-5">
                <div class="d-block mb-3">
                    <h2 class="d-block fw-bold">Hồ sơ của tôi</h2>
                    <span>Quản lý thông tin hồ sơ để bảo mật tài khoản</span>
                </div>
                <div class="mb-2 row">
                    <span class="col-2">Tên đăng nhập</span>
                    <span class="col-10"><?php echo $user['username'];?></span>
                </div>
                <div>
                    <form method="post" action="<?php echo _WEB_ROOT; ?>/member/profile">
                        <div class="form-group row">
                            <label for="first_name" class="col-2 col-form-label">Tên</label>
                            <div class="col-3">
                                <input type="text" name="first_name" placeholder="Tên"  class="form-control" 
                                value="<?php echo empty($old['first_name'])?$user['first_name']:$old['first_name'];?>">
                                <span class="text-danger">
                                    <?php echo empty($errors['first_name'])?false:$errors['first_name']; ?>
                                </span> 
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="last_name" class="col-2 col-form-label"> Họ và tên đệm</label>
                        <div class="col-3"> 
                            <input type="text" name="last_name" placeholder="Họ và tên đệm" class="form-control"  
                            value="<?php echo empty($old['last_name'])?$user['last_name']:$old['last_name'];?>">
                            <span class="text-danger">
                                <?php echo (empty($errors['last_name'])?false:$errors['last_name']); ?>
                            </span>
                        </div>
                    </div>

                        <div class="form-group row">
                            <label for="phone_number" class="col-2 col-form-label">Số điện thoại</label>
                        <div class="col-3"> 
                        <input type="text" name="phone_number" placeholder="So dien thoai" class="form-control"  
                            value="<?php echo empty($old['phone_number'])?$user['phone_number']:$old['phone_number'];?>">
                            <span class="text-danger">
                                <?php echo (empty($errors['phone_number'])?false:$errors['phone_number']); ?>
                            </span>
                        </div>  
                        </div>
                        <button type="submit" class="btn btn-warning">Lưu</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
