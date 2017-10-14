<?php
class User extends Model {
	
	function __construct(){
		parent::__construct();
	}

	function __set($name, $value) {

	$this->$name = $value;

	}

	function __get($name) {
	return $this->$name;
	}

	function __destruct(){

	}

	   function getName() {
        return array (
            'userID' => $this->userID,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'role' => $this->role
        );
    }
}

?>
