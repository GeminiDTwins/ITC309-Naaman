<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Welcome to Naaman</title>
    </head>
    <body>

        <div id="container">
            <h1>Welcome to Naaman!</h1>

            <div id="body">

                <table width="600" align="center" border="1" cellspacing="5" cellpadding="5">

                    <?php echo validation_errors(); ?>
                    <?php echo form_open('user/login'); ?>
                    <tr>
                        <td>Enter Your Username </td>
                        <td><input type="text" name="username" value="<?php echo set_value('username'); ?>"/></td>
                    </tr>
                    <tr>
                        <td width="230">Enter Your Password </td>
                        <td width="329"><input type="password" name="pass"/></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" name="login" value="Login"/></td>
                    </tr>
                    </form>
                    <tr>
                        <td colspan="2" align="center">
                            <a href="<?php echo base_url(); ?>index.php/form/signup" class="btn btn-link" role="button">Register</a>
                    </tr>
                </table>
            </div>


        </div>

    </body>
</html>