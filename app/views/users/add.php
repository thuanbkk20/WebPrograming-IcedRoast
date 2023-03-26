<?php 
    echo (empty($msg)?false:$msg);
?>

<form method="post" action="<?php echo _WEB_ROOT; ?>/site/login">
    <div>
        <input type="text" name="fullname" placeholder="Ho ten..." 
        value="<?php echo form_old_data('fullname');?>"></br>
        <span style="color: red">
        <?php echo form_error('fullname','<span style="color: red">','</span>');?>
    </div>
    <div>
        <input type="text" name="age" placeholder="Tuoi" 
        value="<?php echo form_old_data('age');?>"></br>
        <?php echo form_error('age','<span style="color: red">','</span>');?>
    </div>
    <div>
        <input type="text" name="email" placeholder="Email"
        value="<?php echo form_old_data('email');?>"></br>
        <?php echo form_error('email','<span style="color: red">','</span>');?>
    </div>
    <div>
        <input type="password" name="password" placeholder="Password"
        value="<?php echo form_old_data('password');?>"></br>
        <?php echo form_error('password','<span style="color: red">','</span>');?>
    </div>
    <div>
        <input type="password" name="confirm_password" placeholder="Confirm Password"
        value="<?php echo form_old_data('confirm_password');?>"></br>
        <?php echo form_error('confirm_password','<span style="color: red">','</span>');?>
    </div> 
    <button type="submit">Submit</button>
</form>