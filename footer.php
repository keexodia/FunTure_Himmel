<?php wp_footer(); ?>
	<!-- footer -->
	<footer class="l-footer p-footer">
		<div class="p-footer__inner">

			<?php
            	wp_nav_menu( array(
					'theme_location' => 'footer-menu',
					'container' => 'div',
					'container_class' => 'p-footer__nav',
					'menu_class' => 'p-footer__item',
					'add_li_class'  => 'p-footer__list',
					//'items_wrap' =>  '<ul id="%1$s" class="%2$s">%3$s</ul><ul><li class="p-header__list p-header__contact"><a href="">CONTACT</a></li></ul>',
        		) );
        	?>
			<!-- <div class="p-footer__nav">
				<ul class="p-footer__item">
					<li class="p-footer__list"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a></li>
					<li class="p-footer__list"><a href="<?php echo esc_url( home_url( '/' ) ); ?>vision-mission/">ビジョン・ミッション</a></li>
					<li class="p-footer__list">
						スタッフ
						<ul class="p-footer__sub-item">
							<li class="p-footer__sub-list"><a href="<?php echo esc_url( home_url( '/' ) ); ?>staff/kimiharu-saita/">斉田 季実治</a></li>
							<li class="p-footer__sub-list"><a href="<?php echo esc_url( home_url( '/' ) ); ?>staff/eiko-saita/">斉田 英子</a></li>
						</ul>
					</li>
					<li class="p-footer__list"><a href="<?php echo esc_url( home_url( '/' ) ); ?>about/">会社概要</a></li>
					<li class="p-footer__list"><a href="">ニュース</a></li> -->
				<!--</ul>
				<ul class="p-footer__item">
					<li class="p-footer__list">
					サービス一覧
					<ul class="p-footer__sub-item">
						<li class="p-footer__sub-list"><a href="<?php echo esc_url( home_url( '/' ) ); ?>service/lecture/">講演</a></li>
						<li class="p-footer__sub-list"><a href="<?php echo esc_url( home_url( '/' ) ); ?>service/space-weather/">宇宙天気</a></li>
						<li class="p-footer__sub-list"><a href="<?php echo esc_url( home_url( '/' ) ); ?>service/seminar/">ヒンメルゼミ</a></li>
						<li class="p-footer__sub-list"><a href="<?php echo esc_url( home_url( '/' ) ); ?>service/colorful/">彩り家族コミュニティ</a></li>
						<li class="p-footer__sub-list"><a href="<?php echo esc_url( home_url( '/' ) ); ?>service/coaching/">コーチング/コンサルティング</a></li>
					</ul>
					</li>
				</ul>
				<ul class="p-footer__item">
					<li class="p-footer__list"><a href="<?php echo esc_url( home_url( '/' ) ); ?>privacy-policy/">プライバシーポリシー</a></li>
					<li class="p-footer__list"><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact/">お問い合わせ</a></li>
				</ul>
			</div> -->
		</div>
		<div class="p-footer__copyright">
			<small>&copy;Himmel All Rights Reserved.</small>
		</div>
		</footer>
	</body>
</html>
