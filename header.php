<!-- stylesheet in functions.php -->

<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <style type="text/css">
        option{
            background:white;
            color: black;
        }
	</style>
</head>
<body>
    <div class="header-nav">
        <div class="container">
            <div class="row">
                <div class="col-md-3 p-1 text-center">
                    <span><i class="fa fa-phone mr-2"></i>9739170220</span>
                </div>
                <div class="col-md-3 p-1 text-center">
                    <span><i class="fa fa-envelope mr-2"></i>contact@amnet.com</span>
                </div>
                <div class="col-md-3 p-1 text-center">
                        <a href="" target="_blank"><i class="fa fa-facebook mr-2 text-white"></i></a>
                        <a href="" target="_blank"><i class="fa fa-twitter mr-2 text-white" ></i></a>
                        <a href="" target="_blank"><i class="fa fa-instagram mr-2 text-white"></i></a>
                        <a href="" target="_blank"><i class="fa fa-linkedin mr-4 text-white"></i></a>
                </div>
                <div class="col-md-3 p-1 text-center">
                    <?php echo do_shortcode('[gtranslate]'); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="logo">
            <img src="<?php bloginfo('template_url'); ?>/images/logo.png">
        </div>
    </div>
<nav class="navbar navbar-expand-lg bg-navy" style="font-family:ubuntu">
    <div class="container"> 
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#">Air Ticket <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">Hotel</a>
            <a class="nav-item nav-link" href="#">Tours</a>
            <a class="nav-item nav-link" href="#">JR Pass</a>
            <a class="nav-item nav-link" href="#">Other Services</a>
            <a class="nav-item nav-link" href="#">About Us</a>
            <a class="nav-item nav-link" href="#">Contact Us</a>
            <a class="nav-item nav-link" href="#">Search</a>
          </div>
        </div>
    </div>
</nav>
<div class="header-image">
    <img src="<?php bloginfo('template_url'); ?>/images/nature.jpg"/>
</div>
</body>
</html>