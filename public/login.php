<?php include('header.php'); ?>
					<section class="col-xs-9 trackers">

					</section>
				</div>
			</div>
	</header>

	<section class="container ">
		<div class="row">
			<?php if (isset($_GET['registration-complete']) ) : ?>
				<div class="col-sm-6 col-sm-offset-3 static notification success">
					<i class="fa fa-times-circle-o"></i>
					<h3>Thanks for signing up!</h3>
					<p>Your registration is now complete.</p>
				</div>
			<?php endif; ?>
			

			<div class="col-sm-6 col-sm-offset-3 static">
				<h3>Log in to have fun learning the Qur'an</h3>
				<form role="form" class="form-horizontal">
					<div class="form-group">
						<label for="email" class="col-sm-2 col-sm-offset-1 control-label">Emailadress</label>
						<div class="col-sm-8"><input type="text" class="col-sm-10 form-control" id="email" placeholder="example@hotmail.com"></div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 col-sm-offset-1 control-label">Password</label>
						<div class="col-sm-8"><input type="password" class="form-control" id="password" placeholder="* * * * *"></div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-1 col-sm-10">
							<button type="submit" class="btn btn-default">Learn Arabic</button>
							<div class="sub-text"><a href="#">Click here if you forgot or lost your password.</a></div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-1 col-sm-10 register	">
							Or <a href="register.php">create a new account</a> to get started!
						</div>
					</div>
				</form>
			</div>

		</div>
	<section>

	<footer>
		<div class="container">

<?php include('footer.php'); ?>