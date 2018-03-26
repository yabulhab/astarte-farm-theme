
<div class="blog-post">
	
	<p class="blog-post-date">
		<?php the_date(); ?>  
	</p>	

	<h2 class="blog-post-title">
		<a href="<?php the_permalink(); ?>">
			<?php the_title(); ?>
		</a>
	</h2>

	<p class="blog-post-content">
 		<?php the_content(); ?>
	</p>

	<p class="blog-post-author">
		<a href="#"><?php the_author(); ?></a>
	</p>



</div><!-- /.blog-post -->
