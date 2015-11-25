<?php

require_once '../app/init.php';

if(isset($_POST['select']) or isset($_GET['register']))
{
	create();
	return;
}
?>
<html>
<body>
<form  method='POST' action='home/read'>
<h2> Login Page </h2>
Username: <input type='textbox' name='username'><br><br>
Password: <input type='password' name='password'><br><br>
<p class="login button">
<input type='submit' name='select' value='login' />
</p>
<p>
	Not a member yet ?
<a href="register/invoke?register" class="to_register">Join us</a>
</p>
</form>

</body>
</html>
