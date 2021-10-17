<?php
/*
 * Template Name: Thanks PAGE
 * Description: サンクスのページテンプレート
 */
?>
<?php get_header(); ?>

    <section class="l-about-content p-about p-thanks">
    <?php the_content();?>
            <!-- <h1 class="c-title c-title-big p-contact__title">
            Thanks
            <span>お問い合わせ送信完了</span>
            </h1>
        <div class="l-inner p-contact__inner">
            <div>
                この度は、お問い合わせいただきまして、<br>
                誠にありがとうございます。<br>
                入力いただいたメールアドレスに、<br>
                自動返信メールを送信しました。<br>
                ※自動返信メールが届いていない場合、<br>
                迷惑メールフォルダもご確認ください。
            </div>
        </div> -->
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