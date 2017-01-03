<?php
  include ("php/connection.php");
  // Empty variables.
	$link = $error = $city = $state = $areaCode = $email = $phone = $password = $re_enterPassword = "";

	// form validation signInLogIn
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
  // input fields
		$business = validate($_POST['business']);
		$address = validate($_POST['address']);
		$city = validate($_POST['city']);
		$state = validate($_POST['state']);
		$zipCode = validate($_POST['zipCode']);
		$email = validate($_POST['email']);
		$phone = validate($_POST['phone']);
		$password = validate(hashpass($_POST['password']));
		$re_enterPassword = validate($_POST['re-enterPassword']);

	}

	function validate($data) {
    include ("php/connection.php");
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
    $data = mysqli_real_escape_string($link, $data);
		return $data;
	}

	function hashpass($data) {
		$data = md5(md5($_POST['email']));
		return $data;
	}
?>
