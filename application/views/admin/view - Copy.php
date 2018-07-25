<html>
<body>
<table border="1" cellpadding="8">
  <tr>
    <th>ID</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Telepon</th>
    <th>Level</th>
  </tr>
  <?php
  if( ! empty($siswa)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
    foreach($siswa as $data){ // Lakukan looping pada variabel siswa dari controller
      echo "<tr>";
      echo "<td>".$data->ID_Pelanggan."</td>";
      echo "<td>".$data->Nama."</td>";
      echo "<td>".$data->Alamat."</td>";
      echo "<td>".$data->Tlp."</td>";
      echo "<td>".$data->Level."</td>";
      echo "</tr>";
    }
  }else{ // Jika data tidak ada
    echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
  }
  ?>
</table>
</body>
</html>