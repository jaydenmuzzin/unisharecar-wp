<?php
/**
 * Template name: Car Locator
 * The template for filtering and locating cars
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

	<div id="primary" class="content-area pure-u-1">
		<main id="main" class="site-main" role="main">
			<h1><?php the_title(); ?></h1>
			
			<?php	
			$fleet_filter_form = "";
			
			$get_fleet = $_GET['fleet'];
			
			$fleets = get_terms('fleet');
			
			if ($fleets) {
				$fleet_filter_form = "<form action='' method='get>";
					$fleet_filter_form .= "<label for='fleet'>Filter by Fleet: </label>";
					$fleet_filter_form .= "<select name='fleet' id='fleet' onchange='this.form.submit()'>";
						$fleet_filter_form .= "<option value=''>None</option>";
						
						foreach ($fleets as $fleet) {
							
							$selected = "";
							
							if ($get_fleet == $fleet->term_id) {
								$selected = "selected";
							}
							$fleet_filter_form .= "<option value='{$fleet->term_id}' $selected >{$fleet->name}</option>";
						}
						
					$fleet_filter_form .= "</select>";
				$fleet_filter_form .= "</form>";
				
				echo $fleet_filter_form;
			}
			
			if ($get_fleet) {
				// filter is active, therefore change the query
				
				$active_fleet_id = $get_fleet;
				
				// 1. return models that are inside the active fleet taxonomy (set from the filter)
				// and store them just as IDs in an array called $models_in_fleet
				$model_args = array (
					'post_type' => 'model',
					'tax_query' => array(
						array(
							'taxonomy' => 'fleet',
							'field'    => 'term_id',
							'terms'    => $active_fleet_id,
						)
					)
				);
				
				$models = new WP_query($model_args);
				$models_in_fleet = array();
				
				if ( $models->have_posts() ) {
					while ( $models->have_posts() ) {
						$models->the_post();
						array_push($models_in_fleet, get_the_ID() );
					}
				}
				
				// 2. query cars that happen to be 
				$args = array (
						'post_type' => 'car',
						'numberposts' => -1,
						'meta_query' => array(
							array(
								'key'	 	=> 'model',
								'value'	  	=> $models_in_fleet,
							)
						)
				);
				
			}else{
				// standard query get all cars with no filter
				$args = array (
					'post_type' => 'car',
					'posts_per_page' => '50',
				);
			}
		
			$cars = new WP_query($args);
			?>	
				
			<?php if ($cars->have_posts()): ?>
				<?php while ($cars->have_posts()) : $cars->the_post(); ?>
    			<article class="car">
					<h2><?php the_title() ?></h2>
					<?php $model = get_field('model_name'); ?>
					<h3> <?php echo $model->post_title; ?></h3>
					<?php the_post_thumbnail('medium', array('class' => 'locator-car-photo')) ?>
					
					<h4> Colour: <?php the_field('colour') ?></h4>
					<h4> Extra Features: <?php the_field('extra_features') ?></h4>
					<?php
						$pod = get_field('default_pod');
					?>
					<h4> Default Pod: <?php echo $pod->post_title; ?></h4>
					<a class="pure-button bookButt" href="/bookings/make-a-booking/?pod_name=<?php echo urlencode($pod->post_title); ?>&car_name=<?php echo urlencode(get_the_title()); ?>">Book this car</a>
				</article>
				
				<?php endwhile; ?>
			<?php endif; ?>
			
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
