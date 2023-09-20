<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<footer class="footer-area">
	<div class="container-fluid">
    	<div class="row px-3">
            <div class="custom-col-01 col">
                <div class="single-footer-widget">
                    <h6>HOMEOWNER</h6>
                    <ul>
                        <li><a href="homeowner/#whychoosebank">Why Choose EnerBank</a></li>
                         <li><a href="homeowner/#howtopay">How to Pay</a></li>
                    </ul>											
                </div>
            </div>
            <div class="custom-col-02 col">
                <div class="single-footer-widget">
                    <h6>LOAN PROGRAMS</h6>
                    <ul>
                        <li><a href="loan-programs#paymentoptbenefits">Payment Options Benefits</a></li>
                        <li><a href="loan-programs#joinloanprogram">Join a Loan Program</a></li>
                        <li><a href="loan-programs#createloanprogram">Create a Loan Program</a></li>
                    </ul>											
                </div>
            </div>
            <div class="custom-col-03 col">
                <div class="single-footer-widget">
                    <h6>ABOUT</h6>
                    <ul>
                        <li><a href="about#companyoverview">Company Overview</a></li>
                        <li><a href="about#leadership">Leadership</a></li>
                        <li><a href="about#codeofconduct">Code of Conduct</a></li>
                        <li><a href="about#memberfdic">Member FDIC</a></li>
                        <li><a href="about#communityinvolvement">Community Involvement</a></li>
                        <li><a href="about#boardofdirectors">Board of Directors</a></li>
                        <li><a href="about#feedback">Feedback</a></li>
                        <li><a href="/">Blog</a></li>
                    </ul>											
                </div>
            </div>
            <div class="custom-col-04 col">
                <div class="single-footer-widget">
                    <h6>CAREERS</h6>
                    <ul>
                        <li><a href="careers#whyenerbank">Why EnerBank</a></li>
                        <li><a href="careers#availableposition">Available Positions</a></li>                        
                    </ul>											
                </div>
            </div>
            <div class="custom-col-05 col">
                <div class="single-footer-widget">
                    <h6>CONTACT</h6>
                    <ul>
                        <li><a href="/">Corporate Offices</a></li>
                        <li><a href="/">Hours of Operation</a></li>
                        <li><a href="/">Do Not Sell My Info</a></li>
                    </ul>											
                </div>
            </div>
            <div class="custom-col-06 col border-left">
	        	<div class="single-footer-widget">
					<p>EnerBank USA is a wholly owned <br/>subsidiary of CMS Energy Corp. (NYSE: CMS)</p>                    
                    <ul>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Notice</a></li>
                        <li><a href="#">Online Privacy Statement</a></li>
                    </ul>                      
                    <p>© Copyright 2020. <br/>All rights reserved.</p>
                    <p class="text-muted">This site is directed at, and made available to, persons in the U.S. only.</p>
				</div>
	        </div>
        	<div class="custom-col-07 col">
	        	<div class="single-footer-widget">
	            	<img class="mb-10" src="<?php echo get_template_directory_uri(); ?>/img/fdic-logo.svg" alt="Logo">
	                <img src="<?php echo get_template_directory_uri(); ?>/img/bbb-logo.svg" alt="Logo">
				</div>
				<div class="mediaIcon">
                  	<a href="#"><i class="fa fa-facebook"></i></a>
                  	<a href="#"><i class="fa fa-twitter"></i></a>
                  	<a href="#"><i class="fa fa-linkedin"></i></a>
              	</div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

			<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.<?php echo get_template_directory_uri(); ?>/js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/bootstrap.min.js"></script>			
  			<script src="<?php echo get_template_directory_uri(); ?>/js/easing.min.js"></script>			
			<script src="<?php echo get_template_directory_uri(); ?>/js/hoverIntent.js"></script>
			<script src="<?php echo get_template_directory_uri(); ?>/js/superfish.min.js"></script>	
			<script src="<?php echo get_template_directory_uri(); ?>/js/mn-accordion.js"></script>
			<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.ajaxchimp.min.js"></script>
			<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.magnific-popup.min.js"></script>	
            <script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>

            <script src="https://cdn.omaxe.com/assets/front/js/owl.carousel.min.js"></script>
                        
			<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.nice-select.min.js"></script>	
    		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.circlechart.js"></script>								
			<script src="<?php echo get_template_directory_uri(); ?>/js/mail-script.js"></script>	
			<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

</body>
</html>
