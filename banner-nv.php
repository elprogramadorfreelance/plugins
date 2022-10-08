/**
 * Plugin Name: Banner NV
 * Plugin URI: https://nouveauvisage.fr
 * Description: Insérer une bannière publicitaire avec le shortcode de la bannière
 * Version: 1.0
 * Author: Felipe Rodríguez
 * Author URI: https://nouveauvisage.fr/felipe-rodriguez
 * License: GPL2
 */
add_shortcode( "banner", function($atts, $content){
	$output = '<div style="background-color: #00A9FF; font-size: 14px; line-height: 24px; color: #070707; text-align: center; padding: 6px 18px;">Suscríbete a mis cursos de tecnologías web <a style="display: inline-block; background-color: #FF7020; border: 1px solid #fff; border-radius: 6px; font-size: 14px; font-weight: normal; color: #fff; padding: 3px 8px; text-decoration: none;" href="#" target="_blank">S'ABONNER</a></div>';
	return $output;
});