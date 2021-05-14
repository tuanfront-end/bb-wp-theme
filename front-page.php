<?php

use BB_Theme\FunctionHelpers;

$_s_posts = get_posts([
    'post_type'        => 'post',
    'numberposts'       => 10
]);

$_s_posts_converted = [];
foreach ($_s_posts as $oPost) {
    $_s_posts_converted[] = FunctionHelpers::converPostToJsPostData($oPost);
}

$_s_products = get_posts([
    'post_type'      => 'product',
    'numberposts'       => 10
]);
$_s_products_converted = [];
foreach ($_s_products as $oPost) {
    $_s_products_converted[] = FunctionHelpers::converProductToJsProduct($oPost);
}

$galleriesId = Redux::get_option(_S_REDUX, 'home--banner-gallery') ?? "";
// 
$aboutHeading = Redux::get_option(_S_REDUX, 'home--about-heading') ?? "";
$aboutContent = Redux::get_option(_S_REDUX, 'home--about-content') ?? "";
$aboutBlogLink = Redux::get_option(_S_REDUX, 'home--about-blogs-link') ?? "";
// 

$cl_banners = [];
foreach (explode(',', $galleriesId) as $id) {
    $o = wp_get_attachment_image_src($id, 'full');
    $cl_banners[] =  $o ?  $o[0] : '';
}

?>

<script type="text/javascript">
    var __SERVER_DATA__ = {
        homePage: {
            sectionHero: {
                imgs: <?php echo json_encode($cl_banners); ?>
            },
            sectionProducts: {
                products: <?php echo json_encode($_s_products_converted); ?>
            },
            sectionPosts: {
                left: {
                    heading: <?php echo json_encode($aboutHeading); ?>,
                    desc: <?php echo json_encode($aboutContent); ?>,
                    blogPageLink: <?php echo json_encode($aboutBlogLink); ?>,
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
