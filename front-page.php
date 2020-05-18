<?php get_header(); ?>
<!-- mainBg -->
<div class="mainBg">
    <figure></figure>
    <!-- catchCopy -->
    <ul class="catchCopy">
        <li>
            <h3>Design</h3>
        </li>
        <li>
            <h2>Better than Today.</h2>
        </li>
        <li>
            <p>あなたの会社にピッタリなウェブサイトを提案し、</p>
        </li>
        <li>
            <p><span>「任せて良かった！」</span>と言って貰えるサイト作りを徹底します。</p>
        </li>
    </ul><!-- catchCopy -->
</div><!-- mainBg -->
<!-- newsSection -->
<section class="newsSection">
    <!-- inner -->
    <div class="inner">
        <!-- newsTitle -->
        <div class="newsTitle">
            <h2>最新情報</h2>
            <span>NEWS</span>
        </div><!-- newsTitle -->
        <p><a href="<?php echo get_category_link(9); ?>"><i class="fas fa-chevron-circle-right"></i>お知らせ一覧</a></p>
        <!-- newsBox -->
        <div class="newsBox">
            <ul>
                <li><a href="#tab1" class="current">全て</a></li>
                <li><a href="#tab2">メンテナンス</a></li>
                <li><a href="#tab3">お休み</a></li>
                <li><a href="#tab4">その他</a></li>
            </ul>
            <!-- contents -->
            <div id="contents">
                <div id="tab1">
                    <!-- newsTable -->
                    <table class="newsTable">
                        <?php
                        if (have_posts()) :
                            while (have_posts()) : the_post();
                        ?>
                                <tr>
                                    <td id="category"><a href="<?php echo get_category_link(9); ?>"><span>全て</span></a></td>
                                    <th><i class="far fa-calendar-alt"></i><?php the_time('Y-m-d'); ?></th>
                                    <td><a href=" <?php the_permalink(); ?>"><?php the_title(); ?></a></td>
                                </tr>
                        <?php
                            endwhile;
                        endif;
                        ?>
                    </table><!-- newsTable -->
                </div>
                <div id="tab2">
                    <table class="newsTable">
                        <?php
                        if (have_posts()) :
                            while (have_posts()) : the_post();
                        ?>
                                <?php if (in_category(8)) : ?>

                                    <tr>
                                        <td id="category"><a href="<?php echo get_category_link(8); ?>"><span>メンテナンス</span></a></td>
                                        <th><i class="far fa-calendar-alt"></i><?php the_time('Y-m-d'); ?></th>
                                        <td><a href=" <?php the_permalink(); ?>"><?php the_title(); ?></a></td>
                                    </tr>

                        <?php
                                endif;
                            endwhile;
                        endif;

                        ?>

                    </table>
                </div>
                <div id="tab3">
                    <table class="newsTable">
                        <?php
                        if (have_posts()) :
                            while (have_posts()) : the_post();
                        ?>
                                <?php if (in_category(6)) : ?>
                                    <tr>
                                        <td id="category"><a href="<?php echo get_category_link(6); ?>"><span>お休み</span></a></td>
                                        <th><i class="far fa-calendar-alt"></i><?php the_time('Y-m-d'); ?></th>
                                        <td><a href=" <?php the_permalink(); ?>"><?php the_title(); ?></a></td>
                                    </tr>
                        <?php
                                endif;
                            endwhile;
                        endif;
                        ?>

                    </table>
                </div>
                <div id="tab4">
                    <table class="newsTable">
                        <?php
                        if (have_posts()) :
                            while (have_posts()) : the_post();
                        ?>
                                <?php if (in_category(4)) : ?>
                                    <tr>
                                        <td id="category"><a href="<?php echo get_category_link(4); ?>"><span>その他</span></a></td>
                                        <th><i class="far fa-calendar-alt"></i><?php the_time('Y-m-d'); ?></th>
                                        <td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
                                    </tr>

                        <?php
                                endif;
                            endwhile;
                        endif;
                        ?>
                    </table>
                </div>
            </div><!-- contents -->
        </div><!-- newsBox -->
    </div><!-- inner -->
