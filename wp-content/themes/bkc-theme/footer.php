<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>

<footer>
		<p>&copy; <?php print date('Y') ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
</footer>
		<?php wp_footer(); ?>
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="/wp-content/themes/bkc-theme/js/vendor/jquery-1.7.2.min.js"><\/script>')</script>
		<script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery.prettyPhoto.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/plugins.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
</body>
</html>
