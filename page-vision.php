<?php
/*
 * Template Name: Vision PAGE
 * Description: ビジョンのページテンプレート
 */
?>
<?php get_header(); ?>
    <!-- main-content -->
    <section class="main-content l-vision-content p-vision">
        <div class="p-vision__inner">
            <h1 class="c-title c-title-big p-vision__title">
            vision/mission
            <span>ビジョン/ミッション</span>
            </h1>
            <div class="p-vision__mv">
            <img src="<?php echo get_template_directory_uri(); ?>/library/images/vision.jpg" alt="vision" />
            </div>
            <h2 class="p-vision__think">Think Future, Make My Story</h2>
            <div class="p-vision__text">
            <p class="p-vision__txt">空を見上げ、『天気』を予想し、伝える。</p>
            <p class="p-vision__txt">自分・社会を見つめ、『転機／チャンス』を掴み、進む。</p>
            <p class="p-vision__txt">情報を正しく理解し、知識に変換し、自ら動くひとを育む。</p>
            <p class="p-vision__txt">
                <span>「確かな情報」</span>× <span>「未来予想」</span>＝<span>「自ら行動する」</span>
            </p>
            </div>
            <div class="p-vision__lead">
            <p class="p-vision__detail">
                私たちを取り巻く環境、社会は、急速に変化しています。各個人、組織は、確かな情報を受け取り、伝え、考え、自らの命や生活を守るため、また、命をつないでいくための行動をとる必要があります。
            </p>
            <p class="p-vision__detail">
                情報を伝える側の努力も極めて重要です。受け手に寄り添い、どのような情報を提供するのか、また、分かりやすく、丁寧に伝える工夫に努め、繰り返し発信し続ける姿勢も求められます。
            </p>
            <p class="p-vision__detail">
                私たちは、専門家として、理論やデータを分析しながら、各分野の専門家とのつながりを大事にし、直近の課題のみならず、次世代に渡すべき未来を見据え、助言、支援に努めます。
            </p>
            <p class="p-vision__detail">
                大テーマは、環境問題、気象、都市計画、住宅、まちづくり等ですが、それは一人ひとり、そして社会の最小単位である家庭にも繋がっています。これからの教育も非常に重要と考えており、私たちのあり方、生き方そのものとも捉えています。コミュニケーションを大事に真摯に取り組んで参ります。
            </p>
            </div>
        </div>
    </section>
    <!-- /.main-content -->

    <!-- service -->
    <section class="l-vision-service p-vision-service">
        <div class="l-service p-vision-service__inner">
            <h2 class="c-title p-vision-service__title">
            service
            <span>サービス</span>
            </h2>
            <div class="p-vision-service__wrap">

            <?php $front_page_id = get_option( 'page_on_front' );
            if( have_rows('service-top',$front_page_id) ): ?>
                    <?php while( have_rows('service-top',$front_page_id) ): the_row();
                        $service_post = get_sub_field('link');
                    ?>
                        <div class="c-card-short p-vision-service__card">
                        <a href="<?php the_permalink($service_post -> ID);?>" class="c-card-short__link">
                            <div class="c-card-img-short">
                                <img src="<?php echo get_sub_field('img');?>" alt="<?php echo get_sub_field('title'); ?>" />
                            </div>
                            <h3 class="c-card-title-short"><?php echo get_sub_field('title'); ?></h3>
                        </a>
                        </div>
                    <?php endwhile;?>
                <?php endif;?>
                <?php if( have_rows('service-bottom',$front_page_id) ): ?>
                    <?php while( have_rows('service-bottom',$front_page_id) ): the_row();
                        $service_post = get_sub_field('link');
                    ?>
                        <div class="c-card-short p-vision-service__card">
                        <a href="<?php the_permalink($service_post -> ID);?>" class="c-card-short__link">
                            <div class="c-card-img-short">
                                <img src="<?php echo get_sub_field('img');?>" alt="<?php echo get_sub_field('title'); ?>" />
                            </div>
                            <h3 class="c-card-title-short"><?php echo get_sub_field('title'); ?></h3>
                        </a>
                        </div>
                    <?php endwhile;?>
                <?php endif;?>

            </div>
        </div>
    </section>
    <!-- /.service -->

    <!-- breadcrumb -->
    <div class="l-breadcrumb-area">
        <ul class="p-breadcrumb page-uppercase">
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a></li>
            <li><?php the_title(); ?></li>
        </ul>
    </div>
    <!-- /.breadcrumb -->
<?php get_footer();