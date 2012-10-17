<?php /* Template Name: Subscription Page */ ?>

<?php get_header(); ?>
	
	<!-- Section -->
	<section class="subscription">
	
		<h1><?php //the_title(); ?></h1>
	
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
		<!-- Article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
			
			<h2 class="offer_title centrer"><em>be movement</em> with you everywhere.</h2>

			<div class="offer_abonnement">
			      <div class="formule clearfix">
			   		<span class="txt_grey txt12 caps block">One issue membership</span>
				      <h3 id="" class="txt18 grid_6  numerique"><em>be movement</em> on Web, iPad, iPhone</h3>
				   <p class="grid_5 omega clearfix mgt8">
				      <span class="grid_3 alpha prix centrer">5.99<sup class="txt15_120">USD only</sup><em class="block normal">for 1 issue</em></span>
				      <span class="grid_2 omega">
				      	<?php 

						echo do_shortcode('[s2Member-PayPal-Button level="1" ccaps="" desc="One Issue Member for be movement bookazine" ps="paypal" lc="" cc="USD" dg="0" ns="1" custom="be-movement.voilaah.com" ta="0" tp="0" tt="D" ra="5.99" rp="1" rt="L" rr="BN" rrt="" rra="1" image="'.  get_template_directory_uri() .'/img/subscribe.png" output="button" /]');
				      	
				      	?>
				         <!-- <a id="btn_membership_1" class="button" href="#" class="grid_2 alpha clearall btn_abo" onclick="return xt_click(this, 'C', lmd.context.page.xiti.xtn2, 'vpapier_clic_offre_integrale','N');">Subscribe</a><br> -->

				      </span>
				   </p>
				</div>
			     <div class="formule clearfix">
					   <span class="txt_grey txt12 caps block">One Year membership</span>
					      <h3 class="txt18 numerique grid_6 "><em>be movement</em> on Web, iPad, iPhone</h3>
					      <p class="grid_5 omega clearfix mgt8">
					      <span class="grid_3 alpha prix centrer">19.99<sup class="txt15_120">USD only</sup><em class="block normal">for 4 issues</em></span>
					      <span class="grid_2 omega">
					         <!-- <a id="btn_membership_2" class="button" href="#" class="grid_2 alpha btn_abo" onclick="return xt_click(this, 'C', lmd.context.page.xiti.xtn2, 'vpapier_clic_offre_numerique','N');">Subscribe</a><br> -->
					      <?php 

					      echo do_shortcode('[s2Member-PayPal-Button level="2" ccaps="" desc="Four Issues Member for be movement bookazine" ps="paypal" lc="" cc="USD" dg="0" ns="1" custom="be-movement.voilaah.com" ta="0" tp="0" tt="D" ra="19.99" rp="1" rt="L" rr="BN" rrt="" rra="1" image="'.  get_template_directory_uri() .'/img/subscribe.png" output="button" /]');

					      ?>

					      </span>
					   </p>
					</div>
			</div>

			<?php the_content(); ?>

			<br class="clear">
			
			
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
