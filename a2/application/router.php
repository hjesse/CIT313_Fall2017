<?php
ini_set('display_errors',1);  
error_reporting(E_ALL);	

require_once 'application/load.class.php';
require_once 'application/model.class.php';
require_once 'application/controller.class.php';

//function autoload($class) {
//include_once('application/'.strtolower($class).'.class.php');	
//}
//spl_autoload_register('autoload');

new Controller();

?>