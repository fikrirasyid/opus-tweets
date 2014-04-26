<?php
		
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<blockquote style="font-style: normal;">
			<?php the_content( __( 'Continue Reading &rarr;', 'opus' ) ); ?>
		</blockquote>
		<cite><?php echo get_opus_tweet_meta(); ?></cite>
	</div> 
	<footer class="entry-footer">
		<span class="icon-wrap"><span class="icon"></span></span>
		<span class="comments-link">			
			<?php opus_comments_popup_link(); ?>
		</span>
	</footer> 
</article>