<?php
/**
 * Template Name: About Us
 * The template for displaying About Us
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Test_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area pure-u-1">
		<main id="aboutPageMain" class="site-main" role="main">
			
			<section id="aboutUsSect" class="aboutPageSect">
				<div id="aboutText" class="pure-u-2-3">
				<h1>What is UniShareCar?</h1>
				
				<?php while ( have_posts() ) : the_post(); ?>
					<p><?php the_field("about_details"); ?></p>
				<?php endwhile; ?>
				</div>
				<img class="pure-u-1-3"><?php the_post_thumbnail('large',array('id' => 'about-photo')); ?>
				<a class = "pure-button nextSect" href="#howItWorksSect">How it Works v</a>
			</section>
			
			
			<section id="howItWorksSect" class="aboutPageSect">
				<h1>How it Works</h1>
				
				<?php
			
				/* Set up the paramaters for the query. Enables order of steps to be changed manually. */
				$args = array(
					'post_type' => 'step',
					'post_status' => 'publish', 
    				'orderby' => 'menu_order', 
    				'order' => 'ASC', 
				);

				/* Create the query with WP_query and store the result in $step */
				$step = new WP_query($args);
				?>
				
				<?php if ($step->have_posts()): ?>
					<?php $count = 1; ?>
					<ul id="stepList">
						<?php while ($step->have_posts()) : $step->the_post(); ?>
							<li class="step">
								<div class="stepText">
									<h2 class="stepTitle"><?php echo $count.'. '.get_the_title();?></h2>
									<p><?php the_content(); ?></p>
								</div>
								<?php the_post_thumbnail('small',array('class' => 'stepIcon')); ?>
							</li>
							<?php $count++; ?>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
				
				<a class = "pure-button nextSect" href="#mshipSect">Membership & Rates v</a>
			</section>
			
			<section id="mshipSect" class="aboutPageSect">
				<?php /* Set up the paramaters for the query */
					$args = array(
						'post_type' => 'membership',
						'orderby' => 'post_title',
						'order' => 'ASC'
					);
	
					/* Create the query with WP_query and store the result in $membership */
					$memberships = new WP_query($args);
				?>
				
				<h1>Membership & Rates</h1>
				
				<div id="mshipTableCont">
					<?php while ( have_posts() ) : the_post(); ?>
						<p id="mshipDetails"><?php the_field("membership_details"); ?></p>
					<?php endwhile; ?>
					
					<div id="mshipTable">
						<?php if ($memberships->have_posts()): ?>
							<?php while ($memberships->have_posts()) : $memberships->the_post(); ?>
							
								<article class="membership">
									<h3 class="mshipTitle"><?php the_title() ?></h3>
									<div class="mshipCost">
										<h4><span class="bold"><?php echo the_field('yearly_cost')?></span> per year</h4>
										<h4><?php echo the_field('joining_fee').' Joining Fee' ?></h4>
									</div>
									<p class="ratesText">Rates:</p>
									<div class="mshipRates">
										<div class="economyCostCont">
											<p class="costFleet">Economy</p>
											<div class="economyCost">
												<h4><span class="bold"><?php the_field('economy_price') ?></span></h4>
												<p><?php the_field('economy_rate') ?></p>
											</div>
										</div>
										<div class="altCostCont">
											<p class="costFleet">SUV / Luxury / People Mover</p>
											<div class="altCost">
												<h4><span class="bold"><?php the_field('alt_price') ?></span></h4>
												<p><?php the_field('alt_rate') ?></p>
											</div>
										</div>
									</div>
									<p class="mshipDesc"><?php the_field('description') ?></p>
								</article>
							<?php endwhile; ?>
						<?php else: ?>
							<p> Sorry, memberships are currently unavailable to view. </p>
						<?php endif; ?>
					</div>
				</div>
				
				<a class = "pure-button nextSect" href="#masthead">Back To Top ^</a>
				
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
