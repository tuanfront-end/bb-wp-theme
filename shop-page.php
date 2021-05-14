<?php
/*
* Template Name: Trang san pham
* Template Post Type: page
*/

use BB_Theme\FunctionHelpers;

$allCategories = get_categories([
	'taxonomy'     => 'product_cat',
	'show_count'   => 1,
	'hide_empty'   => 1
]);
// 
$allProducts = [];

foreach ($allCategories as $oCate) {
	$args = array(
		'post_type'             => 'product',
		'post_status'           => 'publish',
		'ignore_sticky_posts'   => 1,
		'posts_per_page'        => -1,
		'tax_query'             => array(
			array(
				'taxonomy'      => 'product_cat',
				'field' => 'term_id', //This is optional, as it defaults to 'term_id'
				'terms'         => $oCate->term_id,
				'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
			),
			array(
				'taxonomy'      => 'product_visibility',
				'field'         => 'slug',
				'terms'         => 'exclude-from-catalog', // Possibly 'exclude-from-search' too
				'operator'      => 'NOT IN'
			)
		)
	);
	$oQuery = new WP_Query($args);
	$_s_products = $oQuery->posts;

	$_s_products_converted = [];
	foreach ($_s_products as $oPost) {
		$_s_products_converted[] = FunctionHelpers::converProductToJsProduct($oPost);
	}

	$allProducts[] = $_s_products_converted;
}

?>
<script type="text/javascript">
	var __SERVER_DATA__ = {
		productsPage: {
			products: <?php echo json_encode($allProducts); ?>,
			categories: <?php echo json_encode($allCategories); ?>,
		}
	}
</script>
<?php
get_header();
?>

<!-- CAN TRA LAI BIEN JS : __SERVER_DATA__.homePage -->
<main id="bb-products" class="products-page">
	<div id="bb-products-react">
	</div>
</main><!-- #main -->

<?php
get_footer();
