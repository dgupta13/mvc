<?php

class Home extends Controller
{
	//public function index($name='')
	public function read()
	{
		$user = $this->model('User');
		//$user->name = $name;
		
		//$this->view('home/welcome',['name' => $user->name]);
		$db_conn = $this->database();
		$user->username=$_POST['username'];
		$user->password=$_POST['password'];
		$db_user = $db_conn->Login($user->username,$user->password);
		if($db_user)
			{
				echo 'user found';
			}
			else
			{
				echo 'user not found';
			}
		

	}

	/*public function index($name ='alex', $mood = 'happy')
	{
		$user= $this->model('user');
		$user->name= $name;
		$this->view('home/index',[
			'name' => $user->name;
			'mood' => $mood;
			]);
	}*/
}