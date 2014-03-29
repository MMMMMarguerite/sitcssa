<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/*
	 *
	 * Maps to the following URL
	 * 		http://sitcssa.org/
	 * This controller is set as the default controller
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->library('path');
		$this->load->helper('form');
		$this->load->library('form_validation');
		//$this->load->model('user_model');
		//$this->load->library('session');
	}
	public function index()
	{
		$formAttr = array('class' => 'form-signin', 'role' => 'form');
		$data = $this->path->getPath();
		$this->load->helper('form');
		$this->load->view('[v] home',$data);
	}
	public function login()
	
	{
		$this->form_validation->set_rules('username', 'Username1', 'trim|required|min_length[5]|max_length[12]|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('[v] home');
		}
		else
		{
			$this->load->view('[v] success');
		}
	}
		
}


/* End of file login.php */
/* Location: ./application/controllers/login.php */