<?php get_header(); ?>

    <!-- top-main -->
    <section class="l-top-main p-top-main main-content">
        <div class="p-top-main__inner">
            <!-- slider -->
            <div class="swiper p-top-main__slid p-slid  p-slid--pc">
                <div class="swiper-wrapper p-slid__item">

                        <?php if( have_rows('top-slider') ): ?>
                                <?php while( have_rows('top-slider') ): the_row();?>
                                <div class="swiper-slide p-slid__img">
                                    <?php if(get_sub_field('slider-url')):?><a href="<?php echo get_sub_field('slider-url');?>"><?php endif;?>
                                        <?php if(get_sub_field('slider-img')):?><img src="<?php echo get_sub_field('slider-img');?>" alt="/" /><?php endif;?>
                                    <?php if(get_sub_field('slider-url')):?></a><?php endif;?>
                                </div>
                                <?php endwhile; ?>
                        <?php endif;?>

                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="swiper p-top-main__slid p-slid  p-slid--sp">
                <div class="swiper-wrapper p-slid__item">
                    <?php if( have_rows('top-slider') ): ?>
                        <?php while( have_rows('top-slider') ): the_row();?>
                            <div class="swiper-slide p-slid__img p-slid--sp">
                                <?php if(get_sub_field('slider-url')):?><a href="<?php echo get_sub_field('slider-url');?>"><?php endif;?>
                                    <?php if(get_sub_field('slider-img-sp')):?><img src="<?php echo get_sub_field('slider-img-sp');?>" alt="/" /><?php endif;?>
                                <?php if(get_sub_field('slider-url')):?></a><?php endif;?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif;?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <!-- /.slider -->
            <!-- <div class="p-top-main__lead">
            <h1 class="p-top-main__title">わたし､そして家族</h1>
            <p class="p-top-main__txt">社会の基盤を整えます</p>
            <div class="c-btn p-top-main__btn">
                <a href="">view more</a>
            </div>
            </div> -->
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
                <h3 class="p-top-vision__think">Think Future, <br class="visible-xxxxxs visible-xxxxs visible-xxxs">Make My Story</h3>
                <div class="p-top-vision__text">
                <p class="p-top-vision__txt">空を見上げ、『天気』を予想し、伝える。</p>
                <p class="p-top-vision__txt">自分・社会を見つめ、<br class="visible-xxxxxs visible-xxxxs visible-xxxs">『転機／チャンス』を掴み、進む。</p>
                <p class="p-top-vision__txt">情報を正しく理解し、知識に変換し、<br class="visible-xxxxxs visible-xxxxs visible-xxxs">自ら動くひとを育む。</p>
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
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>news/">view more</a>
                    </div>
                </div>
                <div class="p-top-news__article">

                <?php
                    $args = array(
                        'post_type'      => 'post',
                        'posts_per_page' => 5,
                    );
                    $posts = get_posts($args);
                    foreach ( $posts as $post ): setup_postdata( $post );
                ?>
                    <div class="p-top-news__group">
                        <div class="p-top-news__infomation">
                            <p class="p-top-news__date"><?php the_time('Y/m/d');?></p>
                            <?php
                                $categories = get_the_category();
                                foreach( $categories as $category ):
                                    $this_category_color = get_field( 'category-color', 'category_' . $category->term_id );
                                    $this_category_text_color = get_field( 'category-text-color', 'category_' . $category->term_id );
                            ?>
                                <p class="c-category p-top-news__category" style="background-color:<?php echo $this_category_color; ?>";><a href="<?php echo get_category_link($category->term_id);?>" style="color:<?php echo $this_category_text_color; ?>";><?php echo $category->name;?></a></p>
                            <?php endforeach;?>
                        </div>
                        <div class="p-top-news__post">
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
                <?php endforeach; wp_reset_postdata();?>
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
                <?php if( have_rows('service-top') ): ?>
                    <?php while( have_rows('service-top') ): the_row();
                        $service_post = get_sub_field('link');
                    ?>
                        <div class="c-card-tile p-top-service__card">
                            <div class="c-card-img-tile">
                                <img src="<?php echo get_sub_field('img');?>" alt="<?php echo get_sub_field('title');?>" />
                            </div>
                            <div class="c-card-txt">
                            <h3 class="c-card-title-tile"><?php echo get_sub_field('title'); ?></h3>
                            <p class="c-card-lead">
                                <?php echo get_the_excerpt($service_post -> ID); ?>
                            </p>
                            <div class="c-btn c-btn-short c-card-tile-btn">
                                <a href="<?php the_permalink($service_post -> ID); ?>">view more</a>
                            </div>
                            </div>
                        </div>
                    <?php endwhile;?>
                <?php endif;?>
                <?php if( have_rows('service-bottom') ): ?>
                    <?php while( have_rows('service-bottom') ): the_row();
                        $service_post = get_sub_field('link');
                    ?>
                        <div class="c-card-tile p-top-service__card">
                            <div class="c-card-img-tile">
                                <img src="<?php echo get_sub_field('img');?>" alt="<?php echo get_sub_field('title');?>" />
                            </div>
                            <div class="c-card-txt">
                            <h3 class="c-card-title-tile"><?php echo get_sub_field('title'); ?></h3>
                            <p class="c-card-lead">
                                <?php echo get_the_excerpt($service_post -> ID); ?>
                            </p>
                            <div class="c-btn c-btn-short c-card-tile-btn">
                                <a href="<?php the_permalink($service_post -> ID); ?>">view more</a>
                            </div>
                            </div>
                        </div>
                    <?php endwhile;?>
                <?php endif;?>
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

            <?php
            $post_count = 0;
            $args = array(
                'post_type' => 'staff',
                'post_per_page' => -1,
            );
            $posts = get_posts($args);
            $max_post_count = count($posts);
            foreach($posts as $post):
            setup_postdata($post);
            ?>
            <div class="p-top-staff__wrap">
                <div class="p-top-staff__item <?php if($post_count%2==1){echo 'p-top-staff__row';}?>">
                    <div class="p-top-staff__img">
                        <img src="<?php echo get_field('photo');?>" alt="<?php the_title();?>" />
                    </div>
                    <div class="p-top-staff__lead">
                        <div class="p-top-staff__name">
                            <p class="p-top-staff__en"><?php echo get_field('name_english');?></p>
                            <p class="p-top-staff__ja" class="page-uppercase"><?php the_title();?></p>
                        </div>
                        <div class="p-top-staff__text">
                            <?php if( have_rows('achievement') ): ?>
                                <div class="p-top-staff__txt">
                                <?php while( have_rows('achievement') ): the_row();?>
                                    <?php if(get_sub_field('achievement_1')):?><p class="p-top-staff__txt"><?php echo get_sub_field('achievement_1');?></p><?php endif;?>
                                    <?php if(get_sub_field('achievement_2')):?><p class="p-top-staff__txt"><?php echo get_sub_field('achievement_2');?></p><?php endif;?>
                                    <?php if(get_sub_field('achievement_3')):?><p class="p-top-staff__txt"><?php echo get_sub_field('achievement_3');?></p><?php endif;?>
                                    <?php if(get_sub_field('achievement_4')):?><p class="p-top-staff__txt"><?php echo get_sub_field('achievement_4');?></p><?php endif;?>
                                <?php endwhile; ?>
                                </div>
                            <?php endif;?>
                            <?php if( have_rows('sns') ): ?>
                                <div class="p-top-staff__sns">
                            <?php while( have_rows('sns') ): the_row();?>
                            <?php
                                $sns = get_sub_field('sns');
                                if($sns == 'facebook'){
                                    $sns_class = 'p-top-staff__facebook';
                                }elseif($sns == 'itwitter'){
                                    $sns_class = 'p-top-staff__twitter';
                                }elseif($sns == 'instagram'){
                                    $sns_class = 'p-top-staff__instagram';
                                }elseif($sns == 'note'){
                                    $sns_class = 'p-top-staff__note';
                                }elseif($sns == 'memo'){
                                    $sns_class = 'p-top-staff__memo';
                                }
                            ?>
                                <div class="p-top-staff__icon <?php echo $sns_class;?>">
                                    <a href="<?php echo get_sub_field('link');?>" target="_blank">
                                        <img src="<?php echo get_template_directory_uri(); ?>/library/images/<?php echo get_sub_field('sns');?>.png" alt="<?php echo get_sub_field('sns');?>" />
                                    </a>
                                </div>
                            <?php endwhile; ?>
                                </div>
                            <?php endif;?>
                            <div class="c-btn c-btn-short p-top-staff__btn">
                                <a href="<?php the_permalink();?>">view more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if($post_count==$max_post_count-1):?>
                    <!--<div class="c-btn c-btn-long p-top-staffs__btn">
                        <a href="">スタッフ一覧</a>
                    </div>-->
                <?php endif;?>
            </div>
            <?php
                $post_count++;
                endforeach;
                wp_reset_postdata();
            ?>
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
                    <a href="<?php echo get_sub_field('sns_link');?>" class="p-link__block">
                        <div class="p-link__sns">
                            <img src="<?php echo get_sub_field('sns_logo');?>" alt="sns" />
                        </div>
                        <div class="p-link__txt">
                            <?php if(get_sub_field('text_or_photo')):?>
                                <p class="p-link__name"><?php echo get_sub_field('upper_text');?></p>
                            <?php else:?>
                                <p class="p-link__txt--img"><img src="<?php echo get_sub_field('upper_img');?>" alt="<?php echo get_sub_field('bottom_text');?>" /></p>
                            <?php endif;?>
                            <p class="p-link__name"><?php echo get_sub_field('bottom_text');?></p>
                        </div>
                    </a>
                </div>
                <?php endwhile; ?>
            <?php endif;?>
            </div>
            <div class="p-link__wrap p-link__wrap--second">
            <?php if( have_rows('company_banner') ): ?>
                <?php while( have_rows('company_banner') ): the_row();?>
                <div class="p-link__item p-link__item--asset">
                    <a href="<?php echo get_sub_field('company_link');?>" class="p-link__block p-link__block--asset">
                    <div class="p-link__asset">
                        <img src="<?php echo get_sub_field('company_logo');?>" alt="<?php echo get_sub_field('company');?>" />
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
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact/">お問い合わせフォームはこちら </a>
            </div>
        </div>
    </section>
    <!-- /.footer-contact -->
<?php get_footer();