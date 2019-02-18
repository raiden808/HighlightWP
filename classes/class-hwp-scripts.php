<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

function hwp_highlighter_scripts(){

	wp_enqueue_script( 'cb-highlight-js', HLWP_PLUGIN_URL . 'assets/js/highlight-share.js' );

	wp_enqueue_script( 'cb-highlight-copyjs', HLWP_PLUGIN_URL . 'assets/js/sharers/copy.js' );
	wp_enqueue_script( 'cb-highlight-redditjs', HLWP_PLUGIN_URL . 'assets/js/sharers/reddit.js' );
	wp_enqueue_script( 'cb-highlight-twitterjs', HLWP_PLUGIN_URL . 'assets/js/sharers/twitter.js' );
	wp_enqueue_script( 'cb-highlight-linkednjs', HLWP_PLUGIN_URL . 'assets/js/sharers/linked-in.js' );


	wp_enqueue_style( 'cb-highlight-css', HLWP_PLUGIN_URL . 'assets/css/highlight-share.css' );


}

add_action( 'wp_enqueue_scripts','hwp_highlighter_scripts');


add_action('wp_head',function(){
 	?>	
	 <script type="text/javascript"> 
		// Global
		var highlightShare = window.highlightShare;
 	</script>
 	<?php
});

add_action('wp_head',function(){
	?>
	<script type="text/javascript">
		
		var highlightShare   = window.HighlightShare;
		var copySharer       = window.HighlightShareViaCopy;
		var redditShare      = window.HighlightShareViaReddit;
		var twitterShare     = window.HighlightShareViaTwitter;
		var linkedinShare    = window.HighlightShareViaLinkedIn;

		var selectionShare = highlightShare({
		    selector: 'article',
		    sharers: [copySharer,redditShare,twitterShare,linkedinShare]
		});

		selectionShare.init();

	</script>
	<style type="text/css">
		.highlight-share-popover>ul{
			margin: -0.65em 0 0 !important;
		}
		.highlight-share-popover>ul{
			background: black !important;
		}
		.highlight-share-popover:before{
			border-color: black transparent !important;
			
		}
	</style>

	<?php
});