<!--NAVBAR-->
<!--===================================================-->
<header id="navbar">
    <div id="navbar-container" class="boxed">

        <!--Brand logo & name-->
        <!--================================-->
        <div class="navbar-header">
            <a href='<?php echo site_url("home") ?>' class="navbar-brand">
                <img src='<?php echo base_url("assets/img/logo.png"); ?>' alt="Logo" class="brand-icon" >
                <div class="brand-title">
                    <span class="brand-text">V Social</span>
                </div>
            </a>
        </div>
        <!--================================-->
        <!--End brand logo & name-->


        <!--Navbar Dropdown-->
        <!--================================-->
        <div class="navbar-content">
            <ul class="nav navbar-top-links">

                <!--Navigation toogle button-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <li class="tgl-menu-btn">
                    <a class="mainnav-toggle" href="#">
                        <i class="demo-pli-list-view"></i>
                    </a>
                </li>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End Navigation toogle button-->



                <!--Search-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <li>
                    <div class="custom-search-form">
                        <label class="btn btn-trans" for="search-input" data-toggle="collapse" data-target="#nav-searchbox">
                            <i class="demo-pli-magnifi-glass"></i>
                        </label>
                        <form>
                            <div class="search-container collapse" id="nav-searchbox">
                                <input id="search-input" type="text" class="form-control" placeholder="Type for search...">
                            </div>
                        </form>
                    </div>
                </li>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End Search-->

            </ul>
            <ul class="nav navbar-top-links">


                <!--Mega dropdown-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                        <i class="demo-pli-layout-grid"></i>
                    </a>
                    <!--Notification dropdown menu-->
                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                        <div class="nano scrollable">
                            <div class="nano-content">
                                <ul class="head-list">
                                    <li>
                                        <a class="media" href='<?php echo site_url("edit") ?>'>
                                            <div class="media-left">
                                                <i class="demo-pli-file-edit icon-2x"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="mar-no text-nowrap text-main text-semibold">New article</p>
                                                <small>Create a new Article to Post</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="media" href="#">
                                            <div class="media-left">
                                                <i class="demo-pli-add-user-star icon-2x"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="mar-no text-nowrap text-main text-semibold">New User</p>
                                                <small>4 minutes ago</small>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End mega dropdown-->






                <!--User dropdown-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <li id="dropdown-user" class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                        <span class="ic-user pull-right">
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--You can use an image instead of an icon.-->
                            <!--<img class="img-circle img-user media-object" src="img/profile-photos/1.png" alt="Profile Picture">-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <i class="demo-pli-male"></i>
                        </span>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--You can also display a user name in the navbar.-->
                        <!--<div class="username hidden-xs">Aaron Chavez</div>-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    </a>


                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right panel-default">
                        <ul class="head-list">
                            <li>
                                <a href="#"><i class="demo-pli-male icon-lg icon-fw"></i> Profile</a>
                            </li>                          
                            <li>
                                <a href='<?php echo site_url("user/logout"); ?>'><i class="demo-pli-unlock icon-lg icon-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End user dropdown-->

                
                <li>
                    <a href="#" class="aside-toggle">
                        <i class="demo-pli-dot-vertical"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!--================================-->
        <!--End Navbar Dropdown-->

    </div>
</header>
<!--===================================================-->
<!--END NAVBAR-->

