<form action="<?php echo home_url('/') ?>" method="get" class="searchform">
    <input type="text" value="<?php the_search_query(); ?>" name="s" id="sbox" placeholder="サイト内検索">
    <input type="submit" id="sbtn" value="検索">
</form>
