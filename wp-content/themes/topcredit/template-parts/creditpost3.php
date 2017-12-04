<?php
    $slash = '-'; ?>
    
           
                <h1 class="inner-main__title"><?php the_title(); ?></h1>
                <div class="inner-main__content-wrap">
                    <div class="inner-main__company-block">
                        <?php $image3 = get_field('logo3'); ?>
                        <div class="inner-main__company-logo" style="background-image: url('<?php echo $image3['url']; ?>')">
                      
                        </div>
        
                        <div class="main__ratio-wrap">
                            <div class="main__stars-wrap star<?php the_field('rating'); ?>">
                                <span class="main__star"></span>
                                <span class="main__star"></span>
                                <span class="main__star"></span>
                                <span class="main__star"></span>
                                <span class="main__star"></span>
                            </div>
                            <div class="main__reviews-wrap">
                                <div class="main__reviews">
                                    <span class="main__reviews-count">Отзывов: <?php echo get_comments_number( $post_id ); ?></span>
                                    <span class="main__reviews-text">(
                                        <span class="main__estimation"><?php the_field('rating'); ?> из 5</span>)
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="inner-main__outer-link" href="<?php the_field('externallink'); ?>" target="_blank" rel="nofollow">
                        <span>Оформить</span>
                    </a>
                </div>




                <div class="inner-main__service-block-wrap">
                    <div class="inner-main__service-block">

                    <?php if(get_field('creditsum')): ?>
                        <div class="inner-main__item">
                            <div class="inner-main__svg-wrap">
                               <img src="<?php bloginfo("template_directory");?>/static/img/general/inner6.svg" alt="icon" />
                            </div>
                            <div class="inner-main__text-wrap"><span>Сумма:</span>
                                <p><?php the_field('creditsum'); ?> рублей</p>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if(get_field('credperiod')): ?>
                        <div class="inner-main__item">
                            <div class="inner-main__svg-wrap">

                                <img src="<?php bloginfo("template_directory");?>/static/img/general/inner1.svg" alt="icon" />
                            </div>
                            <div class="inner-main__text-wrap"><span>Срок:</span>
                                <p><?php the_field('credperiod'); ?> <?php the_field('credperiodtime'); ?></p>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if(get_field('percentage')): ?>
                        <div class="inner-main__item">
                            <div class="inner-main__svg-wrap">

                                <img src="<?php bloginfo("template_directory");?>/static/img/general/inner2.svg" alt="icon" />
                            </div>
                            <div class="inner-main__text-wrap"><span>Процентная ставка (%):</span>
                                <p><?php the_field('percentage'); ?> %</p>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if(get_field('applytime2')): ?>
                        <div class="inner-main__item">
                            <div class="inner-main__svg-wrap">
                 
                                <img src="<?php bloginfo("template_directory");?>/static/img/general/inner5.svg" alt="icon" />
                            </div>
                            <div class="inner-main__text-wrap"><span>Рассмотрение заявки</span>
                                <p><?php the_field('applytime2'); ?></p>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if(get_field('age3')): ?>
                        <div class="inner-main__item">
                            <div class="inner-main__svg-wrap">
                            
                                <img src="<?php bloginfo("template_directory");?>/static/img/general/inner7.svg" alt="icon" />
                            </div>
                            <div class="inner-main__text-wrap"><span>Возраст</span>
                                <p><?php the_field('age3'); ?></p>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if(get_field('papers2')): ?>
                        <div class="inner-main__item">
                            <div class="inner-main__svg-wrap">
                              
                                <img src="<?php bloginfo("template_directory");?>/static/img/general/inner7.svg" alt="icon" />
                            </div>
                            <div class="inner-main__text-wrap"><span>Документы</span>
                                <p><?php the_field('papers2'); ?></p>
                            </div>
                        </div>
                    <?php endif; ?>         
                    </div>
                    <div class="inner-main__service-block">

                        
                    <?php if(get_field('incomeconfirm2')): ?>
                        <div class="inner-main__item">
                            <div class="inner-main__svg-wrap">
                               <img src="<?php bloginfo("template_directory");?>/static/img/general/inner3.svg" alt="icon" />
                            </div>
                            <div class="inner-main__text-wrap"><span>Подтверждение дохода</span>
                                <p><?php the_field('incomeconfirm2'); ?></p>
                            </div>
                        </div>
                    <?php endif; ?>
                        
                    <?php if(get_field('workexp')): ?>
                        <div class="inner-main__item">
                            <div class="inner-main__svg-wrap">

                                <img src="<?php bloginfo("template_directory");?>/static/img/general/inner1.svg" alt="icon" />
                            </div>
                            <div class="inner-main__text-wrap"><span>Трудовой стаж</span>
                                <p><?php the_field('workexp'); ?></p>
                            </div>
                        </div>
                    <?php endif; ?>
                        
                    <?php if(get_field('pledge')): ?>
                        <div class="inner-main__item">
                            <div class="inner-main__svg-wrap">
         
                                <img src="<?php bloginfo("template_directory");?>/static/img/general/inner1.svg" alt="icon" />
                            </div>
                            <div class="inner-main__text-wrap"><span>Залог</span>
                                <p><?php the_field('pledge'); ?></p>
                            </div>
                        </div>
                    <?php endif; ?>
                        
                    <?php if(get_field('guarantee')): ?>
                        <div class="inner-main__item">
                            <div class="inner-main__svg-wrap">
                     
                                <img src="<?php bloginfo("template_directory");?>/static/img/general/inner3.svg" alt="icon" />
                            </div>
                            <div class="inner-main__text-wrap"><span>Поручительство</span>
                                <p><?php the_field('guarantee'); ?></p>
                            </div>
                        </div>
                    <?php endif; ?>
                        
                    <?php if(get_field('reg2')): ?>
                        <div class="inner-main__item">
                            <div class="inner-main__svg-wrap">
                               
                                <img src="<?php bloginfo("template_directory");?>/static/img/general/inner1.svg" alt="icon" />
                            </div>
                            <div class="inner-main__text-wrap"><span>Регистрация</span>
                                <p><?php the_field('reg2'); ?></p>
                            </div>
                        </div>
                    <?php endif; ?>
                        



      

                    </div>
                </div>







                <div class="article__content">
                    <?php the_content(); ?>
                </div>
                <?php comments_template(); ?>
                <div class="main__title">Назависимый рейтинг онлайн-займов Рунета 2017 года</div>
                <div class="main__items">
                <?php 
