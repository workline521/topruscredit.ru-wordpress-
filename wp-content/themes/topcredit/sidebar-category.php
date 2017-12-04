<div class="main__aside">
			<?php 
                $category_id = get_query_var('cat');
                $categories = get_categories(['parent' => $cat]);
            ?>
            <?php if ($categories) : ?>
                <ul class="categories">
                    <?php foreach ($categories as $category) : ?>
                        <li><a href="<?php echo get_category_link($category->cat_ID); ?>"><?php echo $category->name; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <div class="main__form-wrap"><span class="main__form-text">Поиск МФК</span>
            	<?php get_search_form(); ?>
            </div>

            <?php get_template_part('sidebar-rating'); ?>
         	<div class="sidebar-picture">
                <a target="_blank" rel="nofollow" href="https://trkleads.ru/click/37af25865347c3fdf7f3d40102a82ba6">
                    <img width="300" height="600" border="0" src="https://trkleads.ru/impression/9ca9efdb355bf795ad776e61c0be564b" alt="Platiza.ru [micro] [sale_new]" />
                </a>
            </div>


</div>