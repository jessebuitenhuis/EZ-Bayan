<?php include('header.php'); ?>
					
						<div class="word-count">
							SCORE <span class="current">15</span> / 20
						</div>
						<div class="progress">
							<div class="bar-completed" style="width: 40%;"></div>
							<div class="text-completed">completed</div>
						</div>
					</section>
				</div>
			</div>
	</header>

	<div class="shade">

		<div class="notification">
			<div class="content correct">
				<div class="image">
				</div>
				<div class="text">
					<h2>Excellent!</h2>
					Great job!
					<a href="?type=hear_it" class="button">Next Question</a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="content wrong">
				<div class="image">
				</div>
				<div class="text">
					<h2>Sorry.</h2>
					That's not correct.
					<a class="button">Try Again</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>

	</div>

	<section class="container quiz">
		<?php $type = $_GET['type']; ?>
		<?php include('quiz-content-'.$type.'.php'); ?>

	</section>
	<section class="container quiz-options">
		<div class="row options">
			<div class="quiz-option option1">
				<a href="?type=translate_it" class="completed"><div class="icon"></div>Translate it</a>
			</div>
			<div class="quiz-option option2">
				<a href="?type=hear_it" class="error"><div class="icon"></div>Hear it</a>
			</div>
			<div class="quiz-option option3">
				<a href="?type=name_it" class="active"><div class="icon"></div>Name it</a>
			</div>
			<div class="quiz-option option4">
				<a href="?type=spell_it"><div class="icon"></div>Spell it</a>
			</div>
			<div class="quiz-option option5">
				<a href="?type=use_it"><div class="icon"></div>Use it</a>
			</div>
		</div>
	</section>
	<div id="push"></div>
		</div><!-- #page-wrapper -->




	

	<footer>
		<div class="container">
			<div class="navigation">
				<a href="sentences.php?chapter_id=<?php echo $chapter_id; ?>" class="back">BACK</a>
			</div>


<?php include('footer.php'); ?>