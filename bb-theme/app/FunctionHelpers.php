<?php

namespace BB_Theme;

use WP_Term;

/**
 * FunctionHelpers class
 */
class FunctionHelpers
{
    /**
     *  and retrieves the singular or plural form based on the supplied numbe function
     *
     * @param string $singleText
     * @param string $pluralText
     * @param string $number
     * @return string
     */
    public static function translatePluralText(string $singleText,  string $pluralText, int $number): string
    {
        if (intval($number) > 1) {
            return $pluralText;
        } else {
            return $singleText;
        }
    }

    /**
     * 
     */
    public static function convertArrayCategoriesSlugToId(array $aCateSlugs = []): array
    {
        $categoriesId = [];
        foreach ($aCateSlugs as $slug) {
            $oCate = get_category_by_slug($slug);
            if ($oCate instanceof WP_Term) {
                $categoriesId[] = $oCate->term_id;
            }
        }
        return  $categoriesId;
    }

    /**
     * Function get term name and term url from postID with number term determined and postId
     *  @param int $postId
     *  @param int $number=1
     *  @param string $taxonomy=category
     * @return array [name => string,url => string][]
     */
    public static function getPostTermInfoWithNumberDetermined(int $postId, int $number = 1, string $taxonomy = 'category'): array
    {
        $aTerms = get_terms([
            'taxonomy'   => $taxonomy,
            'number'     => $number,
            'object_ids' => $postId
        ]);
        $aTermInfo = [];
        // 
        if (!isset($aTerms) || is_wp_error($aTerms)) {
            for ($i = 0; $i < $number; $i++) {
                $aTermInfo[$i] = [];
            }
            return $aTermInfo;
        }
        //
        for ($i = 0; $i < $number; $i++) {
            $aTermInfo[$i] = [
                'name' => $aTerms[$i]->name,
                'url'  => get_term_link($aTerms[$i]->term_id)
            ];
        }
        return $aTermInfo;
    }

    /**
     * @param $postDate
     * @param $format
     * @return string
     */
    public static function getDateFormat($postDate, $format = ""): string
    {
        return (!empty($format)) ? date($format, strtotime($postDate)) : date(get_option('date_format'), strtotime($postDate));
    }


    /**
     * Get featured image url of post
     *
     * @param string $postId
     * @param [thumbnail|medium|large|full] $size
     * @return string
     */
    public static function getPostFeaturedImage(string $postId, string $size = 'large'): string
    {
        $url = get_the_post_thumbnail_url($postId, $size);
        if ($url && !empty($url)) {
            return $url;
        }
        return  get_template_directory_uri() . '/front-react/build/images/placeholder.jpg';
    }

    /**
     * 
     */
    public static function getPlaceholderImageUrl(): string
    {
        return  get_template_directory_uri() . '/front-react/build/images/placeholder.jpg';
    }

    /**
     * @param $inputData
     * @return string
     */
    public static function encodeBase64($inputData): string
    {
        return base64_encode((is_array($inputData) ? json_encode($inputData) : $inputData));
    }

    /**
     * @param $outData
     */
    public static function decodeBase64($outData)
    {
        return json_decode(base64_decode($outData), true);
    }


    public static function converPostToJsPostData($post): array
    {
        return [
            'id'        => $post->ID,
            'title'     => $post->post_title,
            'img'       => self::getPostFeaturedImage($post->ID),
            'link'     => get_permalink($post->ID),
            'desc'     => $post->post_excerpt,
            'date'     => self::getDateFormat($post->post_date,)
        ];
    }

    public static function converProductToJsProduct($post): array
    {
        $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
        if (!$image || empty($image)) {
            $image = [self::getPlaceholderImageUrl()];
        }
        return [
            'id'        => $post->ID,
            'title'     => $post->post_title,
            'img'       => $image[0],
            'link'     => get_permalink($post->ID),
            'desc'     => $post->post_excerpt,
            'date'     => self::getDateFormat($post->post_date,)
        ];
    }


    /**
     * Return ra trang thai hidden cua pagination dua vao maxPage va currentPage
     *
     * @param integer $maxPage
     * @param integer $currentPage
     * @return [prev=>boolean,next=>boolean]
     */
    public static function checkPaginationShowByPaged(int $maxPage, int $currentPage = 1): array
    {

        if (!$maxPage || !$currentPage) {
            return [
                'prev' => false,
                'next' => false
            ];
        }
        // 

        if ($maxPage <= 1) {
            return [
                'prev' => false,
                'next' => false
            ];
        };

        if ($currentPage === 1) {
            return [
                'prev' => false,
                'next' => true
            ];
        };

        if ($currentPage === $maxPage) {
            return [
                'prev' => true,
                'next' => false
            ];
        };

        if ($currentPage > 1 && $currentPage < $maxPage) {
            return [
                'prev' => true,
                'next' => true
            ];
        };
    }
}
