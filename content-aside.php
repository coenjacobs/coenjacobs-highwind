<?php
/**
 * The template for displaying pages.
 * @package highwind
 * @since 1.0
 */
?>

<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>

<section class="article-content">

	<?php highwind_content_header_top(); ?>

	<?php if ( is_single() ) { ?>

	<h1 class="page-title" data-text="<?php the_title(); ?>"><?php the_title(); ?></h1>

	<?php } ?>

	<?php highwind_content_header_bottom(); ?>

	<?php

		highwind_content_entry_top();

		the_content();

		wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'highwind' ) . '</span>', 'after' => '</div>' ) );

		highwind_content_entry_bottom();

	?>

</section><!-- /.article-content -->