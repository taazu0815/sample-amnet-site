<?php
function tokenFetch(){
        $auth_url = 'https://test.api.amadeus.com/v1/security/oauth2/token';
        $response = wp_remote_post($auth_url,array(
                                              'method' => 'POST',
                                              'content-type:application/x-www-form-urlencoded',
                                              'body' => array('grant_type' => 'client_credentials',
                                                                'client_id' => 'IHayTNFPoQauMiUEVTbmJJoroOgznE3L',
                                                                'client_secret' => 'pirEXfSbSGoyrGmb')
                                              
                                              ));
        
        if ( is_wp_error( $response ) ) {
           $error_message = $response->get_error_message();
           echo "Something went wrong: $error_message";
        } else {
           echo '<pre>';
           $post_token = wp_remote_retrieve_body($response);
           $obj = json_decode($post_token); 
           $access_token = $obj->access_token;
           echo '</pre>';
        }
    return $access_token;
}
?>