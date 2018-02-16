<?php
	require_once('phpscripts/config.php');
	confirm_logged_in();
?>


<?php

if(isset($_GET['logout']))
{
	session_destroy();
	header('location:admin/admin_login.php?logout=true');
	exit;
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
	<div class="logOutBtn">
		<a href="admin_login.php?logout=true" class="logout-link">Logout</a>
	</div>
</header>

<div class="mainBody">
	<div class="middle">

	<h1 class="timeMsg">
		<?php
			date_default_timezone_set('America/Toronto');
			$Hour = date('G');

			if ( $Hour >= 5 && $Hour <= 11 ) {
	    echo "Good morning sunshine. Just a reminder to go to the gym tonight!";
		} else if ( $Hour >= 12 && $Hour <= 18 ) {
	    echo "Good Afternoon, I hope you have gone to the gym already";
		} else if ( $Hour >= 19 || $Hour <= 4 ) {
	    echo "Good Night(even though you'll be staying up all night trying to do homework)";
	}
	?>

	<?php echo $_SESSION['user_name'];  ?>
	</h1>
<br>
	<h4 class="TimeStamp">Last successful login: <?php echo $_SESSION['user_last']; ?></h4>


</div>
</div>

</body>
</html>
