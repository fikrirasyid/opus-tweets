<?php 
	get_header();
	while( have_posts() ) : the_post();
?>

<div id="main" class="site-main" style="padding-top: 200px;"> 
	<div id="primary" class="content-area">

		<div id="content" class="site-content" role="main">
			<?php 
				// Get Content
				get_template_part( 'content', get_post_format() );

				// Get Nav
				opus_content_nav( 'nav-below' ); 

				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ){
					comments_template();
				}
			?>
		</div><!-- #content.site-content -->

	</div><!-- #primary.content-area -->
</div><!-- #main.site-main -->
<?php
	endwhile;					
	get_footer(); 
?>