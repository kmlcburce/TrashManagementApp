<?php
class controller_donor extends CI_Controller
{
		//Register Beneficiary
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

            //Sample may be removed
            $cannedGoods = $this->input->post('cannedGoods');
            $Noodles = $this->input->post('Noodles');
            $cannedDrinks = $this->input->post('cannedDrinks');
            $Milk = $this->input->post('Milk');
            $JuicePacks = $this->input->post('JuicePacks');
            $others = $this->input->post('Others');
            $f_city = $this->input->post('f_city');
            
            //Gonna replace this with quantity
            $this->form_validaition->set_rules($cannedGoods, 'cannedGoods', 'required');
            $this->form_validation->set_rules($Noodles, 'Noodles', 'required');
            $this->form_validation->set_rules($cannedDrinks, 'cannedDrinks', 'required');
            $this->form_validation->set_rules($JuicePacks, 'JuicePacks', 'required');
            $this->form_validation->set_rules($others, 'Others', 'required');
            $this->form_validation->set_rules($f_city, 'f_city', 'required');
        }
}