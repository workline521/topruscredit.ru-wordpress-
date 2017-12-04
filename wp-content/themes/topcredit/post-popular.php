<div class="main__news-heading">Популярные статьи</div>
<div class="main__news-wrap">

<?php 

    $args = ['showposts' => 3, 'meta_key' => 'post_views_count', 'orderby' => 'meta_value_num', 'category__not_in' => array( 1, 2, 3 )];
    $query = new WP_Query($args);

    while ( $query->have_posts()) : $query->the_post();  
		add_post_views(get_the_ID()); ?>

            <?php get_template_part('template-parts/article-small'); ?>

		<?php endwhile;
     wp_reset_postdata(); ?>
    

</div>