<?php
/**

 * The main template file

 *

 * This is the most generic template file in a WordPress theme

 * and one of the two required files for a theme (the other being style.css).

 * It is used to display a page when nothing more specific matches a query.

 * E.g., it puts together the home page when no home.php file exists.

 *

 * Template Name: Home Owner

 */


get_header();
?>

<!-- start banner Area -->
<section class="banner-area" style="background:url(<?php echo get_template_directory_uri(); ?>/img/head_banner.jpg) center; background-repeat: no-repeat;
    background-size: cover;">
  <div class="container">
    <div class="row fullscreen d-flex align-items-end pb-40">
      <div class="col-md-4">
        <div class="header-btn mr-3 ml-3"><a href="#">Account <br>Log In</a></div>
      </div>
      <div class="col-md-4">
        <div class="header-btn mr-3 ml-3"><a href="#">View / Sign <br>Loan Docs</a></div>
      </div>
      <div class="col-md-4">
        <div class="header-btn mr-3 ml-3"><a href="#">Refer a <br>Contractor</a></div>
      </div>
    </div>
  </div>
</section>
<!-- End banner Area --> 

<!-- Start service Area -->
<section class="service-area section-gap">
  <div class="container">
    <div class="row justify-content-center">
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
    </div>
    <div class="benefit-option my-3">
      <ul>
        <li>
          <div class="box-circle icon bg-blue content-center">
            <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2020/07/exclusive-home.svg" alt="Exclusive Home Improvement Lender">
          </div>
          <p>Exclusive Home Improvement Lender</p>
        </li>
        <li>
          <div class="box-circle icon bg-blue content-center">
            <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2020/09/quick-easy-app-process.svg" alt="Quick and Easy Application Process">
          </div>
          <p>Quick and Easy Application Process</p>
        </li>
        <li>
          <div class="box-circle icon bg-blue content-center">
            <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2020/07/us-based-lending.svg" alt="U.S.Based Lending &amp; Customer Service">
          </div>
          <p>U.S.Based Lending &amp; Customer Service</p>
        </li>
        <li>
          <div class="box-circle icon bg-blue content-center">
            <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2020/07/180-day-credit.svg" alt="120-180 Day Credit Commitment">
          </div>
          <p>120-180 Day Credit Commitment</p>
        </li>
        <li>
          <div class="box-circle icon bg-blue content-center">
            <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2020/07/member-fdic.svg" alt="Member FDIC Insured">
          </div>
          <p>Member FDIC Insured</p>
        </li>
        <li>
          <div class="box-circle icon bg-blue content-center">
            <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2020/07/bbb-rating.svg" alt="A+ BBB Rating">
          </div>
          <p>A+ BBB Rating</p>
        </li>
      </ul>
    </div>
  </div>
</section>
<!-- End service Area --> 

