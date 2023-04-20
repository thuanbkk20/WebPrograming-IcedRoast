<form method="post" action="<?php echo _WEB_ROOT; ?>/profile/change_password">
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
</form>

<div class="container">
    <div class="row g-0 page-body mx-1 p-2 m-2">
        <div class="col-lg-3 col-md-3 col-sm-2 mt-0 ms-3">
            <div class="d-flex flex-row mb-3 col-12">
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
        <div class="col-lg-8 col-md-8 col-sm-10 mt-0 ms-3">
            <div class="d-flex flex-column">
                    <div class="d-block mb-3">
                        <h2 class="d-block fw-bold">Đổi mật khẩu</h2>
                        <span>Để bảo mật tài khoản, vui lòng không chia sẻ mật khẩu cho người</span>
                    </div>

                    <form method="post" action="<?php echo _WEB_ROOT; ?>/profile/change_password">
                                <div class="form-group row">
                                        <label for="password"class="col-2 col-form-label">Mật khẩu</label>
                                    <div class="col-10">
                                        <input type="password" name="password" placeholder="Password" class="form-control"
                                        value="<?php echo empty($old['password'])?false:$old['password'];?>">
                                        <span class="text-danger">
                                        <?php echo (empty($errors['password'])?false:$errors['password']); ?>
                                        </span>   
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-2 col-form-label"> Xác nhận mật khẩu</label>
                                <div class="col-10"> 
                                    <input type="password" name="confirm_password" placeholder="Confirm Password" class="form-control"
                                    value="<?php echo (empty($old['confirm_password'])?false:$old['confirm_password']);?>"></br>
                                    <span class="text-danger">
                                    <?php echo (empty($errors['confirm_password'])?false:$errors['confirm_password']); ?>
                                    </span>
                                </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Lưu</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>