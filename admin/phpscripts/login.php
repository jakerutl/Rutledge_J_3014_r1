<?php

	function logIn($username, $password, $ip) {
		require_once('connect.php');
		$username = mysqli_real_escape_string($link, $username);
		$password = mysqli_real_escape_string($link, $password);
		$loginstring = "SELECT * FROM tbl_user WHERE user_name='{$username}' AND user_pass='{$password}'";
		$user_set = mysqli_query($link, $loginstring);
		//echo mysqli_num_rows($user_set);
		if(mysqli_num_rows($user_set)){
			$founduser = mysqli_fetch_array($user_set, MYSQLI_ASSOC);
			$id = $founduser['user_id'];
			$_SESSION['user_id'] = $id;
			$_SESSION['user_name']= $founduser['user_fname'];
			$date = date('Y-m-d H:i:s');

			if(mysqli_query($link, $loginstring)){
				$update = "UPDATE tbl_user SET user_ip='{$ip}' WHERE user_id={$id}";
				$updatequery = mysqli_query($link, $update);
        // $query1 = "UPDATE `tbl_user` SET `user_last`='{$date}' WHERE user_id = {$id}";
        $query1 = "UPDATE `tbl_user` SET `user_last`='{$date}' WHERE user_id={$id}";
				$query_run1 = mysqli_query($con, $query1);
				 // echo $query1;
			}
			redirect_to("admin_index.php");
		}else{
			$message = "You spelt something wrong...";
			return $message;
		}

		mysqli_close($link);
	}
?>
