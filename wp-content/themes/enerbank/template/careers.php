<?php
/**

 * The main template file

 *

 * This is the most generic template file in a WordPress theme

 * and one of the two required files for a theme (the other being style.css).

 * It is used to display a page when nothing more specific matches a query.

 * E.g., it puts together the home page when no home.php file exists.

 *

 * Template Name: Careers

 */


get_header();
?>

<!-- start banner Area -->
<section class="video-section">
  <div class="container">
    <div class="row d-flex align-items-end">
      <div class="col-md-10 m-auto">
      		<img src="<?php echo get_template_directory_uri(); ?>/img/careers_video.png" />
      </div>
    </div>
  </div>
</section>
<!-- End banner Area --> 

<!-- Start Careers Area -->
<section class="service-area section-gap">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12 header-text mb-4">
        <h2 class="mb-20 text-center"><span>Why Work at EnerBank?</span></h2>
        <p> Jobs come and go, but a career at EnerBank is just that: a career. We truly value our people — hiring the best and brightest, then continuing to nurture that talent as team members develop their skills and move up through the organization over time. If you love to help people, thrive in a challenging environment, 
and are ready for the time of your life, consider joining us.</p>
      </div>
      <div class="col-md-12 header-text">
        <h2 class="mb-20 text-center"><span>Available Positions</span></h2>
      </div>
      <!-- Jobs List -->
      <ul class="jobs_list">
      	<li>
        	<h3>Position Title</h3>
            <div class="job_location">Location, NA</div>
            <p>Position Overview: Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus. Morbui plat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam.
Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
			<a href="#" class="btn btn-primary f-bold equal-wd mb-4">View Job Details & Apply</a>
        </li>
        <li>
        	<h3>Position Title</h3>
            <div class="job_location">Location, NA</div>
            <p>Position Overview: Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus. Morbui plat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam.
Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
			<a href="#" class="btn btn-primary f-bold equal-wd mb-4">View Job Details & Apply</a>
        </li>
        <li>
        	<h3>Position Title</h3>
            <div class="job_location">Location, NA</div>
            <p>Position Overview: Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus. Morbui plat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam.
Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
			<a href="#" class="btn btn-primary f-bold equal-wd mb-4">View Job Details & Apply</a>
        </li>
        <li>
        	<h3>Position Title</h3>
            <div class="job_location">Location, NA</div>
            <p>Position Overview: Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus. Morbui plat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam.
Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
			<a href="#" class="btn btn-primary f-bold equal-wd mb-4">View Job Details & Apply</a>
        </li>
        <li>
        	<h3>Position Title</h3>
            <div class="job_location">Location, NA</div>
            <p>Position Overview: Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus. Morbui plat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam.
Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
			<a href="#" class="btn btn-primary f-bold equal-wd mb-4">View Job Details & Apply</a>
        </li>
      </ul>
      <!-- Pagination Nav start here -->
      <ul class="pagination">
		    <li class="page-item">
		      <a href="#" class="page-link" aria-label="Previous">
		        <span aria-hidden="true"><span class="fa fa-caret-left"></span></span>
		      </a>
		    </li>
		    <li class="page-item active"><a href="#" class="page-link">1</a></li>
		    <li class="page-item"><a href="#" class="page-link">2</a></li>
		    <li class="page-item"><a href="#" class="page-link">3</a></li>		                            
		    <li class="page-item"><a href="#" class="page-link" aria-label="Next">
		      <span aria-hidden="true"><span class="fa fa-caret-right"></span></span>
		                          </a>
		    </li>
		  </ul>
    </div>
  </div>
</section>
<!-- End Jobs List Area --> 

<?php
get_footer();