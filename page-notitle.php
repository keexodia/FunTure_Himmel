<?php
/*
 Template Name: デフォルトテンプレート（タイトルなし）
*/
?>
<?php get_header(); ?>

<section class="main-content l-single-content p-single">
    <div class="l-page__inner p-single__inner">
        <div class="p-page__wrapper">
            <div class="p-page__contents">
                <div class="p-page__container">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
@media screen and (max-width: 767px) {
.main-content {
    margin-top: 0;
    padding-bottom: 0;
}
}
</style>

<!-- breadcrumb -->
<div class="l-breadcrumb-area">
    <ul class="p-breadcrumb page-uppercase">
        <li><a href="<?php echo esc_url(home_url('/')); ?>">HOME</a></li>
        <li><?php the_title(); ?></li>
    </ul>
</div>
<!-- /.breadcrumb -->
<?php get_footer();
