<?php
	include("database.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Firebirds Robotics Scouting</title>
	<link href="styles.css" type="text/css" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body class="login-bg">
<header class="large">
	<?php 
	if(!empty($_SESSION["error"])) {
		echo "<div class='loginAlert'>
				<strong>Error:</strong>
				<span id='loginMessage'>";
					echo $_SESSION["error"];
		echo "	</span>
				<span class='alertButton' onclick=\"this.parentElement.style.display='none';\">&times;</span>
			</div>";
	} else if (!empty($_SESSION["success"])) {
		echo "<div class='loginAlert'>
				<strong>Success:</strong>
				<span id='loginMessage'>";
					echo $_SESSION["success"];
		echo "	</span>
				<span class='alertButton' onclick=\"this.parentElement.style.display='none';\">&times;</span>
			</div>";
	}
	?>

    <div class="innerBox">
		<img align="middle" class="loginImage" src="transparentLogo.png" alt="Logo">
		<hr>
		<form class="loginForm" action="loginUser.php" method="post" id="login">
			<input type="text" name="username" id="username" class="form-control" placeholder="Username">
			<input type="password" name="password" id="password" class="form-control" placeholder="Password">
			<button type="submit" class="loginbtn" id="loginbtn">Log In</button>
		</form>
	</div>
	
	<div class="innerBoxLower">
		<h2>Need to create an account?</h2>
		<form class="signupForm" action="indexSignup.php" method="get" id="signup">
			<button type="submit" class="signupButton">Sign Up</button>
		</form>
	</div>
	
	<div class="footerDiv">
	<br><br><br>
	</div>
</header>
</body>
</html>