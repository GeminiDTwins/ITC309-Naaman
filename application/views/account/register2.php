<html>
    <head>
        <title>My Form</title>
    </head>
    <body>

        <?php echo validation_errors(); ?>
        <?php
        if ($this->session->flashdata('message')) {
            echo '<h5>'
            . $this->session->flashdata('message') . '</h5>';
        }
        ?>
        <?php echo form_open('register/insertdetail'); ?>

        <h5>First Name</h5>
        <input type="text" name="fname" value="<?php echo set_value('fname'); ?>" size="50" />
        <span><?php echo form_error('fname') ?></span>

        <h5>Last Name</h5>
        <input type="text" name="lname" value="<?php echo set_value('lname'); ?>" size="50" />
        <span><?php echo form_error('lname') ?></span>

        <h5>Address</h5>
        <input type="text" name="address" value="<?php echo set_value('address'); ?>" size="50" />
        <span><?php echo form_error('address') ?></span>

        <h5>Postcode</h5>
        <input type="text" name="postcode" value="<?php echo set_value('postcode'); ?>" size="50" />
        <span><?php echo form_error('postcode') ?></span>

        <h5>Phone Number</h5>
        <input type="text" name="pnumber" value="<?php echo set_value('pnumber'); ?>" size="50" />
        <span><?php echo form_error('pnumber') ?></span>

        <h5>Gender</h5>
        <input type="text" name="gender" value="<?php echo set_value('gender'); ?>" size="50" />
        <span><?php echo form_error('gender') ?></span>

        <div><input type="submit" value="Submit" /></div>

    </form>

</body>
</html>