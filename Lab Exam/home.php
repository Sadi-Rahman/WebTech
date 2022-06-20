<?php 
	//session_start();
	if(isset($_COOKIE['status'])){
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Page</title>
</head>
<body>
		<h1>Welcome Home!</h1> <?php echo $username; ?>
		<a href="profile.php"> Profile </a> <br> 
		<a href="cpass.html"> Change Password </a> <br> 
		<a href="user.html"> View Users</a><br>
		<a href="logout.php"> logout </a>
</body>
</html>

<?php } else{

	echo "invalid request";
} ?>
