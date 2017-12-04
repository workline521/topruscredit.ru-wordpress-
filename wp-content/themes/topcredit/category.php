<?php get_header(); ?>
	
		
        <div class="main__items">
                
            <?php 
            if ( have_posts() ) : while ( have_posts() ) : the_post();
                    get_template_part('template-parts/article-small');
                endwhile; 

                wp_pagenavi();
            endif;
            ?>
        </div>


	</div>
	<?php get_template_part('sidebar-category'); ?>
<?php get_footer(); ?>