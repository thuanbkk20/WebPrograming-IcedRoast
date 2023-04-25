<link rel="stylesheet" href=<?php echo _WEB_ROOT."/public/assets/css/ad_list.css";?>>

<div class="row py-3">
    <div class="col-lg-1"></div>

    <div class="col-lg-8 text-middle">
        <h1 class="d-flex justify-content-between">Thêm tài khoản</h1>
        <form class="p-4 border rounded mx-auto" method="post" action="<?php echo _WEB_ROOT.'/admin/UserModify/create';?>" style="background-color: #FEF3D7">
            <!-- form content -->
            <div>
                <span >
                    <?php echo (empty($msg)?false:$msg); ?>
                </span>
            </div>
            <!-- form content -->

            <div class="form-group mb-4">
                <label for="name">Tên</label>
                <input type="text" id="name" name="first_name" class="form-control" 
                value="<?php echo (empty($old['first_name'])?false:$old['first_name']);?>"/>
                <span class="text-danger">
                    <?php echo (empty($errors['first_name'])?false:$errors['first_name']); ?>
                </span>
            </div>

            <div class="form-group mb-4">
                <label for="name">Họ và tên đệm</label>
                <input type="text" id="name" name="last_name" class="form-control" 
                value="<?php echo (empty($old['last_name'])?false:$old['last_name']);?>"/>
                <span class="text-danger">
                    <?php echo (empty($errors['last_name'])?false:$errors['last_name']); ?>
                </span>
            </div>

            <div class="form-group mb-4">
                <label for="phonenumber">Số điện thoại</label>
                <input type="text" id="phonenumber" name="phone_number" class="form-control" 
                value="<?php echo (empty($old['phone_number'])?false:$old['phone_number']);?>"/>
                <span class="text-danger">
                    <?php echo (empty($errors['phone_number'])?false:$errors['phone_number']); ?>
                </span>
            </div>

            <div class="form-group mb-4">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" 
                value="<?php echo (empty($old['email'])?false:$old['email']);?>"/>
                <span class="text-danger">
                    <?php echo (empty($errors['email'])?false:$errors['email']); ?>
                </span>
            </div>

            <div class="form-group mb-4">
                <label for="role">Quyền</label>
                <select id="role" name="role" class="form-control">
                    <option value="admin" <?php if(isset($old['role'])&&$old['role']=='admin') echo 'selected="selected"'; ?>>Admin</option>
                    <option value="user" <?php if(isset($old['role'])&&$old['role']=='user') echo 'selected="selected"'; ?>>Người dùng</option>
                </select>
            </div>

            <div class="form-group mb-4">
                <label for="password">Mật khẩu</label>
                <input type="password" id="password" name="password" class="form-control" 
                value="<?php echo (empty($old['password'])?false:$old['password']);?>"/>
                <span class="text-danger">
                    <?php echo (empty($errors['password'])?false:$errors['password']); ?>
                </span>
            </div>

            <div class="form-outline mb-4">
                <label for="password">Xác nhận mật khẩu</label>
                <input type="password" id="repeatpassword" name="confirm_password" placeholder="Nhập lại mật khẩu" class="form-control" 
                value="<?php echo (empty($old['confirm_password'])?false:$old['confirm_password']);?>"/>
                <span >
            <?php echo (empty($errors['confirm_password'])?false:$errors['confirm_password']); ?>
            </span>
            </div>

            <div class="d-flex justify-content-center">
                <button type="submit"
                class="btn btn-update">Thêm tài khoản</button>
            </div>
        </form>
    </div>

    <div class="col-lg-2">

    </div>
</div>



<br/><br/>