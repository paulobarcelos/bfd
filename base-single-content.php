	<div class="clearfix">
		<div class="g8">
			<? # HEADING ?>
			<?php if ( $heading || $heading_continuation): ?>
				<header>
					<?php if ( $heading ): ?>
						<h1 class="brackets"><?php echo $heading; ?></h1>
					<?php endif;?>
					<?php if ( $heading_continuation ): ?>
						<p class="continuation"><?php echo $heading_continuation; ?></p>
					<?php endif;?>
				</header>
			<?php endif;?>
			
			<? # CONTENT ?>
			<?php the_content(); ?>

			<? # CLOSURE ?>
			<?php if ( $closure ): ?>
				<footer class="closure">
					<p><?php echo $closure; ?></p>
				</footer>
			<?php endif;?>
		</div>

		<?php # DOWNLOADS?>
		<?php if ( count( $downloads ) ) :?>
			<section class="g4 downloads">
				<?php if ( $downloads_heading ):?>
					<header>
						<h1 class="brackets"><?php echo $downloads_heading;?></h1>
					</header>
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

		<?php # EXTRAS ?>
		<?php if ( count( $extras ) ) :?>
			<?php foreach ($extras as $extra) :?>
				<article class="g4 extra">
					<header>
						<?php if ( $extra['title'] ): ?>
							<h1 class="brackets"><?php echo $extra['title']; ?></h1>
						<?php endif;?>
					</header>
					<?php if ( $extra['content'] ): ?>
						<p><?php echo $extra['content']; ?></p>
					<?php endif;?>
				</article>
			<?php endforeach;?>
		<?php endif; ?>

	</div>