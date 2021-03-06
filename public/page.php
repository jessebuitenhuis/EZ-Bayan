<?php include('header.php'); ?>
<?php 
	$page = '';
	if (isset($_GET['page'])) {
		$page = $_GET['page'];
	} 
?>
						<div class="static-title">
							<?php echo str_replace('-', ' ', $page); ?>
						</div>
					</section>
				</div>
				<div class="row">
					<div class="breadcrumb"><a href="index.php">Home</a> > <?php echo ucfirst(str_replace('-', ' ', $page)); ?></div>
				</div>
			</div>
	</header>

	<section class="container static">
		<div class="row">
			<?php if ($page) {
				include('page-content-'.$page.'.php');
			} else {
				echo 'Sorry, no page is found.';
			} ?>
		</div>
	</section>

	<div id="push"></div>
</div><!-- #page-wrapper -->



	<footer>
		<div class="container">

<?php include('footer.php'); ?>