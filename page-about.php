<?php
/*
 * Template Name: About PAGE
 * Description: 概要のページテンプレート
 */
?>
<?php get_header(); ?>

    <section class="main-content l-about-content p-about">
        <div class="l-inner p-about__inner">
            <h2 class="c-title c-title-big p-about__title">
            about
            <span>会社概要</span>
            </h2>
            <div class="p-about__information">
            <div class="p-about__summary">
                <p class="p-about__detail">社名</p>
                <p class="p-about__description">株式会社ヒンメル・コンサルティング</p>
            </div>
            <div class="p-about__summary">
                <p class="p-about__detail">設立年月日</p>
                <p class="p-about__description">2018年1月4日</p>
            </div>
            <div class="p-about__summary">
                <p class="p-about__detail">資本金</p>
                <p class="p-about__description">5,000,000円</p>
            </div>
            <div class="p-about__summary">
                <p class="p-about__detail">所在地</p>
                <p class="p-about__description">東京都世田谷区</p>
            </div>
            <div class="p-about__summary">
                <p class="p-about__detail">代表取締役</p>
                <p class="p-about__description">斉田季実治</p>
            </div>
            </div>
            <div class="p-about-service">
            <h3 class="p-about-service__title">事業内容</h3>
            <div class="p-about-service__wrap">
                <ul class="p-about-service__item">
                <li class="p-about-service__list">気象予報業務及びそれに付随する業務</li>
                <li class="p-about-service__list">人材育成のための教育、研修コンサルタント業務</li>
                <li class="p-about-service__list">危機管理に関するコンサルタント業務</li>
                <li class="p-about-service__list">講演会、シンポジウム、セミナー等の企画、立案及び実施</li>
                <li class="p-about-service__list">放送番組に関する制作や業務の請負</li>
                <li class="p-about-service__list">図書、文献その他の出版物の編纂、刊行</li>
                <li class="p-about-service__list">観測、予報、調査及び研究並びにその受託</li>
                <li class="p-about-service__list">気象情報専門要員の育成</li>
                <li class="p-about-service__list">気象に関する器械、器具等に関する相談又は点検並びにその製作、修理及び販売</li>
                <li class="p-about-service__list">前各号に付帯する一切の業務</li>
                </ul>
            </div>
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