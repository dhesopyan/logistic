<?php
class Login_model extends CI_model 
{
	public function can_login($username, $password)
	{
		$this->db->where('Username', $username);
		$this->db->where('Password', $password);
		$query = $this->db->get('user');
		if($query->num_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

}