</section><!-- newsSection -->
<!-- pickupSection -->
<section class="pickupSection">
    <!-- inner -->
    <div class="inner">
        <!-- pickupTitle -->
        <div class="pickupTitle">
            <h2>ピックアップ</h2>
            <span>PICKUP</span>
        </div><!-- pickupTitle -->
        <!-- pickupContents -->
        <div class="pickupContents">
            <!-- flex -->
            <div class="flex">
                <div class="pickupCard">
                    <figure>
                        <a href="<?php the_permalink(148); ?>"><img src="<?php echo get_template_directory_uri(); ?>/./img/pickupImg_1.jpg" alt="新年のご挨拶"></a>
                    </figure>
                    <div class="dateContent">
                        <p class="date">
                            <?php echo mysql2date('Y-m-d', get_post(148)->post_date); ?></p>
                        <p class="goodBtn"><i class="far fa-heart"></i>
                        </p>
                        <p class="goodBtnAfter"><i class="fas fa-heart">1</i></p>
                    </div>
                    <a href="<?php the_permalink(148); ?>">
                        <h3>
                            <?php echo get_post(148)->post_title; ?>
                        </h3>
                    </a>
                    <a href="<?php the_permalink(148); ?>">
                        <?php echo get_post(148)->post_content; ?>
                    </a>
                </div>
                <div class="pickupCard">
                    <figure>
                        <a href="<?php the_permalink(123); ?>"><img src="<?php echo get_template_directory_uri(); ?>/./img/pickupImg_2.jpg" alt="冬季休業について"></a>
                    </figure>
                    <div class="dateContent">
                        <p class="date"><?php echo mysql2date('Y-m-d', get_post(123)->post_date); ?></p>
                        <p class="goodBtn"><i class="far fa-heart"></i></p>
                        <p class="goodBtnAfter"><i class="fas fa-heart">1</i></p>
                    </div>
                    <a href="<?php the_permalink(123); ?>">
                        <h3><?php echo get_post(123)->post_title; ?></h3>
                    </a>
                    <a href="<?php the_permalink(123); ?>">
                        <?php echo get_post(123)->post_content; ?>
                    </a>
                </div>
                <div class="pickupCard">
                    <figure>
                        <a href="<?php the_permalink(129); ?>"><img src="<?php echo get_template_directory_uri(); ?>/./img/pickupImg_3.jpg" alt="メンテナンスのお知らせ"></a>
                    </figure>
                    <div class="dateContent">
                        <p class="date"><?php echo mysql2date('Y-m-d', get_post(129)->post_date); ?></p>
                        <p class="goodBtn"><i class="far fa-heart"></i></p>
                        <p class="goodBtnAfter"><i class="fas fa-heart">1</i></p>
                    </div>
                    <a href="<?php the_permalink(129); ?>">
                        <h3><?php echo get_post(129)->post_title; ?></h3>
                    </a>
                    <a href="<?php the_permalink(129); ?>">
                        <?php echo get_post(129)->post_excerpt; ?>
                    </a>
                </div><!-- pickupCard-->
            </div><!-- flex -->
        </div><!-- pickupContents -->
    </div><!-- inner -->
</section><!-- pickupSection -->
<!-- processSection -->
<section class="processSection">
    <!-- inner -->
    <div class="inner">
        <!-- processTitle -->
        <div class="processTitle">
            <h2>プロセス</h2>
            <span>PROCESS</span>
        </div><!-- processTitle -->
        <!-- processContents -->
        <div class="processContents">
            <!-- processContent -->
            <div class="processContent">
                <div class="flex">
                    <figure class="processImg">
                        <img src="<?php echo get_template_directory_uri(); ?>/./img/processImg_1.jpg" alt="ヒアリング・サイト設計">
                    </figure>
                </div>
                <p class="processNumber">1</p>
            </div>

            <div class="processContent">
                <div class="flex">
                    <div class="processText">
                        <h3>デザイン・ワイヤーフレーム作成</h3>
                        <p>打ち合わせの内容を基に、簡単な骨組みであるワイヤーフレームを作成し、お客様の確認が済みましたら、AdobeXD・photoshopなどを使い、サイトのデザインをさせて頂きます。</p>
                    </div>
                    <figure class="processImg">
                        <img src="<?php echo get_template_directory_uri(); ?>/./img/processImg_2.jpg" alt="デザイン・ワイヤーフレーム作成">
                    </figure>
                </div>
                <p class="processNumber">2</p>
            </div>
            <div class="processContent">
                <div class="flex">
                    <figure class="processImg">
                        <img src="<?php echo get_template_directory_uri(); ?>/./img/processImg_3.jpg" alt="コーディング・CMS実装">
                    </figure>
                    <div class="processText">
                        <h3>コーディング・CMS実装</h3>
                        <p>Brackets・VScodeなどのテキストエディタを使用し、HTML・CSS・JavaScript・PHPなどのコーディングを行い、必要に応じて、WordpressなどのCMSを利用します。</p>
                    </div>
                </div>
                <p class="processNumber">3</p>
            </div>
            <div class="processContent">
                <div class="flex">

                    <div class="processText">
                        <h3>納品・運用</h3>
                        <p>FTPを経由してサーバーにデータをアップロードし、お客様にサイトの出来を確認して頂きます。お客様が納得出来ましたら、納品となり、その後の運営をGoogle Analyticsを使用しながら、分析していきます。</p>
                    </div>
                    <figure class="processImg">
                        <img src="<?php echo get_template_directory_uri(); ?>/./img/processImg_4.jpg" alt="納品・運用">
                    </figure>
                </div>
                <p class="processNumber">4</p>
            </div><!-- processContent -->
        </div><!-- processContents -->
    </div><!-- inner -->
</section><!-- processSection -->

<!-- top -->
<div class="top">
    <i class="fas fa-chevron-circle-up"></i>
</div><!-- top -->
<?php get_footer(); ?>