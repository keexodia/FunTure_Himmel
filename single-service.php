<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <section class="main-content l-single-content p-single p-service">
        <div class="l-page__inner p-single__inner p-service__inner">
            <p class="p-single__subtitle">service</p>
            <?php
                $category = get_the_category();
                $title = $category[0]->category_nicename;
                $title = str_replace('-',' ',$title);
            ?>
            <h2 class="c-title c-title-big p-single__title">
            <?php the_field('page_english_title'); ?>
            <span><?php the_title(); ?></span>
            </h2>
            <div class="p-page__wrapper">
                <div class="p-page__contents" id="page-content">
                    <?php if(get_field("photo")):?>
                        <p class="p-page__image p-service__image"><img src="<?php echo get_field("photo"); ?>"></p>
                    <?php endif;?>
                    <div class="p-page__container p-single-service__container">
                        <?php the_content();?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; endif; ?>
        <!-- breadcrumb -->
        <div class="l-breadcrumb-area">
        <ul class="p-breadcrumb">
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a></li>
            <li><?php the_title(); ?></li>
        </ul>
        </div>
        <!-- /.breadcrumb -->
<?php get_footer();