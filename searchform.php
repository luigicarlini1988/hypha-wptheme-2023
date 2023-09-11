<form role="search" method="get" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="wrap-area flex space-between search">
        <label>Search on the Knowledge Hub</label>

        <input class="inlineSearch" type="text" name="s" value="" />
        <input type="hidden" name="post_type" value="educational" />
        <input type="submit" class="search-submit" value="">
    </div>
</form>