<?php include(dirname(__FILE__).'/header.php'); ?>

	<main class="main">

	<header class="header">
		<div class="container">
			<h1 class="no-margin heading-small"><?php $plxShow->staticTitle(); ?></h1>
		</div>
	</header>
		<div class="container">
			<div class="grid">

				<div class="content col sml-12 med-8">

					<article class="article static" id="static-page-<?php echo $plxShow->staticId(); ?>">



						<?php $plxShow->staticContent(); ?>

					</article>

				</div>

				<?php include(dirname(__FILE__).'/sidebar.php'); ?>

			</div>

		</div>

	</main>

<?php include(dirname(__FILE__).'/footer.php'); ?>
