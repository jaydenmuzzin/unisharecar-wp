<?php
/**
 * Template Name: Our fleet
 * This is the template that displays all models in the fleet
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Test_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area pure-u-1">

		<main id="main" class="site-main" role="main">

			<h1><?php the_title(); ?></h1>

			<p><?php the_content(); ?></p>

			<h2>Economy</h2>
			<div class="fleet_display">
				<?php
					/* Set up the paramaters for the query */
					$args = array(
						'post_type' => 'model',
						'orderby' => 'menu_order',
						'order' => 'ASC',
						'tax_query' => array(
							array(
								'taxonomy' => 'fleet',
								'field' => 'slug',
								'terms' => 'economy'
						), ),
					);
	
					/* Create the query with WP_query and store the result in $staff */
					$model = new WP_query($args);
				?>
	
				<?php if ($model->have_posts()): ?>
					<?php while ($model->have_posts()) : $model->the_post(); ?>
						
						<article class="fleet_model">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('medium', array('class' => 'fleet-model-photo')) ?>
								<h3 class="fleet_model_link_text"><?php the_title(); ?></h3>
							</a>
						</article>
					<?php endwhile; ?>
				<?php else: ?>
					<p> Sorry, Economy models are currently unavailable to view. </p>
				<?php endif; ?>
			</div>

			<h2>Luxury</h2>
			<div class="fleet_display">
				<?php
					/* Set up the paramaters for the query */
					$args = array(
						'post_type' => 'model',
						'orderby' => 'menu_order',
						'order' => 'ASC',
						'tax_query' => array(
							array(
								'taxonomy' => 'fleet',
								'field' => 'slug',
								'terms' => 'luxury'
						), ),
					);
	
					/* Create the query with WP_query and store the result in $staff */
					$model = new WP_query($args);
				?>
	
				<?php if ($model->have_posts()): ?>
					<?php while ($model->have_posts()) : $model->the_post(); ?>
						
						<article class="fleet_model">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('medium', array('class' => 'fleet-model-photo')) ?>
								<h3 class="fleet_model_link_text"><?php the_title(); ?></h3>
							</a>
						</article>
					<?php endwhile; ?>
				<?php else: ?>
					<p> Sorry, Luxury models are currently unavailable to view. </p>
				<?php endif; ?>
			</div>

			<h2>SUVs</h2>
			<div class="fleet_display">
				<?php
					/* Set up the paramaters for the query */
					$args = array(
						'post_type' => 'model',
						'orderby' => 'menu_order',
						'order' => 'ASC',
						'tax_query' => array(
							array(
								'taxonomy' => 'fleet',
								'field' => 'slug',
								'terms' => 'suv'
						), ),
					);
	
					/* Create the query with WP_query and store the result in $staff */
					$model = new WP_query($args);
				?>
	
				<?php if ($model->have_posts()): ?>
					<?php while ($model->have_posts()) : $model->the_post(); ?>
						
						<article class="fleet_model">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('medium', array('class' => 'fleet-model-photo')) ?>
								<h3 class="fleet_model_link_text"><?php the_title(); ?></h3>
							</a>
						</article>
					<?php endwhile; ?>
				<?php else: ?>
					<p> Sorry, SUV models are currently unavailable to view. </p>
				<?php endif; ?>
			</div>

			<h2>People Movers</h2>
			<div class="fleet_display">
				<?php
					/* Set up the paramaters for the query */
					$args = array(
						'post_type' => 'model',
						'orderby' => 'menu_order',
						'order' => 'ASC',
						'tax_query' => array(
							array(
								'taxonomy' => 'fleet',
								'field' => 'slug',
								'terms' => 'people_mover'
						), ),
					);
	
					/* Create the query with WP_query and store the result in $staff */
					$model = new WP_query($args);
				?>
	
				<?php if ($model->have_posts()): ?>
					<?php while ($model->have_posts()) : $model->the_post(); ?>
						
						<article class="fleet_model">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('medium', array('class' => 'fleet-model-photo')) ?>
								<h3 class="fleet_model_link_text"><?php the_title(); ?></h3>
							</a>
						</article>
					<?php endwhile; ?>
				<?php else: ?>
					<p> Sorry, People Mover models are currently unavailable to view. </p>
				<?php endif; ?>
			</div>

		</main><!-- #main -->

	</div><!-- #primary -->

<?php
get_footer();
