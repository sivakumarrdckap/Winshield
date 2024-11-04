<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Shutters HTML Template | Homepage</title>
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<?php wp_head();?>
</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header-->
    <header class="main-header">
    
    	<!--Header-Upper-->
        <div class="header-upper">
        	<div class="outer-container">
            	<div class="clearfix">
                	<div class="pull-left logo-box">
                    	<div class="logo"><a href="/winsheald/"><img src="<?php bloginfo('template_directory');?>/images/logo.png" alt="winshield" title="winshield" width="270px"></a></div>
                    </div>
                   	
                   	<!-- Main Menu End-->
					<div class="outer-box clearfix">
						<ul class="option-list">
							<li><span class="icon flaticon-phone-symbol-of-an-auricular-inside-a-circle"></span><strong>Tel:</strong> +32 89 4567 01</li>
							<li><a href="/winsheald/appointment/"><span class="icon flaticon-calendar-2"></span><strong>Appointment</strong></a></li>
						</ul>
					</div>
                   	   
                    <div class="nav-outer clearfix">
                    
						<!-- Main Menu -->
						<nav class="main-menu navbar-expand-md">
							<div class="navbar-header">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							</div>

							<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">

							<?php 
							wp_nav_menu(
								array(
									'theme_location' => 'top-menu',
									'menu_id' => 'main_menu_1',
									'container' => 'ul',
									'menu_class' => 'navigation clearfix',
 								)
								); ?>
								<!-- <ul class="navigation clearfix" id="main_menu_1">
									<li class="current dropdown"><a href="#">Home</a>
									<li><a href="contact.html">Contact us</a></li>
								</ul> -->
							</div>
						</nav>
						
					</div>
                   
                </div>
            </div>
        </div>
        <!--End Header Upper-->
        
        <!--Sticky Header-->
        <div class="sticky-header">
        	<div class="auto-container clearfix">
            	<!--Logo-->
            	<div class="logo pull-left">
                	<a href="index.html" class="img-responsive"><img src="<?php bloginfo('template_directory');?>/images/logo-small.png" alt="winshield" title="winshield" width="200px"></a>
                </div>
                
                <!--Right Col-->
                <div class="right-col pull-right">
                	<!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
							<?php 
							wp_nav_menu(
								array(
									'theme_location' => 'top-menu',
									'menu_id' => 'main_menu_1',
									'container' => 'ul',
									'menu_class' => 'navigation clearfix',
 								)
								); ?>
                            <!-- <ul class="navigation clearfix">
                                <li class="current dropdown"><a href="#">Home</a>
								<li><a href="contact.html">Contact us</a></li>
                            </ul> -->
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
                
            </div>
        </div>
        <!--End Sticky Header-->
    
    </header>
    <!--End Main Header -->