<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>RPM | Ultrasoft</title>


    <!--STYLESHEET-->
    <!--=================================================-->
    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href='<?php echo base_url("assets/css/bootstrap.min.css"); ?>' rel="stylesheet">
    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href='<?php echo base_url("assets/css/nifty.min.css"); ?>' rel="stylesheet">
    
    <link href='<?php echo base_url("assets/css/demo/nifty-demo-icons.min.css"); ?>' rel="stylesheet">
    <!--Font Awesome-->
    <link href='<?php echo base_url("assets/plugins/font-awesome/css/font-awesome.min.css"); ?>' rel="stylesheet">
    <!--Bootstrap Select-->
    <link href='<?php echo base_url("assets/plugins/bootstrap-select/bootstrap-select.min.css"); ?>' rel="stylesheet">
    <!--Bootstrap Datepicker-->
    <link href='<?php echo base_url("assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css"); ?>' rel="stylesheet">
    <link href='<?php echo base_url("assets/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.css"); ?>' rel="stylesheet">

    <!--DataTables [ OPTIONAL ]-->
    <link href='<?php echo base_url("assets/plugins/datatables/media/css/dataTables.bootstrap.css"); ?>' rel="stylesheet">
	<link href='<?php echo base_url("assets/plugins/datatables/extensions/Responsive/css/responsive.dataTables.min.css"); ?>' rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css" rel="stylesheet">
    <!--=================================================-->
   
    <link href='<?php echo base_url("assets/plugins/chosen/chosen.min.css"); ?>' rel="stylesheet">

    <link href='<?php echo base_url("assets/plugins/select2/css/select2.min.css"); ?>' rel="stylesheet">


    <!-- JsGrid -->
    <link href='<?php echo base_url("assets/plugins/jsgrid/jsgrid.min.css"); ?>' rel="stylesheet">
    <link href='<?php echo base_url("assets/plugins/jsgrid/jsgrid-theme.min.css"); ?>' rel="stylesheet">

    <!--JAVASCRIPT-->
    <!--=================================================-->
    <!--jQuery [ REQUIRED ]-->
    <script src='<?php echo base_url("assets/js/jquery.min.js"); ?>' ></script>
    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src='<?php echo base_url("assets/js/bootstrap.min.js"); ?>' ></script>
    <!--NiftyJS [ RECOMMENDED ]-->
    <script src='<?php echo base_url("assets/js/nifty.min.js");?>' ></script>

    <!--DataTables [ OPTIONAL ]-->
    <script src='<?php echo base_url("assets/plugins/datatables/media/js/jquery.dataTables.js"); ?>'></script>
    <script src='<?php echo base_url("assets/plugins/datatables/media/js/dataTables.bootstrap.js"); ?>'></script>
    <script src='<?php echo base_url("assets/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"); ?>'></script>
    <!-- <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script> -->

    <script src='<?php echo base_url("assets/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.js"); ?>'></script>

    <style>
        #page-content{
            /*margin-top:-50px;*/
        }

        @media (min-width: 992px){
            .modal-xl {
                width: 1200px;
            }
        }
    </style>
</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
<body>
    <div id="container" class="effect aside-float aside-bright mainnav-sm page-fixedbar">
        
        <?php $this->load->view('template/nav'); ?>