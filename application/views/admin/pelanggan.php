<div class="container" style="min-height: 500px">
<script>
var baseurl = "<?php echo base_url(); ?>"; // Buat variabel baseurl untuk nanti di akses pada file config.js
</script>
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery-2.2.4.min.js"></script> <!-- Load library jquery -->
<!-- <script src="<?php echo base_url();?>assets/js/process.js"></script> -->
<script src="<?php echo base_url();?>assets/js/config.js"></script> <!-- Load file process.js -->

<div id="view" class="form">
<h2 class="text-center">Form Input Pelanggan</h2>

<form action="<?php echo base_url();?>admin/search" method="POST">
<table class="table">
<tr><td><input type="text" id="keyword"  class="form-control" style="width:200px;"></td><td><button type="button" id="btn-search" class="btn btn-primary btn-md">Search</button>
<a href="<?php echo base_url(); ?>admin/pelanggan"  class="btn btn-danger btn-md">Reset</a></td></tr>
  <?php 
  $siswa = null;
  $this->load->view('admin/view', array('siswa'=>$siswa)); // Load file view.php dan kirim data siswanya ?>
</table>
</div>