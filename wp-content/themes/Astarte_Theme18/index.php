
<?php get_header(); ?>

	<div class="row blog-row">

		<!-- sidebar goes here -->
			<?php get_sidebar(); ?>

		<div class="col-sm-10 blog-main">

		     <?php 
		        if ( have_posts() ) : while ( have_posts() ) : the_post(); 
		          get_template_part( 'content', get_post_format() ); 
		        endwhile; endif; 
		     ?>

		</div> <!-- /.blog-main -->


		
	</div> <!-- /.row -->

<?php get_footer(); ?>