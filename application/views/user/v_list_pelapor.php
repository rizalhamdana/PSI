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
                        <h4 class="page-title">Daftar Pelapor</h4> 
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <a href="<?php echo base_url('C_Users/addUserPelapor')?>" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Tambah Pelapor</a>
                            <li><a href="<?= base_url('C_Bencana/index');?>">Dashboard</a></li>
                            <li class="active">Pelapor</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Wilayah Kerja</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($allUser as $user): ?>
                                        <?php if ($user->status_pengguna!=1): ?>
                                            <tr>
                                                <td><?php echo $user->nama_pengguna; ?></td>
                                                <td><?php echo $user->username ;?></td>
                                                <?php foreach ($allWilayah as $wilayah): ?>
                                                    <?php if ($wilayah->id_wilayah==$user->id_wilayah): ?>
                                                        <td><?php echo $wilayah->nama_wilayah ?></td>
                                                    <?php endif ?>
                                                <?php endforeach ?>
                                                <td>
                                                    <a href="<?php echo base_url('C_Users/EditDataPelapor?id_pengguna=').$user->id_pengguna; ?>" class="btn btn-success">Edit Data</a> &nbsp &nbsp 
                                                    <a href="<?php echo base_url('C_Users/deleteUserPelapor?id_pengguna=').$user->id_pengguna;?>" class="btn btn-danger">Hapus</a>
                                                </td>
                                            </tr>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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