<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Naaman</title>
  <link rel="stylesheet" href='<?php echo base_url("assets/SCSS/index.css"); ?>'>  <!-- href="./SCSS/index.css" -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
		  integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
			integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
			crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
			integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
			crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
		  integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
		  integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-info">
	<div class="container">
		<a class="navbar-brand" href="<?php echo base_url('index.php/home'); ?>">Naaman</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
				aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
			<div class="mx-auto">
				<form class="d-flex">
					<input class="form-control mr-2" type="search" placeholder="Search Here" aria-label="Search"
						   style="    min-width: 270%; background-color: #efefef;">
				</form>
			</div>
			<ul class="navbar-nav ml-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">
                    <i class="far fa-comment"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">
                    <i class="far fa-flag"></i>
                </a>
            </li>
            <li class="nav-item">
               <img src='<?php echo base_url($this->session->userdata('pfp')); ?>' alt="" style="width: 25px;margin-top: 9px;
               border-radius: 50px;
               margin-left: 8px;">
            </li>
            <li class="nav-item">
               <a class="nav-link" aria-current="page" href="<?php echo base_url('index.php/login/signout'); ?>">
                    <i class="fas fa-sign-out-alt">Log Out</i>
                </a>
            </li>
            
        </ul>
    </div>
  </div>
</nav>
