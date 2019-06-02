<?php
    if ( have_posts() ) :
    while ( have_posts() ) : the_post();
?>

<article class="news">
    <div class="text">
        <div class="entryInfo">
            <div class="categories">
                <?php the_category(); ?>
            </div>
            <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日(l)'); ?>
            </time>
        </div>
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <?php the_excerpt(); ?>
        <p>[<a href="<?php the_permalink(); ?>">続きを読む</a>]</p>
    </div>
    <figure><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a></figure>
</article><!-- /.news -->

<?php
    endwhile;
    endif;
?>
