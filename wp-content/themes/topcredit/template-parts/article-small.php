<div class="main__article">
    <?php $thumb_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail-size', true); ?>
    <a class="main__article-pic" href="<?php the_permalink(); ?>" style="background-image: url('<?php echo $thumb_url[0]; ?>')">
     </a>

    <div class="main__article-wrap">
        <?php $category = get_the_category(); ?>
    	<a class="main__article-title" href="<?php echo get_category_link($category[0]->cat_ID); ?>"><?php echo $category[0]->cat_name; ?></a>
    	<span class="main__article-views"><?php echo get_post_views(get_the_ID()); ?></span>
    </div>
    <a class="main__article-text" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    <a class="main__readmore" href="<?php the_permalink(); ?>">Читать
    	<span class="main__arrow-left">
            <svg class="svgarrow-left" width="14" height="8">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/svg-symbolsi5cc1m498vecdgec23xr.svg#arrow-left"></use>
            </svg>
		</span>
	</a>
</div>