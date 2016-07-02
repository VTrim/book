<?php

class Model_moder extends Model {

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

	public function read($start, $sort, $descasc) {
		
		$result = array();
		
		$go = ($start * 5) - 5;
		
		$sorts = array('name', 'email', 'time');
		
		$descascs = array('DESC', 'ASC');
		
		$sort = in_array($sort, $sorts) ? $this->db->real_escape_string($sort) : 'time'; 
		
		$descasc = in_array($descasc, $descascs) ? $this->db->real_escape_string($descasc) : 'DESC';
		
		$offers = $this->db->query("SELECT * FROM offers ORDER BY $sort $descasc LIMIT $go ,5 ");
		
		while($data = $offers->fetch_object()) {
			
			$result[] = $data;
			
		}
		
		return $result;
        
    }
	
	public function delete($id) {
		
		$id = (int)$id;
		
		$this->db->query("DELETE FROM offers WHERE id = '$id' LIMIT 1");
		
    }	
	
	public function update($id, $name, $email, $site, $offer) {
		
		$id = (int)$id;
		
		$all = $this->db->query("SELECT COUNT(*) FROM offers WHERE id = '$id' ")->fetch_array();
		$all = $all[0];
		
		if($all > 0) {
			
			$name = $this->db->real_escape_string(strip_tags($name));
			$email = $this->db->real_escape_string(strip_tags($email));
			$site = $this->db->real_escape_string(strip_tags($site));
			$offer = $this->db->real_escape_string(strip_tags($offer));
			
			$this->db->query("UPDATE offers SET name = '$name', 
			                                    email = '$email', 
												site = '$site', 
												offer = '$offer' WHERE id = '$id' LIMIT 1");
			
		}
		
    }
	
	public function navigation(){
		
		$result = array();
		
		$offers = $this->db->query("SELECT COUNT(*) FROM offers")->fetch_array();
		$offers = $offers[0];
		
		$pages = ceil($offers/5);
		
		if($pages > 1)
            for($i=1; $i<=$pages; ++$i) 
				$result[] = $i;
				
	return $result;
	}
	
	public function auth($login = null, $password = null) {
		
		if(isset($login, $password)) {
			
			$thisLogin = $this->db->real_escape_string($login);
			$thisPassword = md5(md5($this->db->real_escape_string($password)));

			$loginSearch = $this->db->query("SELECT * FROM moders WHERE login = '$thisLogin' AND password = '$thisPassword' LIMIT 1");

			if($loginSearch->num_rows > 0) {
					
					$_SESSION['login'] = $login;
					$_SESSION['password'] = $password;
					
					return true;					
				
			}
			
		}
		
		return false;
	}
	
	
	public function ifmoder($login = null, $password = null) {
		
		if(isset($login, $password)) {
			
			$thisLogin = $this->db->real_escape_string($login);
			$thisPassword = md5(md5($this->db->real_escape_string($password)));

			$loginSearch = $this->db->query("SELECT * FROM moders WHERE login = '$thisLogin' AND password = '$thisPassword' LIMIT 1");

			if($loginSearch->num_rows > 0)				
			return true;				
			
		}
		
		return false;
	}


}
