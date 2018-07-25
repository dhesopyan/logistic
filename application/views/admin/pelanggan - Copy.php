<div class="container" style="min-height: 500px">
<script>
var baseurl = "<?php echo base_url(); ?>"; // Buat variabel baseurl untuk nanti di akses pada file config.js
</script>
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery-2.2.4.min.js"></script> <!-- Load library jquery -->
<!-- <script src="<?php echo base_url();?>assets/js/process.js"></script> -->
<script src="<?php echo base_url();?>assets/js/config.js"></script> <!-- Load file process.js -->
<div class="form">
	<form action="<?php echo base_url();?>admin/search" method="POST">

	<table class="table">
		<tr><td colspan="2"><h2 class="text-center">Form Input Pelanggan</h2></td></tr>
		<tr><td>ID Pelanggan</td><td><input type="text" name="id" id="id" class="form-control"></td></tr>
		<tr><td>Nama</td><td><input type="text" name="nama" class="form-control"></td></tr>
		<tr><td>Alamat</td><td><input type="text" name="alamat" class="form-control"></td></tr>
		<tr><td>Tlp</td><td><input type="text" name="tlp" class="form-control"></td></tr>
		<tr><td></td><td><p><input type="button" name="tampil" value="Tampil" id="btn-search" class="btn btn-primary btn-md"> <input type="submit" name="submit" value="Simpan" class="btn btn-primary btn-md"> <input type="submit" name="ubah" value="Ubah" class="btn btn-warning btn-md"> <input type="submit" name="hapus" value="Hapus" class="btn btn-danger btn-md"> <input type="reset" name="reset" value="Reset"  class="btn btn-default btn-md"></p>
		<p><a href="<?php echo base_url(); ?>admin/transaksi" class="btn btn-primary btn-md">Next</a></p>
		</td></tr>
	</table>
</div>

</div>

<h1>Data SISWA</h1><hr>
<input type="text" id="keyword">
<button type="button" id="btn-search">Search</button>
<a href="<?php echo base_url(); ?>">Reset</a>
<br>
<div id="view">
  <?php $this->load->view('admin/view', array('siswa'=>$siswa)); // Load file view.php dan kirim data siswanya ?>
</div>

