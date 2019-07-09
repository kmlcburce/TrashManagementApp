<?php

	class Bene_model extends CI_Model{

		public function bene_register(){
			$data = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email')
			);

			$this->db->insert('user_accounts', $data);
		}
	}

?>
