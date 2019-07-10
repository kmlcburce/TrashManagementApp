<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class controller_main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *s
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	//hi im sir nico

	public function index()
	{
		$this->load->view('client/client_header');
		$this->load->view('client/client_index');
		$this->load->view('client/client_footer');
	}


	public function register(){
		//for beneficiary; we could put this in another controller file
		$data['title'] = 'Beneficiary SIgn Up';

		$this->bene_model->bene_register();
	}
}

?>
