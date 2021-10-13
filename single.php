<?php get_header(); ?>
    <section class="main-content l-single-content p-single">
        <div class="l-inner p-single__inner">
            <p class="p-single__subtitle">news</p>
            <?php
                $category = get_the_category();
                //echo $category[0]->name;
            ?>
            <h1 class="c-title c-title-big p-single__title">
            <?php echo $category[0]->category_nicename;?>
            <span><?php echo $category[0]->name;?></span>
            </h1>
            <div class="p-single__wrapper">
            <div class="p-single__contents" id="single-content">
                <p class="p-single__date"><?php the_date('Y/m/d');?></p>
                <h3 class="p-single__post-title"><?php the_title();?></h3>
                <?php
                    $categories = get_the_category();
                    foreach( $categories as $category ):
                        $this_category_color = get_field( 'category-color', 'category_' . $category->term_id );
                        $this_category_text_color = get_field( 'category-text-color', 'category_' . $category->term_id );
                ?>
                <p class="c-category p-single__category" style="background-color:<?php echo $this_category_color; ?>";><a href="<?php echo get_category_link($category->term_id);?>" style="color:<?php echo $this_category_text_color; ?>";><?php echo $category->name;?></a></p>
                <?php endforeach;?>

                <div class="p-single__container">
                <?php the_content();?>
                </div>

                <div class="post-navigation l-inner">
                <!-- <?php
                        if (get_previous_post()) : ?>
                        <div class="prev"><?php previous_post_link('%link', '前の記事へ'); ?></div>
                        <?php
                        endif;
                        if (get_next_post()) : ?>
                        <div class="next"><?php next_post_link('%link', '次の記事へ'); ?></div>
                        <?php
                        endif;
                    ?> -->
                <!-- <div class="prev"><a href="">前の記事へ</a></div>
                <div class="next"><a href="">次の記事へ</a></div> -->
                </div>
            </div>

            <!-- side -->
            <?php require_once dirname(__FILE__) .'/template/sidebar.php';?>
            </div>
        </div>
        </section>

        <!-- breadcrumb -->
        <div class="l-breadcrumb-area">
        <ul class="p-breadcrumb">
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a></li>
            <li><?php the_title();?></li>
        </ul>
        </div>
        <!-- /.breadcrumb -->
<?php get_footer();