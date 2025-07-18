﻿

    <body>
		<?php
			include("header/header.php");
		?>

		<!-- Start Page Title Area -->
		<div class="page-title-area bg-8">
			<div class="container">
				<div class="page-title-content">
					<h2>Log In</h2>
					<ul>
						<li>
							<a href="index.php">
								Home 
							</a>
						</li>

						<li>Pages</li>
						<li>User</li>
						<li class="active">Log In</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Log In Area -->
		<section class="user-area-all-style log-in-area ptb-100">
			<div class="container">
				<div class="section-title">
					<h2>Log In to your account!</h2>
					<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium quas cumque iste veniam id dolorem deserunt ratione error voluptas rem ullam possimus placeat, ut, odio</p>
				</div>
				
				<div class="contact-form-action">
					<form method="post">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-12">
								<button class="default-btn" type="submit">
									Google
								</button>
							</div>

							<div class="col-lg-4 col-md-4 col-sm-12">
								<button class="default-btn" type="submit">
									Facebook
								</button>
							</div>

							<div class="col-lg-4 col-md-4 col-sm-12">
								<button class="default-btn" type="submit">
									Twitter
								</button>
							</div>

							<div class="col-12">
								<div class="form-group">
									<input class="form-control" type="text" name="name" placeholder="Username or Email">
								</div>
							</div>

							<div class="col-12">
								<div class="form-group">
									<input class="form-control" type="password" name="password" placeholder="Password">
								</div>
							</div>

							<div class="col-lg-6 col-sm-6 form-condition">
								<div class="agree-label">
									<input type="checkbox" id="chb1">
									<label for="chb1">
										Remember Me
									</label>
								</div>
							</div>

							<div class="col-lg-6 col-sm-6">
								<a class="forget" href="recover-password.html">Forgot my password?</a>
							</div>

							<div class="col-12">
								<button class="default-btn btn-two" type="submit">
									Log In Now
								</button>
							</div>

							<div class="col-12">
								<p class="account-desc">
									Not a member?
									<a href="sign-in.html">Register</a>
								</p>
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>
		<!-- End Log In Area -->

		<?php
			include("footer/footer.php");
		?>
		

 
    </body>
</html>