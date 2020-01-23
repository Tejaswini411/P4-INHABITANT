<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
			<a href="#" id="searchToggle" class="icon-search search-toggle" aria-hidden="true">
				<i class="fa fa-search"></i>
			</a>
			<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
	<div class="search-container">
	<label>
		<input type="search" class="search-field" placeholder="SEARCH ..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
	</label>
	</div>
</form>
