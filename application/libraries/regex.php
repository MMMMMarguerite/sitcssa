<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Regex {
        
	// ** 类变量 **
	
	// 正则表达式 
	// >>>>>>>>>  由于PHP的常量定义繁琐故没有设置为常量，请不要在运行中随意更改变量值！ 
	// >>>>>>>>>  安全起见，请在修改前验证你的正则表达式是否正确！
	
        private $STEVENS_USERNAME = '/^[a-z]{1}[a-z0-9_\.]{2,29}$/'; // 3-30位，小写字母、数字、点或下划线，只能以小写字母开头
        private $PASSWORD         = '/^[a-zA-Z0-9]{1}[\w]{5,19}$/';  // 6-20位 大小写字母、数字或下划线，不能以下划线开头
	private $USERNAME         = '/^[a-z]{1}[a-z0-9_]{3-14}$/';   // 4-15位 小写字母、数字或下划线，必须以小写字母开头
	
        // ** 构造函数 **
	
    	public function __construct()
	{

	}
	
	// ** 成员函数 **  
	// 检查史蒂文斯用户名格式
	
        public function check_stevens_username_format($stevens_username)
        {
		return preg_match($this->STEVENS_USERNAME, $stevens_username);
        }
	
	// 检查用户名格式
	
	public function username ($username)
	{
		return preg_match($this->USERNAME, $username);
	}
	
	// 检查密码格式
	
	public function password ($password)
	{
		return preg_match($this-PASSWORD, $password);
	}
	
	// 检查用户名和密码格式
	
	public function username_and_password($username , $password)
	{
		if ($this->username($username) && $this->password($password))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}

?>