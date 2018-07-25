  <?php
  if( ! empty($siswa)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
    foreach($siswa as $data) {
    ?>
    <div id="view" class="form">
    <h2 class="text-center">Form Input Pelanggan</h2>

    <form action="<?php echo base_url();?>admin/search" method="POST">
    <table class="table">
    <tr><td><input type="text" id="keyword"  class="form-control" style="width:200px;"></td><td><button type="button" id="btn-search" class="btn btn-primary btn-md" hidden>Search</button>
    <a href="<?php echo base_url(); ?>admin/pelanggan"  class="btn btn-danger btn-md">Reset</a>
    <br></td></tr>
    <tr><td>ID Pelanggan</td><td><input type="text" name="id" id="id" class="form-control"  value="<?php echo $data->ID_Pelanggan ?>"></td></tr>
    <tr><td>Nama</td><td><input type="text" name="nama" class="form-control" value="<?php echo $data->Nama ?>" required></td></tr>
    <tr><td>Alamat</td><td><input type="text" name="alamat" class="form-control"  value="<?php echo $data->Alamat ?>"></td></tr>
    <tr><td>Tlp</td><td><input type="text" name="tlp" class="form-control"  value="<?php echo $data->Tlp ?>"></td></tr>
    <tr><td></td><td><p><input type="button" name="tampil" value="Tampil" id="btn-search" class="btn btn-primary btn-md"> <input type="submit" name="submit" value="Simpan" class="btn btn-primary btn-md"> <input type="submit" name="ubah" value="Ubah" class="btn btn-warning btn-md"> <input type="submit" name="hapus" value="Hapus" class="btn btn-danger btn-md"> <input type="reset" name="reset" value="Reset"  class="btn btn-default btn-md"></p>
    <p><a href="<?php echo base_url(); ?>admin/transaksi" class="btn btn-primary btn-md">Next</a></p>
    </td></tr>
    </table>
    </div>
  <?php
  } 
  } else {
  ?>
    <tr><td>ID Pelanggan</td><td><input type="text" name="id" id="id" class="form-control"  required></td></tr>
    <tr><td>Nama</td><td><input type="text" name="nama" class="form-control"  required></td></tr>
    <tr><td>Alamat</td><td><input type="text" name="alamat" class="form-control"></td></tr>
    <tr><td>Tlp</td><td><input type="text" name="tlp" class="form-control"></td></tr>
    <tr><td></td><td><p><input type="button" name="tampil" value="Tampil" id="btn-search" class="btn btn-primary btn-md"> <input type="submit" name="submit" value="Simpan" class="btn btn-primary btn-md"> <input type="submit" name="ubah" value="Ubah" class="btn btn-warning btn-md"> <input type="submit" name="hapus" value="Hapus" class="btn btn-danger btn-md"> <input type="reset" name="reset" value="Reset"  class="btn btn-default btn-md"></p>
    <p><a href="<?php echo base_url(); ?>admin/transaksi" class="btn btn-primary btn-md">Next</a></p>
    </td></tr>
  <?php
  }
  ?>
<!-- 

    foreach($siswa as $data){ // Lakukan looping pada variabel siswa dari controller
      echo "<tr>";
      echo "<td>".."</td>";
      echo "<td>".$data->Nama."</td>";
      echo "<td>".$data->Alamat."</td>";
      echo "<td>".$data->Tlp."</td>";
      echo "<td>".$data->Level."</td>";
      echo "</tr>";
    }
  }else{ // Jika data tidak ada
    echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
  }
  ?> -->