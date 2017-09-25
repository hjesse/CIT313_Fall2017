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
echo "<p>First, here is a number:" . admin::computeEquation(1,2) . "</p>";
?>

<form id="form" name="form" method="post" action="results.php">
<div>
<label for="firstname" id="firstnameLabel">First Name:</label>
<input type="text" name="firstname" id="firstname" required/>
</div>
<br>
<div>
<label for="lastname" id="lastnameLabel">Last Name:</label>
<input type="text" name="lastname" id="lastname" required/>
</div>
<br>
<div>
<label for="email" id="emailLabel">Email Address:</label>
<input type="text" name="email" id="email" required/>
</div>
<br>
<div>
<input type="submit" name="submitButton" class="button" value="Submit" />
</div>
</form>
	
</body>
</html>