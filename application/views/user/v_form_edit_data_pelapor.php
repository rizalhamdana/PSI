<?php $this->load->helper('html'); ?>
<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('user/header'); ?>
</head>
<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    
    <!-- ============================================================== -->
    <!-- Sidebar + Navbar -->
    <!-- ============================================================== -->
    <?php $this->load->view('menu_nav') ?>

    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page Content -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Profil</h4> 
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="">Dashboard</a></li>
                            <li><a href="">Pelapor</a></li>
                            <li class="active">Profile</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="white-box">
                            <form class="form-horizontal form-material" action="<?php echo base_url('C_Users/EditDataPelapor') ?>" method="post">
                                <div class="form-group">
                                    <label class="col-md-12">Nama Lengkap</label>
                                    <div class="col-md-12">
                                        <input type="text" value="<?= $pelapor->nama_pengguna;?>" class="form-control form-control-line" name="nama_pengguna">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Username</label>
                                    <div class="col-md-12">
                                        <input type="text" value="<?= $pelapor->username;?>" class="form-control form-control-line" name="username" </div>
                                	</div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Wilayah</label>
                                    <div class="col-sm-12">
                                        <select class="form-control form-control-line" name="id_wilayah">
                                            <?php foreach ($allWilayah as $wilayah): ?>
												<?php if($wilayah->nama_wilayah!='Kantor Pusat'){ ?>
													<option value="<?php echo $wilayah->id_wilayah ?>" <?php if($wilayah->id_wilayah==$pelapor->id_wilayah){
														echo "selected";
													} ?>><?php echo $wilayah->nama_wilayah; ?></option>
												<?php } ?>
											<?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                             
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success">Edit Data</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                </div>
            <!-- /.container-fluid -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- /#wrapper -->
</body>
</html>