<?php
/* Template Name: contact-page */
get_header();
?>
	<style>
    .preloader{
        display: none;
    }
</style>
	<!--Page Title-->
    <section class="page-title" style="background-image:url(<?php bloginfo('template_directory');?>/images/background/1.jpg)">
    	<div class="auto-container">
        	<h1>Get Touch With Us</h1>
            <ul class="page-breadcrumb">
            	<li><a href="index.html">Home</a></li>
				<li>Contact</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
	
	<!--Office Section-->
	<section class="office-section">
		<div class="auto-container">
			<div class="inner-container">
				<!--Title Box-->
				<div class="title-box">
					<h2>Corporate Office</h2>
				</div>
				<div class="row clearfix">
					
					<!--Office Block-->
					<div class="office-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<span class="icon flaticon-place"></span>
							</div>
							<h3>Visit Our Place</h3>
							<div class="text">PO Box 37188 Millon Street, <br> Welmington 11226 United States.</div>
							<a class="link-btn" href="#"><span class="arrow flaticon-right-arrow-2"></span>&nbsp; View On Map</a>
						</div>
					</div>
					
					<!--Office Block-->
					<div class="office-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<span class="icon flaticon-phone-symbol-of-an-auricular-inside-a-circle"></span>
							</div>
							<h3>24/7 Quick Contact</h3>
							<div class="text">+32 89 4567 01 <br> support@example.com</div>
							<a class="link-btn" href="#"><span class="arrow flaticon-right-arrow-2"></span>&nbsp; Make Appointment</a>
						</div>
					</div>
					
					<!--Office Block-->
					<div class="office-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<span class="icon flaticon-question"></span>
							</div>
							<h3>FA Questions</h3>
							<div class="text">Here you to know all about uPVC <br> windows & Doors</div>
							<a class="link-btn" href="#"><span class="arrow flaticon-right-arrow-2"></span>&nbsp; Go to FAQ’s</a>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!--End Office Section-->
	
	<!--Contact Form Section-->
	<section class="contact-form-section" style="background-image: url(<?php bloginfo('template_directory');?>/images/background/3.png)">
		<div class="auto-container">
			<div class="row clearfix">
			
				<!--Title Column-->
				<div class="title-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						<h3>For Enquiries,</h3>
						<h2>Just Say Hello.</h2>
						<div class="text">For questions or concerns please contact us via telephone or simply complete the contact form and one of our knowledgeable representatives will respond in a timely manner.</div>
					</div>
				</div>
				
				<!--Form Column-->
				<div class="form-column col-lg-8 col-md-12 col-sm-12">
					<div class="inner-column">
						<!--Contact Form-->
						<div class="contact-form">

							<form method="post" action="" id="contact-form">
								<div class="row clearfix">
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="text" name="name" value="" placeholder="Name" required>
									</div>
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="email" name="email" value="" placeholder="Email" required>
									</div>
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<textarea name="message" placeholder="Message..."></textarea>
									</div>
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<button type="submit" class="theme-btn btn-style-four"><span class="arrow flaticon-right-arrow-4"></span>Submit Now</button>
                                    </div>
								</div>
							</form>

						</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!--End Contact Form Section-->

<?php get_footer();?>