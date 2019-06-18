<?php
/*
Theme Name : AmnetTheme
Author: Basavaraj M S
Version: 1.0
*/

get_header();

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

$remote_url = 'HTTPS://test.api.amadeus.com/v2/shopping/hotel-offers?cityCode=PAR&adults=1&radius=5&radiusUnit=KM&paymentPolicy=NONE&includeClosed=false&bestRateOnly=true&view=FULL&sort=PRICE';
$id_token = $access_token; 

if(is_wp_error($remote_url)){
    return false;
}
$args = array(
    'headers'     => array(
        'Authorization' => 'Bearer ' . $id_token,
        ),
); 
$result = wp_remote_get( $remote_url, $args);
$body = json_decode(wp_remote_retrieve_body($result),true);

$count = count($body['data']);
?>
<body>
<div class="container p-3">
    <h2 style="color:darkcyan;font-family:Ubuntu">
        <center><b>Hotel Offers</b></center>
    </h2>
</div>

<div class="container">
    <div class="row">
        <?php
        for($i=0;$i<$count;$i++){
            if($i==3){
                break;
            }
        ?>
        <div class="col-md-4 p-4" style="font-family:Ubuntu">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="https://picsum.photos/id/237/300/250" alt="Card image cap">
                <div class="card-body mt-3">
                  <p class="card-title text-center"><?php echo $body['data'][$i]['hotel']['name']; ?><br/>( PARIS )</p>
                  <p class="card-text p-3 font-weight-bold">Price : <?php echo $body['data'][$i]['offers'][0]['price']['total']; ?></p>
                  <a href="http://localhost/wordpress/index.php/hotel-information?id=<?php echo $body['data'][$i]['hotel']['hotelId']; ?>" class="btn btn-primary more-info">More Information</a>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</div>
</body>
<?php

echo "<pre>";
//echo count($body['data']);
print_r($body);
echo "</pre>";

?>