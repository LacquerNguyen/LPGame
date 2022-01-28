<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@900&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body>
<div id="page" class="site">
	<header class="l__header wow fadeInDown">
		<div class="header__logo">
			<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt=""></p>
		</div>
		<div class="header__rgt">
			<div class="header__rgt--menu">
				<?php wp_nav_menu(array(
					'theme_location' => 'main-menu', 
					'menu_id' => 'menu', 
					'menu_class' => 'menu'
				)) ?>
			</div>
			<div class="header__rgt--langu">
				<ul class="language__list--group">
					<li class="dropdown__language">
					<?php if(pll_current_language() == 'vi'): ?>
						<a class="btn__language" href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/vietnam.png" alt=""></a>
					<?php else: ?>
						<a class="btn__language" href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/usa.png" alt=""></a>
   					<?php endif; ?>
						<ul class="dropdown__menu--language">
							<li><a href="/vi/trang-chu/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/vietnam.png" alt=""><span>Vietnamese</span></a></li>
							<li><a href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/usa.png" alt=""><span>English</span></a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</header>
	<div class="menu__wrap">
		<a class="c-open-menu dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown">
			<span class="menu_icon">&nbsp;</span>
		</a>
		<div class="c-submenu_sp">
			<ul class="language__list--group">
				<li class="dropdown__language">
				<?php if(pll_current_language() == 'vi'): ?>
					<a class="btn__language" href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/vietnam.png" alt=""></a>
				<?php else: ?>
					<a class="btn__language" href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/usa.png" alt=""></a>
				<?php endif; ?>
					<ul class="dropdown__menu--language">
						<li><a href="/vi/trang-chu/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/vietnam.png" alt=""><span>Vietnamese</span></a></li>
						<li><a href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/usa.png" alt=""><span>English</span></a></li>
					</ul>
				</li>
			</ul>
			<div class="dropdown-menu">
				<ul class='head-menu-items'>
					<?php wp_nav_menu(array(
						'theme_location' => 'main-menu', 
						'menu_id' => 'menu', 
						'menu_class' => 'menu'
					)) ?>
				</ul>
			</div>
		</div>
	</div>
	<div class="site__content">
