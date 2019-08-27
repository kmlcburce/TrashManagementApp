<?php

	class donor_model extends CI_Model
	{
		 public function donorInput()
		 {
			 $exp_date = 2019;	 
			 $data = array(
				'il_name' => $this->input->post('DName'),
				'il_category' => $this->input->post('check'),
				'il_exp_date' =>  $exp_date,
				'i_total_quantity' => $this->input->post('checkQuant')	
			 );
			 $this->db->insert('item_list', $data);
		 }


	    public function crDonor()
		{
			$data = array(
				'd_email'		=> $this->input->post('emailD'),
				'd_username' 	=> $this->input->post('usernameD'),
				'd_password' 	=> $this->input->post('passwordD')
			);
			$this->db->insert('donor', $data);
		}
		
		function can_login($username,$password)
		{
			$this->db->where('username', $username);
			$this->db->where('password', $password);
			$query = $this->db->get('donor_accounts');
			
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
?>
