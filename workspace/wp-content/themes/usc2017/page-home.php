<?php
/**
 * Template Name: Home Page
 * The template for displaying the home page
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

	<div id="primary" class="content-area pure-u-1 pure-u-md-2-3">
		<main id="main" class="site-main" role="main">
			
			<?php $background = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' ); ?>
			<style>
				#content{
					background-image: url('<?php echo $background[0]; ?>');
					background-repeat: no-repeat;
				}
			</style>
			
			<div id="homeMain">
				<h1 id="tag"><?php echo get_field("tag"); ?></h1> 
				<h2 id="subtag"><?php echo get_field("subtag"); ?></h2> 
				<div id="topHomeButtCont">
					<a id="homeRegButt" class="pure-button homeButt" href="/aboutus/">Learn More</a>
					<?php if (is_user_logged_in()) : ?>
						<a id="homeButtNoBgd" class="pure-button" href="<?php echo get_edit_user_link(); ?>">Manage Your Profile</a>
					<?php else : ?>
						<a id="homeButtNoBgd" class="pure-button" href="/register/">Get Started</a>
					<?php endif ?>
					
				</div>
				<div id="homeBigButtCont"><a id="homeBigButt" class="pure-button homeButt" href="/car-locator/">Find a Car</a></div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
