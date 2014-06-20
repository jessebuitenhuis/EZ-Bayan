<?php include('header.php'); ?>
<?php 
	$page = '';
	if (isset($_GET['page'])) {
		$page = $_GET['page'];
	} 
?>
					<section class="col-xs-9 trackers">
						<div class="static-title">
							<?php echo str_replace('-', ' ', $page); ?>
						</div>
					</section>
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
	<section>

	<footer>
		<div class="container">

<?php include('footer.php'); ?>