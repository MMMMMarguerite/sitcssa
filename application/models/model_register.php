<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_register extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }
    
    function insert_email_address($email)
    {
        $query = "INSERT ";
    }
    
    public function get_registration_record ($stevensUsername)
    {
        // SELECT * FROM register WHERE email = '$stevensUsername'
        $query  = $this->db->query("SELECT * FROM register WHERE email = '".$stevensUsername."'");
        $result = $query->result();
        
        return $this->O2A($result); 
    }
    
    private function O2A($arr) {
        if (!array_key_exists(0,$arr))
        {
            return FALSE;
        }
        else
        {
            if (is_object($arr[0])) {
                $arr = get_object_vars($arr[0]);
                return $arr;
	    }
            else
            {
                return $arr[0];
            }
        }
    }
}
?>