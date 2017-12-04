<form id="searchform" class="searchform" method="get" action="<?php echo home_url( '/' ) ?>" >
	<input name="s" id="s" type="text" class="s" value="<?php echo get_search_query() ?>" required placeholder="Введите название МФК">
	<input type="submit" class="b" value="Найти">
</form>