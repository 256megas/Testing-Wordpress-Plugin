<?php

/*
Plugin Name: Mi primer Plugin
Plugin URI: www.mifactoriadewebs.com
Description: Hello World Plugin
Version: 1
Author: Antonio
license: GPL1
*/

// Hooks a los que unir acciones
// https://adambrown.info/p/wp_hooks/hook

// Mostrar solo en la parte de Administracion (wp-admin)
if (is_admin()){
    echo "Im Administrator";
}

// Añadimos un codigo JavaScript a el Hook footer de la web 
// 9999 es la posicion en la que se cargara nuestro Script
add_action('wp_footer', function(){?>
    <script>
        console.log("JS loaded on wp_footer")
    </script>
    <?php }  ,9999); 

// Crea un ShortCode que se añadira a la página, donde pongamos [banner]
add_shortcode( "banner", function($atts, $content){
	$output = '<div style="background-color: #00A9FF; font-size: 14px; line-height: 24px; color: #070707; text-align: center; padding: 6px 18px;">Suscríbete a mis cursos de tecnologías web <a style="display: inline-block; background-color: #FF7020; border: 1px solid #fff; border-radius: 6px; font-size: 14px; font-weight: normal; color: #fff; padding: 3px 8px; text-decoration: none;" href="#" target="_blank">SUSCRIBIRME</a></div>';
	return $output;
});