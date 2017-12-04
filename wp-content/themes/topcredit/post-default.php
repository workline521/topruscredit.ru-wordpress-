


<?php 
$args = ['showposts' => 100, 'cat' => array( 1, 2, 3 ), 'meta_key' => 'minpercent', 'meta_key' => 'rating', 'meta_key' => 'maxsum', 'meta_key' => 'maxday'];
    $query = new WP_Query($args);
    if (array_key_exists("sortby", $_GET) === true)
    {
    $query = sortIt($_GET['sortby']);
    }
    $slash = '-';
    $before = 'до';
    while ( $query->have_posts()) : $query->the_post();  
		add_post_views(get_the_ID());

       


                            if(has_category(1)){
                                get_template_part('template-parts/category1-postpreview');
                            }
                            elseif(has_category(2)){
                                get_template_part('template-parts/category2-postpreview');
                            }
                            elseif(has_category(3)){
                                get_template_part('template-parts/category3-postpreview');
                            }

?>
<?php endwhile;
    wp_reset_postdata(); ?>

   



