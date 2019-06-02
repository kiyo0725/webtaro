<?php get_header(); ?>
<!-- webSection -->
<section class="webSection">
    <!-- inner -->
    <div class="inner">
        <!-- webTitle -->
        <div class="webTitle">
            <h2>ホームページ制作</h2>
        </div>
        <!-- contactTitle -->
        <div class="webWrap">
            <div class="webContents">
                <div class="webImg">
                    <img src="<?php echo get_template_directory_uri(); ?>/./img/webImg_1.jpg" alt="ホームページ制作">
                </div>
                <p>webサイトは、１度作成したら終わりというものではありません。作成した後も、中長期的な視点で、検索順位を上げるための施策であったり、多くの方に長く見てもらえるように工夫する必要があります。</p>
                <p class="bold"> 当社は、<br>
                    ・自社サービス・商品をWebを活用することで顧客にアピールしたい<br>
                    ・中長期視点でのWebマーケティング戦略を確立していきたい<br>
                    ・運用工数・費用を抑える為にCMSなどの更新システムを導入したい<br>
                    ・SEO を意識した内部構造の検討<br>

                </p>
                <p>
                    この４点をを意識しており、作って終わりではなく、その後のwebサイトの運用という観点まで考えて、お客様と相談しながら、理想のwebサイトを実現していきます。
                </p>
            </div>
            <!-- subContents -->
            <aside class="subContents">
                <?php get_sidebar("business"); ?>
            </aside><!-- subContents -->
        </div><!-- webWrap -->
    </div><!-- inner -->
</section><!-- webSection -->

<?php get_footer(); ?>
