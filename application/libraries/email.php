<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Email {

	private $CI;
	
    	public function __construct()
	{
		$CI =& get_instance();
		$CI->load->helper('url');
	}

	public function check_registration_record ($stevensUsername,$model_register)
	{
		$result = $model_register->get_registration_record ($stevensUsername);
		if (!$result)
		{
			return "none";
		}
		else if ($result['isRegistered'] == "1")
		{
			return "registered";
		}
		else if ($result['isSpam'] == "1")
		{
			return "spam";
		}
		else if (intval($result['messageSent']) >= 20)
		{
			return "overflow";
		}
		else
		{
			return "has";
		}
		
	}
}

?>