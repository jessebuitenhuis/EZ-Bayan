<?php include('header.php'); ?>
					<section class="col-xs-9 trackers">

					</section>
				</div>
			</div>
	</header>

	<section class="container">
		<div class="row">
		  <div class="col-sm-8 col-sm-offset-2 static">
		  	<h3>Forgot your password?</h3>
		  	<div class="row">
		  	<div class="col-sm-2 col-sm-offset-1"><img src="img/dereza/boy-sad.png"></div>
		  	<p class="col-sm-8">It's ok. It happens to the best of us. EZ Bayan will send password reset instructions to the email address associated with your account. </p></div>

		  	<form role="form" class="form-horizontal" action="forgot-password-done.php">
		  		<!-- add .has-warning class to form-group to show the error notification -->
		  		<div class="form-group has-warning">
		  			<p class="notification col-sm-8 col-sm-offset-2">Sorry, this emailadress does not exist in our database.</p>
		  			<label for="email" class="col-sm-12 control-label">Email address</label>
		  			<div class="col-sm-8 col-sm-offset-2"><input type="text" class="col-sm-10 form-control" id="email" placeholder="Email adress"></div>
		  		</div>
		  		<div class="form-group">
		  			<div class="col-sm-offset-2 col-sm-8">
		  				<button type="submit" class="btn btn-default">Reset password</button>
		  				<div class="sub-text">Your old password will not be valid anymore.</div>
		  			</div>
		  		</div>
		  	</form>
		  </div>

		</div>
	</section>
		<div id="push"></div>
		</div><!-- #page-wrapper -->


	<footer>
		<div class="container">

<?php include('footer.php'); ?>