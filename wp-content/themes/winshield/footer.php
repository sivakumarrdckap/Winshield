	<!--Main Footer-->
    <footer class="main-footer">
    
		<div class="auto-container">
        
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">
                	
                    <!--Footer Column-->
                    <div class="footer-column col-lg-4 col-md-6 col-sm-12">
						<div class="footer-widget links-widget">
							<h2>Usefull Links</h2>
							<div class="row clearfix">
									
								<div class="column col-lg-6 col-md-6 col-sm-12">
								<?php 
							wp_nav_menu(
								array(
									'theme_location' => 'top-menu',
									'menu_id' => 'main_menu_1',
									'container' => 'ul',
									'menu_class' => 'footer-link',
 								)
								); ?>
									<!-- <ul class="">
										<li><a href="#">Window Styles</a></li>
										<li><a href="#">Door Styles</a></li>
										<li><a href="#">Maintenance</a></li>
										<li><a href="#">uPVC Features</a></li>
										<li><a href="#">Work Gallery</a></li>
										<li><a href="#">Specials</a></li>
										<li><a href="#">Our Products</a></li>
									</ul> -->
								</div>
								
							</div>
						</div>
					</div>
					
					<!--Footer Column-->
                    <div class="footer-column col-lg-4 col-md-6 col-sm-12">
						<div class="footer-widget news-widget">

						</div>
					</div>
					
					<!--Footer Column-->
                    <div class="footer-column col-lg-4 col-md-6 col-sm-12">
						<div class="footer-widget newsletter-widget">
							<h2>Winshield</h2>
							<div class="widget-content">
								<div class="message-icon flaticon-letter"></div>
								<div class="text">Innovating Windows for better life.</div>

								<!--Social Icon One-->
								<ul class="social-icon-one">
									<li><a href="#"><span class="icon fa fa-facebook"></span>facebook</a></li>
									<li><a href="#"><span class="icon fa fa-twitter"></span>twitter</a></li>
									<li><a href="#"><span class="icon fa fa-linkedin"></span>linkedin</a></li>
									<li><a href="#"><span class="icon fa fa-google-plus"></span>google +</a></li>
									<li><a href="#"><span class="icon fa fa-vimeo"></span>vimeo</a></li>
								</ul>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
		</div>
		
		<!--Footer Bottom-->
		<div class="footer-bottom">
			<div class="auto-container">
				<div class="row clearfix">
					
					<div class="column col-lg-7 col-md-12 col-sm-12">
						<div class="logo">
							<a href="index.html"><img src="<?php bloginfo('template_directory');?>/images/logo-small.png" alt="footer-log" width="200px" /></a>
						</div>
						<div class="copyright">© 2009–2018 All rights reserved by <a href="#">Shutters.</a> <br> Certified uPVC company.</div>
					</div>
					
					
					<div class="column col-lg-5 col-md-12 col-sm-12">
						<!-- <ul class="footer-nav clearfix">
							<li><a href="#">Private Policy</a></li>
							<li><a href="#">Terms & Condition</a></li>
							<li><a href="#">Legal</a></li>
							<li class="dropdown">
                                <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                    <li class="panel-outer">
                                        <div class="form-container">
                                            <form method="post" action="blog.html">
                                                <div class="form-group">
                                                    <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                    <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </li>

						</ul> -->
					</div>
					
				</div>
			</div>
		</div>
		
	</footer>
	<!--End Main Footer-->
	
</div>
<!--End pagewrapper-->

<?php wp_footer();?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2uu6KHbLc_y7fyAVA4dpqSVM4w9ZnnUw"></script>
<!--End Google Map APi-->


</body>
</html>