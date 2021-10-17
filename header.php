<!doctype html>
	<html lang=ja>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0" />
		<meta name="format-detection" content="telephone=no" />
		<!-- meta情報 -->
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
		<!-- header -->
		<header class="l-header p-header">
			<div class="p-header__inner">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php if(is_home() || is_front_page()):?>
					<h1 class="p-header__logo">
						<img src="<?php echo get_template_directory_uri(); ?>/library/images/himmel_logo.jpg" alt="<?php  bloginfo( 'name' ); ?>" />
					</h1>
					<?php else:?>
					<div class="p-header__logo">
						<img src="<?php echo get_template_directory_uri(); ?>/library/images/himmel_logo.jpg" alt="<?php  bloginfo( 'name' ); ?>" />
					</div>
					<?php endif;?>
				</a>
				<?php
            		wp_nav_menu( array(
						'theme_location' => 'main-menu',
						'container_class' => 'p-header__nav',
						'menu_class' => 'p-header__item',
						'add_li_class'  => 'p-header__list',
						'items_wrap' =>  '<ul id="%1$s" class="%2$s">%3$s</ul><ul><li class="p-header__list p-header__contact"><a href="https://tenki-saita.com/contact/">CONTACT</a></li></ul>',
            		) );
				?>

				<!-- sp-nav -->
				<div class="hamburger">
				<span></span>
				<span></span>
				<span></span>
				</div>
				<?php
            		wp_nav_menu( array(
						'theme_location' => 'main-menu',
						'container' => 'nav',
						'container_class' => 'globalMenuSp',
						'menu_class' => 'p-header__item',
						'add_li_class'  => 'p-header__list',
						'items_wrap' =>  '<ul id="%1$s" class="%2$s">%3$s</ul><ul><li class="p-header__list p-header__contact"><a href="https://tenki-saita.com/contact/">CONTACT</a></li></ul>',
            		) );
        		?>
			</div>
		</header>
		<!-- /.header -->