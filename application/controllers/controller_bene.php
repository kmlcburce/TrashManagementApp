<?php

	class Controller_bene extends CI_Controller{
		//Register Beneficiary
		public function register(){
			$data['title'] = 'Beneficiary SIgn Up';

			$this->bene_model->bene_register();
		}
	}
?>
