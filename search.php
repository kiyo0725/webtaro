<?php get_header(); ?>
<!-- searchSection -->
<section class="searchSection">
    <!-- inner -->
    <div class="inner">
        <!-- searchTitle -->
        <div class="searchTitle">
            <h2>「<?php the_search_query(); ?>」の検索結果</h2>
        </div>
        <!-- searchBlock -->
        <div class="searchBlock">
            <?php
    if ( have_posts() ) :
    while ( have_posts() ) : the_post();
?>
            <!-- news -->
            <article class="news">
                <div class="text">
                    <div class="entryInfo">
                        <?php the_category(); ?>
                        <time datetime="<?php the_time('Y-m-d'); ?>" class="time"><i class="far fa-calendar-alt"></i><?php the_time('Y.m.d'); ?>
                        </time>
                    </div>
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    <?php the_excerpt(); ?>
                    <p>[<a href="<?php the_permalink(); ?>">続きを読む</a>]</p>
                </div>
            </article><!-- news -->

            <?php
    endwhile; ?>

            <?php if ( function_exists( 'wp_pagenavi' ) ){ wp_pagenavi(); } ?>
            <?php else: ?>

            <?php if(is_search()): ?>
            <!-- noSearch -->
            <div class="noSearch">
                <p>入力されたキーワードに該当する検索結果はありませんでした。</p>
                <p>入力キーワードを変更して再度検索を行ってください。</p>
                <div class="topButton">
                    <p><a href="<?php echo home_url(); ?>">TOPへ戻る</a></p>
                </div>
            </div><!-- noSearch -->
            <?php endif; ?>
            <?php endif; ?>
        </div><!-- searchBlock -->
    </div><!-- inner -->
</section><!-- searchSection -->


<?php get_footer(); ?>
