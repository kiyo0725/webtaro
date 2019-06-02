<!-- recentAchives -->
<section class="recentArchives">
    <h1 class="type-C">年別アーカイブ</h1>
    <!-- archives -->
    <ul class="archives">
        <?php
          $args = array(
              'type' => 'yearly',
              'show_post_count' => true,
            );
            wp_get_archives( $args );
        ?>
    </ul><!-- archives -->
</section><!-- recentAchives -->
