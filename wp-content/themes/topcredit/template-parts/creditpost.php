<?php
    $slash = '-'; ?>
    
           
                <h1 class="inner-main__title"><?php the_title(); ?></h1>
                
                <div class="inner-main__content-wrap">
                    <div class="inner-main__company-block">
                        <?php $image = get_field('logo'); ?>
                        <div class="inner-main__company-logo" style="background-image: url('<?php echo $image['url']; ?>')">
                      
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
                    <?php if(get_field('innersum')): ?>
                        <div class="inner-main__item">
                            <div class="inner-main__svg-wrap">
                               <img src="<?php bloginfo("template_directory");?>/static/img/general/inner6.svg" alt="icon" />
                            </div>
                            <div class="inner-main__text-wrap"><span>Сумма:</span>
                                <p><?php the_field('innersum'); ?></p>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if(get_field('credit-period')): ?>
                        <div class="inner-main__item">
                            <div class="inner-main__svg-wrap">

                                <img src="<?php bloginfo("template_directory");?>/static/img/general/inner1.svg" alt="icon" />
                            </div>
                            <div class="inner-main__text-wrap"><span>Срок:</span>
                                <p><?php the_field('credit-period'); ?></p>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if(get_field('minpercent')): ?>  
                        <div class="inner-main__item">
                            <div class="inner-main__svg-wrap">

                                <img src="<?php bloginfo("template_directory");?>/static/img/general/inner2.svg" alt="icon" />
                            </div>
                            <div class="inner-main__text-wrap"><span>Процентная ставка (%):</span>
                                <p><?php the_field('minpercent'); ?> <?php if( get_field('maxpercent') ): echo $slash; endif; ?> <?php the_field('maxpercent'); ?></p>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if(get_field('age')): ?>
                        <div class="inner-main__item">
                            <div class="inner-main__svg-wrap">
                 
                                <img src="<?php bloginfo("template_directory");?>/static/img/general/inner5.svg" alt="icon" />
                            </div>
                            <div class="inner-main__text-wrap"><span>Возраст:</span>
                                <p><?php the_field('age'); ?></p>
                            </div>
                        </div>
                     <?php endif; ?> 


                    <?php if(get_field('income-source')): ?>
                        <div class="inner-main__item">
                            <div class="inner-main__svg-wrap">
                            
                                <img src="<?php bloginfo("template_directory");?>/static/img/general/inner7.svg" alt="icon" />
                            </div>
                            <div class="inner-main__text-wrap"><span>Способ выплаты:</span>
                                <p><?php the_field('income-source'); ?></p>
                            </div>
                        </div>
                    <?php endif; ?>  
                    <?php if(get_field('payment')): ?>
                        <div class="inner-main__item">
                            <div class="inner-main__svg-wrap">
                              
                                <img src="<?php bloginfo("template_directory");?>/static/img/general/inner7.svg" alt="icon" />
                            </div>
                            <div class="inner-main__text-wrap"><span>Способ оплаты:</span>
                                <p><?php the_field('payment'); ?></p>
                            </div>
                        </div>
                    <?php endif; ?>      
                    </div>
                    <div class="inner-main__service-block">

                        
                    <?php if(get_field('document')): ?>
                        <div class="inner-main__item">
                            <div class="inner-main__svg-wrap">
                               <img src="<?php bloginfo("template_directory");?>/static/img/general/inner3.svg" alt="icon" />
                            </div>
                            <div class="inner-main__text-wrap"><span>Документы:</span>
                                <p><?php the_field('document'); ?></p>
                            </div>
                        </div>
                    <?php endif; ?>
                        
                    <?php if(get_field('applytime')): ?>
                        <div class="inner-main__item">
                            <div class="inner-main__svg-wrap">

                                <img src="<?php bloginfo("template_directory");?>/static/img/general/inner1.svg" alt="icon" />
                            </div>
                            <div class="inner-main__text-wrap"><span>Скорость рассмотрения заявки:</span>
                                <p><?php the_field('applytime'); ?> <?php the_field('timeperiod'); ?></p>
                            </div>
                        </div>
                    <?php endif; ?>
                        
                    <?php if(get_field('paymentspeed')): ?>
                        <div class="inner-main__item">
                            <div class="inner-main__svg-wrap">
         
                                <img src="<?php bloginfo("template_directory");?>/static/img/general/inner1.svg" alt="icon" />
                            </div>
                            <div class="inner-main__text-wrap"><span>Скорость выплаты:</span>
                                <p><?php the_field('paymentspeed'); ?></p>
                            </div>
                        </div>
                    <?php endif; ?>
                        
                    <?php if(get_field('identification')): ?>
                        <div class="inner-main__item">
                            <div class="inner-main__svg-wrap">
                     
                                <img src="<?php bloginfo("template_directory");?>/static/img/general/inner3.svg" alt="icon" />
                            </div>
                            <div class="inner-main__text-wrap"><span>Идентификация:</span>
                                <p><?php the_field('identification'); ?></p>
                            </div>
                        </div>
                    <?php endif; ?>
                        
                    <?php if(get_field('work-hours')): ?>
                        <div class="inner-main__item">
                            <div class="inner-main__svg-wrap">
                               
                                <img src="<?php bloginfo("template_directory");?>/static/img/general/inner1.svg" alt="icon" />
                            </div>
                            <div class="inner-main__text-wrap"><span>График работы:</span>
                                <p><?php the_field('work-hours'); ?></p>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if( get_field('history') ): ?>
                           <div class="inner-main__item">
                                <div class="inner-main__svg-wrap">
                                   
                                    <img src="<?php bloginfo("template_directory");?>/static/img/general/inner4.svg" alt="icon" />
                                </div>
                                <div class="inner-main__text-wrap"><span>Плохая кредитная история:</span>
                                    <p><?php the_field('history'); ?></p>
                                </div>
                            </div>
                    <?php endif; ?>


                        <?php if(get_field('prolongation')): ?> 
                            <div class="inner-main__item">
                                <div class="inner-main__svg-wrap">
                                    
                                    <img src="<?php bloginfo("template_directory");?>/static/img/general/inner4.svg" alt="icon" />
                                </div>
                                <div class="inner-main__text-wrap"><span>Продление:</span>
                                    <p><?php the_field('prolongation'); ?></p>
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
    $args = ['showposts' => 4, 'cat' => array( 1 )];
    $query = new WP_Query($args);
    $slash = '-';
    $before = 'до';
    while ( $query->have_posts()) : $query->the_post();  
        add_post_views(get_the_ID()); ?>
    <div class="main__item">
        <?php $image = get_field('logo'); ?>
        <a class="main__item-pic" href="<?php the_permalink(); ?>" style="background-image: url('<?php echo $image['url']; ?>')"></a>
                    <a class="main__company" href="<?php the_permalink(); ?>"><?php the_field('companyname'); ?></a>
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
                        <div class="main__item-wrap"><span>На срок</span>
                            <p><?php the_field('minday'); ?> <?php if( get_field('maxday')): echo $slash; endif; ?> <?php the_field('maxday'); ?> <?php the_field('days'); ?></p>
                        </div>
                        <div class="main__item-wrap main__item-wrap2"><span>Ставка в день</span>
                            <p><?php the_field('minpercent'); ?> %</p>
                        </div>
                    </div>
                    <div class="main__text-wrap main__text-wrap2">
                        <div class="main__item-wrap"><span>Сумма</span>
                            <p>от <?php the_field('minsum'); ?> <?php if( get_field('maxsum')): echo $before; endif; ?> <?php the_field('maxsum'); ?></p>
                        </div>
                        <div class="main__item-wrap main__item-wrap2"><span>Рассмотрение</span>
                            <p><?php the_field('applytime'); ?> <?php the_field('timeperiod'); ?></p>
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
