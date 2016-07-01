<?php

class Controller_moder extends Controller {
	

    function __construct() {
 
    }
	
	 public function Action_index() {
		 
        $model = new Model_moder();
        $view = new View();
		
		$mLogin = isset($_SESSION['login']) ? $_SESSION['login'] : NULL;
		$mPassword = isset($_SESSION['password']) ? $_SESSION['password'] : NULL;
		
        $view->generate('moder', array('navigation'=>$model->navigation(), 
		                               'moder'=>$model->ifmoder($mLogin, $mPassword)));
		
    }
	
	public function Action_open() {
		 
        $model = new Model_moder();
        $view = new View();
		
		$start = isset($_POST['number']) ? (int)$_POST['number'] : 1;
		$sort = isset($_POST['sort']) ? $_POST['sort'] : NULL;
		$descasc = isset($_POST['descasc']) ? $_POST['descasc'] : NULL;
		
		$mLogin = isset($_SESSION['login']) ? $_SESSION['login'] : NULL;
		$mPassword = isset($_SESSION['password']) ? $_SESSION['password'] : NULL;
		
        $view->generate('moder_open', array('offers'=>$model->read($start, $sort, $descasc), 
		                                    'moder'=>$model->ifmoder($mLogin, $mPassword)));
		
    }
	
	public function Action_delete() {
		 
        $model = new Model_moder();
		
		$mLogin = isset($_SESSION['login']) ? $_SESSION['login'] : NULL;
		$mPassword = isset($_SESSION['password']) ? $_SESSION['password'] : NULL;
		
		if($model->ifmoder($mLogin, $mPassword)) {	
			
			$id = isset($_POST['id']) ? $_POST['id'] : 0;			
            $model->delete($id); 
			
		}
		
    }
	
	public function Action_update() {
		 
        $model = new Model_moder();
		
		$mLogin = isset($_SESSION['login']) ? $_SESSION['login'] : NULL;
		$mPassword = isset($_SESSION['password']) ? $_SESSION['password'] : NULL;
		
		if($model->ifmoder($mLogin, $mPassword)) {
		
		$id = isset($_POST['id']) ? $_POST['id'] : 0;
		$name = isset($_POST['name']) ? $_POST['name'] : NULL;
		$email = isset($_POST['email']) ? $_POST['email'] : NULL;
		$site = isset($_POST['site']) ? $_POST['site'] : NULL;
		$offer = isset($_POST['offer']) ? $_POST['offer'] : NULL;
		
        $model->update($id, $name, $email, $site, $offer);
		
		}
		
    }
	
	public function Action_auth() {
		 
        $model = new Model_moder();
        $view = new View();
		
		$mLogin = isset($_SESSION['login']) ? $_SESSION['login'] : NULL;
		$mPassword = isset($_SESSION['password']) ? $_SESSION['password'] : NULL;
		
		$view->generate('moder_auth', array('moder'=>$model->ifmoder($mLogin, $mPassword)));
		
    }
	
	public function Action_authconnect() {
		 
        $model = new Model_moder();
        $view = new View();
		
		$login = isset($_POST['login']) ? $_POST['login'] : NULL;
		$password = isset($_POST['password']) ? $_POST['password'] : NULL;
		
		if($model->auth($login, $password))	
		    $view->generate('moder_auth_good', array('offers'=> null));
		else	
		    $view->generate('moder_auth_bad', array('offers'=> null));
		
    }
	
}