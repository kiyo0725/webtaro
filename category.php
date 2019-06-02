<?php get_header(); ?>
<!-- noticeSection -->
<section class="noticeSection">
    <!-- inner -->
    <div class="inner">
        <!-- noticeTitle -->
        <div class="noticeTitle">
            <h2>最新情報</h2>
        </div>
        <!-- noticeBlock -->
        <div class="noticeBlock">
            <!-- noticeWrapper -->
            <div class="noticeWrapper">
                <!-- noticeTable -->
                <table class="noticeTable">
                    <?php
                    if(have_posts()):
                        while(have_posts()):the_post();
                    ?>

                    <tr>
                        <td class="category"><?php the_category(); ?></td>
                        <td><time datetime="<?php the_time('Y-m-d'); ?>"><i class="far fa-calendar-alt"></i><?php the_time("Y.m.d"); ?></time></td>
                        <td><a href=" <?php the_permalink(); ?>"><?php the_title(); ?></a></td>
                    </tr>
                    <?php
                endwhile;
                endif;
            ?>

                </table>
                <?php if ( function_exists( 'wp_pagenavi' ) ){ wp_pagenavi(); } ?>
            </div>
            <aside class="subContents">
                <?php get_sidebar("category"); ?>
                <?php get_sidebar("archives"); ?>
            </aside><!-- subContents -->
        </div><!-- noticeBlock -->
    </div><!-- inner -->
</section><!-- noticeSection -->

<?php get_footer(); ?>
