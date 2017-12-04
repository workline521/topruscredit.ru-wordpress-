            <?php	

            $slash = '-';
            $before = 'до';
            $image3 = get_field('logo3'); ?>
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
                            <p><?php the_field('maxsum'); ?> рублей</p>
                        </div>
                        <div class="main__item-wrap main__item-wrap2"><span>Процентная ставка</span>
                            <p><?php the_field('minpercent'); ?> %</p>
                        </div>
                    </div>
                    <div class="main__text-wrap main__text-wrap2">
                        <div class="main__item-wrap"><span>Срок</span>
                            <p><?php the_field('maxday'); ?> <?php the_field('credperiodtime'); ?></p>
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