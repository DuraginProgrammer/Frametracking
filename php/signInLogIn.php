<?php 
	session_start();
	include("php/connection.php");
	
	// Empty variables.
	$link = $error = $city = $state = $areaCode = $email = $phone = $password = $re_enterPassword = "";
	
	// form validation
	
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		
		$business = validate($_POST['business']);
		$address = validate($_POST['address']);
		$city= validate($_POST['city']);
		$state = validate($_POST['state']);
		$areaCode = validate($_POST['areaCode']);
		$email = validate($_POST['email']);
		$phone = validate($_POST['phone']);
		$password = validate($_POST['password']);
		$re_enterPassword = validate($_POST['re-enterPassword']);
	}
	
	function validate($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	// Sign up handling.
	if (isset($_POST['submitted'])) { /*
		
		if (!$_POST['business']) {
			
			$error.="<br />Please enter the name of your business.";
		
		}
		
		if (!$_POST['address']) {
			
			$error.="<br />Please enter your business address.";
			
		}
		
		if (!$_POST['city']) {
			
			$error.="<br />Please enter the city.";
		
		}
		
		if (!$_POST['state']) {
			
			$error.="<br />Please enter the state.";
		
		}
		
		if (!$_POST['areaCode']) {
			
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
			// ****REMEMBER to finish sign up values
			// ****Understand mysqli Injections
				$query="INSERT INTO `business` (`businessName`, `businessEmail`, `businessPassword`) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."','" .md5(md5($_POST['email']).$_POST['password'])."')";
				
				mysqli_query($link,$query);
				
				echo "Sign up succesful.";
				
				echo "<br />";
				
				
				$_SESSION['businessID'] = mysqli_insert_id($link);
				
				// redirect to logged in page.
			}
			
		} 
	}

?>