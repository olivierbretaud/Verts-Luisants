<?php include(dirname(__FILE__).'/header.php'); ?>

	<main class="main">
	<header class="header">
		<div class="container">
			<h1 class="no-margin heading-small"><?php $plxShow->artTitle(); ?></h1>
		</div>
	</header>

		<div class="container">

			<div class="grid">

				<div class="content col sml-12 med-8">

					<article class="article" id="post-<?php echo $plxShow->artId(); ?>">


						<?php $plxShow->artContent(); ?>

						<footer>
							<small>
								<span class="written-by">
									<?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?>
								</span>
								<time class="art-date" datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>">
									<?php $plxShow->artDate('#num_day #month #num_year(4)'); ?>
								</time>
								<span class="art-nb-com">
									<a href="<?php $plxShow->artUrl(); ?>#comments" title="<?php $plxShow->artNbCom(); ?>"><?php $plxShow->artNbCom(); ?></a>
								</span>
							</small>
							<small>

								<span class="classified-in">
									<?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat() ?>
								</span>
								<span class="tags">
									<?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags() ?>
								</span>
							</small>
						</footer>

					</article>

					<?php $plxShow->artAuthorInfos('<div class="author-infos">#art_authorinfos</div>'); ?>

					<?php include(dirname(__FILE__).'/commentaires.php'); ?>

				</div>

				<?php include(dirname(__FILE__).'/sidebar.php'); ?>

			</div>

		</div>

	</main>

<?php include(dirname(__FILE__).'/footer.php'); ?>
