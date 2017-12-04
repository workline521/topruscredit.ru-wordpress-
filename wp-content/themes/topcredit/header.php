<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/static/css/style.css">
		<title><?php echo wp_get_document_title(); ?></title>
		<?php wp_head(); ?>
		<link rel="shortcut icon" href="<?php bloginfo("template_directory");?>/favicon.ico" type="image/x-icon">
	   <script charset="UTF-8" src="//cdn.sendpulse.com/28edd3380a1c17cf65b137fe96516659/js/push/a3f94a7a10d73bc7313b4497183e1339_1.js" async></script>
       <script src="<?php echo get_template_directory_uri(); ?>/static/js/custom.js" async></script>
	</head>
	<body <?php body_class(); ?>>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter46718301 = new Ya.Metrika({
                    id:46718301,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/46718301" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
    <header class="header">
        <div class="header__top-wrap">
            <div class="header__menu-btn">Меню
                <div class="header__stick"></div>
            </div>
            <div class="header__city-wrap">
                <svg class="svgpin" width="16" height="22">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/svg-symbolsi5cc1m498vecdgec23xr.svg#pin"></use>
                </svg>
                <span class="header__city"></span>
                <span class="header__help-text">Мы помогли</span>
        
               <svg class="svgheart" width="19" height="17">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/svg-symbolsi5cc1m498vecdgec23xr.svg#heart"></use>
                </svg>
                <span class="header__like">
                    <?php 
                        $meta_key = 'post_views_count';
$all_downloads = $wpdb->get_var($wpdb->prepare("
                                  SELECT sum(meta_value) 
                                  FROM $wpdb->postmeta 
                                  WHERE meta_key = %s", $meta_key));


 echo round(23000 + $all_downloads / 100); ?>
                </span>
            </div>


            <div class="header__currency-wrap">
               
                <div class="header__usd-wrap" id="USD">
                    <span class="header__cash">USD</span>
                    <span class="header__currency">0</span>
                    <span class="arrow"></span>
                </div>
                <div class="header__euro-wrap" id="EUR">
                    <span class="header__cash">EUR</span>
                    <span class="header__currency">0</span>
                    <span class="arrow"></span>
                </div>
            </div>
        </div>
        <?php	wp_nav_menu(['container' => false, 'menu_class' => 'nav']); ?>
    </header>
    <main class="main">



        <?php if (is_front_page()) : ?>
            <div class="header__logo-wrap">
                <svg class="svglogo" width="321" height="75">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/svg-symbolsi5cc1m498vecdgec23xr.svg#logo"></use>
                </svg>
                <span class="header__text">Независимый рейтинг кредитов и микрозаймов России</span>
            </div>
        <?php else: ?>
            <a class="header__logo-wrap" href="<?php echo home_url(); ?>">
                <svg class="svglogo" width="321" height="75">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/svg-symbolsi5cc1m498vecdgec23xr.svg#logo"></use>
                </svg>
                <span class="header__text">Независимый рейтинг кредитов и микрозаймов России</span>
            </a>
        <?php endif; ?>

		<?php get_template_part('top-banner'); ?>


    <div class="main__content">
        <?php if ( !is_front_page()) : ?>
            <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                <?php if (function_exists('bcn_display')) bcn_display(); ?>
            </div>
        <?php else: ?>
           
        <?php endif; ?>