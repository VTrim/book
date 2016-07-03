<?php

class Controller_offer extends Controller {


    function __construct() {

    }

	 public function Action_index() {

        $model = new Model_offer();
        $view = new View();

        $view->generate('offer', array('one'=>456456, 'two'=>5635656));

    }

	 public function Action_add() {

        $model = new Model_offer();
        $view = new View();

		$name = isset($_POST['name']) ? $_POST['name'] : NULL;
		$email = isset($_POST['email']) ? $_POST['email'] : NULL;
		$site = isset($_POST['site']) ? $_POST['site'] : NULL;
		$offer = isset($_POST['offer']) ? $_POST['offer'] : NULL;
		$captcha = isset($_POST['captcha']) ? $_POST['captcha'] : NULL;


        $isTrueForm = $model->correctForm($name, $email, $site, $offer, $captcha);

		if($isTrueForm) {

			$ip = $_SERVER['REMOTE_ADDR'];
		    $browser = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : NULL;

			echo $model->create($name, $email, $site, $offer, $ip, $browser);
			$view->generate('offer_good', array('one'=>456456, 'two'=>5635656));
		}
		else {
			$view->generate('offer_bad', array('captcha_error' => $model->captcha_error));
		}





    }

}
