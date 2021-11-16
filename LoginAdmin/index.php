<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="style.css">
	<title>
		Đăng nhập Shop
	</title>
</head>

<body>
	<style>
			<?php
				include"style.css";
		?>
	</style>

	<div id="container" class="container">
		<!-- FORM SECTION -->
		<div class="row">
			<!-- SIGN UP -->
			<div class="col align-items-center flex-col sign-up">
					<div class="form-wrapper align-items-center">
						<div class="form sign-up">
							<form action="">
								<div class="input-group">
									<i class='bx bxs-user'></i>
									<input type="text" placeholder="Username" id="signup-username">
								</div>
								<div class="input-group">
									<i class='bx bx-mail-send'></i>
									<input type="email" placeholder="Email" id="signup-email">
								</div>
								<div class="input-group">
									<i class='bx bxs-lock-alt'></i>
									<input type="password" placeholder="Password" id="signup-password">
								</div>
								<div class="input-group">
									<i class='bx bxs-lock-alt'></i>
									<input type="password" placeholder="Confirm password" id="signup-confirm-password">
								</div>
								<button id="btn-signup">
									Sign up
								</button>
								<p>
									<span>
										Already have an account?
									</span>
									<b onclick="toggle()" class="pointer">
										Sign in here
									</b>
								</p>
							</form>
						</div>
					</div>
				<div class="form-wrapper">
					<div class="social-list align-items-center sign-up">
						<div class="align-items-center facebook-bg">
							<i class='bx bxl-facebook'></i>
						</div>
						<div class="align-items-center google-bg">
							<i class='bx bxl-google'></i>
						</div>
						<div class="align-items-center twitter-bg">
							<i class='bx bxl-twitter'></i>
						</div>
						<div class="align-items-center insta-bg">
							<i class='bx bxl-instagram-alt'></i>
						</div>
					</div>
				</div>
			</div>
			<!-- END SIGN UP -->
			<!-- SIGN IN -->

			<div class="col align-items-center flex-col sign-in">
				<div class="form-wrapper align-items-center">
				<form action="login.php" method="POST">
					<div class="form sign-in">
							<div class="input-group">
								<i class='bx bxs-user'></i>
								<input type="text" name="username" placeholder="Email" id="signin-email" required>
							</div>
							<div class="input-group">
								<i class='bx bxs-lock-alt'></i>
								<input type="password" name="password" placeholder="Password" id="signin-password" required>
							</div>
							<div>

								<input type="submit" name="SignIn" value="SIGN IN" id="btn-singin">
							</div>

							<p>
								<b>
									Forgot password?
								</b>
							</p>

						</form>
					</div>
				</div>
				<div class="form-wrapper">
					<div class="social-list align-items-center sign-in">
						<div class="align-items-center facebook-bg">
							<i class='bx bxl-facebook'></i>
						</div>
						<div class="align-items-center google-bg">
							<i class='bx bxl-google'></i>
						</div>
						<div class="align-items-center twitter-bg">
							<i class='bx bxl-twitter'></i>
						</div>
						<div class="align-items-center insta-bg">
							<i class='bx bxl-instagram-alt'></i>
						</div>
					</div>
				</div>
			</div>

			<!-- END SIGN IN -->
		</div>
		<!-- END FORM SECTION -->
		<!-- CONTENT SECTION -->
		<div class="row content-row">
			<!-- SIGN IN CONTENT -->
			<div class="col align-items-center flex-col">
				<div class="text sign-in">
					<h2>
						WELCOME BACK
					</h2>
				</div>
				<div class="img sign-in">
					<img src="assets/undraw_different_love_a3rg.svg" alt="welcome">
				</div>
			</div>
			<!-- END SIGN IN CONTENT -->
			<!-- SIGN UP CONTENT -->
			<div class="col align-items-center flex-col">
				<div class="img sign-up">
					<img src="assets/undraw_creative_team_r90h.svg" alt="welcome">
				</div>
				<div class="text sign-up">
					<h2>
						Join with us
					</h2>
				</div>
			</div>
			<!-- END SIGN UP CONTENT -->
		</div>
		<!-- END CONTENT SECTION -->
	</div>

	<!--firebase-->
	<script src="https://www.gstatic.com/firebasejs/8.3.3/firebase-app.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.3.3/firebase-auth.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.3.3/firebase-database.js"></script>

	<script src="index.js"></script>
	<script src="login.js"></script>
</body>

</html>