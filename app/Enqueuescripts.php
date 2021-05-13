<?php

namespace BB_Theme;

use DirectoryIterator;

class Enqueuescripts
{

    public function __construct()
    {
        add_action('wp_enqueue_scripts', [$this, 'bb_theme_scripts']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        // 
    }


    /**
     * Enqueue scripts and styles.
     */
    function bb_theme_scripts()
    {
        wp_enqueue_style('bb-theme-style', get_stylesheet_uri(), [], _S_VERSION);
        // 
        wp_enqueue_script('bb-theme-navigation', get_template_directory_uri() . '/js/navigation.js', [], _S_VERSION, true);
        // 
        if (is_singular() && comments_open() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }
    }

    public function register_styles()
    {

        wp_enqueue_style(
            'line-awesome-style',
            'https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css',
            [],
            '1.3.0',
            'all'
        );

        wp_enqueue_style(_S_PREFIX . 'main-style', get_template_directory_uri() . '/style.css', [], _S_VERSION, 'all');
        // 
        // WILL ENABLE WHEN DEPLOY BUILD

        $dirCSS = [];
        if (is_dir(get_stylesheet_directory() . '/assets/dist/assets')) {
            $dirCSS = new DirectoryIterator(get_stylesheet_directory() . '/assets/dist/assets');
        }
        foreach ($dirCSS as $file) {
            if (pathinfo($file, PATHINFO_EXTENSION) === 'css') {
                $fullName = basename($file);
                $name = _S_PREFIX . substr(basename($fullName), 0, strpos(basename($fullName), '.'));
                wp_enqueue_style($name, get_template_directory_uri() . '/assets/dist/assets/' . $fullName, [], _S_VERSION, 'all');
            }
        }
    }
    /**
     * 
     */
    public function register_scripts()
    {

        // WILL ENABLE WHEN DEPLOY BUILD PRODUCT
        $dirJS = [];
        if (is_dir(get_stylesheet_directory() . '/assets/dist/assets')) {
            $dirJS = new DirectoryIterator(get_stylesheet_directory() . '/assets/dist/assets');
        }
        foreach ($dirJS as $file) {
            if (pathinfo($file, PATHINFO_EXTENSION) === 'js') {
                $fullName = basename($file);
                $name = _S_PREFIX . substr(basename($fullName), 0, strpos(basename($fullName), '.'));
                wp_enqueue_script($name, get_template_directory_uri() . '/assets/dist/assets/' . $fullName, [], _S_VERSION, true);
            }
        }
    }
}
