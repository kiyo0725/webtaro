<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>
        <?php
    if( !is_home() ){
        wp_title("|","true","right");
        }
        bloginfo('name');
        ?>
    </title>
    <meta name="keywords" content="浦和のホームページ・アプリ制作会社">
    <meta name="description" content="あなたの会社・お店にピッタリのホームページをご提案致します。">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/./img/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/./img/touchIcon.png" sizes="180x180">
    <link rel="android-touch-icon" href="<?php echo get_template_directory_uri(); ?>/./img/touchIcon.png" sizes="192x192">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.1/css/drawer.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <?php wp_head(); ?>
    <?php

    if(is_home()):
        wp_enqueue_script('alert', get_template_directory_uri() . '/js/alert.js');
    endif;
    wp_enqueue_script('jQuery','https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js');
    wp_enqueue_script('iscroll','https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js');
    wp_enqueue_script('drawer','https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.1/js/drawer.min.js');
    wp_enqueue_script('bootstrap','https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js');
    wp_enqueue_script( 'yubinbango', 'https://yubinbango.github.io/yubinbango/yubinbango.js', array(), null, true );
    wp_enqueue_script('js', get_template_directory_uri() . '/js/script.js');

        ?>
</head>

<body class="drawer drawer--left">
    <header>
        <!-- headerInner -->
        <div class="headerInner">
            <!-- hLogo -->
            <a href="<?php echo home_url(); ?>">
                <h1 class="hName"><img src="<?php echo get_template_directory_uri(); ?>/./img/hLogo.png" alt="ヘッダーロゴ">
                </h1>
            </a>
            <!-- hNav -->
            <nav class="hNav">
                <ul>
                    <li class="hNavItem" id="infoToggle">
                        <a href="<?php the_permalink(109); ?>">企業情報</a>
                    </li>
                    <li class="hNavItem" id="businessToggle"><a href="<?php the_permalink(117); ?>">事業内容</a></li>
                    <li class="hNavItem" id="newsToggle"><a href="<?php echo get_category_link(9); ?>">ニュース</a></li>
                    <li class="hNavItem"><a href="<?php the_permalink(7); ?>">お問い合わせ</a></li>
                    <?php get_search_form(); ?>

                </ul>
                <div class="slideNav" id="infoNav">
                    <ul>
                        <li>
                            <a href="<?php the_permalink(109); ?>">COMPANY</a>
                        </li>
                        <li>
                            <figure>
                                <a href="<?php the_permalink(105); ?>">会社概要</a>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <a href="<?php the_permalink(111); ?>">アクセス</a>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <a href="<?php the_permalink(113); ?>">企業理念</a>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <a href="<?php the_permalink(115); ?>">沿革</a>
                            </figure>
                        </li>
                    </ul>
                </div>
                <div class="slideNav" id="businessNav">
                    <ul>
                        <li>
                            <a href="<?php the_permalink(117); ?>">BUSINESS</a>
                        </li>
                        <li>
                            <figure>
                                <a href="<?php the_permalink(155); ?>">ホームページ制作</a>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <a href="<?php the_permalink(158); ?>">アプリ開発</a>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <a href="<?php the_permalink(160); ?>">webシステム</a>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <a href="<?php the_permalink(163); ?>">広告デザイン</a>
                            </figure>
                        </li>
                    </ul>
                </div><!-- slideNav -->
            </nav><!-- hNav -->
        </div><!-- headerInner -->
        <!-- drawerInner -->
        <div class="drawerInner">
            <!-- hLogo -->
            <h1 class="hName"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/./img/hLogo.png" alt="ヘッダーロゴ">
                </a></h1>
            <button type="button" class="drawer-toggle drawer-hamburger">
                <span class="drawer-hamburger-icon"></span>
            </button><!-- drawer-toggle -->
            <div class="searchButton">
                <i class="fas fa-search"></i>
            </div>
            <div class="closeButton">
                <i class="fas fa-times"></i>
            </div>
            <div class="searchArea">
                <?php get_search_form(); ?>
            </div>

            <!-- drawer-nav -->
            <nav class="drawer-nav" role="navigation">
                <!-- drawer-menu -->
                <ul class="drawer-menu">
                    <li><a class="drawer-menu-item" href="<?php echo home_url(); ?>">ホーム</a></li>
                    <li class="drawer-dropdown"><a class="drawer-menu-item" href="#" data-toggle="dropdown">企業情報<span class="drawer-caret"></span></a>
                        <ul class="drawer-dropdown-menu">
                            <li><a class="drawer-dropdown-menu-item" href="<?php the_permalink(105); ?>">会社概要</a></li>
                            <li><a class="drawer-dropdown-menu-item" href="<?php the_permalink(111); ?>">アクセス</a></li>
                            <li><a class="drawer-dropdown-menu-item" href="<?php the_permalink(113); ?>">企業理念</a></li>
                            <li><a class="drawer-dropdown-menu-item" href="<?php the_permalink(115); ?>">沿革</a></li>
                        </ul>
                    </li>
                    <li class="drawer-dropdown"><a class="drawer-menu-item" href="#" data-toggle="dropdown">事業内容<span class="drawer-caret"></span></a>
                        <ul class="drawer-dropdown-menu">
                            <li><a class="drawer-dropdown-menu-item" href="<?php the_permalink(155); ?>">ホームページ制作</a></li>
                            <li><a class="drawer-dropdown-menu-item" href="<?php the_permalink(158); ?>">アプリ開発</a></li>
                            <li><a class="drawer-dropdown-menu-item" href="<?php the_permalink(160); ?>">Webシステム開発</a></li>
                            <li><a class="drawer-dropdown-menu-item" href="<?php the_permalink(163); ?>">広告デザイン</a></li>
                        </ul>
                    </li>
                    <li><a class="drawer-menu-item" href="<?php echo get_category_link(9); ?>">ニュース</a></li>
                    <li><a class="drawer-menu-item" href="<?php the_permalink(7); ?>">お問い合わせ</a></li>
                </ul><!-- drawer-menu -->
            </nav><!-- drawer-nav -->
        </div><!-- drawerInner -->
    </header>

    <main>

        <?php if (!is_home()): ?>
        <div class="inner">
            <div class="breadcrumbs">
                <?php
        if ( function_exists( 'bcn_display' ) ) {
            bcn_display();
        }
    ?>
            </div>
        </div>
        <?php endif; ?>
        <div class="masking"></div>
