<?php
/**
 * Get formatted tweet information.
 * This should be used inside the loop
 * 
 * @author Fikri Rasyid
 * 
 * @return string tweet meta as string
 */
function get_opus_tweet_meta(){
	// Get tweet time
	$current_timestamp 	= current_time( 'timestamp' );
	$post_time 			= get_the_date();
	$post_timestamp 	= strtotime( $post_time );
	$since 				= "<abbr title='$post_time' style='font-weight: bold; border-bottom: 1px dotted #afafaf; cursor: pointer;'>" . human_time_diff( $post_timestamp, $current_timestamp ) . "</abbr>";

	// Display in reply to link
	$reply_id 			= get_post_meta( get_the_ID(), 'ozh_ta_reply_to_tweet', true );
	$reply_name 		= get_post_meta( get_the_ID(), 'ozh_ta_reply_to_name', true );

	if( $reply_id && $reply_name ){
		$reply_href = "http://twitter.com/statuses/$reply_id/";
		$reply_message = sprintf( __( 'In reply to %s', 'opus_tweets' ), $reply_name );
		$reply_link = "<a href='$reply_href' title='$reply_message' target='_blank'>$reply_message</a>";

		$cite = sprintf( __( 'Tweeted %s %s ago', 'opus_tweets' ), $reply_link, $since );
	} else {
		$cite = sprintf( __( 'Tweeted %s ago', 'opus_tweets' ), $since ); 
	}		

	return $cite;
}