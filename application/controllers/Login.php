<?php
class Login extends CI_Controller{
	public function index(){
		$this->load->view('login');
	}

	public function login_validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if($this->form_validation->run())
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$this->load->model('login_model');
			if($this->login_model->can_login($username, $password))
			{
				$session_data = array(
					'username' => $username
				);
				$this->session->set_userdata($session_data);
				redirect(base_url().'admin');
			}
			else
			{
				$this->session->set_flashdata('error', 'Invalid username or password');
				redirect(base_url().'login');
			}

		}
		else
		{
			$this->load->view('login');
		}
	}

	public function enter(){
		if($this->session->userdata('username') !='')
		{
			echo '<h2> Welcome - '.$this->session->userdata('username').'</h2>';
			echo '<label><a href="'.base_url().'login/logout">Logout</a></label>';
		}
		else
		{
			redirect(base_url().'login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		redirect(base_url().'home');
	}



}