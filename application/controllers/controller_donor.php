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
          $this->load->view('donor/donor_header');
          $this->load->view('donor/donor_form');
          $this->load->view('donor/donor_footer');
          
          $queue = $this->input->post('check');
          $check = $this->input->post('');
      }
      
      public function donor_input()
      {
        if(isset($_POST['check[]']))
        { 
            $data = array(
              'il_name' => $this->input->post('check[]'),
              'i_total_quantity' => $this->input->post('checkQuant[]')
            );      
            $this->donor_model->donorInput();
        }
      }
}