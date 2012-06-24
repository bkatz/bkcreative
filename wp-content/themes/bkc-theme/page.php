<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */ 

get_header(); ?>

<div id="main" class="clearfix">
	
	
	<?php if (is_page()) { ?>
	<div>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="entry">
				<?php the_content(); ?>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>

<?php } elseif (is_page('about')) { ?>
	
	<div>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="entry">
				<?php the_content(); ?>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
	
	<?php get_sidebar(); ?>

<?php } ?>

</div>

<?php get_footer(); ?>
