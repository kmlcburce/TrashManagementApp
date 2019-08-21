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

	public function createBeneficiary()
	{
		$this->bene_model->crBeneficiary();

		redirect("controller_beneficiary");
	} 

	function login()
	{
		//'http://localhost/wastage/controller_beneficiary/login'

		$this->load->view("/bene/bene_reglog",$data);  

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
			$this->load->model('model_beneficiary');
			if($this->main_model->can_login($username,$password))
			{
				$session_data = array(
						'username' => $username
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
