<?php get_header(); ?>
    <section class="main-content l-archive-content p-archive">
        <div class="l-inner p-archive__inner">
            <h2 class="c-title c-title-big p-archive__title">
            <?php //現在のカテゴリーを取得
            $uri = rtrim($_SERVER["REQUEST_URI"], '/');
            $uri = substr($uri, strrpos($uri, '/') + 1);
            $cate_info = get_category_by_slug($uri);
            $cate_info = $cate_info->cat_ID;
            $category = get_category($cate_info);
            if($cate_info!=null):
                echo $category->category_nicename;
            else:
                echo 'News';
            endif;
            ?>
            <span><?php
            if($cate_info!=null):
                echo $category->cat_name;
            else:
                echo 'お知らせ';
            endif;
            ?></span>
            </h2>
            <div class="p-archive__wrapper">
            <div class="p-archive__contents" id="content">
                <!-- loop -->

                <?php
                $paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
                $args = array(
                    'post_type'      => 'post',
                    'cat' => $cate_info,
                    'paged' => $paged,
                );
                if($cate_info!==''):
                    $the_query = new WP_Query( $args );
                    if ( $the_query->have_posts() ):
                        while ( $the_query->have_posts() ):
                            $the_query->the_post();
                ?>
                <div class="p-archive__article">
                    <div class="p-top-news__group">
                        <div class="p-top-news__infomation">
                        <p class="p-archive__date"><?php the_date('Y/m/d');?></p>
                        <?php
                            $cats =  get_the_category();
                            foreach($cats as $cat):
                        ?>
                            <p class="c-category p-top-news__category"><a href="<?php echo get_category_link( $cat->cat_ID ); ?>"><?php echo $cat->cat_name; ?></a></p>
                        <?php endforeach;?>
                        </div>
                        <div class="p-archive__post">
                        <a href="<?php the_permalink();?>"> <?php the_title();?></a>
                        </div>
                    </div>
                </div>
                <?php endwhile;
                the_posts_pagination( $args );
                wp_reset_postdata();else:?>
                <div class="p-archive__article">
                        <div class="p-top-news__group">
                            <div class="p-archive__post">
                                <p>投稿記事はありません。</p>
                            </div>
                        </div>
                    </div>
                <?php endif;endif;?>

                <!-- ページナビ Prime Strategy Page Naviプラグインの場合はこれでスタイルもOK-->
                <!--
                <?php
                    if (function_exists('page_navi')) :
                        page_navi('');
                    endif;
                ?>
                -->
                <!-- <div class="page_navi">
                <ul>
                    <li class="current"><span>1</span></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                </ul>
                </div> -->
                <!-- /.page-navu -->
            </div>
                    <?php require_once dirname(__FILE__) .'/template/sidebar.php';?>
            </div>
        </div>
        </section>

        <!-- breadcrumb -->
        <div class="l-breadcrumb-area">
        <ul class="p-breadcrumb">
            <li><a href="">HOME</a></li>
            <li><a href="">ページ名</a></li>
        </ul>
        </div>
    <!-- /.breadcrumb -->

<?php get_footer();