<?php

require('includes/header.inc.html');



$aboutMe = array('name' => 'Helen Jesse', 'color' => 'red', 'movie' => 'The Iron Giant', 'book' =. 'Harry Potter', 'website' => 'http://historicindianapolis.com/');

	foreach($aboutMe as $key=>$value) {
		if ($key != 'name') {
			echo "<li> My favorite $key is $value</li>";
		}
	else {
		echo "<h1> My name is $value</h1>";
	}
	}




require('includes/footer.inc.html');
?>