<?php
// 
// $logo = Redux::get_option(_S_REDUX, 'options--logo') ?? [];
$logoString =  '';
$copyright = "";
$facebookUrl = "";
$twitterUrl = "";
$instagramUrl =  "";
$youtubeUrl =  "";
if (class_exists('Redux')) {
	$logoString = Redux::get_option(_S_REDUX, 'options--logo-text') ?? '';
	$copyright = Redux::get_option(_S_REDUX, 'options--copyright') ?? "";
	$facebookUrl = Redux::get_option(_S_REDUX, 'options--facebook-url') ?? "";
	$twitterUrl = Redux::get_option(_S_REDUX, 'options--twitter-url') ?? "";
	$instagramUrl = Redux::get_option(_S_REDUX, 'options--instagram-url') ?? "";
	$youtubeUrl = Redux::get_option(_S_REDUX, 'options--youtube-url') ?? "";
}

?>

<footer id="colophon" class="site-footer container mx-auto flex flex-col md:flex-row items-center md:justify-between space-y-5 md:space-y-0 py-10 md:pt-20 bg-white">
	<div class="site-info flex flex-col sm:flex-row text-center sm:text-left items-center space-x-4">
		<a class="font-bold mb-1 sm:mb-0" href="<?php echo esc_url(home_url('/')); ?>">
			<?php echo esc_html($logoString); 	?>
		</a>
		<span class="sep text-gray-400 hidden sm:block"> | </span>
		<span class="text-gray-500">
			<?php echo esc_html($copyright); 	?>
		</span>
	</div><!-- .site-info -->
	<div class="flex items-center space-x-5 text-2xl text-gray-400">
		<a href="<?php echo esc_url($facebookUrl); ?>" target="_blank" rel="noopener noreferrer">
			<i class="lab la-facebook-f"></i>
		</a>
		<a href="<?php echo esc_url($twitterUrl); ?>" target="_blank" rel="noopener noreferrer">
			<i class="lab la-twitter"></i>
		</a>
		<a href="<?php echo esc_url($instagramUrl); ?>" target="_blank" rel="noopener noreferrer">
			<i class="lab la-instagram"></i>
		</a>
		<a href="<?php echo esc_url($youtubeUrl); ?>" target="_blank" rel="noopener noreferrer">
			<i class="lab la-youtube"></i>
		</a>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>