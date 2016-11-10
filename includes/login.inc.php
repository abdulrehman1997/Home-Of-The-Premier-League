<?php
	session_start();
	include '../dbh.php';
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];
	$sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$pwd'";
	#$result = mysql_query($conn,$sql);
	$result = $conn->query($sql);
	if (empty($uid)) {
		header("Location: ../index.php?error=loginempty");
		exit();
	}
	if (empty($pwd)) {
		header("Location: ../index.php?error=loginempty");
		exit();
	}
	if (!$row = $result->fetch_assoc()) {
		header("Location: ../index.php?error=loginerr");
    	exit();
    }
	else{
		$_SESSION['id'] = $row['id'];
		header("Location: ../home.php");
	}
?>