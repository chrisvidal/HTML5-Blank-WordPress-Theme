<?php /* Template Name: Welcome Page */ ?>

<?php
// Create a new filtering function that will add our where clause to the query
function filter_where_2( $where = '' ) {
	// posts  30 to 60 days old
	//$where .= " AND post_date >= '" . date('Y-m-d', strtotime('-60 days')) . "'" . " AND post_date <= '" . date('Y-m-d', strtotime('-30 days')) . "'";
	$where .= " AND post_date >= '" . date('Y-m-d', strtotime('-4 months', S2MEMBER_CURRENT_USER_REGISTRATION_TIME)) . "'" . " AND post_date <= '" . date('Y-m-d', strtotime('1 year', S2MEMBER_CURRENT_USER_REGISTRATION_TIME)) . "'";
	return $where;
}

function filter_where_1( $where = '' ) {
	// posts in the last 30 days
	$where .= " AND post_date > '" . date('Y-m-d', strtotime('-4 months', S2MEMBER_CURRENT_USER_REGISTRATION_TIME)) . "'";
	return $where;
}
?>

<?php get_header(); ?>
	
	<!-- Section -->
	<section class="welcome">
		
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		
	
		<!-- Article -->
		<article class="line" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php get_sidebar(); ?>

			<div id="content" class="unit two_third lastUnit">

				<div id="bissue_intro">
					<?php echo get_the_content(); ?>
				</div>
				
				<div id="bissue_listing">

					<?php if (S2MEMBER_CURRENT_USER_ACCESS_LEVEL == 1){ ?>
						<!-- Content exclusively for members level 1. -->

						<?php 

							add_filter( 'posts_where', 'filter_where_1' );					
							$nb_issues = 1;
							

					} else if (S2MEMBER_CURRENT_USER_ACCESS_LEVEL == 2){ ?>
					    <!-- Content exclusively for members level 2. -->
					    <?php 
					    	add_filter( 'posts_where', 'filter_where_2' );
					    	$nb_issues = 4;
						

					 } else if (current_user_can( 'manage_options' )) { 
					 		$nb_issues = 10000;
					 	?>
						<!-- Content available for administrator. -->

					 <?php } else { 
					 		$nb_issues = 0;
					 ?>
							<!-- Content available for every members. -->


					 <?php } ?>

						<?php 
						$the_query = new WP_Query( array ('post_type' => 'bissue', 'orderby' => 'date', 'posts_per_page' => $nb_issues)); 
						while ($the_query->have_posts()) : $the_query->the_post(); ?>
							<div class="bissue-item">
								<div class="bissue-item-subtitle">								
									<a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a>
								</div>
							</div>
						<?php endwhile; wp_reset_postdata(); ?>
						<?php 
							remove_filter( 'posts_where', 'filter_where_1' );
							remove_filter( 'posts_where', 'filter_where_2' ); ?>

						<?php if (!$the_query->have_posts()) {?>
							<div class="bissue_no-issue">No issue available</div>
						<?php } ?>
					 
					 <?php 
						//echo do_shortcode('[s2Member-Profile /]');
					?>
				</div>

				<br class="clear">

			</div><!--#content-->
			
		</article>
		<!-- /Article -->
		
	<?php endwhile; ?>
	
	<?php else: ?>
	
		<!-- Article -->
		<article>
			
			<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
			
		</article>
		<!-- /Article -->
	
	<?php endif; ?>
	
	</section>
	<!-- /Section -->
	
<?php get_footer(); ?>