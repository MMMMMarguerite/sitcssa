<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {
		
	public function __construct()
	{
		parent::__construct();
		$this->load->library('path');
		$this->load->library('email');
		$this->load->library('errmsg');
		$this->load->helper('captcha');
		$this->load->library('regex');
		$this->load->model('model_register');
		//$this->load->library('session');
	}
	public function index($eid,$key)
	{
		$data = $this->path->getPath();
		$this->load->view('[v] register_email',$data);
	}
	

	
	public function sendConfirEmail ()
	{
		// (0) filter the input
		if (!isset($_POST['sUsername']))
		{
			echo $this->errmsg->get(001);
			$this->output->_display();
			exit();
		}
		else
		{
			$stevensUsername = $this->input->post('sUsername');
		}
		
		
		// (1) define json array
		$e000 = $this->errmsg->get(0);
		$response = array ('result'     =>-1,
				   'reason'     =>$e000 );  //未知错误
		
		// (2) check database
		$record = $this->email->check_registration_record($stevensUsername,$this->model_register);
		
		// (3) check the format of stevensUsername
		if (!$this->regex->check_stevens_username_format($stevensUsername))
		{
			$response['result'] = 0;
			$response['reason'] = $this->errmsg->get(101);  //史蒂文斯用户名格式错误
			echo json_encode($response); // echo json and exit controller
			$this->output->_display();
			exit();
		}
		// (4) check stevensUsernames in database
		if (!($record == "none" || $record == "has"))
		{
			$response['result'] = 0;
			if ($record == "registered")
			{
				$response['reason'] = $this->errmsg->get(102);  //该邮箱已被注册
			}
			else if ($record == "spam")
			{
				$response['reason'] = $this->errmsg->get(103);  //该邮箱拥有人已设置拒收本站确认邮件
			}
			else if ($record == "overflow")
			{
				$response['reason'] = $this->errmsg->get(104);  //该邮箱发送次数过多，无法继续发送
			}
			else
			{
				$response['reason'] = $this->errmsg->get(105).$record;  //record返回了一个无法识别值
			}
			echo json_encode($response);  // echo json and exit controller
			$this->output->_display();
			exit();
		}
		// (5) if passchecks, send email, echo result
		$date       = new DateTime();
		$ts         = (string)$date->getTimestamp();
		$secretWord = "656";
		$key        = sha1($stevensUsername.$ts.$secretWord);// the Key actually is the stevens username + current timestamp + 656
		$response['reason'] = $key;
		$response['result'] = 1;
		
		// TODO: send confimation email to user
		
		echo json_encode($response);  // echo json and exit controller
		$this->output->_display();
		exit();
		
	}
	public function checkEmail ($email)
	{
		$response;
		$result = $this->m_register->check_email($email);
		if (!$result)
		{
			$response = array ('result'=>'1');
			echo json_encode($response);
			// send email.....
		}

	}
	
	private function sendEmail($email)
	{
		// generate link
		// insert or update database
		// send email
		// return result (success or false?)
	}
	
}

?>

