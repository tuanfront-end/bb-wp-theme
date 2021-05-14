<?php
if (get_post_type() === 'product') : ?>
	<?php
	$product = wc_get_product($post->ID);
	$downloads = $product->get_downloads() ?? [];
	$videoUrl = $product->get_attribute('video');

	$dowloadUrls = [];
	foreach ($downloads as $key => $each_download) {
		$dowloadUrls[] = $each_download["file"];
	}
	?>
	<script type="text/javascript">
		var __SERVER_DATA__ = {
			productSinglePage: {
				product: <?php echo json_encode($post); ?>,
				dowloads: <?php echo json_encode($dowloadUrls); ?>,
				video: <?php echo json_encode($videoUrl); ?>,
			}
		}
	</script>
<?php endif;
get_header();
?>

<main id="primary" class="page-single">
	<?php
	// PRODUCT SINGLE
	if (get_post_type() === 'product') : ?>
		<main id="bb-product-single-react">
		</main>
	<?php endif; ?>

	<!-- // POST SINGLE -->
	<?php
	if (get_post_type() === 'post') :
		while (have_posts()) :
			the_post();

			get_template_part('template-parts/content', get_post_type());


			// If comments are open or we have at least one comment, load up the comment template.
			if (comments_open() || get_comments_number()) :
				comments_template();
			endif;

		endwhile; // End of the loop.
	endif;
	?>

</main><!-- #main -->

<?php
get_footer();
