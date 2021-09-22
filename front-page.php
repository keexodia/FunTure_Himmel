<?php get_header(); ?>

    <!-- top-main -->
    <section class="l-top-main p-top-main main-content">
        <div class="p-top-main__inner">
            <!-- slider -->
            <div class="swiper p-top-main__slid p-slid">
            <div class="swiper-wrapper p-slid__item">
                <div class="swiper-slide p-slid__img"><img src="<?php echo get_template_directory_uri(); ?>/library/images/main.jpg" alt="/" /></div>
                <div class="swiper-slide p-slid__img"><img src="<?php echo get_template_directory_uri(); ?>/library/images/vision.jpg" alt="/" /></div>
                <div class="swiper-slide p-slid__img"><img src="<?php echo get_template_directory_uri(); ?>/library/images/ear.png" alt="/" /></div>
            </div>
            <div class="swiper-pagination"></div>
            </div>
            <!-- /.slider -->
            <div class="p-top-main__lead">
            <h1 class="p-top-main__title">わたし､そして家族</h1>
            <p class="p-top-main__txt">社会の基盤を整えます</p>
            <div class="c-btn p-top-main__btn">
                <a href="">view more</a>
            </div>
            </div>
        </div>
        </section>
        <!-- /.top-main -->

        <!-- vision/mission -->
        <section class="l-top-vision p-top-vision">
        <div class="l-vision p-top-vision__inner">
            <div class="p-top-vision__items">
            <div class="p-top-vision__lead">
                <h2 class="c-title p-top-vision__title">
                vision/mission
                <span>私たちの目指すもの/使命</span>
                </h2>
                <h3 class="p-top-vision__think">Think Future, Make My Story</h3>
                <div class="p-top-vision__text">
                <p class="p-top-vision__txt">空を見上げ、『天気』を予想し、伝える。</p>
                <p class="p-top-vision__txt">自分・社会を見つめ、『転機／チャンス』を掴み、進む。</p>
                <p class="p-top-vision__txt">情報を正しく理解し、知識に変換し、自ら動くひとを育む。</p>
                <p class="p-top-vision__txt">
                    <span>「確かな情報」</span>× <span>「未来予想」</span>＝<span>「自ら行動する」</span>
                </p>
                </div>
                <div class="c-btn c-btn-long p-top-vision__btn">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>vision-mission/">view more</a>
                </div>
            </div>
            <div class="p-top-vision__wrap">
                <div class="p-top-vision__img">
                <img src="<?php echo get_template_directory_uri(); ?>/library/images/vision.jpg" alt="/" />
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- /.vision/mission -->

    <!-- news -->
    <section class="l-top-news p-top-news">
        <div class="l-news">
            <div class="p-top-news__wrapper">
                <div class="p-top-news__guide">
                    <h2 class="c-title p-top-news__title">
                    news
                    <span>ニュース</span>
                    </h2>
                    <div class="c-btn c-btn-short p-top-news__btn">
                    <a href="">view more</a>
                    </div>
                </div>
                <div class="p-top-news__article">
                    <div class="p-top-news__group">
                    <div class="p-top-news__infomation">
                        <p class="p-top-news__date">2021/10/01</p>
                        <p class="c-category p-top-news__category">メディア</p>
                        <p class="c-category p-top-news__category">斉田季実治</p>
                    </div>
                    <div class="p-top-news__post">
                        <a href=""> お知らせ文が入りますお知らせ文が入りますお知らせ文が入ります</a>
                    </div>
                    </div>
                    <div class="p-top-news__group">
                    <div class="p-top-news__infomation">
                        <p class="p-top-news__date">2021/10/01</p>
                        <p class="c-category p-top-news__category">メディア</p>
                        <p class="c-category p-top-news__category">斉田季実治</p>
                    </div>
                    <div class="p-top-news__post">
                        <a href=""> お知らせ文が入りますお知らせ文が入りますお知らせ文が入ります</a>
                    </div>
                    </div>
                    <div class="p-top-news__group">
                    <div class="p-top-news__infomation">
                        <p class="p-top-news__date">2021/10/01</p>
                        <p class="c-category p-top-news__category">メディア</p>
                        <p class="c-category p-top-news__category">斉田季実治</p>
                    </div>
                    <div class="p-top-news__post">
                        <a href=""> お知らせ文が入りますお知らせ文が入りますお知らせ文が入ります</a>
                    </div>
                    </div>
                    <div class="p-top-news__group">
                    <div class="p-top-news__infomation">
                        <p class="p-top-news__date">2021/10/01</p>
                        <p class="c-category p-top-news__category">メディア</p>
                        <p class="c-category p-top-news__category">斉田季実治</p>
                    </div>
                    <div class="p-top-news__post">
                        <a href=""> お知らせ文が入りますお知らせ文が入りますお知らせ文が入ります</a>
                    </div>
                    </div>
                    <div class="p-top-news__group">
                    <div class="p-top-news__infomation">
                        <p class="p-top-news__date">2021/10/01</p>
                        <p class="c-category p-top-news__category">メディア</p>
                        <p class="c-category p-top-news__category">斉田季実治</p>
                    </div>
                    <div class="p-top-news__post">
                        <a href=""> お知らせ文が入りますお知らせ文が入りますお知らせ文が入ります</a>
                    </div>
                    </div>
                </div>
            </div>

        <?php if( have_rows('news_banner') ): ?>
            <div class="p-top-news__about p-top-about">
                <div class="p-top-about__wrap">
                    <!-- loop -->
                    <?php while( have_rows('news_banner') ): the_row();?>
                        <div class="c-card p-top-about__card">
                            <a href="<?php echo get_sub_field('link');?>">
                                <div class="c-card-img">
                                <img src="<?php echo get_sub_field('photo');?>" alt="<?php echo get_sub_field('title');?>" />
                                </div>
                                <h3 class="c-card-title">
                                <?php echo get_sub_field('title');?>
                                <span><?php echo get_sub_field('subtitle');?></span>
                                </h3>
                            </a>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif;?>
        </div>
    </section>
    <!-- /.news -->

    <!-- service -->
    <section class="l-top-service p-top-service">
        <div class="l-service p-top-service__inner">
            <h2 class="c-title p-top-service__title">
            service
            <span>サービス</span>
            </h2>
            <div class="p-top-service__wrap">
                <!-- loop -->
                <?php
                    $args = array(
                        'post_type'      => 'service',
                        'posts_per_page' => 5,
                    );
                    $posts = get_posts($args);
                    foreach ( $posts as $post ): setup_postdata( $post );
                ?>

                <div class="c-card-tile p-top-service__card">
                    <div class="c-card-img-tile">
                        <img src="<?php echo get_field("photo"); ?>" alt="<?php the_title(); ?>" />
                    </div>
                    <div class="c-card-txt">
                    <h3 class="c-card-title-tile"><?php the_title(); ?></h3>
                    <p class="c-card-lead">
                        <?php the_excerpt(); ?>
                    </p>
                    <div class="c-btn c-btn-short c-card-tile-btn">
                        <a href="<?php the_permalink();?>">view more</a>
                    </div>
                    </div>
                </div>
                <?php endforeach; wp_reset_postdata();?>
                <!-- /.loop -->
            </div>
        </div>
    </section>
    <!-- /.service -->

    <!-- staff -->
    <section class="l-top-staff p-top-staff">
        <div class="p-top-staff__inner">
            <h2 class="c-title p-top-staff__title">
            staff
            <span>スタッフ</span>
            </h2>
            <div class="p-top-staff__wrap">
            <div class="p-top-staff__item">
                <div class="p-top-staff__img">
                <img src="<?php echo get_template_directory_uri(); ?>/library/images/staff11.png" alt="/" />
                </div>
                <div class="p-top-staff__lead">
                <div class="p-top-staff__name">
                    <p class="p-top-staff__en">Kimiharu Saita</p>
                    <p class="p-top-staff__ja">斉田 季実治</p>
                </div>
                <div class="p-top-staff__text">
                    <div class="p-top-staff__txt">
                    <p class="p-top-staff__txt">気象予報士／気象キャスター</p>
                    <p class="p-top-staff__txt">(NHK総合 ニュースウオッチ9 21:00-22:00）</p>
                    <p class="p-top-staff__txt">
                        防災士、危機管理士１級、星空案内人(星のソムリエ) ABLab宇宙天気プロジェクトマネージャ
                    </p>
                    </div>
                    <div class="p-top-staff__sns">
                    <div class="p-top-staff__icon p-top-staff__facebook">
                        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/library/images/facebook.png" alt="" /></a>
                    </div>
                    <div class="p-top-staff__icon p-top-staff__twitter">
                        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/library/images/ic_twitter.png" alt="" /></a>
                    </div>
                    <div class="p-top-staff__icon p-top-staff__instagram">
                        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/library/images/instagram.png" alt="" /></a>
                    </div>
                    </div>
                    <div class="c-btn c-btn-short p-top-staff__btn">
                    <a href="">view more</a>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="p-top-staff__wrap">
            <div class="p-top-staff__item p-top-staff__row">
                <div class="p-top-staff__img">
                <img src="<?php echo get_template_directory_uri(); ?>/library/images/staff33.png" alt="/" />
                </div>
                <div class="p-top-staff__lead p-top-staff__lead--row">
                <div class="p-top-staff__name">
                    <p class="p-top-staff__en">Eiko Saita</p>
                    <p class="p-top-staff__ja">斉田英子</p>
                </div>
                <div class="p-top-staff__text">
                    <div class="p-top-staff__txt">
                    <p class="p-top-staff__txt">中央大学法学部 兼任講師</p>
                    <p class="p-top-staff__txt">博士（学術）</p>
                    <p class="p-top-staff__txt">コーチ</p>
                    <p class="p-top-staff__txt">国家資格キャリアコンサルタント</p>
                    </div>
                    <div class="p-top-staff__sns">
                    <div class="p-top-staff__icon p-top-staff__facebook">
                        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/library/images/facebook.png" alt="facebook" /></a>
                    </div>

                    <div class="p-top-staff__icon p-top-staff__instagram">
                        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/library/images/instagram.png" alt="instagram" /></a>
                    </div>
                    <div class="p-top-staff__icon p-top-staff__note">
                        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/library/images/note.png" alt="note" /></a>
                    </div>
                    <div class="p-top-staff__icon p-top-staff__memo">
                        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/library/images/memo.png" alt="memo" /></a>
                    </div>
                    </div>
                    <div class="c-btn c-btn-short p-top-staff__btn">
                    <a href="">view more</a>
                    </div>
                </div>
                </div>
            </div>
            <div class="c-btn c-btn-long p-top-staffs__btn">
                <a href="">スタッフ一覧</a>
            </div>
            </div>
        </div>
    </section>
    <!-- staff -->

    <!-- link -->
    <section class="l-link p-link">
        <div class="l-inner p-link__inner">
            <div class="p-link__wrap">
            <?php if( have_rows('sns_banner') ): ?>
                <?php while( have_rows('sns_banner') ): the_row();?>
                <div class="p-link__item">
                    <a class="p-link__block">
                        <div class="p-link__sns">
                            <img src="<?php echo get_sub_field('sns_logo');?>" alt="twitter" />
                        </div>
                        <div class="p-link__txt">
                            <?php if(get_sub_field('text_or_photo')):?>
                                <p class="p-link__name"><?php echo get_sub_field('upper_text');?></p>
                            <?php else:?>
                                <p class="p-link__txt--img"><img src="<?php echo get_sub_field('upper_img');?>" alt="" /></p>
                            <?php endif;?>
                            <p class="p-link__name"><?php echo get_sub_field('bottom_text');?></p>
                        </div>
                    </a>
                </div>
                <?php endwhile; ?>
            <?php endif;?>
            <?php if( have_rows('company_banner') ): ?>
                <?php while( have_rows('company_banner') ): the_row();?>
                <div class="p-link__item p-link__item--asset">
                    <a class="p-link__block p-link__block--asset">
                    <div class="p-link__asset">
                        <img src="<?php echo get_sub_field('company_logo');?>" alt="ablad" />
                    </div>
                    </a>
                    <p class="p-link__guide"><?php echo get_sub_field('company');?></p>
                </div>
                <?php endwhile; ?>
            <?php endif;?>
            </div>
        </div>
    </section>
    <!-- /.link -->

    <!-- footer-contact -->
    <section class="l-footer-contact p-footer-contact">
        <div class="l-inner p-footer-contact__inner">
            <h2 class="c-title p-footer-contact__title">
            contact
            <span>お問い合わせ</span>
            </h2>
            <div class="c-btn-clear p-footer-contact__btn">
            <a href="/">お問い合わせフォームはこちら </a>
            </div>
        </div>
    </section>
    <!-- /.footer-contact -->
<?php get_footer();