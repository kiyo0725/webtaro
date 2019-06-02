</main>
<footer>
    <!-- inner -->
    <div class="inner">
        <!-- fnav -->
        <nav class="fnav">
            <!-- fnavList -->
            <ul class="fnavList">
                <li class="fnavItem">
                    <ul>
                        <li>
                            <h2><a href="<?php echo home_url(); ?>">株式会社web太郎</a></h2>
                        </li>
                        <li>
                            <p>〒340-0000<br>埼玉県さいたま市浦和区北浦和O-OO-O</p>
                        </li>
                    </ul>
                </li>
                <li class="fnavItem">
                    <ul>
                        <li>
                            <a href="<?php the_permalink(109); ?>" class="tag">企業情報</a>
                        </li>
                        <li>
                            <a href="<?php the_permalink(105); ?>">会社概要</a>
                        </li>
                        <li>
                            <a href="<?php the_permalink(111); ?>">アクセス</a>
                        </li>
                        <li>
                            <a href="<?php the_permalink(113); ?>">企業理念</a>
                        </li>
                        <li>
                            <a href="<?php the_permalink(115); ?>">沿革</a>
                        </li>
                    </ul>
                    <i class="fas fa-bars"></i>
                </li>
                <li class="fnavItem">
                    <ul>
                        <li>
                            <a href="<?php the_permalink(117); ?>" class="tag">事業内容</a>
                        </li>
                        <li>
                            <a href="<?php the_permalink(155); ?>">ホームページ制作</a>
                        </li>
                        <li>
                            <a href="<?php the_permalink(158); ?>">アプリ開発</a>
                        </li>
                        <li>
                            <a href="<?php the_permalink(160); ?>">webシステム開発</a>
                        </li>
                        <li>
                            <a href="<?php the_permalink(163); ?>">広告デザイン</a>
                        </li>
                        <i class="fas fa-bars"></i>
                    </ul>
                </li>
                <li class="fnavItem">
                    <ul>
                        <li>
                            <a href="<?php echo get_category_link(9); ?>" class="tag">ニュース</a>

                        </li>

                        <li>
                            <a href="<?php echo get_category_link(8); ?>">メンテナンス</a>
                        </li>
                        <li>
                            <a href="<?php echo get_category_link(6); ?>">お休み</a>
                        </li>
                        <li>
                            <a href="<?php echo get_category_link(4); ?>">その他</a>
                        </li>
                    </ul>
                </li>
                <li class="fnavItem">
                    <ul>
                        <li>
                            <a href="<?php the_permalink(7); ?>" class="tag">お問い合わせ</a>

                        </li>
                    </ul>
                </li><!-- fnavItem -->
            </ul><!-- fnavList -->
        </nav><!-- fnav -->
    </div><!-- inner -->
    <p class="copy">Copyright &copy; web太郎 Company All Rights Reserved.</p>
</footer>

<?php wp_footer(); ?>
<script>
    $(document).ready(function() {
        $('.drawer').drawer();
    });

</script>
</body>

</html>
