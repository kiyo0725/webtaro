<?php get_header(); ?>
<!-- advertiseSection -->
<section class="advertiseSection">
    <!-- inner -->
    <div class="inner">
        <!-- advertiseTitle -->
        <div class="advertiseTitle">
            <h2>広告デザイン</h2>
        </div>
        <!-- advertiseWrap -->
        <div class="advertiseWrap">
            <div class="advertiseContents">
                <div class="advertiseImg">
                    <img src="<?php echo get_template_directory_uri(); ?>/./img/advertiseImg_1.jpg" alt="広告デザイン">
                </div>

                <p class="bold">
                    ・Webサイトと統一感のある会社案内やDMを制作したい<br>
                    ・Webでは効果が期待できない層に別の方法でアプローチしたい<br>
                </p>
                <p>等のご要望にお客様と相談しながらデザインを作成していきます。</p>
            </div>
            <!-- subContents -->
            <aside class="subContents">
                <?php get_sidebar("business"); ?>
            </aside><!-- subContents -->
        </div><!-- advertiseWrap -->
    </div><!-- inner -->
</section><!-- advertiseSection -->

<?php get_footer(); ?>
