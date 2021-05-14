<?php

/**
 * ReduxFramework Barebones Sample Config File
 * For full documentation, please visit: http://docs.reduxframework.com/
 */

if (!class_exists('Redux')) {
    return;
}

// This is your option name where all the Redux data is stored.
$opt_name = _S_REDUX;

$theme = wp_get_theme(); // For use with some settings. Not necessary.

$args = array(
    'opt_name'             => $opt_name,
    'display_name'         => $theme->get('Name'),
    'display_version'      => $theme->get('Version'),
    'menu_type'            => 'menu',
    'allow_sub_menu'       => false,
    // Show the sections below the admin menu item or not
    'menu_title'           => __('Sample Options', 'redux-framework-demo'),
    'page_title'           => __('Sample Options', 'redux-framework-demo'),
    'google_api_key'       => '',
    'google_update_weekly' => false,
    'async_typography'     => true,
    'admin_bar'            => true,
    'admin_bar_icon'       => 'dashicons-portfolio',
    'admin_bar_priority'   => 50,
    'global_variable'      => '',
    'dev_mode'             => true,
    // Show the time the page took to load, etc
    'update_notice'        => true,
    'customizer'           => true,

    // OPTIONAL -> Give you extra features
    'page_priority'        => null,
    'page_parent'          => 'themes.php',
    'page_permissions'     => 'manage_options',
    'menu_icon'            => '',
    // Specify a custom URL to an icon
    'last_tab'             => '',
    // Force your panel to always open to a specific tab (by id)
    'page_icon'            => 'icon-themes',
    // Icon displayed in the admin panel next to your menu_title
    'page_slug'            => '_options',
    // Page slug used to denote the panel
    'save_defaults'        => true,
    // On load save the defaults to DB before user clicks save or not
    'default_show'         => false,
    // If true, shows the default value next to each field that is not the default value.
    'default_mark'         => '',
    // What to print by the field's title if the value shown is default. Suggested: *
    'show_import_export'   => true,
    // Shows the Import/Export panel when not used as a field.
    'transient_time'       => 60 * MINUTE_IN_SECONDS,
    'output'               => true,
    // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
    'output_tag'           => true,
    'database'             => '',
    'use_cdn'              => true,

    // HINTS
    'hints'                => array(
        'icon'          => 'el el-question-sign',
        'icon_position' => 'right',
        'icon_color'    => 'lightgray',
        'icon_size'     => 'normal',
        'tip_style'     => array(
            'color'   => 'light',
            'shadow'  => true,
            'rounded' => false,
            'style'   => '',
        ),
        'tip_position'  => array(
            'my' => 'top left',
            'at' => 'bottom right',
        ),
        'tip_effect'    => array(
            'show' => array(
                'effect'   => 'slide',
                'duration' => '500',
                'event'    => 'mouseover',
            ),
            'hide' => array(
                'effect'   => 'slide',
                'duration' => '500',
                'event'    => 'click mouseleave',
            ),
        ),
    )
);

// Panel Intro text -> before the form
if (!isset($args['global_variable']) || $args['global_variable'] !== false) {
    if (!empty($args['global_variable'])) {
        $v = $args['global_variable'];
    } else {
        $v = str_replace('-', '_', $args['opt_name']);
    }
}

