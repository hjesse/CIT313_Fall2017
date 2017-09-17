<?php
ini_set('display_errors',1);  
error_reporting(E_ALL);	
include_once('classes/user.class.php');
include_once('classes/register.class.php');
include_once('classes/admin.class.php');	
	
$register = new RegisteredUser('regularuser','Regular User');
$admin = new Admin('hjesse','Administrator');

$register->first_name = 'Regular';
$register->last_name = 'User';
$register->email_address = 'regularuser@example.com';
$register->user_level = 'Registered User';
$register->user_id = 'RegUser';

$admin->first_name = 'Helen';
$admin->last_name = 'Jesse';
$admin->email_address = 'hjesse@umail.iu.edu';
$admin->user_level = 'Administrator';
$admin->user_id = 'AdminUser';

?>

<!DOCTYPE html>
<html>
<body>
<?php
echo "User Level: ". $register->user_level . "<br/>";
echo "User ID: ". $register->user_id ."<br/>";
echo "User Type: ". $register->user_type ."<br/>";
echo "First Name: ". $register->first_name ."<br/>";
echo "Last Name: ". $register->last_name ."<br/>";
echo "Email: ". $register->email_address ."<br/><hr/>";

echo "User Level: ". $admin->user_level . "<br/>";
echo "User ID: ". $admin->user_id ."<br/>";
echo "User Type: ". $admin->user_type ."<br/>";
echo "First Name: ". $admin->first_name ."<br/>";
echo "Last Name: ". $admin->last_name ."<br/>";
echo "Email: ". $admin->email_address ."<br/>";
?>	
	
</body>
</html>