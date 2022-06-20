<?php 

	$id = $_REQUEST['id'];
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];
	
	//$type = $_REQUEST['type'];
	//$fname = $_REQUEST['formname'];

	if ($username == null || $password == null || $id == null) {
		echo "Invalid Username/Password/ID <br>";
	}else{
		$data = $id."|".$password."|".$username. "\r\n";
		$file = fopen('user.txt', 'a');
		fwrite($file, $data);

			if($fname == "create"){
				header('location: home.php');	
			}else{
				header('location: login.html');
			}
	}



?>