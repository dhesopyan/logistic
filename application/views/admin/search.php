<?php
include "koneksi.php"; // Load file koneksi.php

$ID = $_POST['ID_Pelanggan']; // Ambil data NIS yang dikirim lewat AJAX

$query = mysql_query("SELECT * FROM pelanggan WHERE ID_Pelanggan=$ID"); // Tampilkan data siswa dengan NIS tersebut
$row = mysql_num_rows($query); // Hitung ada berapa data dari hasil eksekusi $query

if($row > 0){ // Jika data lebih dari 0
	$data = mysql_fetch_array($query); // ambil data siswa tersebut
	
	// BUat sebuah array
	$callback = array(
		'status' => 'success', // Set array status dengan success
		'nama' => $data['Nama'], // Set array nama dengan isi kolom nama pada tabel siswa
		'alamat' => $data['Alamat'], // Set array jenis_kelamin dengan isi kolom jenis_kelamin pada tabel siswa
		'telepon' => $data['Tlp'], // Set array jenis_kelamin dengan isi kolom telp pada tabel siswa
	);
}else{
	$callback = array('status' => 'failed'); // set array status dengan failed
}

echo json_encode($callback); // konversi varibael $callback menjadi JSON
?>
