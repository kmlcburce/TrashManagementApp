<?php
	class donor_model extends CI_Model
	{
		 public function donorInput()
		 {
			 $don_id = $this->input->post('donor_id'); 
			 $dForm = (int)$don_id;
			 $quanti = (int)$quant;
			 $idUnc = $this->session->userdata('u_id'); 
			 $idInc = $this->session->userdata('in_id');
			
			 $data = array(
				'df_id' => $dForm,
				'u_id' => (int)$testnum,
				'in_id' => (int)$idInc
			);
			$this->db->insert('donor_form', $data);
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
