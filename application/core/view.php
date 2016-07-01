<?php

class View {

    function __construct() {
        
    }
    
    public function generate($view,$data=array()) {
		
		foreach($data as $key=>$value) 
		$$key = $value;
		
        include FULL_PATH.'/application/views/template.php';
    }

}