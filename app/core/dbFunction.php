<?php

require_once 'dbConnect.php';
session_start();

class dbFunction{

	function __construct()
	{
		$db = new dbConnect();
	}
	public function Login($username, $password){  
            $res = mysql_query("SELECT * FROM users WHERE username = '".$username."' AND password = '".$password."'");  
            $user_data = mysql_fetch_array($res);    
            $no_rows = mysql_num_rows($res);  
              
            if ($no_rows == 1)   
            {  
           
                $_SESSION['login'] = true;  
                $_SESSION['uid'] = $user_data['id'];  
                $_SESSION['username'] = $user_data['username'];  
                $_SESSION['email'] = $user_data['emailid'];  
                return TRUE;  
            }  
            else  
            {  
                return FALSE;  
            }  
               
                   
        }
        public function UserRegister($username, $emailid, $password){  
                //$password = md5($password);  
                $qr = mysql_query("INSERT INTO users(username, emailid, password) values('".$username."','".$emailid."','".
                	$password."')") or die(mysql_error());  
                return $qr;  
               
        } 
}