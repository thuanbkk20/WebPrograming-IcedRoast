<?php 
    echo (empty($msg)?false:$msg);
?>

<form method="post" action="<?php echo _WEB_ROOT; ?>/site/register">
    <div>
        <input type="text" name="fullname" placeholder="Ho ten..." 
        value="<?php echo (empty($old['fullname'])?false:$old['fullname']);?>"></br>
        <span style="color: red">
        <?php echo (empty($errors['fullname'])?false:$errors['fullname']); ?>
        </span>
    </div>
    <div>
        <input type="text" name="phone_number" placeholder="So dien thoai" 
        value="<?php echo (empty($old['phone_number'])?false:$old['phone_number']);?>"></br>
        <span style="color: red">
        <?php echo (empty($errors['phone_number'])?false:$errors['phone_number']); ?>
        </span>
    </div>
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
    <div>
        <input type="password" name="confirm_password" placeholder="Confirm Password"
        value="<?php echo (empty($old['confirm_password'])?false:$old['confirm_password']);?>"></br>
        <span style="color: red">
        <?php echo (empty($errors['confirm_password'])?false:$errors['confirm_password']); ?>
        </span>
    </div> 
    <button type="submit">Submit</button>
</form>