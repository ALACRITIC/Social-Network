<?php

session_start();

require_once("db.php");

if(isset($_POST)) {
	$description = mysqli_real_escape_string($conn, $_POST['description']);

	$sql = " INSERT INTO post (id_user, description) VALUES ('$_SESSION[id_user]', '$description')";
	if($conn->query($sql)===TRUE) {
		header("Location: profile.php");
		exit();
	} else {
		echo $conn->error;
	}
}