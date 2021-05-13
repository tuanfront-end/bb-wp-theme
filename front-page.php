<?php

use BB_Theme\FunctionHelpers;

$_s_posts = get_posts([
    'post_type'        => 'post',
]);

$_s_posts_converted = [];
foreach ($_s_posts as $oPost) {
    $_s_posts_converted[] = FunctionHelpers::converPostToJsPostData($oPost);
}

$_s_products = get_posts([
    'post_type'      => 'product',
]);
$_s_products_converted = [];
foreach ($_s_products as $oPost) {
    $_s_products_converted[] = FunctionHelpers::converProductToJsProduct($oPost);
}

// myVardump(wc_get_products([]));

?>

<script type="text/javascript">
    var __SERVER_DATA__ = {
        homePage: {
            sectionHero: {
                imgs: [
                    "https://images.pexels.com/photos/3569213/pexels-photo-3569213.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260",
                    "https://images.pexels.com/photos/3569213/pexels-photo-3569213.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260",
                    "https://images.pexels.com/photos/3569213/pexels-photo-3569213.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260",
                ],
            },
            sectionProducts: {
                products: <?php echo json_encode($_s_products_converted); ?>
            },
            sectionPosts: {
                left: {
                    heading: <?php echo json_encode("Về chúng tôi"); ?>,
                    desc: "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos earum sint pariatur velit, corrupti facere, illo cumque est aliquam aspernatur eaque, deleniti nemo excepturi dolorem itaque minima ratione harum explicabo!",
                    blogPageLink: "#",
                },
                right: <?php echo json_encode($_s_posts_converted); ?>
            }
        }
    };
</script>
<!-- HEADER -->
<?php get_header(); ?>



<!-- CAN TRA LAI BIEN JS : __SERVER_DATA__.homePage -->
<main id="bb-home" class="home-page">
    <div id="bb-home-react">
    </div>
</main><!-- #main -->

<?php
get_footer();
