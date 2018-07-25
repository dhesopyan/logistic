<?php 
class Admin extends CI_Controller {
	public function index() {
	if($this->session->userdata('username') !='')
		{
			$this->load->view('admin/head');
			$this->load->view('admin/content');
			$this->load->view('footer');
		}
		else
		{
			redirect(base_url().'login');
		}
	}

	function pelanggan(){
		$this->load->view('admin/head');
		$this->load->view('admin/pelanggan');
		$this->load->view('footer');
	}

	function barang(){
		$this->load->view('admin/head');
		$this->load->view('admin/barang');
		$this->load->view('footer');
	}

	function transaksi(){
		$this->load->view('admin/head');
		$this->load->view('admin/transaksi');
		$this->load->view('footer');
	}


	public function add()
	{
		$this->load->view('admin/add');
	}

	public function action_add()
	{
		$data = array (
			'Nama' => $this->input->post('nama'),
			'Alamat' => $this->input->post('alamat'),
			'Tlp' => $this->input->post('tlp'),
			'Level' => ('user'),
		);

		$this->db->insert('pelanggan', $data);

		redirect('../admin', 'refresh');
	}

	public function update( $id = NULL )
	{
		$this->db->where('id', $id);
		$data['content'] = $this->db->get('identitas');
		$this->load->view('admin/update', $data);

	}

	public function action_update( $id = '' )
	{
		$data = array (
			'nama' => $this->input->post('nama'),
			'status' => $this->input->post('status'),
			'jurusan' => $this->input->post('jurusan'),
		);

		$this->db->where('id', $id);
		$this->db->update('identitas', $data);

		redirect('../admin', 'refresh');
	}

	public function delete( $id = NULL )
	{
		$this->db->where('id', $id);
		$this->db->delete('identitas');

		redirect('../admin','refresh');
	}

	public function read( $id = NULL )
	{
		$this->db->where('id', $id);
		$data['content'] = $this->db->get('identitas');

		$this->load->view('admin/index', $data);
	}

  public function search(){
    // Ambil data NIS yang dikirim via ajax post
    $keyword = $this->input->post('keyword');
    $this->load->model('PelangganModel');
    $siswa = $this->PelangganModel->search($keyword);
    
    // Kita load file view.php sambil mengirim data siswa hasil query function search di SiswaModel
    $hasil = $this->load->view('admin/view', array('siswa'=>$siswa), true);
    
    // Buat sebuah array
    $callback = array(
      'hasil' => $hasil, // Set array hasil dengan isi dari view.php yang diload tadi
    );
    echo json_encode($callback); // konversi varibael $callback menjadi JSON
  }
}