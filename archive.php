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
              $args = array(
                  'post_type'      => 'post',
                  'posts_per_page' => 15,
                  'category' => $cats_name,
              );
              $posts = get_posts($args);
              if($cats_name!==''):
              foreach ( $posts as $post ): setup_postdata( $post );
            ?>
            <div class="p-archive__article">
              <div class="p-top-news__group">
                <div class="p-top-news__infomation">
                  <p class="p-archive__date"><?php the_date('Y/m/d');?></p>
                  <?php
                            $categories = get_the_category();
                            foreach( $categories as $category ):
                                    $this_category_color = get_field( 'category-color', 'category_' . $category->term_id );
                                    $this_category_text_color = get_field( 'category-text-color', 'category_' . $category->term_id );
                        ?>
                            <p class="c-category p-top-news__category" style="background-color:<?php echo $this_category_color; ?>;"><a href="<?php echo get_category_link($category->term_id);?>" style="color:<?php echo $this_category_text_color; ?>;"><?php echo $category->name;?></a></p>
                        <?php endforeach;?>
                </div>
                <div class="p-archive__post">
                  <a href="<?php the_permalink();?>"> <?php the_title();?></a>
                </div>
              </div>
            </div>
            <?php endforeach;
            the_posts_pagination( array(
              'end_size'	=> '3', // ページ番号リストの両端に表示するページ数
                  'mid_size' 	=> '1',) );
            else:?>
            <div class="p-archive__article">
              <div class="p-top-news__group">
                <div class="p-archive__post">
                  <p>投稿記事はありません。</p>
                </div>
              </div>
            </div>
            <?php endif;wp_reset_postdata();?>
          </div>
                  <?php require_once dirname(__FILE__) .'/template/sidebar.php';?>
        </div>
      </div>
    </section>

    <!-- breadcrumb -->
    <div class="l-breadcrumb-area">
      <ul class="p-breadcrumb">
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a></li>
        <li><?php the_title(); ?></li>
      </ul>
    </div>
    <!-- /.breadcrumb -->

<?php get_footer();