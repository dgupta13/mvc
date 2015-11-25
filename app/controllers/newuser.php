<?php

class Newuser extends Controller
{
	function createuser()
	{
		$db_conn = $this->database();
		$username=$_POST['username'];
		$emailid=$_POST['emailid'];
		$password=$_POST['password'];
		$confirmPassword=$_POST['confirm_password'];
		$db_user = $db_conn->UserRegister($username,$emailid,$password);
		if($db_user)
		{
			echo 'User created';
		}
		else
		{
			echo 'User not created';
		}
	}
}