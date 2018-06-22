<!DOCTYPE html>
<html>
<?php $this->load->view('user/header');
?>
<style>	
	.dashboard-pelapor{
		background-color: #1F2739;
		color: 	#A7A1AE;
	}
</style>
<body class="fix-header">
	 <?php $this->load->view('menu_nav') ?>
	<div id="wrapper">
		<div id="page-wrapper">
			<div class="container-fluid">
				<div class="row bg-title">
					<?php foreach ($result as $bencana): ?>
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 col-md-offset-4 text-center">
                        	<h4 class="page-title"><?= $bencana->nama_bencana; ?></h4> 
                        	<p><?php echo $bencana->tanggal_bencana;?></p>
                        	<p><?php echo $bencana->nama_wilayah;?></p>
                   		</div>
					<?php endforeach ?>
				</div>
				<div class="row">
					<div class="white-box">
						<h2>Laporan Anda</h2>
						<div class="table-responsive" style="overflow: auto">
							<table class="table">	
								<thead class="table-cell dark-navy" style="">	
									<tr>	
										<th scope="col">Lokasi</th>
										<th scope="col">Objek Kerusakan</th>
										<th scope="col">Jenis Kerusakan</th>
										<th scope="col">Tanggal dan Waktu Lapor</th>
										<th scope="col">Aksi</th>
									</tr>
								</thead>
								<tbody class="table-cell">	
					
								<?php foreach($hasil_semua_laporan as $laporan_user){?>
									<tr>
										<td><?php echo $laporan_user->nama_wilayah ?></td>
										<td><?php echo $laporan_user->objek ?></td>
										<td><?php echo $laporan_user->jenis_kerusakan ?></td>
										<td><?php echo $laporan_user->tanggal_laporan ?></td>
										<td>
											<a href="<?= base_url('C_PelaporBencana/ubahLaporan/'.$laporan_user->id_bencana.'?id_laporan='.$laporan_user->id_laporan)?>" class="btn btn-warning">Ubah</a>&nbsp 

											<!--<a href="<?= base_url('C_PelaporBencana/hapusLaporan/'.$laporan_user->id_bencana. '?id_laporan='.$laporan_user->id_laporan)?>" class="btn btn-danger">Hapus</a>-->

											<a href="javascript:;" data-link_hapus="<?=base_url('C_PelaporBencana/hapusLaporan/'.$laporan_user->id_bencana. '?id_laporan='.$laporan_user->id_laporan);?>" data-toggle="modal" data-target="#modal-hapus-laporan"><button class="btn btn-danger">Hapus</button></a>

										</td>
									</tr>
								<?php } ?>
				
								</tbody>
				
							</table>
							
						</div>
						<a href="<?= base_url('C_PelaporBencana/tambahLaporan?id_bencana=').$id_bencana;?>" class="btn btn-primary">Tambah Laporan</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="modal-hapus-laporan" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content" align="center">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Hapus Laporan</h4>
        </div>
        <div class="modal-body">
          <p>Apakah anda yakin ingin menghapus Laporan ini?</p>
        </div>
        <div class="modal-footer">
            <a class="btn btn-danger" id="hapusButton">Ya</a>
          <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
        </div>
      </div>
    </div>
    <script>
    	$(document).ready(function() {
        // Untuk sunting
       $('#modal-hapus-laporan').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)
 
            // Isi nilai pada field
          
            //modal.find('#lanjutPinjam').html(div.data('batal_lanjut_pinjam'));
            
            modal.find('#hapusButton').attr('href',div.data('link_hapus'));
            
        });    
    });
    </script>
</body>
</html>