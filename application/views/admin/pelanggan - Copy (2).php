<html>
<head>
    <title>Search with Ajax CI</title>
    
    <script>
    var baseurl = "<?php echo base_url(); ?>"; // Buat variabel baseurl untuk nanti di akses pada file config.js
    </script>
    <script src="<?php echo base_url("assets/js/jquery.min.js"); ?>"></script> <!-- Load library jquery -->
    <script src="<?php echo base_url("assets/js/config.js"); ?>"></script> <!-- Load file process.js -->
</head>
<body>
<h1>Data SISWA</h1><hr>
<input type="text" id="keyword">
<button type="button" id="btn-search">Search</button>
<a href="<?php echo base_url(); ?>admin/pelanggan">Reset</a>
<br>
<div id="view">
  <?php 
  $siswa = null;
  $this->load->view('admin/view', array('siswa'=>$siswa)); // Load file view.php dan kirim data siswanya ?>
</div>
</body>
</html>