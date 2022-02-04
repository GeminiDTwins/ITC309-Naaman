<div class="topnav" id="myTopnav" style = "
  overflow: hidden;">
  <a href="" class="active" style = "float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;" onMouseOver="this.style.color='#ddd'" onMouseOut="this.style.color='white'">
  <form
			action="<?php echo base_url('index.php/AdminController/showUsers') ?>"
		>
			<button class="btn btn-success text-white" type="submit"><img src = "..\..\assets\Images\people-fill.svg"> Users</button>
		</form>
</a>
  <a href="" style = "float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;" onMouseOver="this.style.color='#ddd'" onMouseOut="this.style.color='white'">
  <form
	action="<?php echo base_url('index.php/AdminController/showPhysician') ?>"
  >
		<button class="btn btn-success" type="submit"><img src = "..\..\assets\Images\physician.svg"> Physicians</button>
	</form></a>
  <a href="" style = "float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;" onMouseOver="this.style.color='#ddd'" onMouseOut="this.style.color='white'">
  <form
			action="<?php echo base_url('index.php/AdminController/showBookings') ?>"
		>
			<button class="btn btn-success" type="submit"><img src = "..\..\assets\Images\calendar-week-fill.svg"> Bookings</button>
		</form></a>
</div>