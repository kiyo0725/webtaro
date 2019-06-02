<?php get_header(); ?>
<!-- infoSection -->
<section class="infoSection">
    <!-- inner -->
    <div class="inner">
        <!-- infoTitle -->
        <div class="infoTitle">
            <h2>事業内容</h2>
        </div>
        <!-- infoWrap -->
        <div class="infoWrap">
            <!-- infoCard -->
            <div class="infoCard">
                <figure>
                    <a href="<?php the_permalink(155); ?>"><img src="<?php echo get_template_directory_uri(); ?>/./img/businessNav_2.jpg" alt="ホームページ制作"></a>
                </figure>
                <div class="infoText">
                    <a href="<?php the_permalink(155); ?>">
                        <h3>ホームページ制作</h3>
                    </a>
                </div>
            </div>
            <div class="infoCard">
                <figure>
                    <a href="<?php the_permalink(158); ?>"><img src="<?php echo get_template_directory_uri(); ?>/./img/businessNav_3.jpg" alt="アプリ開発"></a>
                </figure>
                <div class="infoText">
                    <a href="<?php the_permalink(158); ?>">
                        <h3>アプリ開発</h3>
                    </a>
                </div>
            </div>
            <div class="infoCard">
                <figure>
                    <a href="<?php the_permalink(160); ?>"><img src="<?php echo get_template_directory_uri(); ?>/./img/businessNav_4.jpg" alt="webシステム開発"></a>
                </figure>
                <div class="infoText">
                    <a href="<?php the_permalink(160); ?>">
                        <h3>webシステム開発</h3>
                    </a>
                </div>
            </div>
            <div class="infoCard">
                <figure>
                    <a href="<?php the_permalink(163); ?>"><img src="<?php echo get_template_directory_uri(); ?>/./img/businessNav_5.jpg" alt="広告デザイン"></a>
                </figure>
                <div class="infoText">
                    <a href="<?php the_permalink(163); ?>">
                        <h3>広告デザイン</h3>
                    </a>
                </div>
            </div><!-- infoCard -->
        </div><!-- infoWrap -->
    </div><!-- inner -->
</section><!-- infoSection -->

<?php get_footer(); ?>
