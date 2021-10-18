<?php get_header(); ?>
    <section class="main-content l-archive-content p-archive">
        <div class="l-inner p-archive__inner">
            <h1 class="c-title c-title-big p-archive__title">
            <?php //現在のカテゴリーを取得
            $category_slug = get_query_var('category_name');
            $cate_info = get_category_by_slug($category_slug);
            $cate_info = $cate_info->cat_ID;
            $category = get_category($cate_info);
            if($cate_info!=null):
                $title = $category->category_nicename;
                echo $title = str_replace('-',' ',$title);
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
            </h1>
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
                        <p class="p-archive__date"><?php the_time('Y/m/d');?></p>
                        <?php
                            $categories = get_the_category();
                            foreach( $categories as $category ):
                                    $this_category_color = get_field( 'category-color', 'category_' . $category->term_id );
                                    $this_category_text_color = get_field( 'category-text-color', 'category_' . $category->term_id );
                        ?>
                            <p class="c-category p-top-news__category" style="background-color:<?php echo $this_category_color; ?>;"><a href="<?php echo get_category_link($category->term_id);?>" style="color:<?php echo $this_category_text_color; ?>;"><?php echo $category->name;?></a></p>
                        <?php endforeach;?>
                        </div>
                        <div class="p-archive__post page-uppercase">
                        <?php if(get_field('link_action')=='detail'):?>
                                <a href="<?php the_permalink();?>"><?php the_title();?></a>
                            <?php elseif(get_field('link_action')=='inner_link'):?>
                                <a href="<?php echo get_field('outer_link_url');?>"><?php the_title();?></a>
                            <?php elseif(get_field('link_action')=='outer_link'):?>
                                <a href="<?php echo get_field('outer_link_url');?>" target="_blank"><?php the_title();?></a>
                            <?php elseif(get_field('link_action')=='text_only'):?>
                                <?php the_title();?>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
                <?php endwhile;
                the_posts_pagination( array(
					'end_size'	=> '3', // ページ番号リストの両端に表示するページ数
        			'mid_size' 	=> '1',) );
                wp_reset_postdata();else:?>
                <div class="p-archive__article">
                        <div class="p-top-news__group">
                            <div class="p-archive__post page-uppercase">
                                <p>投稿記事はありません。</p>
                            </div>
                        </div>
                    </div>
                <?php endif;endif;?>

                <!-- ページナビ Prime Strategy Page Naviプラグインの場合はこれでスタイルもOK-->
            </div>
                    <?php require_once dirname(__FILE__) .'/template/sidebar.php';?>
            </div>
        </div>
        </section>

        <!-- breadcrumb -->
        <div class="l-breadcrumb-area">
        <ul class="p-breadcrumb page-uppercase">
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a></li>
            <li><?php echo $category->cat_name;?></li>
        </ul>
        </div>
    <!-- /.breadcrumb -->

<?php get_footer();