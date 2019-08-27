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
				'u_email'		=> $this->input->post('emailD'),
				'u_fname'		=> $this->input->post('FirstNameD'),
				'u_lname'		=> $this->input->post('LastNameD'),
				'u_password' 	=> $this->input->post('passwordD')
			);
			$this->db->insert('user_table', $data);
		}
		
		function can_login($username,$password)
		{
			$this->db->where('u_email', $username);
			$this->db->where('u_password', $password);
			$query = $this->db->get('user_table');
			
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
