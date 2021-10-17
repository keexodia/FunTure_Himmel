<?php
/*
 * Template Name: Contact PAGE
 * Description: お問い合わせページテンプレート
 */
?>
<?php get_header(); ?>

    <section class="main-content l-about-content p-contact">
        <div class="l-inner p-about__inner">
            <h1 class="c-title c-title-big p-about__title">
            CONTACT
            <span>お問い合わせ</span>
            </h1>
            <div class="p-about__information">
                <?php the_content();?>
            </div>
        </div>
    </section>

    <!-- breadcrumb -->
    <div class="l-breadcrumb-area">
        <ul class="p-breadcrumb page-uppercase">
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a></li>
            <li><?php the_title(); ?></li>
        </ul>
    </div>
    <!-- /.breadcrumb -->
<?php get_footer();