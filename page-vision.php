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
            <h2 class="c-title c-title-big p-vision__title">
            vision/mission
            <span>ビジョン/ミッション</span>
            </h2>
            <div class="p-vision__mv">
            <img src="<?php echo get_template_directory_uri(); ?>/library/images/vision.jpg" alt="vision" />
            </div>
            <h3 class="p-vision__think">Think Future, Make My Story</h3>
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
                <?php
                    $args = array(
                        'post_type'      => 'service',
                        'posts_per_page' => 5,
                    );
                    $posts = get_posts($args);
                    foreach ( $posts as $post ): setup_postdata( $post );
                ?>
                <div class="c-card-short p-vision-service__card">
                    <a href="<?php the_permalink();?>" class="c-card-short__link">
                    <div class="c-card-img-short">
                        <img src="<?php echo get_field("photo"); ?>" alt="<?php the_title(); ?>" />
                    </div>
                    <h3 class="c-card-title-short"><?php the_title(); ?></h3>
                    </a>
                </div>
                <?php endforeach; wp_reset_postdata();?>
            </div>
        </div>
    </section>
    <!-- /.service -->

    <!-- breadcrumb -->
    <div class="l-breadcrumb-area">
        <ul class="p-breadcrumb">
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a></li>
            <li><a href="#">VISION/MISSION</a></li>
        </ul>
    </div>
    <!-- /.breadcrumb -->
<?php get_footer();