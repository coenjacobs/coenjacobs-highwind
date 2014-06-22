<?php

add_action( 'init', 'coenjacobs_theme_supports' );

/**
 * Adds the aside and image post format to the theme
 */
function coenjacobs_theme_supports() {
	add_theme_support( 'post-formats', array( 'aside', 'image' ) );
}

add_action( 'init', 'coenjacobs_highwind_hook_changes' );

/**
 * Removes the default header of Highwind
 */
function coenjacobs_highwind_hook_changes() {
	remove_action( 'highwind_header', 'highwind_site_title', 20 );
}

/**
 * Core theme function override
 * Probably should look into making this list filterable so I don't have to override
 */
function highwind_post_meta() {
	if ( ! is_page() ) {
	?>
	<aside class="post-meta">
		<ul>
			<li class="categories"><?php the_category( ', ' ); ?></li>
			<?php the_tags( '<li class="tags">', ', ','</li>' ); ?>
		</ul>
	</aside><!-- /.post-meta -->
	<?php
	}
}