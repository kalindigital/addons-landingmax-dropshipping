<?php 
/** 
* Plugin Name: LandingMax Dropshipping
* Plugin URI: https://landingmax.com.br/addons-para-dropshipping
* Description: Widget de Dropshipping para Elementor. 
* Version: 1.5 
* Author: LandingMax by Kalin Digital
* Author URI: https://landingmax.com.br/
**/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function register_kalin_widget( $widgets_manager ) {

	require_once( __DIR__ . '/includes/widgets/widget-frete-estimativa.php' );
	require_once( __DIR__ . '/includes/widgets/widget-produto-drop.php' );
	require_once( __DIR__ . '/includes/widgets/widget-avaliacoes-drop.php' );
	


	$widgets_manager->register( new \Elementor_Frete_Estimativa() );
	$widgets_manager->register( new \Elementor_Produto_Drop() );
	$widgets_manager->register( new \Elementor_Avaliacao_Drop() );
	


}
add_action( 'elementor/widgets/register', 'register_kalin_widget' );