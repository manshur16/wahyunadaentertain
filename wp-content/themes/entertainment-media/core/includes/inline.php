<?php


$entertainment_media_custom_css = '';

	/*---------------------------Transform -------------------*/

	$entertainment_media_text_transform = get_theme_mod( 'menu_text_transform_entertainment_media','CAPITALISE');
    if($entertainment_media_text_transform == 'CAPITALISE'){

		$entertainment_media_custom_css .='#main-menu ul li a{';

			$entertainment_media_custom_css .='text-transform: capitalize ; font-size: 14px;';

		$entertainment_media_custom_css .='}';

	}else if($entertainment_media_text_transform == 'UPPERCASE'){

		$entertainment_media_custom_css .='#main-menu ul li a{';

			$entertainment_media_custom_css .='text-transform: uppercase ; font-size: 14px;';

		$entertainment_media_custom_css .='}';

	}else if($entertainment_media_text_transform == 'LOWERCASE'){

		$entertainment_media_custom_css .='#main-menu ul li a{';

			$entertainment_media_custom_css .='text-transform: lowercase ; font-size: 14px;';

		$entertainment_media_custom_css .='}';
	}


		/*---------------------------Container Width-------------------*/

	$entertainment_media_container_width = get_theme_mod('entertainment_media_container_width');

			$entertainment_media_custom_css .='body{';

				$entertainment_media_custom_css .='width: '.esc_attr($entertainment_media_container_width).'%; margin: auto;';

			$entertainment_media_custom_css .='}';

			/*---------------------------Slider-content-alignment-------------------*/


$entertainment_media_slider_content_alignment = get_theme_mod( 'entertainment_media_slider_content_alignment','LEFT-ALIGN');

 if($entertainment_media_slider_content_alignment == 'LEFT-ALIGN'){

		$entertainment_media_custom_css .='.slider-content{';

			$entertainment_media_custom_css .='text-align:left;';

		$entertainment_media_custom_css .='}';


	}else if($entertainment_media_slider_content_alignment == 'CENTER-ALIGN'){

		$entertainment_media_custom_css .='.slider-content{';

			$entertainment_media_custom_css .='text-align:center;';

		$entertainment_media_custom_css .='}';


	}else if($entertainment_media_slider_content_alignment == 'RIGHT-ALIGN'){

		$entertainment_media_custom_css .='.slider-content{';

			$entertainment_media_custom_css .='text-align:right;';

		$entertainment_media_custom_css .='}';

	}