$args = ['showposts' => 4, 'cat' => array( 3 )];
    $query = new WP_Query($args);
    $slash = '-';
    $before = 'до';
    $image3 = get_field('logo3');
    while ( $query->have_posts()) : $query->the_post();  
        add_post_views(get_the_ID()); ?>
    <div class="main__item">
                        <a class="main__item-pic" href="<?php the_permalink(); ?>" style="background-image: url('<?php echo $image3['url']; ?>')">
                      
                    </a>
                    <a class="main__company" href="<?php the_permalink(); ?>"><?php the_field('companyname3'); ?></a>
                    <div class="main__ratio-wrap">
                            <div class="main__stars-wrap star<?php the_field('rating'); ?>">
                                <span class="main__star"></span>
                                <span class="main__star"></span>
                                <span class="main__star"></span>
                                <span class="main__star"></span>
                                <span class="main__star"></span>
                            </div>
                            <div class="main__reviews-wrap">
                                <div class="main__reviews">
                                    <span class="main__reviews-count">Отзывов: <?php echo get_comments_number( $post_id ); ?></span>
                                    <span class="main__reviews-text">(
                                        <span class="main__estimation"><?php the_field('rating'); ?> из 5</span>)
                                    </span>
                                </div>
                            </div>
                        </div>
                    <div class="main__text-wrap">
                        <div class="main__item-wrap"><span>Сумма</span>
                            <p><?php the_field('creditsum'); ?> рублей</p>
                        </div>
                        <div class="main__item-wrap main__item-wrap2"><span>Процентная ставка</span>
                            <p><?php the_field('percentage'); ?> %</p>
                        </div>
                    </div>
                    <div class="main__text-wrap main__text-wrap2">
                        <div class="main__item-wrap"><span>Срок</span>
                            <p><?php the_field('credperiod'); ?> <?php the_field('credperiodtime'); ?></p>
                        </div>
                        <div class="main__item-wrap main__item-wrap2"><span>Рассмотрение заявки</span>
                            <p><?php the_field('applytime2'); ?></p>
                        </div>
                    </div>
                    <a class="main__order" href="<?php the_field('externallink'); ?>" target="_blank" rel="nofollow">
                        <svg class="svglock" width="13" height="18">
                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/svg-symbolsi5cc1m498vecdgec23xr.svg#lock"></use>
                        </svg>
                        <span class="main__order-text">Оформить</span>
                    </a>
                    <a class="main__readmore" href="<?php the_permalink(); ?>">Подробнее
                        <span class="main__arrow-left">
                            <svg class="svgarrow-left" width="14" height="8">
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/svg-symbolsi5cc1m498vecdgec23xr.svg#arrow-left"></use>
                            </svg>
                        </span>
                    </a>
                </div>
<?php endwhile;
    wp_reset_postdata(); ?>
</div>