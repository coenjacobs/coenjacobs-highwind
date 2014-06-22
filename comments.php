<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>

<?php highwind_comments_before(); ?>

<?php if ( is_single() ) { ?>

<div id="comments" class="comments">
	<h3>Got something to say?</h3>
	<p>Drop me a line on Twitter, I'm <a href="http://twitter.com/coenjacobs">@CoenJacobs</a>.</p>
</div><!-- .comments -->

<?php } ?>

<?php highwind_comments_after(); ?>