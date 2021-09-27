<?php get_header(); ?>

    <section class="main-content l-single-content p-single">
        <div class="l-page__inner p-single__inner p-service__inner">
            <p class="p-single__subtitle">service</p>
            <?php
                $category = get_the_category();
            ?>
            <h2 class="c-title c-title-big p-single__title">
            <?php echo $category[0]->category_nicename;?>
            <span><?php echo $category[0]->name;?></span>
            </h2>
            <div class="p-page__wrapper">
            <div class="p-page__contents" id="page-content">
                <?php if(get_field("photo")):?>
                    <p class="p-page__image p-service__image"><img src="<?php echo get_field("photo"); ?>"></p>
                <?php endif;?>
                <div class="p-page__container">
                    <?php the_content();?>
                </div>
            </div>
        </section>

        <!-- breadcrumb -->
        <div class="l-breadcrumb-area">
        <ul class="p-breadcrumb">
            <li><a href="">HOME</a></li>
            <li><a href=""><?php the_title(); ?></a></li>
        </ul>
        </div>
        <!-- /.breadcrumb -->
<?php get_footer();