<div class="boxed">

    <!--ASIDE-->
    <!--===================================================-->
    <aside id="aside-container">
        <div id="aside">
            <div class="nano">
                <div class="nano-content">
                    
                    <!--Nav tabs-->
                    <!--================================-->
                    <ul class="nav nav-tabs nav-justified">
                        <li>
                            <a href="#demo-asd-tab-2" data-toggle="tab">
                                <i class="demo-pli-information icon-lg icon-fw"></i> Consultations
                            </a>
                        </li>
                    </ul>
                    <!--================================-->
                    <!--End nav tabs-->



                    <!-- Tabs Content -->
                    <!--================================-->
                    <div class="tab-content">

                        <!--Second tab (Custom layout)-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <div class="tab-pane fade in active" id="demo-asd-tab-2">

                            <!--Monthly billing-->
                            
                            <div class="pad-all">
                                <span class="pad-ver text-main text-sm text-uppercase text-bold">Online Consultations</span>
                                <p class="text-sm"><?php echo date('D, d-m-Y'); ?></p>
                                <a href="<?php echo site_url('appoinment/index');?>" class="btn btn-block btn-success mar-top">Book an Appoinment</a>
                            </div>

                            <hr class="new-section-xs">

                            <div class="text-center">
                                <div><i class="demo-pli-old-telephone icon-3x"></i></div>
                                Questions?
                                <p class="text-lg text-semibold text-main"> (415) 234-53454 </p>
                                <small><em>We are here 24/7</em></small>
                            </div>
                        </div>
                        <!--End second tab (Custom layout)-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

                    </div>
                </div>
            </div>
        </div>
    </aside>
    <!--===================================================-->
    <!--END ASIDE-->

    <!--MAIN NAVIGATION-->
    <!--===================================================-->
    <nav id="mainnav-container">
        <div id="mainnav">


            <!--OPTIONAL : ADD YOUR LOGO TO THE NAVIGATION-->
            <!--It will only appear on small screen devices.-->
            <!--================================
            <div class="mainnav-brand">
                <a href="index.html" class="brand">
                    <img src="img/logo.png" alt="Nifty Logo" class="brand-icon">
                    <span class="brand-text">Nifty</span>
                </a>
                <a href="#" class="mainnav-toggle"><i class="pci-cross pci-circle icon-lg"></i></a>
            </div>
            -->



            <!--Menu-->
            <!--================================-->
            <div id="mainnav-menu-wrap">
                <div class="nano">
                    <div class="nano-content">

                        <!--Profile Widget-->
                        <!--================================-->
                        <div id="mainnav-profile" class="mainnav-profile">
                            <div class="profile-wrap text-center">
                                <div class="pad-btm">
                                    <img class="img-circle img-md" src='<?php echo base_url("assets/img/profile-photos/1.png"); ?>' alt="Profile Picture">
                                </div>
                                <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                                    <span class="pull-right dropdown-toggle">
                                        <i class="dropdown-caret"></i>
                                    </span>
                                    <p class="mnp-name"><?php echo $this->session->userdata['username']; ?></p>
                                    <span class="mnp-desc"><?php echo $this->session->userdata['email']; ?></span>
                                </a>
                            </div>
                            <div id="profile-nav" class="collapse list-group bg-trans">
                                <a href="#" class="list-group-item">
                                    <i class="demo-pli-male icon-lg icon-fw"></i> View Profile
                                </a>
                            </div>
                        </div>


                        <!--Shortcut buttons-->
                        <!--================================-->
                        <div id="mainnav-shortcut" class="hidden">
                            <ul class="list-unstyled shortcut-wrap">
                                <li class="col-xs-3" data-content="My Profile">
                                    <a class="shortcut-grid" href="#">
                                        <div class="icon-wrap icon-wrap-sm icon-circle bg-mint">
                                        <i class="demo-pli-male"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="col-xs-3" data-content="Messages">
                                    <a class="shortcut-grid" href="#">
                                        <div class="icon-wrap icon-wrap-sm icon-circle bg-warning">
                                        <i class="demo-pli-speech-bubble-3"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="col-xs-3" data-content="Activity">
                                    <a class="shortcut-grid" href="#">
                                        <div class="icon-wrap icon-wrap-sm icon-circle bg-success">
                                        <i class="demo-pli-thunder"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="col-xs-3" data-content="Lock Screen">
                                    <a class="shortcut-grid" href="#">
                                        <div class="icon-wrap icon-wrap-sm icon-circle bg-purple">
                                        <i class="demo-pli-lock-2"></i>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!--================================-->
                        <!--End shortcut buttons-->


                        <ul id="mainnav-menu" class="list-group">
                
                            <!--Category name-->
                            <!--<li class="list-header">Navigation</li>-->
                
                            <!--Menu list item-->
                            <li>
                                <a href='<?php echo site_url("home"); ?>'>
                                    <i class="demo-pli-home"></i>
                                    <span class="menu-title">Home</span>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
            <!--================================-->
            <!--End menu-->

        </div>
    </nav>
    <!--===================================================-->
    <!--END MAIN NAVIGATION-->

    
</div>