<?php /* Template Name: team */ ?>


<?php get_header(); ?>

	<div class="row">

		<div class="info-block-container team">

			<?php $catquery = new WP_Query( 'cat=3' ); ?>

		     <?php 
		        if ( have_posts() ) : while($catquery->have_posts()) : $catquery->the_post(); 
		          get_template_part( 'content', get_post_format() ); 
		        endwhile; endif; 
		     ?>

		</div> <!-- /.blog-main -->
		
	</div> <!-- /.row -->
	
	<?php team();?>

<?php get_footer(); ?>