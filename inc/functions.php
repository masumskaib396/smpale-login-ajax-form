<?php 

function slfa_scripts(){
	//enqueue style
    wp_enqueue_style( 'slfa-loginform', SLFA_ASSETS . '/css/style.css',null, SLFA_VERSION );

   wp_enqueue_script('slfa-loginform', SLFA_ASSETS . '/js/min.js', array('jquery'), SLFA_VERSION, true);



   wp_localize_script('slfa-loginform', 'slfa_prems', array(
   		'ajax_url' => admin_url( 'admin-ajax.php'),
   		'redirect_url' => home_url(),
        'nonce' => wp_create_nonce( 'slfa_ajax_nonce' )
   ));

}
add_action('wp_enqueue_scripts', 'slfa_scripts');





