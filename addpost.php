<?php

session_start();

require_once("db.php");

if(isset($_POST)) {
	$description = mysqli_real_escape_string($conn, $_POST['description']);

	$uploadOk = true; 

	$folder_dir = "uploads/post/";

	$base = basename($_FILES['image']['name']); // mydocs/images/myprofile.jpg -> myprofile.jpg

	$imageFileType = pathinfo($base, PATHINFO_EXTENSION); // .png .jpg

	$file = "";

	if(file_exists($_FILES['image']['tmp_name'])) {
		if($imageFileType == 'jpg' || $imageFileType == 'png') {
			if($_FILES['image']['size'] < 5000000) {
					
				$file = uniqid() . "." . $imageFileType;  

				$filename = $folder_dir . $file;  

				move_uploaded_file($_FILES['image']['tmp_name'], $filename);
			} else {
				$_SESSION['uploadError'] = "Wrong Size. Max Size Allowed: 5MB";
				$uploadOk = false;
			}
		} else {
			$_SESSION['uploadError'] = "Wrong Format. Only jpg or png allowed.";
			$uploadOk = false;
		}
	}

	if($uploadOk == false) {
		header("Location: profile.php");
		exit();
	}

	$sql = " INSERT INTO post (id_user, description, image) VALUES ('$_SESSION[id_user]', '$description', '$file')";
	if($conn->query($sql)===TRUE) {
		header("Location: profile.php");
		exit();
	} else {
		echo $conn->error;
	}
}