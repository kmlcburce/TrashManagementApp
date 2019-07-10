<?php

class Controller_donor extends CI_Controller
{
		//Register Beneficiary
        public function register()
        {
            $data['title'] = 'Donor Sign Up';
			$this->donor_model->donor_register();
        }

        public function donor_landed()
        {
             $this->load->view('donor/donor_header');
             $this->load->view('donor/donor_index');
             $this->load->view('donor/donor_footer');
        }

        public function donor_form()
        {
            $this->load->view('donor/donor_header');
            $this->load->view('donor/donor_form');
            $this->load->view('donor/donor_footer');
        }

}
