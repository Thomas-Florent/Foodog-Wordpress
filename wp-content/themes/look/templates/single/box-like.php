<?php
//check settings
$look_ruby_single_post_social_like = look_ruby_core::get_option( 'single_post_social_like' );
if ( empty( $look_ruby_single_post_social_like ) ) {
	return false;
}

$look_ruby_twitter_user = get_the_author_meta( 'twitter' );
if ( empty( $look_ruby_twitter_user ) ) {
	$look_ruby_twitter_user = look_ruby_core::get_option( 'look_ruby_pinterest' );
}
if ( empty( $look_ruby_twitter_user ) ) {
	$look_ruby_twitter_user = get_bloginfo( 'name' );
}

?>

<div class="single-like-wrap center">
	<ul class="single-like-inner">
		<span class='title-share'>Share</span>
		<li class="like-el bg-comment footer-custom base-custom">
			<span class="fas fa-comment"></span>
			<a href="#">0 comment</a>
		</li>
		<li class="like-el bg-facebook footer-custom base-custom">
			<span class="fa fa-facebook"></span>
			<a href="#">share</a>
		</li>
		<li class="like-el bg-twitter footer-custom base-custom">
			<span class="fa fa-twitter"></span>
			<a href='#'>tweet</a>
		</li>
		<li class="like-el bg-pinterest footer-custom base-custom">
			<span class="fa fa-pinterest"></span>
			<a href="#">pin it</a>
		</li>
	</ul>
</div><!--like box -->
<div>
	<div class="subscribe-custom">
		<h2>Subscribe to The Digest Newsletter</h2>
		<p>Get health and wellness tips about your dog delivered to your inbox.</p>
		<form class="form-custom">
			<input type="text">
			<input type="submit" value="SIGN UP">
		</form>
	</div>
</div>
