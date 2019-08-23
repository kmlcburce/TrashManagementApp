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

      public function createDonor()
      {
        $this->donor_model->crDonor();

        redirect("controller_donor");
      } 

      function login()
      {
        $this->load->view("/donor/donor_reglog", $data); 
      }

      function login_validation()
      {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        if($this->form_validation->run())
        {
          //true
          $username = $this->input->post('username');
          $password = $this->input->post('password');
          //model function
          $this->load->model('model_donor');
          if($this->model_donor->can_login($username, $password))
          {
            $session_data = array(
              'username' => $username
            );
            $this->session->set_userdata($session_data);
            redirect(base_url() . 'controller_donor/enter');
          }
          else
          {
            $this->session->set_flashdata('error', 'Invalid Username and Password');
            redirect(base_url() . 'controller_donor/login');
          }
        }
        else
        {
          //false
          $this->login();
        }
      }

      function enter()
      {
        if($this->session->userdata('username') != '')
        {
          echo '<label><a href="'.base_url().'controller_beneficiary/logout">Logout</a></label>'; //logout link
        }
        else
        {
          redirect(base_url() . 'controller_donor/login');
        }
      }

      function logout()
      {
        $this->session->unset_userdata('username');
        redirect(base_url() . 'controller_donor/login');
      }
}