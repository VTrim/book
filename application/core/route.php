<?php

 class MVC {

    function __construct() {
        
    }
    
    public static function Run() {

            $controller_name = 'index';
            $action_name = 'index';
            $action_parameters = array();
            
            $route_array = explode('/', $_SERVER['REQUEST_URI']);
            
            if(!empty($route_array[1])) {
               $controller_name = $route_array[1];
            }

            if(!empty($route_array[2])) {
               $action_name = $route_array[2];
            }
            
            $model_name = 'Model_' . $controller_name;
            $controller_name = 'Controller_' . $controller_name;
            $action_name = 'Action_' . $action_name;
            
            if(file_exists(FULL_PATH.'/application/models/'.$model_name.'.php')) {
                require FULL_PATH.'/application/models/'.$model_name.'.php';
            }

            if(file_exists(FULL_PATH.'/application/controllers/'.$controller_name.'.php')) {
                require FULL_PATH.'/application/controllers/'.$controller_name.'.php';
            }
            else {
                header('Location: /404');
                exit;
            }
			
			 if(!method_exists($controller_name, $action_name)) {
				 
				header('Location: /404');
                exit;
			 }
			
			

            $controller = new $controller_name();
            $controller->$action_name();
            
    }

 }
