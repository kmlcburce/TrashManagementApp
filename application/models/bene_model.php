<?php
	class bene_model extends CI_Model
	{
		public function __construct()
		{
			$this->load->database();
		}

		public function get_items(){
			//use slugs if you're displaying an individual item in a whole page
			//if $slug = FALSE and etc.
			$query = $this->db->get('item_list');
			return $query;
		}

	public function crBeneficiary()
	{
		$data = array(

			'b_org'			=> $this->input->post('orgB'),
			'b_email'		=> $this->input->post('emailB'),
			'b_username' 	=> $this->input->post('usernameB'),
			'b_password' 	=> $this->input->post('passwordB')

		);

		$this->db->insert('beneficiary', $data);
	}

	function can_login($username, $password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$query = $this ->db->get('beneficiary_accounts');

		if($query -> num_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	}

?>
