	<? # HEADING ?>
	<?php if ( $heading || $heading_continuation): ?>
		<header>
			<?php if ( $heading ): ?>
				<h1><?php echo $heading; ?></h1>
			<?php endif;?>
			<?php if ( $heading_continuation ): ?>
				<p><?php echo $heading_continuation; ?></p>
			<?php endif;?>
		</header>
	<?php endif;?>
	
	<? # CONTENT ?>
	<?php the_content(); ?>

	<? # CLOSURE ?>
	<?php if ( $closure ): ?>
		<footer>
			<p><?php echo $closure; ?></p>
		</footer>
	<?php endif;?>

	<?php # EXTRAS ?>
	<?php if ( count( $extras ) ) :?>
		<?php foreach ($extras as $extra) :?>
			<article>
				<header>
					<?php if ( $extra['title'] ): ?>
						<h1><?php echo $extra['title']; ?></h1>
					<?php endif;?>
				</header>
				<?php if ( $extra['content'] ): ?>
					<?php echo $extra['content']; ?>
				<?php endif;?>
			</article>
		<?php endforeach;?>
	<?php endif; ?>

	<?php # DOWNLOADS?>
	<?php if ( count( $downloads ) ) :?>
		<section>
			<?php if ( $downloads_heading ):?>
				<h1><?php echo $downloads_heading;?></h1>
			<?php endif;?>
			<ul>
				<?php foreach ($downloads as $donwload) :?>
					<li>
						<a href="<?php echo $donwload['url']; ?>" target="_blank" class="download">
							<?php echo $donwload['title']; ?></h1>
						</a>
					</li>
				<?php endforeach;?>
			</ul>
		</section>
	<?php endif; ?>