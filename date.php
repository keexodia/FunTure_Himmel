<?php get_header(); ?>
    <section class="main-content l-archive-content p-archive">
        <div class="l-inner p-archive__inner">
            <h2 class="c-title c-title-big p-archive__title">
            news
            <span>お知らせ</span>
            </h2>
            <div class="p-archive__wrapper">
            <div class="p-archive__contents" id="content">
                <!-- loop -->
                <?php
                $cats =  get_the_category();
                $cats_name='';
                foreach($cats as $cat) {
                    $cats_name.=$cat->cat_ID.',';
                }
                ?>
                <?php
                $args = array(
                    'post_type'      => 'post',
                    'posts_per_page' => 15,
                    'category' => $cats_name,
                );
                if($cats_name!==''):
                    $the_query = new WP_Query( $args );
                    if ( $the_query->have_posts() ):
                        while ( $the_query->have_posts() ):
                            $the_query->the_post();
                ?>
                <div class="p-archive__article">
                    <div class="p-top-news__group">
                        <div class="p-top-news__infomation">
                        <p class="p-archive__date"><?php the_date('Y/m/d');?></p>
                        <?php foreach($cats as $cat):?>
                            <p class="c-category p-top-news__category"><a href="<?php echo get_category_link( $cat->cat_ID ); ?>"><?php echo $cat->cat_name; ?></a></p>
                        <?php endforeach;?>
                        </div>
                        <div class="p-archive__post">
                        <a href="<?php the_permalink();?>"> <?php the_title();?></a>
                        </div>
                    </div>
                </div>
                <?php endwhile;wp_reset_postdata();endif;
                else:?>
                    <div class="p-archive__article">
                        <div class="p-top-news__group">
                            <div class="p-archive__post">
                                <p>投稿記事はありません。</p>
                            </div>
                        </div>
                    </div>
                <?php endif;?>

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
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a></li>
            <li><?php echo $category->cat_name;?></li>
        </ul>
        </div>
    <!-- /.breadcrumb -->

<?php get_footer();