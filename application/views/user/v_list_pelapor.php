<?php $this->load->helper('html'); ?>
<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('user/header'); ?>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
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
                        <a href="<?= base_url('C_Users/addUserPelapor');?>" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Tambah Pelapor</a>
                        <ol class="breadcrumb">
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
                                <table class="display" id="example">
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
                                                
                                                    <!--<a href="<?php echo base_url('C_Users/deleteUserPelapor?id_pengguna=').$user->id_pengguna;?>" class="btn btn-danger">Hapus</a>-->
                                                    <a href="javascript:;" data-link_hapus="<?=base_url('C_Users/deleteUserPelapor?id_pengguna=').$user->id_pengguna;?>" data-toggle="modal" data-target="#modal-hapus-pelapor"><button class="btn btn-danger">Hapus</button></a>
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
    <div class="modal fade" id="modal-hapus-pelapor" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content" align="center">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Hapus Pelapor</h4>
        </div>
        <div class="modal-body">
          <p>Apakah anda yakin ingin menghapus pelapor ini?</p>
        </div>
        <div class="modal-footer">
            <a class="btn btn-danger" id="hapusButton">Ya</a>
          <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
        </div>
      </div>
    </div>
    <!-- /#wrapper -->
    <script>
         $(document).ready(function() {
        // Untuk sunting
       $('#modal-hapus-pelapor').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)
 
            // Isi nilai pada field
          
            //modal.find('#lanjutPinjam').html(div.data('batal_lanjut_pinjam'));
            
            modal.find('#hapusButton').attr('href',div.data('link_hapus'));
            
        });    
    });


    $(document).ready(function() {
        $('#example').DataTable();
    } );
    
    </script>
</body>
</html>