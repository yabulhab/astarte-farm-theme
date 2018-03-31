<?php /* Template Name: jobs */ ?>


<?php get_header(); ?>

	<div class="row blog-row">

		<div class="col-sm-12 blog-main jobs-main">

		     <?php 
		        if ( have_posts() ) : while ( have_posts() ) : the_post(); 
		          get_template_part( 'content', get_post_format() ); 
		        endwhile; endif; 
		     ?>

		</div> <!-- /.blog-main -->
		
	</div> <!-- /.row -->

<?php get_footer(); ?>