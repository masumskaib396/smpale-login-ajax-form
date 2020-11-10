<?php 

function slfa_login(){

    check_ajax_referer( 'slfa_ajax_nonce', 'nonce' );

    $error = array();
    //Veryfi Nonce

    if( !isset( $_POST['user_login'] ) || !isset( $_POST['user_pass'] ) )
        return;

     $user = (isset($_POST['user_login']) && !empty($_POST['user_login'])) ? $_POST['user_login'] : '';
     $pass = (isset($_POST['user_pass']) && !empty($_POST['user_pass'])) ? $_POST['user_pass'] : '';


     
     
    if( count($error) != 0 ) {
        wp_send_json_error( $user );
        wp_die();
    }

    $creds = array(
        'user_login'    => $user,
        'user_password' => $pass,
        // 'remember' => $remember
    );
    $user = wp_signon( $creds, '' );

    if ( is_wp_error( $user ) ) {
        wp_send_json_error( 'Username or password is incorrect' );
        wp_die();
    } else {
        wp_set_current_user( $user->ID );
        wp_send_json_success( 'Successful, redirecting...' );
        wp_die();
    }
};
add_action( 'wp_ajax_slfa_login', 'slfa_login' );
add_action( 'wp_ajax_nopriv_slfa_login', 'slfa_login' );
