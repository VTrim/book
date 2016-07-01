<?php

class Model {
	
    const SERVER = 'localhost';
	const USER = 'root';
	const PASSWORD = '';
	const DB = 'offers';

    function __construct() {
		
		$this->db = new mysqli(self::SERVER, 
		                       self::USER, 
							   self::PASSWORD, 
							   self::DB);
							   
        $this->db->query("SET NAMES 'utf8';");
        $this->db->query("SET CHARACTER SET 'utf8';");
        $this->db->query("SET SESSION collation_connection = 'utf8_general_ci';");
        
    }

}