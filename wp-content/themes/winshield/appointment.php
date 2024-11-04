<?php
/* Template Name: appointment */
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
        	<h1>Make Appointment</h1>
            <ul class="page-breadcrumb">
            	<li><a href="index.html">Home</a></li>
                <li>Pages</li>
				<li>Appointment</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
	
	<!--Appointment Section-->
	<section class="appointment-page-section">
		<div class="auto-container">
			<!--Sec Title-->
			<div class="sec-title">
				<h2>Schedule a Free <span class="theme_color">Consultation</span></h2>
				<div class="text">Whether you are just starting your window search, comparing your product options or ready for an estimate, schedule an appointment with one of our friendly team members to learn more.</div>
			</div>
			
			<!--Upper Section-->
			<div class="upper-section">
				<div class="row clearfix">
					
					<!--Appointment Block-->
					<div class="appointment-block col-lg-6 col-md-12 col-sm-12">
						<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<h2><a href="#">In Your Home</a></h2>
							<div class="image">
								<a href="#"><img src="<?php bloginfo('template_directory');?>/images/resource/appointment-1.jpg" alt="" /></a>
								<div class="content-box">
									<div class="icon-box">
										<span class="icon flaticon-calendar-3"></span>
									</div>
									<div class="content">
										<div class="text">Monday – Friday 7 a.m. – 7 p.m. <br> Saturday: 7 a.m. – Noon</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<!--Appointment Block-->
					<div class="appointment-block col-lg-6 col-md-12 col-sm-12">
						<div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
							<h2><a href="#">In Our Shuters Office</a></h2>
							<div class="image">
								<a href="#"><img src="<?php bloginfo('template_directory');?>/images/resource/appointment-2.jpg" alt="" /></a>
								<div class="content-box">
									<div class="icon-box">
										<span class="icon flaticon-calendar-3"></span>
									</div>
									<div class="content">
										<div class="text">Monday – Friday 10 a.m. – 5 p.m. <br> Saturday: 10 a.m. – Noon</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
			<!--Lower Section-->
			<div class="lower-section">
				
				<!--Appointment Form Two-->
				<div class="appointment-form-two">

					<form method="post" action="contact-form">
						<div class="row clearfix">
						
							<div class="form-group col-lg-6 col-md-6 col-sm-12">
								<label>Appointment in</label>
								<select class="custom-select-box">
									<option>Our Shutters Office</option>
									<option>Office One</option>
									<option>Office Two</option>
									<option>Office Three</option>
									<option>Office Four</option>
								</select>
							</div>
							
							<div class="form-group col-lg-6 col-md-6 col-sm-12">
								<label>Service you need</label>
								<select class="custom-select-box">
									<option>Window Service</option>
									<option>Service One</option>
									<option>Service Two</option>
									<option>Service Three</option>
									<option>Service Four</option>
								</select>
							</div>
							
							<div class="form-group col-lg-3 col-md-6 col-sm-12">
								<input type="text" name="text" value="" placeholder="First Name" required>
							</div>
							
							<div class="form-group col-lg-3 col-md-6 col-sm-12">
								<input type="text" name="text" value="" placeholder="Last Name" required>
							</div>
							
							<div class="form-group col-lg-3 col-md-6 col-sm-12">
								<input type="text" class="datepicker" name="date" placeholder="Preferred Date" required>
							</div>
							
							<div class="form-group col-lg-3 col-md-6 col-sm-12">
								<input type="text" class="timepicker" name="time" placeholder="Preferred Time" required>
							</div>
							
							<div class="form-group col-lg-3 col-md-6 col-sm-12">
								<input type="email" name="email" value="" placeholder="Email" required>
							</div>
							
							<div class="form-group col-lg-3 col-md-6 col-sm-12">
								<input type="text" name="phone" value="" placeholder="Phone" required>
							</div>
							
							<div class="form-group col-lg-3 col-md-6 col-sm-12">
								<input type="text" name="address" value="" placeholder="Your Address" required>
							</div>
							
							<div class="form-group col-lg-3 col-md-6 col-sm-12">
								<input type="text" name="zip" value="" placeholder="Zip Code" required>
							</div>
							
							<div class="form-group col-lg-12 col-md-12 col-sm-12">
								<textarea placeholder="Message..."></textarea>
							</div>
							
							<div class="form-group text-center col-lg-12 col-md-12 col-sm-12">
								<button type="submit" class="theme-btn btn-style-two"><span class="arrow flaticon-right-arrow-4"></span>Submit Now</button>
							</div>
							
						</div>
					</form>

				</div>
				<!--End Appointment Form Two-->
				
			</div>
			
		</div>
	</section>
	<!--End Appointment Section-->

<?php get_footer();?>