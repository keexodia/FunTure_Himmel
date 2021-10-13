<?php get_header(); ?>

    <section class="main-content l-single-content p-single p-service">
        <div class="l-page__inner p-single__inner p-service__inner">
            <p class="p-single__subtitle">service</p>
            <?php
                $terms = get_the_terms( $post->ID, 'service_category' );
            ?>
            <h1 class="c-title c-title-big p-single__title">
				<?php $title = $terms[0]->slug;
							echo $title = str_replace('-',' ',$title);
				?>
            <span><?php echo $terms[0]->name;?></span>
            </h1>
            <div class="p-page__wrapper">
            <div class="p-page__contents" id="page-content">
                <?php if(get_field("photo")):?>
                    <p class="p-page__image p-service__image"><img src="<?php echo get_field("photo"); ?>"></p>
                <?php endif;?>
                <div class="p-page__container p-single-service__container">
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