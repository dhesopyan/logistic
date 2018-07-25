<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class PelangganModel extends CI_Model {
  
  public function view(){
    return $this->db->get('pelanggan')->result(); // Tampilkan semua data yang ada di tabel siswa
  }
  
  public function search($keyword){
    $this->db->like('ID_Pelanggan', $keyword);
    $this->db->or_like('Nama', $keyword);
    // $this->db->or_like('Alamat', $keyword);
    // $this->db->or_like('Tlp', $keyword);
    // $this->db->or_like('Level', $keyword);
    
    $result = $this->db->get('pelanggan')->result(); // Tampilkan data siswa berdasarkan keyword
    
    return $result; 
  }
}