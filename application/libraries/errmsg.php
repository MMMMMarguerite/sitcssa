<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Errmsg
{
        private $e;
        public function __construct()
	{
            $e[000] = "未知错误";
	    $e[001] = "(= _ =)--> Invalid Request <--(= _ =)";
	    
            // 用户在进行注册，发送确认邮件时产生的错误
            $e[101] = "史蒂文斯用户名格式错误";
            $e[102] = "该邮箱已被注册";
            $e[103] = "该邮箱拥有人已设置拒收本站确认邮件";
            $e[104] = "该邮箱发送次数过多，无法继续发送";
            $e[105] = "[SE] record变量返回了无法识别的值: ";
	    
	    $this->e = $e;
	}
    
        public function get($errNO)
        {
            $errNO_formated = (int)$errNO;
            return $this->e[$errNO_formated];
        }
}

?>