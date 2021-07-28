<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.1.4.min.js"></script>
        <?php wp_head(); ?>
    </head>
    <body>
        <!-- PCヘッダー -->
        <header class="pc">
            <!-- ツールバーの高さを確保 -->
            <?php if( is_user_logged_in() ) : ?>
                <style type="text/css">header {margin-top: 32px; z-index: 10;}</style>
            <?php endif; ?>
            <div class="inner">
                <ul class="menuSection">
                    <li><a class="menu" href="<?php echo home_url() ?>">Top</a></li>
                    <li><a class="menu" href="<?php the_permalink(); ?>/gallery">Gallery</a></li>
                </ul>
            </div>
            <!-- <div class="outer">
                <ul class="snsSection">
                    <li><a class="sns" href="https://www.instagram.com/twentytwofour_mz/" target=”_blank”><i class="fab fa-instagram"></i></a></li>
                    <li><a class="sns" href="https://www.facebook.com/twentytwofour.jp/" target=”_blank”><i class="fab fa-facebook-square"></i></a></li>
                    <li><a class="sns" href="https://www.youtube.com/channel/UCBV1CaGyPLNZpNXlkbo04yQ" target=”_blank”><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div> -->
        </header>

        <!-- スマホヘッダー -->
        <header class="mb">
            <div class="hamburger">
                <span></span>
                <span></span>
            </div>
                <nav class="globalMenuSp">
                    <ul class="menu">
                        <li><a href="<?php echo home_url() ?>">Top</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="<?php the_permalink(); ?>/online-shop">Online Shop</a></li>
                    </ul>
                    <ul class="sns">
                        <li><a href="https://www.instagram.com/twentytwofour_mz/" target=”_blank”><i class="fab fa-instagram"></i></a></li>
                        <li><a href="https://www.facebook.com/twentytwofour.jp/" target=”_blank”><i class="fab fa-facebook-square"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UCBV1CaGyPLNZpNXlkbo04yQ" target=”_blank”><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </nav>
        </header>