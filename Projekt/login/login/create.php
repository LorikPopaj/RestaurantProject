<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body onscroll="disableScrolling()" onmousewheel="enableScrolling()" onclick="enableScrolling()">
	
		<div class="container">
			<div class="wrap-login">
				<div id="logo" class="login-pic">
					<img src="images/cn.jpg" alt="IMG">
				</div>

				<form action="create.php" name="myform" id="form" method="post" class="login-form">
					<span class="title" style="color: #F96713;">
						Member Register
					</span>
					<span id="error">
					</span>
					<div class="wrap-input">
						<input id="fullname" class="input" type="text" name="fname" placeholder="Name and Surname">
						<span class="focus-input"></span>

					</div>
					<div id="not-valid-fullname" class="not-valid"></div>
                    <div class="wrap-input">
						<input id="username" class="input" type="text" name="username" placeholder="Username">
						<span class="focus-input"></span>
	
					</div>
					<div id="not-valid-username" class="not-valid"></div>
                    <div class="wrap-input">
						<input id="email" class="input" type="text" name="email" placeholder="Email">
						<span class="focus-input"></span>

					</div>
					<div id="not-valid-email" class="not-valid"></div>
					<div class="wrap-input">
						<input id="password" class="input" type="password" name="pass" placeholder="Password">
						<span class="focus-input"></span>

					</div>
					<div id="not-valid-password" class="not-valid"></div>
                    <div class="wrap-input">
						<input id="cpassword" class="input" type="password" name="cpass" placeholder="Confirm Password">
						<span class="focus-input"></span>

					</div>
					<div id="not-valid-cpassword" class="not-valid"></div>
					
					<div class="container-btn">
						<input class="btn" type="submit" name="submit" value="Register">
						</input>
					</div>
					<div class="centered">
					<div>
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div>
						<a class="txt2" href="index.php">
							Sign in
						</a>
					</div>
				</div>
				</form>

			</div>
		</div>
	<?php
	include 'js/main.php';
	?>
</body>
</html>