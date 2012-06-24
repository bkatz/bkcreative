<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>
<div id="main" class="clearfix">
	<div>
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			<div class="entry">
				<?php the_content('[&hellip;]'); ?>
			</div>
		</div>
		<?php endwhile; ?>
		<?php else : ?>
		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>
		<?php endif; ?>
	</div>

<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
