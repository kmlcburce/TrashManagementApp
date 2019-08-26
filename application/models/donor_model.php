<?php

	class donor_model extends CI_Model
	{
		 public function donorInput($il_name, $il_category, $il_exp_date, $i_total_quantity)
		 {
			$query = "INSERT INTO item_list (il_name, il_category, il_exp_date, i_total_quantity) VALUES ($il_name, $il_category, $il_exp_date, $i_total_quantity)";
			$quer = $this->db->query($query);
		 }
		 
		/*
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
		*/		
	}
?>
