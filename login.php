<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="public/assets/images/favicon/instagram.ico" type="image/x-icon">
	<link rel="stylesheet" href="public/css/register.css">
	<title>Login || Instagram</title>
</head>
<body>

<section class="loginPage">
	<div class="row">
		<div class="col-1">
			<div class="heroImg"></div>
		</div>
		<article class="col-2">
			<form action="#" class="form">
				<div class="siteLogo">
					<img src="public/assets/images/logo/instagram.png" alt="instagram logo">
				</div>
				<input type="text" placeholder="Email or Username" class="form--input" name="username">
				<div class="passContainer" >
					<input type="password" placeholder="Password" class="form--input" name="password" id="password">
					<span class="show_hide_text cursor_pointer" id="show_hide">Show</span>
				</div>
				<button class="btn cursor_pointer" type="submit" name="submitBtn">Log in</button>
				<span class="divide">Or</span>
				<a href="#" class="pass_reset">Forgot password</a>
			</form>

			<div class="form_footer">
				Don't have an account? <a href="register.php">Sign up</a>
			</div>
		</article>
	</div>
</section>
	
</body>
</html>