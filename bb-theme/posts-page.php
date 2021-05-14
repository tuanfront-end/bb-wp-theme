<?php
/*
* Template Name: Trang cac bai viet
* Template Post Type: page
*/

use BB_Theme\FunctionHelpers;

$paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
$args = array(
	'post_status'           => 'publish',
	'ignore_sticky_posts'   => 1,
	'posts_per_page'        => 20,
	'paged' => $paged,
);
$oQuery = new WP_Query($args);
$_s_products = $oQuery->posts;

$_s_products_converted = [];
foreach ($_s_products as $oPost) {
	$_s_products_converted[] = FunctionHelpers::converPostToJsPostData($oPost);
}
?>
<script type="text/javascript">
	var __SERVER_DATA__ = {
		postsPage: {
			title: <?php echo json_encode("Tất cả bài viết"); ?>,
			posts: <?php echo json_encode($_s_products_converted); ?>,
		}
	}
</script>
<?php
get_header();
?>

<!-- CAN TRA LAI BIEN JS : __SERVER_DATA__.homePage -->
<main id="bb-posts" class="products-page">
	<div id="bb-posts-react">
	</div>
	<div class="flex items-center justify-center space-x-2 font-medium">
		<?php
		$big = 999999999; // need an unlikely integer

		echo paginate_links(array(
			'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
			'format' => '?paged=%#%',
			'current' => max(1, get_query_var('paged')),
			'total' => $oQuery->max_num_pages
		));
		?>
	</div>
</main><!-- #main -->

<?php
get_footer();
