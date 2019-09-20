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
		$type = beneficiary;
		$data = array(

			'u_fname'			=> $this->input->post('fname'),
			'u_lname'			=> $this->input->post('lname'),
			'u_email'			=> $this->input->post('email'),
			'u_password' 		=> $this->input->post('password'),
			'u_type' 			=> $type

		);

		$this->db->insert('user_table', $data);
		alert('Successfully signed up');
	}

	function can_login($email, $password)
	{
		$this->db->where('u_email',$email);
		$this->db->where('u_password',$password);
		$query = $this ->db->get('user_table');

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
