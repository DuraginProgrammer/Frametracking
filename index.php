<?php include ("php/signInLogIn.php"); ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Frame Tracking - Log In or Sign Up</title>

		<link href="css/bootstrap.min.css" rel="stylesheet" />
		<link href="css/style.css" rel="stylesheet" />

	</head>

	<body>

		<div class="container">

			<div class="row">
			<div class="col-xl-6 col-xl-offset-3">
				<!-- navigation menu and sign in -->
				<div id="homeNavigationBar">

					<div >

						<form id="homeBusinessLogIn">

							<label class="sr-only" for="businessUsername">Username</label>
							<input type="text" name="businessUsername" placeholder="Username" />

							<label class="sr-only" for="businessPassword">Password</label>
							<input type="password" name="businessPassword" placeholder="Password" />

							<button id="homeLogIn" class="button" name="submit" type="submit">Log in</button>


						</form>
						<ul>

							<li><a href="about.html">About</a></li>
							<li><a href="contact.html">Contact me</a></li>

						</ul>
					</div>

				</div>
				<!-- END navigation menu and sign in -->


					<div id="pitch">

						<p>Include this <span style="color:#5CAF65">Frame Tracking Tool</span> in your sales pitch.</p></br />

						<p>Track your work in progress and share with your customers to display your quality services.</p><br />
						<a href="">WATCH HOW HERE</a>

					</div>

					<form method="post" class="form-inline" id="signUpForm">

						<p id="signUpText">Sign Up</p>

						<div class="form-group">
							<label class="sr-only" for="business">Business</label>
							<input class="form-control" type="text" name="business" placeholder="Business" value="<?php if (addslashes(isset($_POST['business'])))echo($_POST['business']); ?>" /> <br /><br />
						</div>

						<div class="form-group">
							<label class="sr-only" for="address">Address</label>
							<input class="form-control" type="text" name="address" placeholder="Address" value="<?php if (addslashes(isset($_POST['address'])))echo($_POST['address']); ?>" /> <br /><br />
						</div>

						<div class="form-group">
							<label class="sr-only" for="city">City</label>
							<input class="form-control" type="text" name="city" placeholder="City" value="<?php if (addslashes(isset($_POST['city'])))echo($_POST['city']); ?>" /> <br /><br />
						</div>

						<div class="form-group">
							<label class="sr-only" for="state">State</label>
							<input class="form-control" type="text" name="state" placeholder="State" value="<?php if (addslashes(isset($_POST['state'])))echo($_POST['state']); ?>" /> <br /><br />
						</div>

						<div class="form-group">
							<label class="sr-only" for="zipCode">Zip Code</label>
							<input class="form-control" type="text" name="zipCode" placeholder="Zip Code" value="<?php if (addslashes(isset($_POST['zipCode'])))echo($_POST['zipCode']); ?>" /> <br /><br />
						</div>

						<div class="form-group">
							<label class="sr-only" for="email">Email</label>
							<input class="form-control" type="email" name="email" placeholder="Email" value="<?php if (addslashes(isset($_POST['email'])))echo($_POST['email']); ?>" /> <br /><br />
						</div>

						<div class="form-group">
							<label class="sr-only" for="phone">Phone</label>
							<input class="form-control" type="text" name="phone" placeholder="Phone" value="<?php if (addslashes(isset($_POST['phone'])))echo($_POST['phone']); ?>" /> <br /><br />
						</div>

						<div class="form-group">
							<label class="sr-only" for="password">Password</label>
							<input class="form-control" type="password" name="password" placeholder="Password" /> <br /><br />
						</div>

						<div class="form-group">
							<label class="sr-only" for="re-enterPassword">Re-enter Password</label>
							<input class="form-control" type="password" name="re-enterPassword" placeholder="Re-enter Password" /> <br /><br />
						</div>

						<input type="hidden" name="submitted"  value="true" />
						<input type="submit" name="submit" class="btn btn-success" id="continue" value="Continue" />

					</form>

			</div>
			</div>

		</div>
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>

</html>
