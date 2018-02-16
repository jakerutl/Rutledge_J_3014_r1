<?php
	require_once('phpscripts/config.php');
	$ip = $_SERVER['REMOTE_ADDR'];
	//echo $ip;
	if(isset($_POST['submit'])){
		//echo "Works";
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		if($username !== "" && $password !== ""){
			$result = logIn($username, $password, $ip);
			$message = $result;
		}else{
			$message = "Please fill out the required fields.";
		}
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="initial-scale=1.0, width=device-width"/>
<title>Welcome to the best admin login ever!</title>
<link rel="stylesheet" href="css/main.css">
</head>

<body>

	<header class="topBar" >
		<form action="admin_login.php" method="post">
			<h2 class="error"><?php if(!empty($message)){ echo $message;} ?></h2>
			<label>Username:</label>
			<input type="text" name="username" value="">
			<label>Password</label>
			<input type="password" name="password" value="">
			<!-- <input class="btn" type="submit" name="submit" value="Sign In"> -->
			<button class="btn" type="submit" name="submit">Sign In</button>
		</form>
	</header>

	<div class="mainBody">
		<div class="middle">
		<h1 class="lastLogin"> Login Now!</h1>
	</div>
	</div>


</body>
</html>
