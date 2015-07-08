<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <link href="wp-content/themes/kt/css/bootstrap.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet" >

		

		<?php wp_head(); ?>


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  
  <body data-spy="scroll" data-target="#navlist">
  <header>
      <nav class="navbar navbar-default navbar-fixed-top" role="navigation" >
  <div class="container">
   
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" id="togglenav" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
<span class="navbar-toggle-minus-hide">Menu -</span> <span class="navbar-toggle-plus">Menu +</span> 
      </button>
        <a href="#top" class="navbar-brand"><span class="image-replace">Keni Thomas</span></a>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    
     <div id="navlist">
     <ul class="nav navbar-nav navbar-right">
       
        

        <li><a href="#learnmore" class="mob-off">Learn More</a></li>
        <li><a href="#about" class="mob-off">About</a></li>
        <li><a href="#speaker" class="mob-off">Speaker</a></li>
        <li><a href="#music" class="mob-off">Music</a></li>
        <li><a href="#news_calendar" class="mob-off">News</a></li>
        <li><a href="#news_calendar" class="mob-off">Calendar</a></li>
        <li><a href="#store" class="mob-off">Store</a></li>
        <li><a href="#contact" class="mob-off">Contact</a></li>       
        
      </ul>
      </div>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div id="top"></div>
</header>
			<!-- /header -->
