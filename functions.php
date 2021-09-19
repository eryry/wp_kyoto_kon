<?php
if (!defined('ABSPATH')) {
    exit;
}

function add_query_vars_filter($vars)
{
    $vars[] = "param";
    return $vars;
}

add_filter('query_vars', 'add_query_vars_filter');

function wp_jquery_method()
{
    wp_enqueue_script(
        'jquery',
        get_stylesheet_directory_uri() . '/js/jquery.min.js'
    );
}

add_action('wp_enqueue_scripts', 'wp_jquery_method');

function wp_popper_method()
{
    wp_enqueue_script(
        'popper',
        get_stylesheet_directory_uri() . '/js/popper.min.js'
    );
}

add_action('wp_enqueue_scripts', 'wp_popper_method');

function wp_bootstrap_method()
{
    wp_enqueue_script(
        'bootstrap',
        get_stylesheet_directory_uri() . '/js/bootstrap.min.js'
    );
}

add_action('wp_enqueue_scripts', 'wp_bootstrap_method');

function wp_jquery_easing_method()
{
    wp_enqueue_script(
        'easing',
        get_stylesheet_directory_uri() . '/js/jquery.easing.min.js'
    );
}

add_action('wp_enqueue_scripts', 'wp_jquery_easing_method');

function wp_scrollspy_method()
{
    wp_enqueue_script(
        'scrollspy',
        get_stylesheet_directory_uri() . '/js/scrollspy.min.js'
    );
}

add_action('wp_enqueue_scripts', 'wp_scrollspy_method');

function wp_isotope_method()
{
    wp_enqueue_script(
        'isotope',
        get_stylesheet_directory_uri() . '/js/isotope.js'
    );
}

add_action('wp_enqueue_scripts', 'wp_isotope_method');

function wp_jquery_magnific_popup_min_method()
{
    wp_enqueue_script(
        'magnific-popup',
        get_stylesheet_directory_uri() . '/js/jquery.magnific-popup.min.js'
    );
}

add_action('wp_enqueue_scripts', 'wp_jquery_magnific_popup_min_method');

function wp_typed_method()
{
    wp_enqueue_script(
        'typed',
        get_stylesheet_directory_uri() . '/js/typed.js'
    );
}

add_action('wp_enqueue_scripts', 'wp_typed_method');

function wp_owl_carousel_min_method()
{
    wp_enqueue_script(
        'carousel',
        get_stylesheet_directory_uri() . '/js/owl.carousel.min.js'
    );
}

add_action('wp_enqueue_scripts', 'wp_owl_carousel_min_method');

function wp_custom_method()
{
    wp_enqueue_script(
        'custom',
        get_stylesheet_directory_uri() . '/js/custom.js'
    );
}

add_action('wp_enqueue_scripts', 'wp_custom_method');

function wp_fade_in_method()
{
    wp_enqueue_script(
        'fade_in',
        get_stylesheet_directory_uri() . '/js/fade_in.js'
    );
}

add_action('wp_enqueue_scripts', 'wp_fade_in_method');

function wp_page_top_method()
{
    wp_enqueue_script(
        'page_top',
        get_stylesheet_directory_uri() . '/js/page_top.js'
    );
}

add_action('wp_enqueue_scripts', 'wp_page_top_method');

function wp_faq_method()
{
    wp_enqueue_script(
        'faq',
        get_stylesheet_directory_uri() . '/js/faq.js'
    );
}

add_action('wp_enqueue_scripts', 'wp_faq_method');


function wp_header_footer_method()
{
    wp_enqueue_script(
        'header_footer',
        get_stylesheet_directory_uri() . '/js/header_footer.js'
    );
}

add_action('wp_enqueue_scripts', 'wp_header_footer_method');

function wp_consultation_method()
{
    wp_enqueue_script(
        'consultation',
        get_stylesheet_directory_uri() . '/js/consultation.js'
    );
}

add_action('wp_enqueue_scripts', 'wp_consultation_method');


//ページネーション
function pagenation($pages = '', $range = 2)
{
    $showitems = ($range * 1) + 1;
    global $paged;
    if (empty($paged)) $paged = 1;
    if ($pages == '') {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if (!$pages) {
            $pages = 1;
        }
    }
    if (1 != $pages) {
        // 画像を使う時用に、テーマのパスを取得
        $img_pass = get_stylesheet_directory_uri();
        echo "<ul class=\"page-nation\">";

        // 「前へ」を表示
        if ($paged > 1) echo "<li class=\"page-nation-prev\"><a href='" . get_pagenum_link($paged - 1) . "'><img src=\"$img_pass/images/blog/icon/arrow_black_left.svg\" alt=\"\"></a></li>";

        // ページ番号を出力
        for ($i = 1; $i <= $pages; $i++) {
            if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
                echo ($paged == $i) ? "<li class=\"active\">" . $i . "</li>" : // 現在のページの数字はリンク無し
                    "<li><a href='" . get_pagenum_link($i) . "'>" . $i . "</a></li>";
            }
        }

        // [...] 表示
        if (($paged + 4) < $pages) {
            echo "<li>...</li>";
            echo "<li><a href='" . get_pagenum_link($pages) . "'>" . $pages . "</a></li>";
        }

        // 「次へ」を表示
        if ($paged < $pages) echo "<li class=\"page-nation-next\"><a href='" . get_pagenum_link($paged + 1) . "'><img src=\"$img_pass/images/blog/icon/arrow_black_right.svg\" alt=\"\"></a></li>";

        echo "</ul>";
    }
}

if ( !function_exists( 'st_enqueue_scripts' ) ) {
    /**
     * スクリプトをキューへ追加
     */
    function st_enqueue_scripts() {

        wp_deregister_script( 'jquery' );

        wp_enqueue_script(
            'jquery',
            '//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js',
            array(),
            '1.11.3',
            false
        );

//        wp_enqueue_script( 'base', get_template_directory_uri() . '/js/base.js', array( 'jquery' ), false, true );

        // PCのみ追尾広告のjs読み込み
        wp_enqueue_script(
            'scroll',
            get_template_directory_uri() . '/js/scroll.js',
            array( 'jquery' ),
            false,
            true
        );

    }
}