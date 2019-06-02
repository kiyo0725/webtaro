<?php get_header(); ?>
<!-- errorSection -->
<div class="errorSection">
    <!-- inner -->
    <div class="inner">
        <div>
            <figure class="errorImage">
                <img src="<?php echo get_template_directory_uri(); ?>/./img/404.jpg" alt="エラー画像">
            </figure>
            <div class="errorText">
                <p>Not Found</p>
                <p>お探しのページが見つかりませんでした。</p>
            </div>
            <div class="topButton">
                <p><a href="<?php echo home_url(); ?>">TOPへ戻る</a></p>
            </div><!-- topButton -->
        </div>
    </div><!-- inner -->
</div><!-- errorSection -->


<?php get_footer(); ?>
