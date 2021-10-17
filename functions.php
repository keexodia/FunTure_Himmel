<?php
//error_reporting(0);
define('FREELANCEBANK_THEME_VERSION', 'freelancebank 1.0.0');
function my_setup()
{
    add_theme_support('menus');//メニューの有効化
    add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
    add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
    //add_theme_support('title-tag'); // タイトルタグ自動生成
    add_theme_support('widgets');
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
        wp_enqueue_style( 'Farro', '//fonts.googleapis.com/css2?family=Farro:wght@400;700&display=swap' );
        wp_enqueue_script( 'swiper', '//unpkg.com/swiper@7/swiper-bundle.min.js', "", "1.0.1" );
        wp_enqueue_style( 'swiper',  '//unpkg.com/swiper@7/swiper-bundle.min.css', "", "1.0.1" );
        //wp_enqueue_style( 'slick-theme',  '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array(), '1.0.1' );
        //wp_enqueue_script( 'inview', get_template_directory_uri() . '/js/jquery.inview.js?20210326', array( 'jquery' ), '1.0.1', true );
        wp_enqueue_script( 'main', get_template_directory_uri() . '/library/js/script.js', array(), '1.0.1', true );
        wp_enqueue_style( 'style-name', get_template_directory_uri() . '/library/css/style.css', array(), '1.0.1' );
    }
    add_action('wp_enqueue_scripts', 'my_script_init');

    // 非表示にしたい項目(固定ページ)
    //add_action( 'init', 'my_remove_post_editor_support' );
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

    //navMenuの追加
    function register_freelance_menus() {
      register_nav_menus( array( //複数のナビゲーションメニューを登録する関数
      //'「メニューの位置」の識別子' => 'メニューの説明の文字列',
        'main-menu' => 'Main Menu',
        //'main-menu-sp' => 'Main Menu SP',
        'footer-menu'  => 'Footer Menu',
      ) );
    }
    add_action( 'after_setup_theme', 'register_freelance_menus' );

    // wp_nav_menuのliにclass追加
    function add_additional_class_on_li($classes, $item, $args)
    {
      if (isset($args->add_li_class)) {
        $classes['class'] = $args->add_li_class;
      }
      return $classes;
    }
    add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

    //widget
    register_sidebar(array(
      'name' => 'Sidebar' ,
      'id' => 'sidebar' ,
      'before_widget' => '<div class="widget">',
      'after_widget' => '</div>',
      'before_title' => '<h3>',
      'after_title' => '</h3>'
 ));