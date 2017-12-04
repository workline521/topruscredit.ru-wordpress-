<?php get_header(); ?>
	
	<div class="main__items">
		<?php 
			
            if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            	<?php get_template_part('template-parts/category1-postpreview'); ?>
                <?php endwhile; 
        
            endif; ?>
		</div>
		<?php wp_pagenavi(); ?>
	</div>

	<?php get_template_part('sidebar'); ?>
<?php get_footer(); ?>