<!-- Start home-about Area -->
<section class="pt-30 pb-30 relative" style="background:url(<?php echo get_template_directory_uri(); ?>/img/family_banner.jpg) center; background-repeat: no-repeat; background-size: cover; min-height:515px;"></section>
<!-- End home-about Area -->
<section class="section-gap container" id="howtopay">
  <h2 class="mb-30 text-center"><span>Six Ways to Make a Payment</span></h2>
  <ul class="accordion loan_offer mx-4 mx-lg-5" role="tablist">
    <li aria-expanded="false" aria-selected="false" class="accordion-panel accordion-panel--unchecked accordion-panel--content accordion-panel--enabled accordion-panel--first accordion-panel--animated accordion-panel--height" role="tab"><input type="radio" aria-controls="tabbordion-0-0-content" data-state="tabbordion" id="tabbordion-0-0" name="accordion" value="0"><label class="accordion-title accordion-title--unchecked accordion-title--content accordion-title--enabled accordion-title--first accordion-title--animated accordion-title--height w-100 text-left btn btn-link" for="tabbordion-0-0">Make a payment online</label><div id="tabbordion-0-0-content" aria-labelledby="tabbordion-0-0" class="accordion-animator accordion-animator--unchecked accordion-animator--content accordion-animator--enabled accordion-animator--first accordion-animator--animated accordion-animator--height" role="tabpanel" style="height:0px;overflow:hidden"><div class="accordion-content accordion-content--unchecked accordion-content--content accordion-content--enabled accordion-content--first accordion-content--animated accordion-content--height">
      <div>
        <ul>
          <li>If your account number starts with 456, click this link: <a href="https://account.enerbank.com"><strong>https://account.enerbank.com</strong></a>. Click here to <a href="#"><strong>Learn More</strong></a></li>
          <li>If not, click this link: <a href="https://payments.enerbank.com"><strong>https://payments.enerbank.com</strong></a></li>
          <li>No charge to schedule one-time or recurring payments from a personal checking or savings account</li>
          <li> $4.95 fee per transaction to schedule one-time or recurring payments using your debit card</li>
        </ul>
      </div>
    </li>
    <li aria-expanded="false" aria-selected="false" class="accordion-panel accordion-panel--unchecked accordion-panel--content accordion-panel--enabled accordion-panel--between accordion-panel--animated accordion-panel--height" role="tab"><input type="radio" aria-controls="tabbordion-0-1-content" data-state="tabbordion" id="tabbordion-0-1" name="accordion" value="1"><label class="accordion-title accordion-title--unchecked accordion-title--content accordion-title--enabled accordion-title--between accordion-title--animated accordion-title--height w-100 text-left btn btn-link" for="tabbordion-0-1">Schedule recurring payment</label><div id="tabbordion-0-1-content" aria-labelledby="tabbordion-0-1" class="accordion-animator accordion-animator--unchecked accordion-animator--content accordion-animator--enabled accordion-animator--between accordion-animator--animated accordion-animator--height" role="tabpanel" style="height:0px;overflow:hidden"><div class="accordion-content accordion-content--unchecked accordion-content--content accordion-content--enabled accordion-content--between accordion-content--animated accordion-content--height">
      <div>
        <ul>
          <li>No charge</li>
          <li>Fill out the Automatic Debit Form (see below) or send in a letter with required banking information to: <br><strong>EnerBank USA <br>1245 Brickyard Road, Suite 600 <br>Salt Lake City, UT 84106-2581</strong></li>
        </ul>
      </div>
    </li>
    <li aria-expanded="false" aria-selected="false" class="accordion-panel accordion-panel--unchecked accordion-panel--content accordion-panel--enabled accordion-panel--between accordion-panel--animated accordion-panel--height" role="tab"><input type="radio" aria-controls="tabbordion-0-2-content" data-state="tabbordion" id="tabbordion-0-2" name="accordion" value="2"><label class="accordion-title accordion-title--unchecked accordion-title--content accordion-title--enabled accordion-title--between accordion-title--animated accordion-title--height w-100 text-left btn btn-link" for="tabbordion-0-2">Online bill pay</label><div id="tabbordion-0-2-content" aria-labelledby="tabbordion-0-2" class="accordion-animator accordion-animator--unchecked accordion-animator--content accordion-animator--enabled accordion-animator--between accordion-animator--animated accordion-animator--height" role="tabpanel" style="height:0px;overflow:hidden"><div class="accordion-content accordion-content--unchecked accordion-content--content accordion-content--enabled accordion-content--between accordion-content--animated accordion-content--height">
      <div>
        <ul>
          <li>Setup EnerBank USA® as a new payee with your financial institution</li>
          <li>Have your bank deduct the payment from your account and make payment to EnerBank</li>
        </ul>
      </div>
    </li>
    <li aria-expanded="false" aria-selected="false" class="accordion-panel accordion-panel--unchecked accordion-panel--content accordion-panel--enabled accordion-panel--between accordion-panel--animated accordion-panel--height" role="tab"><input type="radio" aria-controls="tabbordion-0-3-content" data-state="tabbordion" id="tabbordion-0-3" name="accordion" value="3"><label class="accordion-title accordion-title--unchecked accordion-title--content accordion-title--enabled accordion-title--between accordion-title--animated accordion-title--height w-100 text-left btn btn-link" for="tabbordion-0-3">Mail with a payment coupon</label><div id="tabbordion-0-3-content" aria-labelledby="tabbordion-0-3" class="accordion-animator accordion-animator--unchecked accordion-animator--content accordion-animator--enabled accordion-animator--between accordion-animator--animated accordion-animator--height" role="tabpanel" style="height:0px;overflow:hidden"><div class="accordion-content accordion-content--unchecked accordion-content--content accordion-content--enabled accordion-content--between accordion-content--animated accordion-content--height">
      <div><strong>EnerBank USA <br>PO Box 26856 <br>Salt Lake City, UT 84126-0856</strong></div>
    </li>
    <li aria-expanded="false" aria-selected="false" class="accordion-panel accordion-panel--unchecked accordion-panel--content accordion-panel--enabled accordion-panel--between accordion-panel--animated accordion-panel--height" role="tab"><input type="radio" aria-controls="tabbordion-0-4-content" data-state="tabbordion" id="tabbordion-0-4" name="accordion" value="4"><label class="accordion-title accordion-title--unchecked accordion-title--content accordion-title--enabled accordion-title--between accordion-title--animated accordion-title--height w-100 text-left btn btn-link" for="tabbordion-0-4">Send a payment via overnight delivery</label><div id="tabbordion-0-4-content" aria-labelledby="tabbordion-0-4" class="accordion-animator accordion-animator--unchecked accordion-animator--content accordion-animator--enabled accordion-animator--between accordion-animator--animated accordion-animator--height" role="tabpanel" style="height:0px;overflow:hidden"><div class="accordion-content accordion-content--unchecked accordion-content--content accordion-content--enabled accordion-content--between accordion-content--animated accordion-content--height">
      <div><strong>EnerBank USA <br>1245 Brickyard Road, Suite 600<br>Salt Lake City, UT 84106-2581<br></strong></div>
    </li>
    <li aria-expanded="false" aria-selected="false" class="accordion-panel accordion-panel--unchecked accordion-panel--content accordion-panel--enabled accordion-panel--last accordion-panel--animated accordion-panel--height" role="tab"><input type="radio" aria-controls="tabbordion-0-5-content" data-state="tabbordion" id="tabbordion-0-5" name="accordion" value="5"><label class="accordion-title accordion-title--unchecked accordion-title--content accordion-title--enabled accordion-title--last accordion-title--animated accordion-title--height w-100 text-left btn btn-link" for="tabbordion-0-5">Payments over the phone</label><div id="tabbordion-0-5-content" aria-labelledby="tabbordion-0-5" class="accordion-animator accordion-animator--unchecked accordion-animator--content accordion-animator--enabled accordion-animator--last accordion-animator--animated accordion-animator--height" role="tabpanel" style="height:0px;overflow:hidden"><div class="accordion-content accordion-content--unchecked accordion-content--content accordion-content--enabled accordion-content--last accordion-content--animated accordion-content--height">
      <div>
        <ul>
          <li>There is a $4.95 fee per transaction</li>
          <li>Payment must be from a personal checking or savings account</li>
          <li>Call <strong>888.390.1220 option 1</strong></li>
        </ul>
      </div>
    </li>
  </ul>
  <div class="text-center mt-4">
    <button class="btn btn-primary f-bold equal-wd mb-4">Account Log In</button><br>
    <button class="btn btn-primary f-bold equal-wd mb-4">Automatic Debit Form (PDF)</button>
    <p>Question about a loan? Have a comment? We want to hear from you.</p>
    <button class="btn btn-primary f-bold equal-wd mb-4">Leave Feedback</button>
  </div>
  <div class="collapse">
    <form>
      <textarea class="form-control mb-3" name="leave_feedback" style="height:100px" placeholder="Leave feedback here ..."></textarea>
      <button class="btn btn-primary">Submit</button>
      <button class="btn btn-primary ml-3">Cancel</button>
    </form>
  </div>
</section>
<?php
get_footer();
