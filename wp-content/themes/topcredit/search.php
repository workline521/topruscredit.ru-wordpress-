<?php get_header(); ?>
	
		<div class="page-category">Результаты поиска: <span class="primary"><?php echo get_search_query(); ?></span></div>
		<div class="search-result">Найдено : <?php  global $wp_query; echo $wp_query->found_posts; ?></div>
		<div class="main__items">
		<?php 
		 $slash = '-';
    	$before = 'до';
			if ( have_posts() ) : while ( have_posts() ) : the_post();?>

				<?php   if(has_category(array(1, 2, 3))){

                            if(has_category(1)){
                                get_template_part('template-parts/category1-postpreview');
                            }
                            elseif(has_category(2)){
                                get_template_part('template-parts/category2-postpreview');
                            }
                            elseif(has_category(3)){
                                get_template_part('template-parts/category3-postpreview');
                            }

                        }              
                ?>


			<?php endwhile; endif;
		?>
	</div>
<?php get_footer(); ?>
