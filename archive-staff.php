<?php get_header(); ?>
<section class="main-content l-archive-content p-archive">
      <div class="l-inner p-archive__inner">
        <h1 class="c-title c-title-big p-archive__title p-archive__stafftitle">
          STAFF
          <span>スタッフ</span>
        </h1>
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
    </section>

    <!-- breadcrumb -->
    <div class="l-breadcrumb-area">
      <ul class="p-breadcrumb page-uppercase">
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a></li>
        <li>STAFF一覧</li>
      </ul>
    </div>
    <!-- /.breadcrumb -->

<?php get_footer();