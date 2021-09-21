<?php
//error_reporting(0);
define('FREELANCEBANK_THEME_VERSION', 'freelancebank 1.0.0')
function my_setup()
{
    add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
    add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
    add_theme_support('title-tag'); // タイトルタグ自動生成
    add_theme_support(
    'html5',
    array( //HTML5でマークアップ
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
    )
    );
    }
    add_action('after_setup_theme', 'my_setup');

    /* CSSとJavaScriptの読み込み */
    function my_script_init()
    { // WordPress提供のjquery.jsを読み込まない
        wp_deregister_script('jquery');
      // jQueryの読み込み
        wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.5.1.min.js', "", "1.0.1" );
        wp_enqueue_style( 'Noto', '//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500&display=swap' );
        wp_enqueue_script( 'slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', "", "1.0.1" );
        wp_enqueue_style( 'slick',  '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', "", "1.0.1" );
        wp_enqueue_style( 'slick-theme',  '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array(), '1.0.1' );
        wp_enqueue_script( 'inview', get_template_directory_uri() . '/js/jquery.inview.js?20210326', array( 'jquery' ), '1.0.1', true );
        wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js?20210616', array( 'jquery' ), '1.0.1', true );
        wp_enqueue_style( 'style-name', get_template_directory_uri() . '/css/style.css?20210902', array(), '1.0.1' );
    }
    add_action('wp_enqueue_scripts', 'my_script_init');

    // 非表示にしたい項目(固定ページ)
    add_action( 'init', 'my_remove_post_editor_support' );
    function my_remove_post_editor_support(){
        remove_post_type_support( 'page','editor' ); //本文
        remove_post_type_support( 'page','thumbnail' ); // アイキャッチ
    }
  //記事表示時の整形無効
    add_action(
        'wp_head',
    function(){
        remove_filter('the_content', 'wpautop');
        remove_filter('the_excerpt', 'wpautop');
    }
    );
  //ビジュアルエディタ(TinyMCE)の整形無効
    add_filter(
    'tiny_mce_before_init',
    function($init_array){
        global $allowedposttags;
        $init_array['valid_elements']          = '*[*]';
        $init_array['extended_valid_elements'] = '*[*]';
        $init_array['valid_children']          = '+a[' . implode( '|', array_keys( $allowedposttags ) ) . ']';
        $init_array['indent']                  = true;
        $init_array['wpautop']                 = false;
        $init_array['force_p_newlines']        = false;
        return $init_array;
    }
    );