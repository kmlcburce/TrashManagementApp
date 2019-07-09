


<?php

	class model_admin extends CI_model{

	public function get_item(){
		$this->load->model("model_main");
		}
		
	public function bene_register(){
			$data = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email')
			);

			$this->db->insert('user_accounts', $data);
		}

	}



?>
