<?php
	class donor_model extends CI_Model
	{
		 public function donorInput()
		 {
			 //just a test
			 /*
			 $testnum = 3;
			 $don_id = $this->input->post('donor_id'); 
			 $dForm = (int)$don_id;
			
			 */

		
			
			$category = $this->input->post('category');
			$quantity = $this->input->post('igQuantity');
			$other = $this->input->post('ig_others');
			
			$categor = implode($category);
			$quant = implode($quantity);
			
			$data = array(
				'ig_category' => $categor,
				'ig_quantity' => (int)$quant,
				'ig_other' => $other
			);

			if(isset($_POST['u_id'])){
				$idUnc = $this->session->userdata('u_id'); 
				$idInc = $this->session->userdata('in_id');
				$dfInc = $this->session->userdata('ig_id');

				
			$data2 = array(
				'u_id' => $idUnc,
				'in_id' => $idInc,
				'ig_id' => $dfInc
				 );
				 $this->db->insert('donor_form', $data2);
			 }
		
			$this->db->insert('item_given', $data);
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
