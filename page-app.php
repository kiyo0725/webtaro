<?php get_header(); ?>
<!-- appSection -->
<section class="appSection">
    <!-- inner -->
    <div class="inner">
        <!-- appTitle -->
        <div class="appTitle">
            <h2>アプリ開発</h2>
        </div>
        <!-- appWrap -->
        <div class="appWrap">
            <div class="appContents">
                <div class="appImg">
                    <img src="<?php echo get_template_directory_uri(); ?>/./img/appImg_1.png" alt="アプリ制作">
                </div>
                <p>
                    iPhone / iPad、Androidなどのあらゆるデバイスや OS のアプリケーション開発に対応。
                    Android/iOSアプリから、Webアプリまで、トータルに開発できます。ネイティブアプリだけでなく、ハイブリッドアプリ、
                    Webアプリの開発にも対応可。お客様のニーズにあった最適なアプリ開発をご提案します。
                </p>
            </div>
            <!-- subContents -->
            <aside class="subContents">
                <?php get_sidebar("business"); ?>
            </aside><!-- subContents -->
        </div><!-- appWrap -->
    </div><!-- inner -->
</section><!-- appSection -->

<?php get_footer(); ?>
