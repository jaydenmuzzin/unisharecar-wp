<?php
/**
 * The sidebar containing the pods for the Pods page
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Test_Theme
 */

?>
<aside id="secondary" class="widget-area pure-u-1 pure-u-md-1-3" role="complementary">

<?php
	/* Set up the paramaters for the query */
	$args = array(
		'post_type' => 'pod',
		'orderby' => 'menu_order',
		'order' => 'ASC'
	);

	/* Create the query with WP_query and store the result in $pod */
	$pod = new WP_query($args);
?>

<?php if ($pod->have_posts()): ?>
	<div class="sidebar-pods-list">
		<?php while ($pod->have_posts()) : $pod->the_post(); ?>
			<div class="pod">
				<h2> <?php echo the_field("pod_number").'. '.get_the_title() ?> </h2>
				<article class="default_cars">
					<ul class="list">
						<?php
						
						$default_cars = get_field('default_cars');
						$default_cars = explode("\n", $default_cars);
		
					
						foreach($default_cars as $dc){
						  echo "<li>$dc</li>";
						}
						
						?>
					</ul>
				</article>
			</div>
		<?php endwhile; ?>
		</div>
	<?php endif; ?>
</aside><!-- #secondary -->



			
