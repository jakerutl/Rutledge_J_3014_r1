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
<title>Welcome to your admin panel login</title>
<link rel="stylesheet" href="css/main.css">
</head>

<body>

	<header class="topBar" >
		<?php if(!empty($message)){ echo $message;} ?>
		<form action="admin_login.php" method="post">
			<label>Username:</label>
			<input type="text" name="username" value="">
			<!-- <br> -->
			<label>Password</label>
			<input type="password" name="password" value="">
			<!-- <br><br> -->
			<input type="submit" name="submit" value="Sign In">
		</form>
	</header>

	<div class="mainBody">
		hellooo.
	</div>


</body>
</html>
