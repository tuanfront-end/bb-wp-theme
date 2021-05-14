<?php

/* Start the Loop */

use BB_Theme\FunctionHelpers;

$catTitle = get_the_archive_title();
$_s_products_converted = [];
if (have_posts()) {
	while (have_posts()) :
		the_post();
		$_s_products_converted[] = FunctionHelpers::converPostToJsPostData($post);
	endwhile;
}
?>
<script type="text/javascript">
	var __SERVER_DATA__ = {
		postsPage: {
			title: <?php echo json_encode($catTitle); ?>,
			posts: <?php echo json_encode($_s_products_converted); ?>
		}
	}
</script>

<!-- HJEADER -->
<?php get_header(); ?>

<main id="bb-posts" class="products-page">
	<?php if (have_posts()) : ?>
		<div id="bb-posts-react">
		</div>
		<!-- NAV -->
		<div class="flex items-center justify-center space-x-2">
			<?php the_posts_navigation(); ?>
		</div>

	<?php else :
		get_template_part('template-parts/content', 'none');
	endif;
	?>

</main><!-- #main -->

<?php
get_footer();
