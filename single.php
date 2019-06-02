<?php get_header(); ?>
<!-- singleSection -->
<section class="singleSection">
    <!-- inner -->
    <div class="inner">
        <!-- singleTitle -->
        <div class="singleTitle">
            <h2><?php the_title(); ?></h2>
        </div>
        <!-- singleBlock -->
        <div class="singleBlock">
            <!-- singleWrapper -->
            <div class="singleWrapper">
                <?php the_category(); ?>
                <div class="time">
                    <time datetime="<?php the_time('Y-m-d'); ?>"><i class="far fa-calendar-alt"></i><?php the_time('Y年m月d日'); ?></time>
                </div>
                <?php
                    if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                 ?>
                <div class="contents">
                    <?php the_content(); ?>
                </div>
                <?php
                  endwhile;
                  endif;
                  ?>
            </div>
            <aside class="subContents">
                <?php get_sidebar("category"); ?>
                <?php get_sidebar("archives"); ?>
            </aside><!-- subContents -->
        </div><!-- singleBlock -->
    </div><!-- inner -->
</section><!-- singleSection -->

<?php get_footer(); ?>
