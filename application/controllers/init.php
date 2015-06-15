<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Init extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}
	
	public function set_language($language, $path)
	{
		$this->session->set_userdata('sitelang',$language);
		redirect($path);
	}
}

/* End of file init.php */
/* Location: ./application/controllers/init.php */