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
        <link href="/wp-content/themes/kt/css/bootstrap.css" rel="stylesheet">
    <link href="/wp-content/themes/kt/style.css" rel="stylesheet" >
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/wp-content/themes/kt/style.css'); ?>" type="text/css" media="screen" />

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<?php wp_head(); ?>


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

		<div class="container-fluid">
    
    <div class="modal fade" id="BookKeni" tabindex="-1" role="dialog" aria-labelledby="BookKeni">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="wp-content/themes/kt/img/x.svg" alt="close icon"/></span></button>
        <h4 class="modal-title" id="myModalLabel">Book Keni</h4>
        <p><span class="separator"></span></p>
        <p>To book Keni, or find out availablity and pricing for your event, please fill out the form below.</p>
      </div>
      <div class="modal-body">
        <form id="book-form">
                <p class="sr-only"><label for="fname-book">First Name*</label></p>
                <p><input type="text" name="fname-book" id="fname-book" placeholder="First Name*"><label for="lname-book" class="sr-only">Last Name*</label><input type="text" name="lname-book" id="lname-book" placeholder="Last Name*"></p>
                <p><input type="text" name="company-book" id="company-book" placeholder="Company"><label for="dateloc-book" class="sr-only">Tentative Date &amp; Location</label><input type="text" name="dateloc-book" id="dateloc-book" placeholder="Tentative Date &amp; Location"></p>
                <p><input type="email" name="email-book" id="email-book" placeholder="E-mail address*"></p>
                <p><label for="subject-book" class="sr-only">Subject*</label><input type="text" name="subject-book" id="subject-book" placeholder="Subject*"></p>
                <p ><label for="message-book" id="modal-label-book">Message*</label></p>
                <p class="txt-area-p"><textarea rows="6" cols="59" name="message-book" id="message-book"  ></textarea></p>

                <p><input type="submit"></p>
                <p class="req">Required Field*</p>
            </form>
      </div>
     
    </div>
  </div>
</div>
    

  
        
      </div>

</header>
			<!-- /header -->
