

<?php 
	get_header();
	
?>
		<?php while ( have_posts() ) : the_post(); ?>
            <h1 class="main__title"><?php the_title(); ?></h1>

            <div class="main__items">
                <?php the_content();?>
            </div>
            <?php endwhile; ?>
        </div>

        <?php get_sidebar(); ?>
	
<?php get_footer(); ?>