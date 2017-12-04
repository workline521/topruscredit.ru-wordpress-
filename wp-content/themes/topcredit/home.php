<!--  Template Name: Home -->


<?php 
	get_header();
?>
            <?php $sort = $_SERVER['QUERY_STRING'];
              $activebtn =  preg_split('~=~', $sort);
             ?> 
            <h1 class="main__title">Независимый рейтинг онлайн-займов Рунета 2017 года </h1>
            <div class="main__sort-wrap">
                <p>Сортировать:</p>

                <div class="main__sort-wrap2 <?php echo($activebtn[1]); ?>">
                    <a class="main__filter main__filter1" href="?sortby=rating">По рейтингу</a>
                    <a class="main__filter main__filter2" href="?sortby=maxsum">По сумме</a>
                    <a class="main__filter main__filter3" href="?sortby=maxday">По сроку</a>
                    <a class="main__filter main__filter4" href="?sortby=minpercent">По процентной ставке</a>
                </div>
              
            </div>
            <div class="main__items">
                <?php get_template_part('post-default'); ?>
            </div>
            <?php the_content();?>
        </div>
        <?php get_sidebar(); ?>
	
<?php get_footer(); ?>