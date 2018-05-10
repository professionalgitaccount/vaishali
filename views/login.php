<?php
    require_once 'header.php';
?>
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
	<form method="post" action="../controllers/login-action.php">
	<input type="text" name="useremail" placeholder="ENTER EMAIL ID" />
	<input type="password" name="userpassword" placeholder="ENTER PASSWORD" />
	<button type="submit" class="btn btn-default">Login</button>
	</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
	<form method="post" action="../controllers/register-action.php">
	<input type="text" name="username" placeholder="ENTER NAME" />
	<input type="password" name="usermobile" placeholder="ENTER MOBILE NUMBER" />
	<input type="text" name="useremail" placeholder="ENTER EMAILID" />
	<input type="password" name="userpassword" placeholder="ENTER PASSWORD" />
	<input type="password" name="usercpassword" placeholder="ENTER OMFIRM PASSWORD" />
	<button type="submit" class="btn btn-default">Register</button>
	</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
<?php
    require_once 'footer.php';
?>