// Add content after the form.
$args['footer_text'] = __('<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'redux-framework-demo');

Redux::setArgs($opt_name, $args);

/*
     * ---> END ARGUMENTS
     */

/*
     * ---> START HELP TABS
     */

$tabs = array(
    array(
        'id'      => 'redux-help-tab-1',
        'title'   => __('Theme Information 1', 'redux-framework-demo'),
        'content' => __('<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo')
    ),
    array(
        'id'      => 'redux-help-tab-2',
        'title'   => __('Theme Information 2', 'redux-framework-demo'),
        'content' => __('<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo')
    )
);
Redux::setHelpTab($opt_name, $tabs);

// Set the help sidebar
$content = __('<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo');
Redux::setHelpSidebar($opt_name, $content);


/*
     * <--- END HELP TABS
     */


/*
     *
     * ---> START SECTIONS
     *
     */

/*
        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for
     */


// -> START Basic Fields
Redux::setSection($opt_name, array(
    'title'  => __('Cài đặt chung', 'redux-framework-demo'),
    'id'     => 'options',
    'desc'   => __('Cài đặt các setting dùng chung cho toàn trang', 'redux-framework-demo'),
    'icon'   => 'el el-home',
    'fields' => [
        [
            'id'       => 'options--logo',
            'type'     => 'media',
            'url'      => true,
            'title'    => __('Logo', 'redux-framework-demo'),
            'subtitle'     => __('Upload logo của bạn', 'redux-framework-demo'),
            'default'  => array(
                'url' => 'http://s.wordpress.org/style/images/codeispoetry.png'
            ),
        ],
        [
            'id'       => 'options--logo-text',
            'type'     => 'text',
            'title'    => __('Logo Text', 'redux-framework-demo'),
            'subtitle' => __('Logo ở dạng chuỗi', 'redux-framework-demo'),
            'default'  => 'bb-enquitpment.',
        ],
        [
            'id'       => 'options--copyright',
            'type'     => 'textarea',
            'title'    => __('Coppyright', 'redux-framework-demo'),
            'subtitle' => __('Chỉnh sửa phần nội dung Coppyright', 'redux-framework-demo'),
            'default'  => '© 2021 bb-enquitment - Nghiaxchis Wordpress theme',
        ],
        [
            'id'       => 'options--facebook-url',
            'type'     => 'text',
            'title'    => __('Facebook url', 'redux-framework-demo'),
            'desc'     => __('Link trang facebook của bạn', 'redux-framework-demo'),
            'subtitle' => __('Copy link và paste vào input này', 'redux-framework-demo'),
            'default'  =>   '#'
        ],
        [
            'id'       => 'options--twitter-url',
            'type'     => 'text',
            'title'    => __('Twitter url', 'redux-framework-demo'),
            'desc'     => __('Link trang twitter của bạn', 'redux-framework-demo'),
            'subtitle' => __('Copy link và paste vào input này', 'redux-framework-demo'),
            'default'  =>   '#'
        ],
        [
            'id'       => 'options--instagram-url',
            'type'     => 'text',
            'title'    => __('Instagram url', 'redux-framework-demo'),
            'desc'     => __('Link trang instagram của bạn', 'redux-framework-demo'),
            'subtitle' => __('Copy link và paste vào input này', 'redux-framework-demo'),
            'default'  =>   '#'
        ],
        [
            'id'       => 'options--youtube-url',
            'type'     => 'text',
            'title'    => __('Youtube url', 'redux-framework-demo'),
            'desc'     => __('Link trang youtube của bạn', 'redux-framework-demo'),
            'subtitle' => __('Copy link và paste vào input này', 'redux-framework-demo'),
            'default'  =>   '#'
        ],
    ]
));

// -> START Basic Fields
Redux::setSection($opt_name, array(
    'title'  => __('Trang chủ', 'redux-framework-demo'),
    'id'     => 'home',
    'desc'   => __('Cài đặt các setting trong trang chủ', 'redux-framework-demo'),
    'icon'   => 'el el-home',
    'fields' => []
));



Redux::setSection($opt_name, array(
    'title'      => __('Banner', 'redux-framework-demo'),
    'desc'       => __('Cài đặt ảnh cho section banner', 'redux-framework-demo'),
    'id'         => 'home--banner',
    'subsection' => true,
    'fields'     => [
        [
            'id'       => 'home--banner-gallery',
            'type'     => 'gallery',
            'title'    => __('Add/Edit Gallery', 'redux-framework-demo'),
            'subtitle' => __('Chọn các ảnh sẽ hiện thị trong gallary banner', 'redux-framework-demo'),
        ]
    ]
));

Redux::setSection($opt_name, array(
    'title'      => __('Section About', 'redux-framework-demo'),
    'desc'       => __('Chỉnh sửa nội dung phần About Us', 'redux-framework-demo'),
    'id'         => 'home--about',
    'subsection' => true,
    'fields'     => [
        [
            'id' => 'home--about-heading',
            'type' => 'text',
            'title' => __('Tiêu đề', 'redux_docs_generator'),
            'subtitle' => __('Chỉnh sửa nội dung tiêu đề giới thiệu', 'redux_docs_generator'),
            'default'  => 'Về chúng tôi',
        ],
        [
            'id'       => 'home--about-content',
            'type'     => 'textarea',
            'title'    => __('Nội dung', 'redux-framework-demo'),
            'subtitle' => __('Chỉnh sửa phần nội dung giới thiệu', 'redux-framework-demo'),
            'default'  => 'Chỉnh sửa phần nội dung giới thiệu về chúng tôi',
        ],
        [
            'id' => 'home--about-blogs-link',
            'type' => 'text',
            'title' => __('Link trang bài viết', 'redux_docs_generator'),
            'subtitle' => __('Nhập link trang bài viết ở cuối section', 'redux_docs_generator'),
            'default'  => '#'
        ],
    ]
));

    /*
     * <--- END SECTIONS
     */