
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<!-- encoding -->
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="format-detection" content="telephone=no">
		<meta name="format-detection" content="adress=no">

		<!-- Mobile support -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Title and SEO -->
		<title>
		    <?php
		  if(is_404()) {
		    echo 'Ошибка 404';
		} else {
		    the_title();
		}
		 ?>
		 <?php wp_head(); ?>
	</head>
	<body>
		<header class="header" data-aos="fade-down">
			<div class="row">
				<a href="Главная" class="logo">Travel</a>
				<?php
                	wp_nav_menu( array(
                	'menu'            => '',              // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее 
                	'container'       => 'row',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
                	'menu_class'      => 'navbar',          // (string) class самого меню (ul тега)
                	'menu_id'         => '',              // (string) id самого меню (ul тега)
                	'theme_location'  => 'top'               // (string) Расположение меню в шаблоне. (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
                ) );
				?>
				<div id="menu-btn" class="fas fa-bars"></div>
			</div>
		</header>