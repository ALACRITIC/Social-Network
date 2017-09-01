<?php

session_start();

require_once("db.php");

if(isset($_POST)) {

	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$designation = mysqli_real_escape_string($conn, $_POST['designation']);
	$degree = mysqli_real_escape_string($conn, $_POST['degree']);
	$university = mysqli_real_escape_string($conn, $_POST['university']);
	$city = mysqli_real_escape_string($conn, $_POST['city']);
	$country = mysqli_real_escape_string($conn, $_POST['country']);
	$skills = mysqli_real_escape_string($conn, $_POST['skills']);
	$aboutme = mysqli_real_escape_string($conn, $_POST['aboutme']);

	$sql = "UPDATE users SET name='$name', designation='$designation', degree='$degree', university='$university', city='$city', country='$country', skills='$skills', aboutme='$aboutme' WHERE id_user='$_SESSION[id_user]'";

	if($conn->query($sql) === TRUE) {
		header("Location: profile.php");
		exit();
	} else {
		echo $conn->error;
	}

	$conn->close();

}