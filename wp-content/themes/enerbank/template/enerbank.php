<?php
/**

 * The main template file

 *

 * This is the most generic template file in a WordPress theme

 * and one of the two required files for a theme (the other being style.css).

 * It is used to display a page when nothing more specific matches a query.

 * E.g., it puts together the home page when no home.php file exists.

 *

 * Template Name: Enerbank 

 */


get_header();
?>

<!-- start banner Area -->
<section class="banner-area" id="home">
  <div class="container">
    <div class="row fullscreen d-flex align-items-end pb-40">
      <div class="col-md-4">
        <div class="header-btn mr-3 ml-3"><a href="#">Make a <br>Payment</a></div>
      </div>
      <div class="col-md-4">
        <div class="header-btn mr-3 ml-3"><a href="#">Create a <br>Loan Program</a></div>
      </div>
      <div class="col-md-4">
        <div class="header-btn mr-3 ml-3"><a href="#">Join a <br>Loan Program</a></div>
      </div>
    </div>
  </div>
</section>
<!-- End banner Area --> 

<!-- Start service Area -->
<section class="service-area section-gap">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12 header-text">
        <?php
          if ( have_posts() ) {
            while ( have_posts() ) {
              the_post();
              get_template_part( 'template-parts/content/custom-content' );
            }
          } else {
            get_template_part( 'template-parts/content/custom-content', 'none' );

          }
        ?>
        <!-- <h2 class="mb-20 text-center">Largest Specialized Home Improvement Lender</h2>
        <p> We’re a specialized lender that helps independent home improvement contractors and strategic business partners increase sales. Our customers rely on us to be here today and tomorrow to help them achieve their business goals and objectives. We’re the bank of  choice for home improvement lending. We are reliable, professional, and we produce results. </p> -->
      </div>
    </div>
  </div>
</section>
<!-- End service Area --> 

<!-- Start home-about Area -->
<section class="home-about-area relative">
  <div class="container">
    <div class="row align-items-center justify-content-end">
      <div class="col-sm-3 gift_card text-center"><img src="/wp-content/uploads/2020/05/Amazon-Gift-logo.png" alt="A gift card from amazon.com"></div>
      <div class="col-sm-9 col-lg-6 px-lg-0 home-about-right">
        <div class="row flex-column flex-sm-row">
          <div class="single-services col">
            <h3>Refer A Contractor</h3>
            <p>Refer a contractor to EnerBank's Express Loan Program and receive a $300 Amazon.com Gift Card!</p>
          </div>
          <div class="single-services col align-item-center"> 
            <a href="#" class="btn d-block genric-btn primary mb-20 mt-20 f-bold">I'm a Homeowner</a> 
            <a href="#" class="btn d-block genric-btn primary f-bold">I'm in the Industry</a> </div>
          </div>
      </div>
    </div>
  </div>
</section>
<!-- End home-about Area -->
<section class="section-gap">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p>Why are we the most sought-after bank in the home improvement industry? Since 2002, we’ve focused exclusively on home improvement lending - which means we offer unparalleled service, the tools to help contractors succeed, and payment options custom-designed for home improvement customers.</p>
      </div>
    </div>
    <div class="row pb-30 pt-30">
      <div class="col-lg-4">
        <div class="single-offer card-body">  <i class="icon_circil"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/news-media.svg" alt="News"></i>
          <h4>News / Media</h4>
          <p>Contacts and resources for media </p>
          <a href="#" class="btn btn-primary f-bold">Learn More</a>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="single-offer card-body"> <i class="icon_circil"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/careers.svg" alt="Careers"></i>
          <h4>Careers</h4>
          <p>Dedicated to your growth. Learn more about career opportunities </p>
          <a href="#" class="btn btn-primary f-bold">Learn More</a>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="single-offer card-body">  <i class="icon_circil"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/upcoming-events.svg" alt="Events"></i>
          <h4>Upcoming Events</h4>
          <p>Meet us at these exciting events</p>
          <a href="#" class="btn btn-primary f-bold">Learn More</a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="home-about-area2 pt-20 pb-20 relative">
  <div class="container">
    <div class="row align-items-center justify-content-end">
      <div class="col-lg-6 no-padding home-about-right">
        <div class="row">
          <div class="single-services col pt-4 pb-2"> <a href="#" class="btn genric-btn primary f-bold mb-20">Learn More About Our Loan Programs</a>
            <p>Whether you are an organization with a network of contractors, or an independent contractor, we have a loan program for you.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
