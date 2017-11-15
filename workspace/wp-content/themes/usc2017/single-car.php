<?php
/**
 * Template Name: Car
 *
 * @package Test_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area pure-u-1 pure-u-md-2-3">
		<main id="main" class="site-main" role="main">

			<?php if ($car->have_posts()): ?>
				<?php while ($car->have_posts()) : $car->the_post(); ?>
				
					<article class="car">
						<h3><?php the_title() ?></h3>
						<?php the_post_thumbnail('large',array('class' => 'car-photo')) ?>
						
						<h4> Colour: <?php the_field('colour') ?></h4>
						<h4> Extra Features: <?php the_field('extra_features') ?></h4>
						
						<?php $pod = get_field('default_pod'); ?>
						
						<a class = "pure-button bookButt" href="/bookings/make-a-booking/?pod_name=<?php echo urlencode($pod->post_title); ?>&car_name=<?php echo urlencode(get_the_title()); ?>">Book this car</a>
					</article>
				<?php endwhile; ?>
			<?php else: ?>
				<p> Sorry, cars are currently unavailable to view. </p>
			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	
<?php
get_footer();
?>