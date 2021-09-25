<?php
/*
 * Template Name: Contact PAGE
 * Description: お問い合わせページテンプレート
 */
?>
<?php get_header(); ?>

    <section class="main-content l-about-content p-about">
        <div class="l-inner p-about__inner">
            <h2 class="c-title c-title-big p-about__title">
            CONTACT
            <span>お問い合わせ</span>
            </h2>
            <div class="p-about__information">
                <?php echo do_shortcode('[contact-form-7 id="550" title="コンタクトフォーム 1"]');?>
            </div>
        </div>
    </section>

    <!-- breadcrumb -->
    <div class="l-breadcrumb-area">
        <ul class="p-breadcrumb">
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a></li>
            <li><a href="#">ABOUT</a></li>
        </ul>
    </div>
    <!-- /.breadcrumb -->
<?php get_footer();