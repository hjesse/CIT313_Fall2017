<?php
ini_set('display_errors',1);  
error_reporting(E_ALL);	

function autoload($class) {
include_once('classes/'.strtolower($class).'.class.php');	
}
spl_autoload_register('autoload');
?>

<!DOCTYPE html>
<html>
<body>

<?php

function test_class($user) {

	if($user instanceof RegisteredUser) {

echo "The registered user's first name is: " . $RegisteredUser->first_name . "<br>";
echo "The registered user's last name is: " . $RegisteredUser->last_name . "<br>";
echo "The registered user's email is: " . $RegisteredUser->email_address . "<br>";

}
}

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];

$RegisteredUser = new RegisteredUser('newuser', 'regular');

$RegisteredUser->first_name = $firstname;
$RegisteredUser->last_name = $lastname;
$RegisteredUser->email_address = $email;

test_class($user);

?>

</body>
</html>
