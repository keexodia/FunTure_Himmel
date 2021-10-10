<?php
/*
 * Template Name: Social Page
 * Template Post type:post,social
 * Description: ソーシャルページテンプレート
 */
?>
<?php get_header(); ?>

    <section class="main-content l-single-content p-single">
        <div class="l-page__inner p-single__inner">
            <p class="p-single__subtitle">EIKO SAITA</p>
            <h1 class="c-title c-title-big p-single__title">
            SOCIAL ACTIVITIES, ETC.
            <span>社会活動等</span>
            </h1>
            <div class="p-page__wrapper">
            <div class="p-page__contents" id="page-content">
                <p class="p-page__image"><img src="./assets/img/ear.png"></p>

                <div class="p-page__container">
                    <?php the_content(); ?>
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