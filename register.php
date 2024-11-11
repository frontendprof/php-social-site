<?php

	$title="Register + Instagram";
	$keywords="Instagram, Share and capture worlds moments";
	require "shared/header.php";

	?>

	<section class="container">
		<main class="row">
			<div class="col-1">
				<div class="heroImg"></div>
			</div>
			<article class="col-2">
				<form action="#" class="form">
					<div class="siteLogo">
						<img src="public/assets/images/logo/instagram.png" alt="instagram logo">
					</div>
					<input type="email" placeholder="Email" class="form--input" name="email">
					<input type="text" placeholder="Fullname" class="form--input" name="full_name">
					<input type="text" placeholder="Username" class="form--input" name="username">

					<div class="passContainer" >
						<input type="password" placeholder="Password" class="form--input" name="password" id="password">
						<span class="show_hide_text cursor_pointer" id="show_hide">Show</span>
					</div>
					<button class="btn cursor_pointer" type="submit" name="submitBtn">Sign up</button>
					<span>By signing up, you agree to our <a href="https://privacycenter.instagram.com/policies/cookies" target="_blank">Terms, Privacy Policy and Cookies Policy</a>.</span>
					
				</form>

				<div class="form_footer">
					Have an account? <a href="login.php">Log in</a>
				</div>
			</article>
		</main>
	</section>

	<script src="public/js/common.js"></script>

</body>
</html>
	
