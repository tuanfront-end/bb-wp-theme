<?php

use BB_Theme\FunctionHelpers;

if (get_post_type() === 'product') : ?>
	<?php
	$product = wc_get_product($post->ID);
	$downloads = $product->get_downloads() ?? [];
	$videoUrl = $product->get_attribute('video');

	$dowloadUrls = [];
	foreach ($downloads as $key => $each_download) {
		$dowloadUrls[] = $each_download["file"];
	}

	$featuredImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
	$post->imageThumbnail = $featuredImg[0];
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
		endwhile; // End of the loop.
	endif;
	?>

</main><!-- #main -->

<?php
get_footer();
