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
              $args = array(
                  'post_type'      => 'post',
                  'posts_per_page' => 5,
              );
              $posts = get_posts($args);
              foreach ( $posts as $post ): setup_postdata( $post );
            ?>
            <?php the_ID();?>
            <?php endforeach; wp_reset_postdata();?>

            <div class="p-archive__article">
              <div class="p-top-news__group">
                <div class="p-top-news__infomation">
                  <p class="p-archive__date">2021/10/01</p>
                  <p class="c-category p-top-news__category">メディア</p>
                  <p class="c-category p-top-news__category">斉田季実治</p>
                </div>
                <div class="p-archive__post">
                  <a href=""> お知らせ文が入りますお知らせ文が入りますお知らせ文が入ります</a>
                </div>
              </div>
            </div>
            <!-- /.loop -->
            <div class="p-archive__article">
              <div class="p-top-news__group">
                <div class="p-top-news__infomation">
                  <p class="p-archive__date">2021/10/01</p>
                  <p class="c-category p-top-news__category">メディア</p>
                  <p class="c-category p-top-news__category">斉田季実治</p>
                </div>
                <div class="p-archive__post">
                  <a href=""> お知らせ文が入りますお知らせ文が入りますお知らせ文が入ります</a>
                </div>
              </div>
            </div>
            <div class="p-archive__article">
              <div class="p-top-news__group">
                <div class="p-top-news__infomation">
                  <p class="p-archive__date">2021/10/01</p>
                  <p class="c-category p-top-news__category">メディア</p>
                  <p class="c-category p-top-news__category">斉田季実治</p>
                </div>
                <div class="p-archive__post">
                  <a href=""> お知らせ文が入りますお知らせ文が入りますお知らせ文が入ります</a>
                </div>
              </div>
            </div>
            <div class="p-archive__article">
              <div class="p-top-news__group">
                <div class="p-top-news__infomation">
                  <p class="p-archive__date">2021/10/01</p>
                  <p class="c-category p-top-news__category">メディア</p>
                  <p class="c-category p-top-news__category">斉田季実治</p>
                </div>
                <div class="p-archive__post">
                  <a href=""> お知らせ文が入りますお知らせ文が入りますお知らせ文が入ります</a>
                </div>
              </div>
            </div>
            <div class="p-archive__article">
              <div class="p-top-news__group">
                <div class="p-top-news__infomation">
                  <p class="p-archive__date">2021/10/01</p>
                  <p class="c-category p-top-news__category">メディア</p>
                  <p class="c-category p-top-news__category">斉田季実治</p>
                </div>
                <div class="p-archive__post">
                  <a href=""> お知らせ文が入りますお知らせ文が入りますお知らせ文が入ります</a>
                </div>
              </div>
            </div>
            <div class="p-archive__article">
              <div class="p-top-news__group">
                <div class="p-top-news__infomation">
                  <p class="p-archive__date">2021/10/01</p>
                  <p class="c-category p-top-news__category">メディア</p>
                  <p class="c-category p-top-news__category">斉田季実治</p>
                </div>
                <div class="p-archive__post">
                  <a href=""> お知らせ文が入りますお知らせ文が入りますお知らせ文が入ります</a>
                </div>
              </div>
            </div>
            <div class="p-archive__article">
              <div class="p-top-news__group">
                <div class="p-top-news__infomation">
                  <p class="p-archive__date">2021/10/01</p>
                  <p class="c-category p-top-news__category">メディア</p>
                  <p class="c-category p-top-news__category">斉田季実治</p>
                </div>
                <div class="p-archive__post">
                  <a href=""> お知らせ文が入りますお知らせ文が入りますお知らせ文が入ります</a>
                </div>
              </div>
            </div>
            <div class="p-archive__article">
              <div class="p-top-news__group">
                <div class="p-top-news__infomation">
                  <p class="p-archive__date">2021/10/01</p>
                  <p class="c-category p-top-news__category">メディア</p>
                  <p class="c-category p-top-news__category">斉田季実治</p>
                </div>
                <div class="p-archive__post">
                  <a href=""> お知らせ文が入りますお知らせ文が入りますお知らせ文が入ります</a>
                </div>
              </div>
            </div>
            <div class="p-archive__article">
              <div class="p-top-news__group">
                <div class="p-top-news__infomation">
                  <p class="p-archive__date">2021/10/01</p>
                  <p class="c-category p-top-news__category">メディア</p>
                  <p class="c-category p-top-news__category">斉田季実治</p>
                </div>
                <div class="p-archive__post">
                  <a href=""> お知らせ文が入りますお知らせ文が入りますお知らせ文が入ります</a>
                </div>
              </div>
            </div>
            <div class="p-archive__article">
              <div class="p-top-news__group">
                <div class="p-top-news__infomation">
                  <p class="p-archive__date">2021/10/01</p>
                  <p class="c-category p-top-news__category">メディア</p>
                  <p class="c-category p-top-news__category">斉田季実治</p>
                </div>
                <div class="p-archive__post">
                  <a href=""> お知らせ文が入りますお知らせ文が入りますお知らせ文が入ります</a>
                </div>
              </div>
            </div>
            <div class="p-archive__article">
              <div class="p-top-news__group">
                <div class="p-top-news__infomation">
                  <p class="p-archive__date">2021/10/01</p>
                  <p class="c-category p-top-news__category">メディア</p>
                  <p class="c-category p-top-news__category">斉田季実治</p>
                </div>
                <div class="p-archive__post">
                  <a href=""> お知らせ文が入りますお知らせ文が入りますお知らせ文が入ります</a>
                </div>
              </div>
            </div>
            <div class="p-archive__article">
              <div class="p-top-news__group">
                <div class="p-top-news__infomation">
                  <p class="p-archive__date">2021/10/01</p>
                  <p class="c-category p-top-news__category">メディア</p>
                  <p class="c-category p-top-news__category">斉田季実治</p>
                </div>
                <div class="p-archive__post">
                  <a href=""> お知らせ文が入りますお知らせ文が入りますお知らせ文が入ります</a>
                </div>
              </div>
            </div>
            <div class="p-archive__article">
              <div class="p-top-news__group">
                <div class="p-top-news__infomation">
                  <p class="p-archive__date">2021/10/01</p>
                  <p class="c-category p-top-news__category">メディア</p>
                  <p class="c-category p-top-news__category">斉田季実治</p>
                </div>
                <div class="p-archive__post">
                  <a href=""> お知らせ文が入りますお知らせ文が入りますお知らせ文が入ります</a>
                </div>
              </div>
            </div>
            <div class="p-archive__article">
              <div class="p-top-news__group">
                <div class="p-top-news__infomation">
                  <p class="p-archive__date">2021/10/01</p>
                  <p class="c-category p-top-news__category">メディア</p>
                  <p class="c-category p-top-news__category">斉田季実治</p>
                </div>
                <div class="p-archive__post">
                  <a href=""> お知らせ文が入りますお知らせ文が入りますお知らせ文が入ります</a>
                </div>
              </div>
            </div>
            <div class="p-archive__article">
              <div class="p-top-news__group">
                <div class="p-top-news__infomation">
                  <p class="p-archive__date">2021/10/01</p>
                  <p class="c-category p-top-news__category">メディア</p>
                  <p class="c-category p-top-news__category">斉田季実治</p>
                </div>
                <div class="p-archive__post">
                  <a href=""> お知らせ文が入りますお知らせ文が入りますお知らせ文が入ります</a>
                </div>
              </div>
            </div>

            <!-- ページナビ Prime Strategy Page Naviプラグインの場合はこれでスタイルもOK-->
            <!-- 
              <?php
                  if (function_exists('page_navi')) :
                     page_navi();
                  endif;
              ?>
             -->
            <div class="page_navi">
              <ul>
                <li class="current"><span>1</span></li>
                <li><a href="">2</a></li>
                <li><a href="">3</a></li>
              </ul>
            </div>
            <!-- /.page-navu -->
          </div>

          <div class="p-archive__side" id="side">
            <div class="p-archive__category">
              <p class="p-archive__topic">カテゴリー</p>
              <ul class="p-archive__links">
                <li class="p-archive__link">
                  <a href="">講演</a>
                  <ul class="p-archive__sub-links">
                    <li class="p-archive__sub-link"><a href="">斉田季実治</a></li>
                    <li class="p-archive__sub-link"><a href="">斉田英子</a></li>
                  </ul>
                </li>
              </ul>
              <ul class="p-archive__links">
                <li class="p-archive__link">
                  <a href="">メディア</a>
                  <ul class="p-archive__sub-links">
                    <li class="p-archive__sub-link"><a href="">斉田季実治</a></li>
                    <li class="p-archive__sub-link"><a href="">斉田英子</a></li>
                  </ul>
                </li>
              </ul>
              <ul class="p-archive__links">
                <li class="p-archive__link">
                  <a href="">執筆</a>
                  <ul class="p-archive__sub-links">
                    <li class="p-archive__sub-link"><a href="">斉田季実治</a></li>
                    <li class="p-archive__sub-link"><a href="">斉田英子</a></li>
                  </ul>
                </li>
              </ul>
              <ul class="p-archive__links">
                <li class="p-archive__link">
                  <a href="">インタビュー</a>
                  <ul class="p-archive__sub-links">
                    <li class="p-archive__sub-link"><a href="">斉田季実治</a></li>
                    <li class="p-archive__sub-link"><a href="">斉田英子</a></li>
                  </ul>
                </li>
              </ul>
              <ul class="p-archive__links">
                <li class="p-archive__link">
                  <a href="">書籍</a>
                  <ul class="p-archive__sub-links">
                    <li class="p-archive__sub-link"><a href="">斉田季実治</a></li>
                    <li class="p-archive__sub-link"><a href="">斉田英子</a></li>
                  </ul>
                </li>
              </ul>
              <ul class="p-archive__links">
                <li class="p-archive__link">
                  <a href="">You Tube</a>
                  <ul class="p-archive__sub-links">
                    <li class="p-archive__sub-link"><a href="">斉田季実治</a></li>
                    <li class="p-archive__sub-link"><a href="">斉田英子</a></li>
                  </ul>
                </li>
              </ul>
            </div>

            <div class="p-archive__archive">
              <p class="p-archive__topic">アーカイブ</p>
              <ul class="p-archive__links">
                <li class="p-archive__link">
                  <a href="">2021年</a>
                </li>
                <li class="p-archive__link">
                  <a href="">2020年</a>
                </li>
                <li class="p-archive__link">
                  <a href="">2019年</a>
                </li>
              </ul>
            </div>
          </div>
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