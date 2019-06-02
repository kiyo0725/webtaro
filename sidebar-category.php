<!-- recentCategories -->
<section class="recentCategories">
    <h1 class="type-C">カテゴリー</h1>
    <!-- categories -->
    <ul class="categories">
        <?php
            $args = array(
            'title_li' => '',
            'show_count' => true,
            );
            wp_list_categories( $args );
        ?>
    </ul><!-- categories -->
</section><!-- recentCategories -->
