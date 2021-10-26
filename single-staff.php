<?php get_header(); ?>
    <!-- main-content -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <section class="main-content l-single-staff p-single-staff">
        <div class="p-single-staff__inner">
            <h2 class="c-title c-title-big p-single-staff__title">
            staff
            <span>スタッフ</span>
            </h2>
            <div class="p-single-staff__wrap">
                <div class="p-single-staff__item">
                    <div class="p-single-staff__img">
                    <img src="<?php echo get_field('photo');?>" alt="<?php the_title();?>" />
                    </div>
                </div>
                <div class="p-single-staff__lead">
                    <!-- ここから下囲ってるp-single-staff__lead以外はfront/top-staff部分と一緒 -->
                    <div class="p-top-staff__name">
                        <p class="p-top-staff__en"><?php echo get_field('name_english');?></p>
                        <p class="p-top-staff__ja"><?php the_title();?></p>
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
                                <a href="<?php echo get_sub_field('link');?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/library/images/<?php echo get_sub_field('sns');?>.png" alt="<?php echo get_sub_field('sns');?>" />
                                </a>
                            </div>
                        <?php endwhile; ?>
                        </div>
                        <?php endif;?>
                    </div>
                        <!-- /. -->
                </div>
            </div>
        </div>
        <div class="p-single-staff__information">
            <?php the_content();?>
        </div>
    </section>
    <?php endwhile; endif; ?>
    <!-- /. -->

    <!-- link -->
    <section class="l-single-staff-link p-single-staff-link">
        <div class="l-inner p-single-staff-link__inner">
            <div class="p-single-staff-link__wrap">
            <div class="p-single-staff-link__item">
                <a href="<?php echo get_field('kouen_link');?>">講演</a>
            </div>
            <div class="p-single-staff-link__item">
                <a href="<?php echo get_field('media_link');?>">メディア</a>
            </div>
            <div class="p-single-staff-link__item">
                <a href="<?php echo get_field('books_link');?>">書籍</a>
            </div>
            </div>
        </div>
    </section>
    <!-- /. -->

    <!-- list -->
    <?php //if(get_field('Academic_treatises')||get_field('Social_activities')):?>
    <section class="l-single-staff-list p-single-staff-list">
        <div class="p-single-staff-list__inner">
            <ul class="p-single-staff-list__item">
            <?php if(get_field('Academic_treatises')):?><li><a href="<?php echo get_field('Academic_treatises');?>">学術論文等</a></li><?php endif;?>
            <?php if(get_field('Social_activities')):?><li><a href="<?php echo get_field('Social_activities');?>">社会活動等</a></li><?php endif;?>
            </ul>
        </div>
    </section>
    <?php //endif;?>
    <!-- /. -->
    <!-- breadcrumb -->
        <div class="l-breadcrumb-area">
        <ul class="p-breadcrumb">
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a></li>
            <li><?php the_title();?></li>
        </ul>
    </div>
    <!-- /.breadcrumb -->

<?php get_footer();