<?php include('header.php'); ?>
						<div class="word-count">
							<i class="fa fa-align-left"></i><span class="current">15</span> words learned
						</div>
					</section>
				</div>
				<div class="row">
					<div class="breadcrumb"><a href="index.php">Home</a> > <a href="chapters.php">Quiz me</a> > Chapter <?php echo $_GET['chapter_id']; ?></div>
				</div>
			</div>
	</header>

	<section class="container sentences">

		<?php for($j=0; $j<6; $j++) : ?>

			<div class="row">
				<div class="hidden-xs col-sm-2">
					<div class="sentence">
						<h3><?php echo $j+1; ?></h3>

						<div class="fields">
							<div class="stars">
								<i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
							</div>
							<div class="score">
								<p><span class="current">15</span> / <span class="total">20</span></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-10 words">
					<a href="quiz.php?<?php if ($chapter_id){ echo 'chapter_id='.$chapter_id.'&'; }?>type=translate_it">
						<div class="word-wrap">
							<div class="word">
								1
								<div class="stars">
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
								</div>
							</div>
						</div>
					</a>
					<?php $words = rand(2, 5); for($i=0; $i<$words; $i++) : ?>
						<div class="word-wrap locked">
							<div class="word"></div>
						</div>
					<?php endfor; ?>
				</div>
			</div>

		<?php endfor; ?>


	</section>
	<div id="push"></div>
	</div><!-- #page-wrapper -->
	

	<footer>
		<div class="container">
			<div class="navigation">
				<a href="chapters.php" class="back">BACK</a>
			</div>





<?php include('footer.php'); ?>