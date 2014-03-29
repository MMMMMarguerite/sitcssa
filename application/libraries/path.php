<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Path {
    
        private $path;
	
    	public function __construct()
	{
		$CI =& get_instance();
		$CI->load->helper('url');

            	// Custom Resources
		$this->path['PATH_CUSTOM_CSS'] = base_url().'src/custom/css/';
		$this->path['PATH_CUSTOM_IMG'] = base_url().'src/custom/img/';
		$this->path['PATH_CUSTOM_JS' ] = base_url().'src/custom/js/';
		
		// Plugin Resources
		$this->path['PATH_PLUGIN_BOOTSTRAP'] = base_url().'src/plugins/bootStrap/';
		
		// Temp  Resources (like captcha)
		
		$this->path['PATH_CAPTCHA'] = base_url().'src/tmp/captcha/';
		
		// Site Url
		$this->path['PATH_SITE_URL'] = site_url().'/';
		
	}
	public function getPath()
	{
		return $this->path;
	}
}

?>