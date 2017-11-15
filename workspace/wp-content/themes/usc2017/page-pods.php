<?php
/**
 * Template name: Pods
 * The template for searching for a car
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Test_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area pure-u-1 pure-u-md-3-5">
		<main id="main" class="site-main" role="main">
			<h1>Pods</h1>
			<?php the_post_thumbnail('large', array('id' => 'pod-map')); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar("pods");
get_footer();