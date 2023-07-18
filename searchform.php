<form role="search" method="get" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="wrap-area flex space-between search">
        <label>Search on the Knoledge Hub</label>
        <input type="search" name="s" id="search-input" value="<?php echo esc_attr( get_search_query() ); ?>">
        <input type="submit" class="search-submit" value="">
    </div>
</form>