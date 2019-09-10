<?php

class controller_donor extends CI_Controller
{
      //Register Beneficiary
      
    	public function __construct()
    	{
		    parent:: __construct();
		    $this->load->model('donor_model');
      }
      
      public function index()
      {
        $this->load->view('donor/donor_header');
        $this->load->view('donor/donor_reglog');
        $this->load->view('donor/donor_footer');
      } 
      
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
             
          //$this->donor_model->donorInput();
      }
      
      public function donor_input()
      { 
        $this->donor_model->donorInput();
        redirect("controller_donor");      
      }
      
      public function createDonor()
      {
        $this->donor_model->crDonor();
        redirect("controller_donor");
      }
      
      function login()
      {
        $this->load->view('donor/donor_header');
        $this->load->view("/donor/donor_reglog"); 
        $this->load->view('donor/donor_footer');
      }
      
      function DonorLogin()
      {
        $this->load->view('donor/donor_header');
        $this->load->view('donor/donor_login');
        $this->load->view('donor/donor_footer');
      }
      
      function DonorRegister()
      {
        $this->load->view('donor/donor_header');
        $this->load->view('donor/donor_register');
        $this->load->view('donor/donor_footer');
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
          $this->load->model('donor_model');
          if($this->donor_model->can_login($username, $password))
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
          echo '<label><a href="'.base_url().'controller_donor/logout">Logout</a></label>'; //logout link
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