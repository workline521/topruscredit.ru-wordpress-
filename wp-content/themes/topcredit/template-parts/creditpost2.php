<?php
    $slash = '-'; ?>
    
           
                <h1 class="inner-main__title"><?php the_title(); ?></h1>
                <div class="inner-main__content-wrap">
                    <div class="inner-main__company-block">
                        <?php $image2 = get_field('logo2'); ?>
                        <div class="inner-main__company-logo" style="background-image: url('<?php echo $image2['url']; ?>')">
                      
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

					<?php if(get_field('maxlimit')): ?> 
                        <div class="inner-main__item">
                            <div class="inner-main__svg-wrap">
                               <img src="<?php bloginfo("template_directory");?>/static/img/general/inner6.svg" alt="icon" />
                            </div>
                            <div class="inner-main__text-wrap"><span>Максимальный лимит</span>
                                <p><?php the_field('maxlimit'); ?> рублей</p>
                            </div>
                        </div>
					<?php endif; ?>

					<?php if(get_field('minpercent2')): ?> 
                        <div class="inner-main__item">
                            <div class="inner-main__svg-wrap">

                                <img src="<?php bloginfo("template_directory");?>/static/img/general/inner1.svg" alt="icon" />
                            </div>
                            <div class="inner-main__text-wrap"><span>Процентная ставка</span>
                                <p><?php the_field('minpercent'); ?> <?php if( get_field('maxpercent2')): echo $slash; endif; ?> <?php the_field('maxpercent2'); ?> %</p>
                            </div>
                        </div>
                    <?php endif; ?>

					<?php if(get_field('emissiontime')): ?>
                        <div class="inner-main__item">
                            <div class="inner-main__svg-wrap">

                                <img src="<?php bloginfo("template_directory");?>/static/img/general/inner2.svg" alt="icon" />
                            </div>
                            <div class="inner-main__text-wrap"><span>Срок выпуска</span>
                                <p><?php the_field('emissiontime'); ?></p>
                            </div>
                        </div>
					<?php endif; ?>

					<?php if(get_field('nopercenttime')): ?>
                        <div class="inner-main__item">
                            <div class="inner-main__svg-wrap">
                 
                                <img src="<?php bloginfo("template_directory");?>/static/img/general/inner5.svg" alt="icon" />
                            </div>
                            <div class="inner-main__text-wrap"><span>Беспроцентный период</span>
                                <p><?php the_field('maxday'); ?> <?php the_field('nopercentday'); ?></p>
                            </div>
                        </div>
					<?php endif; ?>

					<?php if(get_field('opencost')): ?>
                        <div class="inner-main__item">
                            <div class="inner-main__svg-wrap">
                            
                                <img src="<?php bloginfo("template_directory");?>/static/img/general/inner7.svg" alt="icon" />
                            </div>
                            <div class="inner-main__text-wrap"><span>Стоимость открытия</span>
                                <p><?php the_field('opencost'); ?> рублей</p>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if(get_field('annualcost')): ?>
                        <div class="inner-main__item">
                            <div class="inner-main__svg-wrap">
                              
                                <img src="<?php bloginfo("template_directory");?>/static/img/general/inner7.svg" alt="icon" />
                            </div>
                            <div class="inner-main__text-wrap"><span>Обслуживание в год</span>
                                <p><?php the_field('annualcost'); ?> рублей</p>
                            </div>
                        </div>
                    <?php endif; ?>
                            
                    </div>
                    <div class="inner-main__service-block">

                        
					<?php if(get_field('age')): ?>
                        <div class="inner-main__item">
                            <div class="inner-main__svg-wrap">
                               <img src="<?php bloginfo("template_directory");?>/static/img/general/inner3.svg" alt="icon" />
                            </div>
                            <div class="inner-main__text-wrap"><span>Возраст</span>
                                <p><?php the_field('age'); ?></p>
                            </div>
                        </div>
					<?php endif; ?>
                        
					<?php if(get_field('papers')): ?>
                        <div class="inner-main__item">
                            <div class="inner-main__svg-wrap">

                                <img src="<?php bloginfo("template_directory");?>/static/img/general/inner1.svg" alt="icon" />
                            </div>
                            <div class="inner-main__text-wrap"><span>Документы</span>
                                <p><?php the_field('papers'); ?></p>
                            </div>
                        </div>
					<?php endif; ?>
                        
					<?php if(get_field('reg')): ?>
                        <div class="inner-main__item">
                            <div class="inner-main__svg-wrap">
         
                                <img src="<?php bloginfo("template_directory");?>/static/img/general/inner1.svg" alt="icon" />
                            </div>
                            <div class="inner-main__text-wrap"><span>Регистрация</span>
                                <p><?php the_field('reg'); ?></p>
                            </div>
                        </div>
                    <?php endif; ?>

                        
					<?php if(get_field('incomeconfirm')): ?>
                        <div class="inner-main__item">
                            <div class="inner-main__svg-wrap">
                     
                                <img src="<?php bloginfo("template_directory");?>/static/img/general/inner3.svg" alt="icon" />
                            </div>
                            <div class="inner-main__text-wrap"><span>Подтверждение дохода</span>
                                <p><?php the_field('incomeconfirm'); ?></p>
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
                        
					<?php if(get_field('cashback')): ?>
                        <div class="inner-main__item">
                            <div class="inner-main__svg-wrap">
                               
                                <img src="<?php bloginfo("template_directory");?>/static/img/general/inner4.svg" alt="icon" />
                            </div>
                            <div class="inner-main__text-wrap"><span>Кэшбэк</span>
                                <p><?php the_field('cashback'); ?></p>
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
$args = ['showposts' => 4, 'cat' => array( 2 )];
    $query = new WP_Query($args);
    $slash = '-';
    $before = 'до';
    $image2 = get_field('logo2');
    while ( $query->have_posts()) : $query->the_post();  
        add_post_views(get_the_ID()); ?>
<div class="main__item">
                        <a class="main__item-pic" href="<?php the_permalink(); ?>" style="background-image: url('<?php echo $image2['url']; ?>')">
                      
                    </a>
                    <a class="main__company" href="<?php the_permalink(); ?>"><?php the_field('companyname2'); ?></a>
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
                        <div class="main__item-wrap"><span>Максимальный лимит</span>
                            <p><?php the_field('maxlimit'); ?> рублей</p>
                        </div>
                        <div class="main__item-wrap main__item-wrap2"><span>Процентная ставка</span>
                            <p><?php the_field('minpercent2'); ?> <?php if( get_field('maxpercent2')): echo $slash; endif; ?> <?php the_field('maxpercent2'); ?> %</p>
                        </div>
                    </div>
                    <div class="main__text-wrap main__text-wrap2">
                        <div class="main__item-wrap"><span>Срок выпуска</span>
                            <p><?php the_field('emissiontime'); ?></p>
                        </div>
                        <div class="main__item-wrap main__item-wrap2"><span>Беспроцентный период</span>
                            <p><?php the_field('nopercenttime'); ?> <?php the_field('nopercentday'); ?></p>
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