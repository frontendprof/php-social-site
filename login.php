<?php

	$title="Login + Instagram";
	$keywords="Instagram, Share and capture worlds moments";
	require "shared/header.php";

	?>
<section class="container">
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

	<script src="public/js/common.js"></script>
	
</body>
</html>