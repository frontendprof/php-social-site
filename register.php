<?php


require_once "core/init.php";

if (Input::exists()) {
	if (isset($_POST['submitBtn'])) {
		$form_errors = array();
		$req_flds = array("email", "full_name", "username", "password");
		$form_errors = array_merge($form_errors, check_empty_flds($req_flds));
	}
}

$title = "Register + Instagram";
$keywords = "Instagram, Share and capture worlds moments";
require "shared/header.php";

?>

<section class="container">
	<main class="row">
		<div class="col-1">
			<div class="heroImg"></div>
		</div>
		<article class="col-2">
			<?php if (!empty($form_errors)) {
				echo show_errors($form_errors);
			} ?>
			<form action="<?= h($_SERVER["PHP_SELF"]); ?>" method="POST" class="form">
				<div class="siteLogo">
					<img src="public/assets/images/logo/instagram.png" alt="instagram logo">
				</div>
				<input type="email" placeholder="Email" class="form--input" name="email" autocomplete="off"
					value="<?= escape(Input::get('email')); ?>">
				<input type="text" placeholder="Fullname" class="form--input" name="full_name" value="<?= escape(Input::get('full_name')); ?>" autocomplete="off">
				<input type="text" placeholder="Username" class="form--input" name="username" value="<?= escape(Input::get('username')); ?>" autocomplete="off">

				<div class="passContainer">
					<input type="password" placeholder="Password" class="form--input" name="password" id="password" autocomplete="new-password">
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