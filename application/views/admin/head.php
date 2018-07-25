<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Logistics</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">

<script>
$(function(){
	$('#nav a[href~="' + location.href + '"]').parents('li').addClass('active');
})
</script>

</head>
<body>

<!-- navigasi -->

<nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
  <!-- Brand -->
  <a class="navbar-brand" href="<?php echo base_url();?>admin"><img src="<?php echo base_url(); ?>assets/images/logistic.png" alt="Logo" style="width:200px;"></a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse navbar-right" id="collapsibleNavbar">
    <ul  id="nav" class="navbar-nav ml-auto mt-2 mt-lg-0">
    <li class="nav-item">
       <label class="nav-link"><?php echo '<font color="white">Welcome - '.$this->session->userdata('username').'&nbsp&nbsp</font>';?></label>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>admin/pelanggan" active>Input Pelanggan</a>
      </li>
<!--      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>admin/barang">Input Barang</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>admin/transaksi">Transaksi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>login/logout">Logout</a>
      </li>
    </ul>
</div>
</nav>
<!-- end navigasi -->