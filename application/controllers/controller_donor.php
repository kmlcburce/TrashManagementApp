<?php

class controller_donor extends CI_Controller
{
		//Register Beneficiary
      public function donor_landed($page = 'donor_index')
      {
            if ( ! file_exists(APPPATH.'views/donor/'.$page.'.php'))
            {
                    // Whoops, we don't have a page for that!
                    show_404();
            }
            $data['title'] = ucfirst($page); // Capitalize the first letter
             $this->load->view('donor/donor_header');
             $this->load->view('donor/donor_index');
             $this->load->view('donor/donor_footer');
      }
   
      public function donor_form()
      {
        //increment the user_id
        //loop through the data?
       $this->load->model('donor_model');    
       $this->load->view('donor/donor_header');
       $this->load->view('donor/donor_form');
       $this->load->view('donor/donor_footer');
       

       $il_exp_date = 2019;
       $il_name = $this->input->post('DName');
       $il_category = $this->input->post('check');
       $i_total_quantity = $this->input->post('checkQueue');
        
       $this->donor_model->donorInput( $il_name, $il_category, $il_exp_date, $i_total_quantity);
        
      /*
      $il_exp_date = 2019;
      $il_name = $this->input->post('DName');
      $il_category =   $this->input->post('check');
      $i_total_quantity = $this->input->post('checkQuant');
      */
      //$this->donor_model->donorInput($il_exp_date, $il_name, $il_category, $i_total_quantity);
    }
    
    public function donor_input()
    {
       //need to extract the data form 
       //looping would help
       $this->load->model('donor_model');
       redirect("controller_donor");
    } 
}