<div class="container" style="min-height: 500px">

<div class="form">
	<form action="<?php echo base_url();?>admin/in_barang" method="POST">
	<table class="table">
		<tr><td colspan="2"><h2 class="text-center">Form Pengiriman Barang</h2></td></tr>
		<tr><td>ID Pengiriman</td><td><input type="text" name="id" class="form-control" required=""></td></tr>
		<tr><td>ID Pelanggan</td><td><input type="text" name="nama" class="form-control" required=""></td></tr>
		<tr><td>Nama</td><td><input type="text" name="nama" class="form-control" required=""></td></tr>
		<tr><td>Alamat</td><td><input type="text" name="alamat" class="form-control" required=""></td></tr>
		<tr><td>Tlp</td><td><input type="text" name="tlp" class="form-control" required=""></td></tr>
		<tr><td>Nama Barang</td><td><input type="text" name="nama" class="form-control" required=""></td></tr>
		<tr><td>Jenis</td><td><input type="text" name="jenis" class="form-control" required=""></td></tr>
		<tr><td>Berat</td><td><input type="text" name="berat" class="form-control" required=""></td></tr>
		<tr><td>Asuransi</td><td><input type="text" name="berat" class="form-control" required=""></td></tr>
		<tr><td>Tujuan</td><td><input type="text" name="berat" class="form-control" required=""></td></tr>
		<tr><td>Harga</td><td><input type="text" name="berat" class="form-control" required=""></td></tr>
		<tr><td></td><td><p><input type="submit" name="submit" value="simpan" class="btn btn-primary btn-md"> <input type="submit" name="ubah" value="Ubah" class="btn btn-warning btn-md"> <input type="submit" name="hapus" value="Hapus" class="btn btn-danger btn-md"> <input type="reset" name="reset" value="reset"  class="btn btn-default btn-md"></p>
		<p><a href="<?php echo base_url(); ?>admin/transaksi" class="btn btn-primary btn-md">Next</a></p>
		</td></tr>
	</table>
</div>

</div>