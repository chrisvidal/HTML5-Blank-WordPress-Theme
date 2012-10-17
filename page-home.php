<?php /* Template Name: Home Page */ ?>

<?php get_header(); ?>
	
	<!-- Section -->
	<section class="home">
	
		<h1><?php //the_title(); ?></h1>
	
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
		<!-- Article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
			<?php echo get_the_content(); ?>

			<div id="hmpg-bicyle" class="animate-translate-left">
				<div id="hmpg-bicyle-frame">
					<img src="<?php echo get_template_directory_uri(); ?>/img/bicycle_frame.png" alt="" title="bicycle" width="176" height="391" class="" />
				</div>
				<div id="hmpg-bicyle-big" class="animate-wheel-rotating-normal">
					<img src="<?php echo get_template_directory_uri(); ?>/img/big_wheel.png" alt="" title="bicycle" width="186" height="182" class="" />
				</div>
				<div id="hmpg-bicyle-small" class="animate-wheel-rotating-fast">
					<img src="<?php echo get_template_directory_uri(); ?>/img/small_wheel.png" alt="" title="bicycle" width="71" height="71" class="" />
				</div>				
			</div>

			<div id="issue">
				<div class="inner">
					<p>be movement<br> BOOKAZINE<br/> ISSUE 1</p>
					<br/>
					<a href="<?php echo get_page_link($bm_pages['bookazine']); ?>" class="button">FIND OUT MORE</a>
				</div>
			</div>

			<br class="clear">
			
			<!-- <div class="alignright" style="margin: -50px 0 0 0; transform-origin:0% -200%; -webkit-transform-origin:0% -200%; transform:rotate(-90deg);-ms-transform:rotate(7deg); -moz-transform:rotate(7deg); -webkit-transform:rotate(-90deg); -o-transform:rotate(7deg); "> 
				<a href="contact">Contact Us</a> </div> -->
		
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