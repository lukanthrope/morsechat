<?php
$db = mysqli_connect('localhost', 'root', '', 'mcDb');
$place_hold_one = 'Email';
$place_hold_two = 'Password';
$d = 'kek';
	
if (isset($_POST['sub']))
{
	$user_email = mysqli_real_escape_string($db, trim($_POST['em']));
	$user_password = mysqli_real_escape_string($db, $_POST['pass']);

	if (!empty($user_email) && !empty($user_password))
	{
		$query = "SELECT `user_id` , `username` FROM `singup` WHERE email = '$user_email' AND password = SHA('$user_password')";
		$data = mysqli_query($db, $query);

		if (mysqli_num_rows($data) == 1)
		{
			$row = mysqli_fetch_assoc($data);

			setcookie('user_id', $row['user_id'], time() + (60 * 60 * 24 * 30));
			setcookie('username', $row['username'], time() + (60 * 60 * 24 * 30));

			header("Location: /chat.php");
		} else
		{
			header("Location: /index.php");
		}
	}
} else 
{
	echo "error2";
}

?>