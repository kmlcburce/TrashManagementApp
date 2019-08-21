<?php

	class controller_bene extends CI_Controller{
		//Register Beneficiary
		public function index(){
			$this->load->model('bene_model');
			$data['item_list'] = $this->bene_model->get_items();

			$this->load->view('bene/bene_header');
			$this->load->view('bene/bene_index', $data);
			$this->load->view('bene/bene_footer');
		}
		
		public function register(){
			$data['title'] = 'Beneficiary Sign Up';

			$this->bene_model->bene_register();
		}
	}
?>
