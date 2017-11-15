<?php
/**
 * The template for displaying a single model
 *
 * @package Test_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area pure-u-1">
		<main id="main" class="site-main" role="main">
		    
		    <?php
			while ( have_posts() ) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <div class="model_info">
                	<div class="model_info_text">
		                <article class="car_type">
		                	<?php 
		                		$model_terms = get_the_terms(get_the_ID(), "fleet"); 
		                		if ($model_terms) {
									foreach($model_terms as $model_term) {
    									echo '<h3>Car Type: '.$model_term->name.'</h3>';
   									} 
   								}
   							?>
						</article>
						
						<article class="features">
							<h3>Features: </h3>	
							<ul class="featuresList">
								<?php
								
								$features = get_field('features');
								$features = explode("\n", $features);
		
							
								foreach($features as $f){
								  echo "<li>$f</li>";
								}
								
								?>
							</ul>
						</article>
							
						<article class="specifications">
							<h3>Specifications: </h3>
							<?php the_field('specifications') ?>
						</article>
					</div>
					
					<?php if ( has_post_thumbnail() ): ?>
	                    <?php the_post_thumbnail('large', array('class' => 'model-photo')); ?>
	                <?php endif; ?>
                </div>
			<?php endwhile; // End of the loop. ?>
			
			<?php
			
							
				/* Set up the paramaters for the query */
				$args = array(
					'post_type' => 'car',
					'meta_key' => 'model_name',
					'meta_value' => get_the_ID(),
				);

				/* Create the query with WP_query and store the result in $car */
				$car = new WP_query($args);
			?>
			
			<h2>Our <?php the_title(); ?> Fleet</h2>
			
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