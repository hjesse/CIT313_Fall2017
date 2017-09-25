<?php
	
class admin extends user {
	
	public function __construct($user_id, $user_level)  {
		parent::__construct($user_level);
		$this->user_type = '2';
		$this->user_id = $user_id;
	}
	
	public function __set($name, $value) {
		$this->$name = $value;
	}
	
	public function __get($name) {
		return $this->$name;
	}
	
	public function __destruct() {
		
	}

	static public function computeEquation($a,$b) {
		return ($a + $b) * $a;
	}	
}
?>