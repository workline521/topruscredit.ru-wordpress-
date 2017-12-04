<?php
	setcookie('post_id', get_the_ID(), time() + 3600*2, '/');
	get_header(); 
?>
    
                <?php   if(has_category(array(1, 2, 3))){
                           

                            if(has_category(1)){
                                get_template_part('template-parts/creditpost');
                            }
                            elseif(has_category(2)){
                                get_template_part('template-parts/creditpost2');
                            }
                            elseif(has_category(3)){
                                get_template_part('template-parts/creditpost3');
                            }

                        } else { ?>

                            <h1 class="inner-main__title"><?php the_title(); ?></h1>
                            
                            <div class="article__content">
                                <?php the_content(); ?>
                            </div>


                       <?php } ?>
            

                        
                      
            
            </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>