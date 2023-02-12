<?php

if(isset($_SESSION['email'])){
	header("Location: ../../Home.php");
}else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body onscroll="disableScrolling()" 
onmousewheel="enableScrolling()" 
 onclick="enableScrolling()"
>
		<div class="container">
			<div class="wrap-login">
				<div id="logo" class="login-pic">
					<img src="images/food.jpeg" alt="IMG">
				</div>

				<form action="index.php" id="form" class="login-form" method="post">
					<span class="title" style="color: #F96713">
						Member Login
					</span>
					<span id="error">
					<?php
					require_once "validatelogin.php";
					?>
					</span>
                    <div class="wrap-input">
						<input id="email" class="input" type="text" name="email" placeholder="Email">
						<span class="focus-input"></span>
						<span class="symbol-input">
						</span>
					</div>
					<div class="wrap-input validate-input">
						<input id="password" class="input" type="password" name="pass" placeholder="Password">
						<span class="focus-input"></span>
						<span class="symbol-input">
						</span>
					</div>
					<div class="container-btn">
						<input class="btn" type="submit" name="login" value ="Login" onclick="validateL()">
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
						<a class="txt2" href="create.php">
							Register
						</a>
					</div>
				</div>
				</form>
			</div>
		</div>
</body>
</html>
<?php
}
?>