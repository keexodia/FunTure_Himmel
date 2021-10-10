<?php get_header(); ?>

    <section class="main-content l-single-content p-single">
        <div class="l-page__inner p-single__inner">
            <?php if(get_field("upper_title")):?>
                <p class="p-single__subtitle"><?php echo get_field("upper_title"); ?></p>
            <?php endif;?>
            <h1 class="c-title c-title-big p-single__title">
            <?php echo get_field("page_english_title"); ?>
                <span><?php the_title(); ?></span>
            </h1>
            <div class="p-page__wrapper">
            <div class="p-page__contents" id="page-content">
                <?php if(get_field("page_img")):?>
                    <p class="p-page__image"><img src="<?php echo get_field("page_img"); ?>"></p>
                <?php endif;?>
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