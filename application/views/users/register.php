<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Login | PressMS</title>


    <!--STYLESHEET-->
    <!--=================================================-->
    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href='<?php echo base_url("assets/css/bootstrap.min.css"); ?>' rel="stylesheet">

    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href='<?php echo base_url("assets/css/nifty.min.css"); ?>' rel="stylesheet">

    <!--=================================================-->

    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href='<?php echo base_url("assets/plugins/pace/pace.min.css"); ?>' rel="stylesheet">
    <script src='<?php echo base_url("assets/plugins/pace/pace.min.js"); ?>'></script>
        
    <!--Demo [ DEMONSTRATION ]-->
    <link href='<?php echo base_url("assets/css/demo/nifty-demo.min.css"); ?>' rel="stylesheet">

    <style>
        .bg-trees {
            background-image: url ('http://localhost:8080/pressMS/pressMS/assets/img/bg/bg-img-3.jpg');
        }
    </style>
       
</head>

<body>
    <div id="container" class="cls-container">
        
		<!-- BACKGROUND IMAGE -->
		<!--===================================================-->
		<div id="bg-overlay" class="bg-img bg-trees"></div>
		
		
		<!-- REGISTRATION FORM -->
		<!--===================================================-->
		<div class="cls-content">
		    <div class="cls-content-lg panel">
		        <div class="panel-body">
		            <div class="mar-ver pad-btm">
		                <h1 class="h3">Create a New Account</h1>
		                <p>Come join the vSocial community! Let's set up your account.</p>
		            </div>
		            <form>
		                <div class="row">
		                    <div class="col-sm-6">
		                        <div class="form-group">
		                            <input type="text" class="form-control" placeholder="First name" name="fname" id="fname">
		                        </div>  
		                    </div>
                            <div class="col-sm-6">
                                <div class="form-group">
		                            <input type="text" class="form-control" placeholder="Last name" name="lname" id="lname">
		                        </div>       
		                    </div>
                            
                            <div class="col-sm-12">
		                        <div class="form-group">
		                            <input type="text" class="form-control" placeholder="E-mail" name="email" id="email">
		                        </div>
		                    </div>
		                    <div class="col-sm-6">
		                        <div class="form-group">
		                            <input type="text" class="form-control" placeholder="Username" name="username" id="username">
		                        </div>
		                    </div>
                            <div class="col-sm-6">
                                <div class="form-group">
		                            <input type="password" class="form-control" placeholder="Password" name="password" id="password">
		                        </div>
		                    </div>
		                </div>
		                <div class="checkbox pad-btm text-left">
		                    <input id="demo-form-checkbox" class="magic-checkbox" type="checkbox">
		                    <label for="demo-form-checkbox">I agree with the <a href="#" class="btn-link text-bold">Terms and Conditions</a></label>
		                </div>
                        <input type="hidden" name="accountid" id="accountid">
		                <button class="btn btn-primary btn-lg btn-block" type="submit" id="submitUser">Register</button>
		            </form>
		        </div>
		        <div class="pad-all">
		            Already have an account ? <a href="pages-login.html" class="btn-link mar-rgt text-bold">Sign In</a>
		        </div>
		    </div>
		</div>
		<!--===================================================-->
		
    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->
    
    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--jQuery [ REQUIRED ]-->
    <script src='<?php echo base_url("assets/js/jquery.min.js"); ?>'></script>

    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src='<?php echo base_url("assets/js/bootstrap.min.js"); ?>'></script>

    <!--NiftyJS [ RECOMMENDED ]-->
    <script src='<?php echo base_url("assets/js/nifty.min.js"); ?>'></script>

    <!--=================================================-->
    <!--Background Image [ DEMONSTRATION ]-->
    <script src='<?php echo base_url("assets/js/demo/bg-images.js"); ?>'></script>
    
    <script>
        $(document).on('click', '#submitUser', function(e){
            e.preventDefault();
            //let order_master_id = $(this).data("order");
            let accountid = $('#accountid').val();
            let username = $('#username').val();
            let email = $('#email').val();
            let fname = $('#fname').val();
            let lname = $('#lname').val();
            let password = $('#password').val();

            console.log(accountid + ',' +  username);
            $.ajax({
                url : "<?php echo site_url('user/set_user');?>",
                method : "POST",
                data : {accountid: accountid, username: username, email: email, fname: fname, lname: lname, password: password},
                success: function(data){
                    console.log(data);
                    let url = "<?php echo site_url('user/index');?>";
                    if (data == 1) {
                        window.location.replace(url);
                    }else{
                        alert("Error Occured.");
                    }
                }
            });
        })
    </script>
</body>
</html>
