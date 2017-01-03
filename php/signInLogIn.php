<?php
	session_start();
	include("php/connection.php");
	include("php/function.php");


	//mysqli_real_escape_string for all data inputs
	// Sign up handling.
	if (isset($_POST['submitted'])) {

		if (!$_POST['business']) {
			$error.="<br />Please enter the name of your business.";

		} else if (strlen($_POST['business']) > 30) {
			$error.="<br />Maximum character size reached.";
		}
		/*
		if (!$_POST['address']) {

			$error.="<br />Please enter your business address.";

		}

		if (!$_POST['city']) {

			$error.="<br />Please enter the city.";

		}

		if (!$_POST['state']) {

			$error.="<br />Please enter the state.";

		}

		if (!$_POST['zipCode']) {

			$error.="<br />Please enter the area code.";

		}

		if (!$_POST['phone']) {

			$error.="<br />Please enter your business phone number.";

		} */

		if (!$_POST['email']) {

			$error.="<br />Please enter your business email address.";

		} elseif (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {

			$error.="<br />Please enter a valid email address.";

		}

		if (!$_POST['password']) {

			$error.="<br />Please enter a password.";

		} elseif (strlen($_POST['password'])<8) {

			$error.="<br />Password must have atleast 8 characters.";

		} else {

			if ($_POST['password']!= $_POST['re-enterPassword']) {

				$error.= "<br />Passwords do not match.";

			}

		}

		if ($error) {

			echo "OOPS! There were error(s) in your sign up details:".$error;

		} else {

			include("php/connection.php");

			$query ="SELECT `businessEmail` FROM `business` WHERE `businessEmail`='".mysqli_real_escape_string($link, $_POST['email'])."'";

			$result = mysqli_query($link, $query);

			$results = mysqli_num_rows($result);

			if ($results) {

				echo "The email address you've entered is already registered.";

			} else {
			// #111111111111# finish sign up values
				$query="INSERT INTO `business` (`businessName`, `businessAddress`, `businessCity`, `businessState`, `businessZip`, `businessEmail`, `businessPhone`, `businessPassword`) VALUES ('$business', '$address', '$city', '$state', '$zipCode', '$email', '$phone', '$password')";
				mysqli_query($link,$query);

				echo "Sign up succesful.";

				echo "<br />";


				$_SESSION['businessID'] = mysqli_insert_id($link);
				// redirect to logged in page.
			}

		}
	}

?>
