<div id="wrapper">
		<!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0" >
            <div class="navbar-header" >
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="index.html">
                        <!-- Logo icon image, you can use font-icon also --><b>
                        <!--This is dark logo icon-->
                        <img src="<?= base_url('assets/images/admin-logo.png?ts=<?=time()?>')?>" alt="home" class="dark-logo" />
                        <!--This is light logo icon-->
                        <img src="<?= base_url('assets/images/admin-logo-dark.png?ts=<?=time()?>')?>" alt="home" class="light-logo" />
                     </b>
                        <!-- Logo text image you can use text also --><span class="hidden-xs">
                        <!--This is dark logo text-->
                        <img src="<?= base_url('assets/images/admin-text.png?ts=<?=time()?>')?>" alt="home" class="dark-logo" />
                        <!--This is light logo text-->
                        <img src="<?= base_url('assets/images/admin-text-dark.png?ts=<?=time()?>')?>" alt="home" class="light-logo" />
                     </span> </a>
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="profile-pic" href="<?= base_url('C_Users/logout');?>"><b class="hidden-xs">Logout</b></a>


                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    
                    <?php if ($this->session->userdata('status_pengguna')=='1'){ ?>
                    <li style="padding: 70px 0 0;">
                        <a href="<?= base_url('C_Bencana/index');?>" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dashboard</a>
                    </li>
                        <li>
                            <a href="<?= base_url('C_Bencana/tampilPelapor');?>" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Pelapor</a>
                        </li>
                    
                    <?php } else if($this->session->userdata('status_pengguna')=='2'){?> 
                     <li style="padding: 70px 0 0;">
                        <a href="<?= base_url('C_PelaporBencana/index');?>" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Profil</a>
                    </li>
                    <?php } ?>
                    
					<!--
                    <li>
                        <a href="basic-table.html" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Basic Table</a>
                    </li>
                    <li>
                        <a href="fontawesome.html" class="waves-effect"><i class="fa fa-font fa-fw" aria-hidden="true"></i>Icons</a>
                    </li>
                    <li>
                        <a href="map-google.html" class="waves-effect"><i class="fa fa-globe fa-fw" aria-hidden="true"></i>Google Map</a>
                    </li>
                    <li>
                        <a href="blank.html" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i>Blank Page</a>
                    </li>
                    <li>
                        <a href="404.html" class="waves-effect"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>Error 404</a>
                    </li>
					-->


                </ul>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
</div>