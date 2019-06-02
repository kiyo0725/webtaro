<?php get_header(); ?>
<!-- systemSection -->
<section class="systemSection">
    <!-- inner -->
    <div class="inner">
        <!-- systemTitle -->
        <div class="systemTitle">
            <h2>webシステム開発</h2>
        </div>
        <!-- contactTitle -->
        <div class="systemWrap">
            <!-- subContents -->
            <div class="systemContents">
                <div class="systemImg">
                    <img src="<?php echo get_template_directory_uri(); ?>/./img/systemImg_1.jpg" alt="システム開発">
                </div>
                <p>CMS・システム開発
                    wordpressなど、お客さまご自身で管理・運営できるCMSの導入に柔軟に対応いたします。確かな実装力と、豊富な知見を生かし、最適なシステムをご提供いたします。自社サービス開発の経験を生かしたアプリ開発もお任せください。</p>
            </div>
            <aside class="subContents">
                <?php get_sidebar("business"); ?>
            </aside><!-- subContents -->
        </div><!-- systemWrap -->
    </div><!-- inner -->
</section><!-- systemSection -->

<?php get_footer(); ?>
