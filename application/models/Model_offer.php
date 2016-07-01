<?php

class Model_offer extends Model {
	
	public $captcha_error = NULL;

    function __construct() {
		
		parent::__construct();
        
    }
    
    public function correctForm($name, $email, $site, $offer, $captcha) {
		
		if(empty(trim($name)) 
			or empty(trim($email)) 
		    or empty(trim($offer)) 
			or empty(trim($captcha)))
		return false;
		
		if($captcha != $_SESSION['rand_code']) {
			
			unset($_SESSION['rand_code']);
			$this->captcha_error = 'Невірний код з зображення.';
			return false;
			
		}
		
		
        return true;
    }
	
	public function create($name, $email, $site, $offer) {
		
		unset($_SESSION['rand_code']);
		
		$name =  $this->db->real_escape_string($name);
		$email = $this->db->real_escape_string($email);
		$site =  $this->db->real_escape_string($site);
		$offer = $this->db->real_escape_string($offer);

        $this->db->query("INSERT INTO offers SET name = '$name', 
		                                         email = '$email', 
												 site = '$site', 
												 offer = '$offer', 
												 time = '".time()."' ");
    }	

}
