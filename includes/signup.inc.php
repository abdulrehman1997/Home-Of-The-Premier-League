<?php
	session_start();
	include '../dbh.php';	
	$first = $_POST['first'];
	$last = $_POST['last'];
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];
	if(empty($first))
	{
    	header("Location: ../index.php?error=empty");
    	exit();
	}
	if(empty($last))
	{
    	header("Location: ../index.php?error=empty");
    	exit();
	}
	if(empty($uid))
	{
    	header("Location: ../index.php?error=empty");
    	exit();
	}
	if(empty($pwd))
	{
    	header("Location: ../index.php?error=empty");
    	exit();
	}
	else{
		$sql="SELECT uid FROM user WHERE uid='$uid'";
		$result = $conn->query($sql);
		$uidcheck = mysqli_num_rows($result);
		if ($uidcheck > 0) {
			header("Location: ../index.php?error=username");
			exit();
		}
		else{
			$sql = "INSERT INTO user (first, last, uid, pwd) VALUES ('$first', '$last', '$uid', '$pwd')";
			$result = $conn->query($sql);
			header("Location: ../index.php");
		}
		
	}
?>  