<?php
class Home extends CI_Controller{
	public function index(){
	$this->load->view('Head');
	$this->load->view('content');
	$this->load->view('footer');
	}
}