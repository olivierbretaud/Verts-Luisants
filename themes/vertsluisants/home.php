<?php include(dirname(__FILE__).'/header.php'); ?>

<main class="main">
	<header class="header">
		<div class="container">
			<h1 class="no-margin heading-small">
				<?php $plxShow->mainTitle('link'); ?>
			</h1>
			<h2 class="h5 no-margin">
				<?php $plxShow->subTitle(); ?>
			</h2>
		</div>
	</header>

	<div class="container">

		<div class="grid">

			<div class="content-articles col sml-12">

				<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>

				<article class="article-home" id="post-<?php echo $plxShow->artId(); ?>">

					<header>
					<?php $plxShow->artThumbnail(); ?>
						<h2>
							<?php $plxShow->artTitle('link'); ?>
						</h2>
					</header>


					
					<?php $plxShow->artChapo(); ?>

				</article>

				<?php endwhile; ?>

				<nav class="pagination text-center">
					<?php $plxShow->pagination(); ?>
				</nav>

			
			</div>

	 		

		</div>

	</div>

</main>

<?php include(dirname(__FILE__).'/footer.php'); ?>
