<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controller_beneficiary extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('bene_model');
	}

	public function index()
	{
		$this->load->view('/bene/bene_header');
		$this->load->view('/bene/bene_reglog');
		$this->load->view('/bene/bene_footer');
	}
	public function get_items(){
		$data["get_items"] = $this->bene_model->get_items();
		$this->load->view('/bene/bene_header');
		$this->load->view('/bene/bene_index', $data);
		$this->load->view('/bene/bene_footer');
	}

	public function createBeneficiary()
	{
		$this->bene_model->crBeneficiary();

		redirect("controller_beneficiary");
	} 

	function login()
	{
		//'http://localhost/wastage/controller_beneficiary/login'
		$this->load->view('/bene/bene_header');
		$this->load->view("/bene/bene_index");  
		$this->load->view('/bene/bene_footer');
	}

	function login_validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run())
		{
			//true
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			//model function
			$this->load->model('bene_model');
			if($this->bene_model->can_login($email,$password))
			{
				$session_data = array(
						'email' => $email
				);
				$this->session->set_userdata($session_data);
				redirect(base_url() . 'controller_beneficiary/enter');
			}
			else
			{
				$this->session->set_flashdata('error','Invalid Username and Password');
				redirect(base_url() . 'controller_beneficiary/login');
			}
		}
		else
		{
			//false
			$this->login();
		}
	}

	function enter(){
		if($this->session->userdata('username') != '')
		{
			echo '<label><a href="'.base_url().'controller_beneficiary/logout">Logout</a></label>'; //logout link
		}
		else
		{
			redirect(base_url() . 'controller_beneficiary/login');
		}
	}

	function logout()
	{
		$this->session->unset_userdata('username');
		redirect(base_url() . 'controller_beneficiary/login');
	}
}
