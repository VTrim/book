<?php
 session_start();
 
 define('FULL_PATH', $_SERVER['DOCUMENT_ROOT']);

 require FULL_PATH.'/application/loader.php';

 MVC::Run();
