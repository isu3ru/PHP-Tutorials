<?php 
date_default_timezone_set('Asia/Colombo');

session_start(); // if already started, resume. if not, start new.
session_regenerate_id();

require_once('../classes/Person.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Tutorials</title>
</head>
<body>
	<a href="about.php">About</a>
	<?php 
		// $isuru = new Person('Isuru', 30);
		// echo $isuru->mySelf(); // Hello, my name is Isuru. I am 30 years old.

		// // set value in session
		// print_r($_SESSION); // empty

		// $_SESSION['user_id'] = 1;
		// $_SESSION['user_name'] = 'Isuru';

		// print_r($_SESSION); // has values

		// get value from the current session
		// destroy current session

		setcookie('LOGIN_TOKEN', sha1('abuygi63487ige'), time() + (60*60)); // name, value, expiry time (timestamp)

		echo date('Y-m-d H:i:s');
	?>
</body>
</html>