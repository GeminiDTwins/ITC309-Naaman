<html>
    <head>
        <title>Registration Form</title>
    </head>
    <body>

        <?php echo validation_errors(); ?>

        <?php echo form_open('register/validation'); ?>

        <h5>Username</h5>
        <input type="text" name="username" value="<?php echo set_value('username'); ?>" size="50" />
        <span><?php echo form_error('username') ?></span>

        <h5>Password</h5>
        <input type="password" name="password" value="<?php echo set_value('password'); ?>" size="50" />
        <span><?php echo form_error('password') ?></span>

        <h5>Password Confirm</h5>
        <input type="password" name="passconf" value="<?php echo set_value('passconf'); ?>" size="50" />
        <span><?php echo form_error('passconf') ?></span>

        <h5>Email Address</h5>
        <input type="text" name="email" value="<?php echo set_value('email'); ?>" size="50" />
        <span><?php echo form_error('email') ?></span>

        <div><input type="submit" value="Submit" /></div>
        
    </form>
    <div><a href="<?php echo base_url(); ?>index.php/login/index" class="btn btn-link" role="button">I have account</a></div>
</body>
</html>