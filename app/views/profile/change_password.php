<!-- <form method="post" action="<?php echo _WEB_ROOT; ?>/member/profile/change_password">
    <div>
        <h1>Đổi Mật Khẩu</h1>
        <p>Để bảo mật tài khoản, vui lòng không chia sẻ mật khẩu cho người khác</p>
    </div>
    <div>
        <label for="password">Mật khẩu</label>
        <input type="password" name="password" placeholder="Password"
        value="<?php echo empty($old['password'])?false:$old['password'];?>"></br>
        <span style="color: red">
        <?php echo (empty($errors['password'])?false:$errors['password']); ?>
        </span>
    </div>
    <div>
        <label for="password">Xác nhận mật khẩu</label>
        <input type="password" name="confirm_password" placeholder="Confirm Password"
        value="<?php echo (empty($old['confirm_password'])?false:$old['confirm_password']);?>"></br>
        <span style="color: red">
        <?php echo (empty($errors['confirm_password'])?false:$errors['confirm_password']); ?>
        </span>
    </div> 
    <button type="submit">Lưu</button>
</form> -->

<link rel="stylesheet" href=<?php echo _WEB_ROOT."/public/assets/css/nav.css";?>>

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
                            <a href=<?php echo _WEB_ROOT."/member/profile"; ?> class="sidebar-link" data-bs-toggle="collapse" data-bs-target="#cafe-submenu" aria-expanded="false" aria-controls="cafe-submenu">
                                Tài khoản của tôi
                            </a>
                            <ul class="collapse submenu" id="cafe-submenu">
                                <li><a class="text-decoration-none text-body" href=<?php echo _WEB_ROOT."/member/profile"; ?>>Hồ sơ</a></li>
                                <li><a class="text-decoration-none text-body" href=<?php echo _WEB_ROOT."/member/profile/change_password"; ?>>Đổi mật khẩu</a></li>
                            </ul>
                        </li>
                        <li class="list-group-item">
                            <a href=<?php echo _WEB_ROOT."/member/order"; ?> class="sidebar-link">
                                Đơn mua
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href=<?php echo _WEB_ROOT."/member/cart"; ?> class="sidebar-link">
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
                    <h2 class="d-block fw-bold">Đổi mật khẩu</h2>
                    <span class="text-warning">Để bảo mật tài khoản, vui lòng không chia sẻ mật khẩu cho người khác!</span>
                </div>

                <form method="post" action="<?php echo _WEB_ROOT; ?>/member/profile/change_password">
                    <div class="form-group row">
                            <label for="password"class="col-3 col-form-label">Mật khẩu</label>
                        <div class="col-5">
                            <input type="password" name="password" placeholder="Mật khẩu" class="form-control"
                            value="<?php echo empty($old['password'])?false:$old['password'];?>">
                            <span class="text-danger">
                            <?php echo (empty($errors['password'])?false:$errors['password']); ?>
                            </span>   
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-3 col-form-label"> Xác nhận mật khẩu</label>
                    <div class="col-5"> 
                        <input type="password" name="confirm_password" placeholder="Nhập lại mật khẩu" class="form-control"
                        value="<?php echo (empty($old['confirm_password'])?false:$old['confirm_password']);?>"></br>
                        <span class="text-danger">
                        <?php echo (empty($errors['confirm_password'])?false:$errors['confirm_password']); ?>
                        </span>
                    </div>
                    </div>
                    <button type="submit" class="btn btn-warning text-light">Lưu</button>
                </form>
            </div>
        </div>
    </div>
</div>
<br>

