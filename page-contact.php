<?php get_header(); ?>
<!-- contactSection -->
<section class="contactSection">
    <!-- inner -->
    <div class="inner">
        <!-- contactTitle -->
        <div class="contactTitle">
            <h2>お問い合わせフォーム</h2>
            <p>フォームに必要事項を入力し、ご送信下さい。<br>
                <span>*の付いている項目は必要事項となります。</span></p>

        </div>
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
        ?>
        <!-- contactWrap -->
        <div class="contactWrap">
            <?php the_content(); ?>
        </div><!-- contactWrap -->
        <?php
            endwhile;
        endif;
        ?>
    </div><!-- inner -->
</section><!-- contactSection -->

<?php get_footer(); ?>
