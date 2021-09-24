<!doctype html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0" />
		<meta name="format-detection" content="telephone=no" />
		<!-- meta情報 -->
		<title><?php echo get_bloginfo('get_bloginfo'); ?> <?php if(wp_title()):?> | <?php wp_title();endif; ?></title>
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
		<!-- header -->
		<header class="l-header p-header">
			<div class="p-header__inner">
				<div class="p-header__logo">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/logo.png" alt="" />
				</div>
				<?php
            		// wp_nav_menu( array(
					// 	'theme_location' => 'main-menu',
					// 	'container_class' => 'p-header__nav',
					// 	'menu_class' => 'p-header__item',
					// 	'add_li_class'  => 'p-header__list',
					// 	'items_wrap' =>  '<ul id="%1$s" class="%2$s">%3$s</ul><ul><li class="p-header__list p-header__contact"><a href="">CONTACT</a></li></ul>',
					// 	//'walker' => new My_Walker_Nav_Menu,
            		// ) );
				?>
				<div class="p-header__nav">
					<ul class="p-header__item">
						<li class="p-header__list">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a>
						</li>
						<li class="p-header__list">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>vision-mission/">VISION/MISSION</a>
						</li>
						<li class="p-header__list">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>about/">ABOUT</a>
						</li>
						<li class="p-header__list p-header__drower">
						<a href="">SERVICE</a>
						<ul class="sub p-header__sub">
							<li class="p-header__list--sub"><a href="">LECTURE</a></li>
							<li class="p-header__list--sub"><a href="">SPACE WEATHER</a></li>
							<li class="p-header__list--sub"><a href="">HIMMEL ZEMI</a></li>
							<li class="p-header__list--sub"><a href="">COLORFUL FAMILY COMMUNITY</a></li>
							<li class="p-header__list--sub"><a href="">COACHING/CONSULTING</a></li>
						</ul>
						</li>
						<li class="p-header__list p-header__drower">
						<a href="">STAFF</a>
						<ul class="sub p-header__sub">
							 <?php
								$args = array(
									'post_type' => 'staff',
									'post_per_page' => -1,
								);
								$posts = get_posts($args);
								foreach($posts as $post):
								setup_postdata($post);
							?>
							<li class="p-header__list--sub"><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
							<?php
								endforeach;
								wp_reset_postdata();
							?>
						</ul>
						</li>
						<li class="p-header__list">
						<a href="">NEWS</a>
						</li>
					</ul>
					<ul>
						<li class="p-header__list p-header__contact">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>CONTACT/">CONTACT</a>
						</li>
					</ul>
				</div>

				<!-- sp-nav -->
				<div class="hamburger">
				<span></span>
				<span></span>
				<span></span>
				</div>
				<?php
            		// wp_nav_menu( array(
					// 	'theme_location' => 'main-menu',
					// 	'container' => 'nav',
					// 	'container_class' => 'globalMenuSp',
					// 	'menu_class' => 'p-header__item',
					// 	'add_li_class'  => 'p-header__list',
					// 	'items_wrap' =>  '<ul id="%1$s" class="%2$s">%3$s</ul><ul><li class="p-header__list p-header__contact"><a href="">CONTACT</a></li></ul>',
					// 	//'walker' => new cs_walker_nav_menu,
            		// ) );
        		?>
				<nav class="globalMenuSp">
				<ul class="p-header__item">
					<li class="p-header__list">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a>
					</li>
					<li class="p-header__list">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>vision-mission/">VISION/MISSION</a>
					</li>
					<li class="p-header__list">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>about/">ABOUT</a>
					</li>
					<li class="p-header__list p-header__drower">
					<a href="">SERVICE</a>
					<ul class="sub p-header__sub">
						<li class="p-header__list--sub"><a href="">LECTURE</a></li>
						<li class="p-header__list--sub"><a href="">SPACE WEATHER</a></li>
						<li class="p-header__list--sub"><a href="">HIMMEL ZEMI</a></li>
						<li class="p-header__list--sub"><a href="">COLORFUL FAMILY COMMUNITY</a></li>
						<li class="p-header__list--sub"><a href="">COACHING/CONSULTING</a></li>
					</ul>
					</li>
					<li class="p-header__list p-header__drower">
					<a href="">STAFF</a>
					</li>
					<li class="p-header__list">
					<a href="">NEWS</a>
					</li>
				</ul>
				<ul>
					<li class="p-header__list p-header__contact">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>CONTACT/">CONTACT</a>
					</li>
				</ul>
				</nav>
				<!-- /. -->
			</div>
		</header>
		<!-- /.header -->