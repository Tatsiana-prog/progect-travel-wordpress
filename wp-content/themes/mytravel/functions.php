<?php
    add_action( 'wp_enqueue_scripts', function() {
        wp_enqueue_style( 'fonts-gstatic', 'https://fonts.gstatic.com' );
        wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer' );
        wp_enqueue_style( 'font-style', 'https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;600;700&display=swap" rel="stylesheet' );
       	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );
       	wp_enqueue_script( 'aos', 'https://unpkg.com/aos@next/dist/aos.js' , 'null', true );
       	wp_enqueue_script( 'main',get_template_directory_uri() . '/assets/js/main.js', array('aos'), 'null', true );
        });

    // Регистрируем возможности темы
        add_action( 'after_setup_theme', function() {
        	// возможность изменять фон из админки
        	add_theme_support( 'custom-background' );
        	// возможность изменять изображения в шапке из админки
        	add_theme_support( 'custom-header' );
        	// включаем меню в админке
        	add_theme_support( 'menus' );
        	// создание метатега <title> через хук
        	add_theme_support( 'title-tag' );
        	// возможность загрузить картинку логотипа в админке
            	add_theme_support( 'custom-logo', [
            		'height'      => 190,
            		'width'       => 190,
            		'flex-width'  => false,
            		'flex-height' => false,
                		'header-text' => '',
            	] );
        });

	add_action( 'after_setup-theme', 'add_menu' );
	register_nav_menus(array(
	'top'    => 'Верхнее меню',    //Название месторасположения меню в шаблоне
	'bottom' => 'Нижнее меню'      //Название другого месторасположения меню в шаблоне
));




//Разрешение на добавление SVG
add_filter( 'upload_mimes', 'svg_upload_allow' );
add_filter( 'upload_mimes', 'svg_upload_allow' );
# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';
	return $mimes;
}
add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );
# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) )
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	else
		$dosvg = ( '.svg' === strtolower( substr($filename, -4) ) );
	if( $dosvg ){
		if( current_user_can('manage_options') ){
			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		else {
			$data['ext'] = $type_and_ext['type'] = false;
		}
	}
	return $data;
}

 ?>