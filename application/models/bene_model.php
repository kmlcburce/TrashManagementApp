<?php
	class Bene_model extends CI_Model
	{
		public function __construct()
		{
			$this->load->database();
		}

		public function get_items(){
			//use slugs if you're displaying an individual item in a whole page
			//if $slug = FALSE and etc.
			$query = $this->db->get('item_list');
			return $query->result_array();

		}

		public function bene_register()
		{
			$data = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email')
			);
			$this->db->insert('user_accounts', $data);
		}
	}

?>
