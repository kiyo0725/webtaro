<?php get_header(); ?>
<!-- infoSection -->
<section class="infoSection">
    <!-- inner -->
    <div class="inner">
        <!-- infoTitle -->
        <div class="infoTitle">
            <h2>企業情報</h2>
        </div>
        <!-- infoWrap -->
        <div class="infoWrap">
            <!-- infoCard -->
            <div class="infoCard">
                <figure>
                    <a href="<?php the_permalink(105); ?>"><img src="<?php echo get_template_directory_uri(); ?>/./img/infoNav_2.jpg" alt="会社概要"></a>
                </figure>
                <div class="infoText">
                    <a href="<?php the_permalink(105); ?>">
                        <h3>会社概要</h3>
                    </a>
                </div>
            </div>
            <div class="infoCard">
                <figure>
                    <a href="<?php the_permalink(111); ?>"><img src="<?php echo get_template_directory_uri(); ?>/./img/infoNav_3.jpg" alt="アクセス"></a>
                </figure>
                <div class="infoText">
                    <a href="<?php the_permalink(111); ?>">
                        <h3>アクセス</h3>
                    </a>
                </div>
            </div>
            <div class="infoCard">
                <figure>
                    <a href="<?php the_permalink(113); ?>"><img src="<?php echo get_template_directory_uri(); ?>/./img/infoNav_4.jpg" alt="企業理念"></a>
                </figure>
                <div class="infoText">
                    <a href="<?php the_permalink(113); ?>">
                        <h3>企業理念</h3>
                    </a>
                </div>
            </div>
            <div class="infoCard">
                <figure>
                    <a href="<?php the_permalink(115); ?>"><img src="<?php echo get_template_directory_uri(); ?>/./img/infoNav_5.jpg" alt="沿革"></a>
                </figure>
                <div class="infoText">
                    <a href="<?php the_permalink(115); ?>">
                        <h3>沿革</h3>
                    </a>
                </div>
            </div>
        </div><!-- infoWrap -->
    </div><!-- /.mainContents -->
</section><!-- infoSection -->

<?php get_footer(); ?>
