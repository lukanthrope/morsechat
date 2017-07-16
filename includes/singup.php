<?php 
$connection = mysqli_connect('localhost', 'root', '', 'mcDb');

$pas_mes = 'Confirm your password';
$email_mes = 'Enter your email';

if (isset($_POST['submit']))
{
	$username = mysqli_real_escape_string($connection, trim($_POST['username']));
	$email = mysqli_real_escape_string($connection, trim($_POST['email']));
	$password = mysqli_real_escape_string($connection, $_POST['password']);
	$password2 = mysqli_real_escape_string($connection, $_POST['password2']);

	if (!empty($username) && !empty($email) && !empty($password) && !empty($password2) && $password == $password2)
	{
		$query = "SELECT * FROM `singup` WHERE email = '$email'";
		$data = mysqli_query($connection, $query);

		if (mysqli_num_rows($data) == 0)
		{
			$query = "INSERT INTO `singup` (username, password, email) VALUES ('$username', SHA('$password2'), '$email')";
			mysqli_query($connection, $query);	
			header("Location: /chat.php");
		} else 
		{
			$email_mes = 'This email is already in use';
			$color = "red";
		}
	} 
		
	if ($password != $password2)
	{
		$pas_mes = 'The passwords are not the same';
		$color_2 = "red";
	}
}	
?>