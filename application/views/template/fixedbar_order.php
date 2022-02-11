<div class="page-fixedbar-container">
        <div class="page-fixedbar-content">
            <div class="nano">
                <div class="nano-content">

                    <div class="pad-all">
                        <span class="pad-ver text-main text-sm text-uppercase text-bold">Orders Management</span>
                        <hr class="new-section-xs">
                        <ul class="list-unstyled text-center pad-btm mar-no row">
                            <li class="col-xs-6">
                                <span class="text-2x text-normal text-main">1,345</span>
                                <p class="text-muted mar-no">Total Orders</p>
                            </li>
                            <li class="col-xs-6">
                                <span class="text-2x text-normal text-main">278</span>
                                <p class="text-muted mar-no">Renting</p>
                            </li>
                        </ul>

                        <a href="<?php echo site_url('order/new_order');?>" class="btn btn-block btn-info mar-top">Add New Order</a>
                    </div>
                    <hr class="new-section-xs">
                    

                    <!--===================================================-->

                    <div class="list-group bg-trans">
                        <a href="<?php echo site_url('order/index');?>" class="list-group-item"><i class="fa fa-home icon-lg icon-fw"></i> Dashboard</a>

                    </div>
                    <hr class="new-section-xs">

                    <p class="pad-all text-main text-sm text-uppercase text-bold">Order Details</p>

                    <!--Simple Menu-->
                    <div class="list-group bg-trans">
                        
                        <a class="list-group-item" href="<?php echo site_url('order/orders/0');?>"><i class="fa fa-spinner icon-lg icon-fw"></i>All Orders</a>
                        <a class="list-group-item" href="<?php echo site_url('order/orders/3');?>"><i class="fa fa-check icon-lg icon-fw"></i> Completed Orders</a>
                        <a class="list-group-item" href="<?php echo site_url('order/orders/1');?>"><i class="fa fa-puzzle-piece icon-lg icon-fw"></i> Pending Orders</a>
                        <a class="list-group-item" href="<?php echo site_url('order/orders/4');?>"><i class="fa fa-history icon-lg icon-fw"></i> Pending Payment</a>
                        <!-- <a class="list-group-item" href="#"><i class="fa fa-user icon-lg icon-fw"></i> Total Order user Wise</a>
                        <a class="list-group-item" href="#"><i class="fa fa-users icon-lg icon-fw"></i> Total Order Customer wise</a> -->

                    </div>
                    <hr class="new-section-xs">

                </div>
            </div>
        </div>
    </div>