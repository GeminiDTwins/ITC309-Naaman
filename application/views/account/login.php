<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Welcome to Naaman</title>
    </head>
    <body>

        <div id="container">
            <h1>Welcome to Naaman!</h1>

            <div id="body">

                <?php echo validation_errors(); ?>
                <?php
                if ($this->session->flashdata('message')) {
                    echo '<h5>'
                    . $this->session->flashdata('message') . '</h5>';
                }
                ?>
                <?php echo form_open('Login/validation'); ?>

                <h5>Username</h5>
                <input type="text" name="username" value="<?php echo set_value('username'); ?>" size="50" />
                <span><?php echo form_error('username') ?></span>

                <h5>Password</h5>
                <input type="password" name="password" value="<?php echo set_value('password'); ?>" size="50" />
                <span><?php echo form_error('password') ?></span>

                <div>
                    <input type="submit" value="Submit" />
                    <a href="<?php echo base_url(); ?>index.php/register" class="btn btn-link" role="button">Register</a>
                </div>


            </div>


        </div>

    </body>
</html>