<?php
/**

 * The main template file

 *

 * This is the most generic template file in a WordPress theme

 * and one of the two required files for a theme (the other being style.css).

 * It is used to display a page when nothing more specific matches a query.

 * E.g., it puts together the home page when no home.php file exists.

 *

 * Template Name: LoanPrograms 

 */


get_header();
?>
<section id="primary" class="content-area">
  <main id="main" class="site-main">

  <?php
    // if ( have_posts() ) {
    //   // Load posts loop.
    //   while ( have_posts() ) {
    //     the_post();
    //     get_template_part( 'template-parts/content/content' );
    //   }
    //   // Previous/next page navigation.
    //   twentynineteen_the_posts_navigation();
    // } else {
    //   // If no content, include the "No posts found" template.
    //   get_template_part( 'template-parts/content/content', 'none' );
    // }
  ?>

  </main><!-- .site-main -->
</section><!-- .content-area -->

<!-- start banner Area -->
<section class="banner-area loanPrograms_banner" id="home">
  <div class="container">
    <div class="row fullscreen d-flex align-items-end pb-40">
      <div class="col-md-4">
        <div class="header-btn mr-3 ml-3"><a href="#">Payment<br>Option Benefits</a></div>
      </div>
      <div class="col-md-4">
        <div class="header-btn mr-3 ml-3"><a href="#">Join a<br>Loan Program</a></div>
      </div>
      <div class="col-md-4">
        <div class="header-btn mr-3 ml-3"><a href="#">Create a <br>Loan Program</a></div>
      </div>
    </div>
  </div>
</section>
<!-- End banner Area --> 

<!-- start banner Area -->
<section class="video-section">
  <div class="container">
    <div class="row">
      <div class="d-inline-block m-auto">
          <img src="<?php echo get_template_directory_uri(); ?>/img/loanPrograms_video.jpg" class="img-fluid box-shadow" />
          <p class="text-center font-weight-bold mt-2 mb-4">WATCH: Discover the key to unlocking business growth</p>
      </div>      
    </div>
  </div>
</section>
<!-- End banner Area --> 

<!-- Payment Option section --> 
<!-- headbar start -->
<div class="bg-blue">
    <h1 class="container text-center py-4 h2 text-white">Payment Options Benefits</h1>
</div>
<!-- headbar end -->
<div class="container">
    <div class="row justify-content-center">
      <div class="m-3 m-lg-5 pb-3">When you remove the money barrier from the equation, you open up the valve and let the deals flow! Offering an unbeatable choice of EnerBank USA® payment options enables serious growth for your home improvement business while you help your customers bring their dream projects to life!</div>
    </div>
    <div class="payment-option">
        <ul>
          <li>
            <a href="#" data-toggle="modal" data-target="#paymentModal" data-title="Improve Cash Flow" data-content="24 hours. That’s all it takes for the funds to hit your account after you submit a payment request. Now your cash flow is no longer a question and you can get to work.">
              <div class="box-circle icon bg-blue content-center"><img src="<?php echo get_template_directory_uri(); ?>/img/svg/payment_option/_BlueCircle/PaymentOptions_Improve_Cash_Flow.svg"></div>
              <p>Improve <br>Cash Flow</p>
            </a>
          </li>
          <li>
            <a href="#" data-toggle="modal" data-target="#paymentModal" data-title="Increase Leads" data-content="You can see a 50% increase in leads (plus a better conversion rate) when you advertise a choice of payment options in your marketing materials and on your website. And you get more referrals — customers value the convenience and flexibility that payment options provide, and that satisfaction means they’ll be more likely to refer their friends, relatives, and neighbors for additional work from you.">
              <div class="box-circle icon bg-blue content-center"><img src="<?php echo get_template_directory_uri(); ?>/img/svg/payment_option/_BlueCircle/PaymentOptions_Increase_Leads.svg"></div>
              <p>Increase <br>Leads</p>
            </a>
          </li>
          <li>
            <a href="#" data-toggle="modal" data-target="#paymentModal" data-title="Boost Close Rate" data-content="Offering a choice of payment options can nearly double your close rate. For example: assuming a 25% baseline, you can increase your close rate to 44% when offering a Same-As-Cash loan and a low monthly payment loan.">
              <div class="box-circle icon bg-blue content-center"><img src="<?php echo get_template_directory_uri(); ?>/img/svg/payment_option/_BlueCircle/PaymentOptions_Boost_Close_Rate.svg"></div>
              <p>Boost <br>Close Rate</p>
            </a>
          </li>
          <li>
            <a href="#" data-toggle="modal" data-target="#paymentModal" data-title="Grow Average Project Size" data-content="Homeowners who choose a payment option spend 44% more on their home improvement projects. Over 1/3 of homeowners regret not spending more on their project to get the results they truly wanted. A choice of payment options helps them get what they truly want, which means more business for you.">
              <div class="box-circle icon bg-blue content-center"><img src="<?php echo get_template_directory_uri(); ?>/img/svg/payment_option/_BlueCircle/PaymentOptions_Grow_Average_Project_Size.svg"></div>
              <p>Grow Average <br>Project Size</p>
            </a>
          </li>
          <li>
            <a href="#" data-toggle="modal" data-target="#paymentModal" data-title="Eliminate Discounting" data-content="When your customer is paying cash or providing their own financing, you may feel you need to offer a discount to close a deal, eating into your margins. Or, they may decide to choose a smaller project size or lower quality products. More customers will say YES to your first estimate when you offer payment options.">
              <div class="box-circle icon bg-blue content-center"><img src="<?php echo get_template_directory_uri(); ?>/img/svg/payment_option/_BlueCircle/PaymentOptions_Eliminate_Discounting.svg"></div>
              <p>Eliminate <br>Discounting</p>
            </a>
          </li>
          <li>
            <a href="#" data-toggle="modal" data-target="#paymentModal" data-title="Reduce Cancellations" data-content="You can expect your cancellations to be reduced when you offer a choice of payment options to 100% of your customers, because it ties the project to you — a customer will be more likely to stay with you and not ask to delay the project to perform further research or seek additional bids. Homeowners who are approved for an EnerBank loan are 94% more likely to complete the job with you.">
              <div class="box-circle icon bg-blue content-center"><img src="<?php echo get_template_directory_uri(); ?>/img/svg/payment_option/_BlueCircle/PaymentOptions_Reduce_Cancellations.svg"></div>
              <p>Reduce <br>Cancellations</p>
            </a>
          </li>
        </ul>
    </div>

    <!-- Payment Option section end -->
    <div class="d-flex flex-wrap my-3 my-md-5">
        <div class="box-shadow bg-white rounded text-center payment-option-box col-xs-12 col-md p-0 mb-3 mr-sm-3 mr-lg-5">
            <div class="bg-blue p-5 rounded-top">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/cal_icon2.png" alt="News">
            </div>
            <div class="p-4">
                <h3 class="mb-10">Growth Calculator</h3>
                <p>Offering payment options from EnerBank USA is a proven way to increase your close rates, average job size and total sales. See what we can do for your numbers!</p>
            </div>
        </div>
        <div class="box-shadow bg-white rounded text-center payment-option-box col-xs-12 col-md p-0 mb-3 ml-sm-3 ml-lg-5">
            <div class="bg-blue p-5 rounded-top">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/white_dolor_icon.png" alt="News">
            </div>
            <div class="p-4">
                <h3 class="mb-10">View Our Loan Types</h3>
                <p>We offer a wide variety of loan products to fit the needs of your customers.</p>
            </div>
        </div>
    </div>

</div>

<section class="joinLoanProgram">
    <!-- headbar start -->
    <div class="bg-blue">
        <div class="container text-center py-4 h2 text-white">Join a Loan Program</div>
    </div>
    <!-- headbar end -->
    <div class="container">
        <div class="brif">Are you a contractor interested in offering payment options to your customers? We have just what you need to get started with products and tools that can grow your business! <a href="#">Click Here To Join</a></div>
        <h2 class="text-center color-blue"><span>What You Get</span></h2>
        <div class="row my-5">

          <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="card wygbox box-shadow">
                  <div class="wygthumb apps">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/app-method-thumb.png" class="card-img-top" alt="Dealer Resource Center">
                  </div>
                  <div class="card-body">
                    <h3 class="card-title">Application Methods</h3>
                    <p class="card-text">Got a phone? Get a loan. It’s fast, easy, and paperless.</p>
                    <a href="#" data-toggle="modal" data-target="#appPopup" class="btn">Learn More</a>
                  </div>
              </div>
          </div>

          <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="card wygbox box-shadow">
                  <div class="wygthumb partner">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/partner-portal-thumb.png" class="card-img-top" alt="Dealer Resource Center">
                  </div>
                  <div class="card-body">
                    <h3 class="card-title">Partner Portal</h3>
                    <p class="card-text">See it all. Do it all. A one-stop shop for managing your loans.</p>
                    <a href="#" data-toggle="modal" data-target="#partnerPopup" class="btn">Learn More</a>
                  </div>
              </div>
          </div>

          <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="card wygbox box-shadow">
                  <div class="wygthumb dealer">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/dealer-resouce-center-thumb.png" class="card-img-top" alt="Dealer Resource Center">
                  </div>
                  <div class="card-body">
                    <h3 class="card-title">Dealer Resource Center</h3>
                    <p class="card-text">Everything you need for marketing success, and more.</p>
                    <a href="#" data-toggle="modal" data-target="#dealerPopup" class="btn">Learn More</a>
                  </div>
              </div>
          </div>
          
        </div>
    </div>
        
</section>

<!-- App Integration -->
<div class="container">
<div class="p-3 p-sm-4 p-lg-5" style="background-color:#e6e7e8;">
<div class="h1 text-dark text-center mb-4 font-weight-normal">Online App Integration</div>
<img src="<?php echo get_template_directory_uri(); ?>/img/loan-program-banner.svg">
</div>
    
</div>

<section class="container">    
    <div class="my-4 my-lg-5 mx-4 mx-lg-5 p-3">The EnerBank Online Application integrates with your contractor business website to provide a simple, paperless loan application process for your customers, making it effortless to apply for payment options. You can link directly to the application from your site or marketing materials as an easy way to pre-qualify your customers. </div>

    <div class="d-flex flex-wrap">
        <div class="box-shadow bg-white rounded text-center payment-option-box col-xs-12 col-md mb-3 mb-lg-0 p-0 mr-md-3 mr-lg-5">
            <div class="wygthumb loantype">
              <img src="<?php echo get_template_directory_uri(); ?>/img/loantype-bg.png" class="card-img-top" alt="Dealer Resource Center">
            </div>
            <div class="p-4">
                <h3 class="mb-10">Loan Types</h3>
                <p>Every job and every customer is different. So we have a payment option to match any scenario. <br> <a href="/loan-types/">Learn More</a></p>
            </div>
        </div>
        <div class="box-shadow bg-white rounded text-center payment-option-box col-xs-12 col-md mb-3 mb-lg-0 p-0 ml-md-3 ml-lg-5">
            <div class="wygthumb training">
              <img src="<?php echo get_template_directory_uri(); ?>/img/training-bg.png" class="card-img-top" alt="Training">
            </div>
            <div class="p-4">
                <h3 class="mb-10">Training</h3>
                <p>Know the drill so you can nail it every time. <br>
                <a href="#" data-toggle="modal" data-target="#TrainingPopup">Learn More</a></p>
            </div>
        </div>
      </div>

    </div>
    
    <div class="m-4 m-lg-5">We offer loans for a ton of different home improvement project types. Don’t see your type here? <a href="#">Give us a call</a>.</div>
    <div class="accordion loan_offer mx-4 mx-lg-5" id="accordionExample">
    
        <button class="d-block w-100 text-left btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Interior Remodeling</button>
        
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">Does your customer need an extra bedroom, or maybe want to knock out a wall for that killer entertainment cave? Are they turning the dining room into a library, or updating the kitchen? Is it time for an extra bathroom? Ready for new flooring? These are just a few of the interior jobs that EnerBank can fund. Great loans for these job types include Same-As-Cash Loans and Reduced Interest Loans.</div>
        </div>
        <!--  -->
        <button class="d-block w-100 text-left btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Additions</button>
        
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">Are you building an add-on for your customer, to increase the total square footage? EnerBank has loans for that type of project. The best loan type for an addition is a Reduced Interest Loan.</div>
        </div>
        <!--  -->
        <button class="d-block w-100 text-left btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Exterior Remodeling</button>
        
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">These projects include pain, siding, and even new paving stones. EnerBank is ready to provide the loans your customer needs for all exterior projects, including Same-As-Cash Loans and Zero Interest Loans.</div>
        </div>
        <!--  -->
        <button class="d-block w-100 text-left btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">HVAC</button>
        
        <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">Heating, ventilation and air conditioning jobs are served well by offering payment options, because many times they’re unexpected expenses for which a customer could use some financial flexibility. Be sure to offer a Same-As-Cash Loan option and perhaps something with a longer term.</div>
        </div>
        <!--  -->
        <button class="d-block w-100 text-left btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">Solar</button>
        
        <div id="collapseFive" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">EnerBank proudly offers several customized loan options for funding solar PV projects, including Same-As-Cash, a Combo EZ Loan, and our popular Triple Option Loan that really helps homeowners decide for themselves how best to manage their liquidity.</div>
        </div>

    </div>
    
    <div class="row m-4 m-lg-5">
      <div class="col-md-12 text-justify">
        <p>We are working to become the most sought after lender in the home improvement industry. 
          We choose to specialize in home improvement payment options so we can offer unparalleled service and support, comprehensive payment options designed with consumers in mind, and tools that will help your business succeed. </p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 mb-4 mb-lg-0">
        <div class="single-offer card-body">  <i class="icon_circil"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/50_icon.png" alt="News"></i>
          <h4>All 50 States</h4>
          <p>EnerBank offers quality service nationwide! </p>
          <a href="#" data-toggle="modal" data-target="#50-state" class="btn btn-primary f-bold">Learn More</a>
        </div>
      </div>
      
      <div class="col-lg-4 mb-4 mb-lg-0">
        <div class="single-offer card-body"> <i class="icon_circil"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/rel_manage_icon.png" alt="Careers"></i>
          <h4>Dedicated Relationship Manager</h4>
          <p>Committed to the success of your business.</p>
          <a href="#" data-toggle="modal" data-target="#relationship-manager" class="btn btn-primary f-bold">Learn More</a>
        </div>
      </div>
        
      <div class="col-lg-4 mb-4 mb-lg-0">
        <div class="single-offer card-body">  <i class="icon_circil"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/support_icon.png" alt="Events"></i>
          <h4>Support</h4>
          <p>All customer support is based in the US</p>
          <a href="#" data-toggle="modal" data-target="#SupportPopup" class="btn btn-primary f-bold">Learn More</a>
        </div>
      </div>
    </div>
    
    <div class="m-4 m-lg-5">
        <h2 class="text-center">How To Select Loan Provider</h2>
        <p class="text-center py-2">22 Essential Questions for Contractors to Ask Before Selecting a Lending Partner</p>
        <div class="d-flex justify-content-center howselectloan">
          <a href="#">View / Read</a>
          <div class="display-inline-block box-20">20<span>?</span>
          </div>    
          <a href="#">Download</a>
        </div>
    </div>
</section>

<div class="bg-blue mt-5">
    <div class="container text-center py-4 h2 text-white">Create a Loan Program</div>
</div>
<div class="bg-grey createLoanProgram">
    <div class="container">
        <h4 class="h3">A loan program through EnerBank USA is a powerful business tool that gives your dealers what they need to increase their sales — and yours.</h4>
        
        <p class="mt-3 mt-lg-4 mb-0 text-blue query">Why someone would want to create a loan program:</p>
        <p>Our private-label loan programs are customized to your market and customers. With EnerBank’s proven methods, your dealers will get more leads, close more sales, and get bigger jobs. We offer selling strategies and support programs that ensure your dealers are successful using your program immediately after training and activation, so you can start seeing results right away. </p>

        <p class="text-blue query">Through our innovative loan program, you’ll:</p>
        <div class="mb-4">
            <ul>
              <li>Hit your sales objectives </li>
              <li>Increase market share</li>
              <li>Grow your revenue</li>
              <li>Attract & retain top dealers</li>
            </ul>
        </div>
        <p class="text-blue mb-0 query">What are the qualifications to create a loan program:</p>
        <p>To learn how to qualify as an EnerBank program sponsor, contact our business development team today at <a href="#">[insert phone number icon and email link icon]</a>.</p>
    
        <div class="d-flex flex-wrap my-4 my-lg-5">
              <div class="box-shadow bg-white rounded text-center payment-option-box col-xs-12 col-md mb-3 mb-lg-0 p-0 mr-md-3 mr-lg-5">
                  <div class="wygthumb benefitloan">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/training-bg.png" class="card-img-top" alt="Dealer Resource Center">
                  </div>
                  <div class="p-4">
                      <h3 class="mb-10">Benefits of Creating a Loan Program</h3>
                      <p>Aliquam zourti porttitor mauris sit amet orci. Aenean dignissim pellehue.  <a href="#" data-toggle="modal" data-target="#BenefitsPopup">Learn More</a></p>
                  </div>
              </div>
              <div class="box-shadow bg-white rounded text-center payment-option-box col-xs-12 col-md mb-3 mb-lg-0 p-0 ml-md-3 ml-lg-5">
                  <div class="wygthumb programfeature">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/program-feature-banner.png" class="card-img-top" alt="Dealer Resource Center">
                  </div>
                  <div class="p-4">
                      <h3 class="mb-10">Program Features</h3>
                      <p>Aliquam zourti porttitor mauris sit amet orci. Aenean dignissim pellehue. <a href="#">Learn More</a></p>
                  </div>
              </div>
            </div>
        </div>
    
        <div class="mt-3 mt-lg-5">
            <h2 class="text-center">How To Select A Partner To Create Loan Program</h2>
            <p class="text-center py-2">23 Essential Questions for Program Sponsors to Ask Before Selecting a Lending Partner</p>
            <div class="d-flex justify-content-center howselectloan">
              <a href="#">View / Read</a>
              <div class="display-inline-block box-20">23<span>?</span>
              </div>    
              <a href="#">Download</a>
            </div>
        </div>

    </div>  
</div>

  <div class="container-fluid" style="overflow-x: hidden;">
      <div class="container">
          <h3 class="text-center mx-5 mb-3 my-2 p-5">
              <span>What Our Partners Say</span>
              <hr style="height:2px; background:#444; margin-top:1.5rem;">
          </h3>
      </div>

      <div class="owl-carousel owl-theme partners">
          <div class="item text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/partners/certapro-logo.png" alt="partner logo" class="img-fluid">
            <p>“Offering EnerBank payment options to every single residential customer has made a huge difference in our sales because it makes the buying experience very easy for our customers. It sets us apart from our competition.”</p>
            - Greg Taylor, CertaPro
          </div>
          <div class="item text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/partners/CCN_RGB_TAG1.png" alt="partner logo" class="img-fluid">
            <p>“Our experience working with the EnerBank team has been extremely positive.”</p>
            - Greg Taylor, CertaPro
          </div>

          <div class="item text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/partners/cn-logo-lp.png" alt="partner logo" class="img-fluid">
            <p>“EnerBank payment options help us differentiate ourselves from our competition. Our customers have always given good feedback from the application process through to the end. It’s a great tool to help us meet the needs of our customers.”</p>
            - Chris Boatright, CertaPro
          </div>




          <div class="item text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/partners/digiorgi-logo.png" alt="partner logo" class="img-fluid">
            <p>“We’ve worked with EnerBank since 2006. We offer payment options to 100% of our customers — because it works. We always lead with the Same-As-Cash loan.”</p>
            - Charlie Marino, CFO DiGiorgi
          </div>


          <div class="item text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/partners/advanced-window-logo.png" alt="partner logo" class="img-fluid">
            <p>“We’ve been with EnerBank since 2010. Very easy to work with, very easy to communicate...if you need to call them on the phone, they actually answer the phone.”</p>
            - Marsh, Owner, Advanced Window Products
          </div>
      </div>

      <div class="propertyPanel">
          <div class="propertyList owl-carousel owl-theme">
              <div class="listProp wow fadeInDown">
                <div class="imgbox" style="background-image:url(https://cdn.omaxe.com/exclusivehome/banner_1571904878417.jpg); height:200px"></div>
              </div>
          </div>
      </div>
  </div>

<?php get_footer(); ?>

<!-- All 50 States modal -->
      <div class="modal fade" id="50-state" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-full modal-dialog-centered" role="document">
          <div class="modal-content">
              <div class="d-sm-flex">
                <div class="d-flex flex-column align-item-center justify-content-center">
                  <div class="heading_bg">
                      <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                      <!-- <span aria-hidden="true">&times;</span> -->
                      <img src="<?php echo get_template_directory_uri(); ?>/img/closed_icon.svg" width="25">
                  </button>
                      <h3>All 50 States</h3>
                  </div>
                  <div class="modal_content p-5 py-sm-5">                  
                      <div class="small line-height-normal" style="line-height: 22px;">
                          <h4 class="text-blue mb-3">EnerBank USA Operates in All 50 States</h4>
                          <p>EnerBank USA works closely with home improvement professionals in all 50 states. All our customer support and lending experts are based in the United States to provide you top-notch service.</p>
                      </div>
                      <img class="img-fluid p-5 pb-0" src="<?php echo get_template_directory_uri(); ?>/img/svg/EB-50-States.svg" alt="All 50 States">
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
<!-- End All 50 States  modal -->
<!-- Application Methods modal -->
<div class="modal fade" id="appPopup" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-full modal-dialog-centered" role="document">
    <div class="modal-content">
          <div class="d-flex flex-column align-item-center justify-content-center">
              <div class="heading_bg">
                  <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                      <!-- <span aria-hidden="true">&times;</span> -->
                      <img src="<?php echo get_template_directory_uri(); ?>/img/closed_icon.svg" width="25">
                  </button>
                  <h3>Application Methods</h3>
              </div>
              <div class="modal_content">
                <div class="modal_banner"></div>
                <div class="p-5 py-sm-5">
                  <div class="small line-height-normal" style="line-height: 22px;">
                      <h4 class="mb-5 text-center">Applying for loans is fast and convenient using our paperless methods:</h4>
                  </div>
                  <div class="row">
                      <div class="col-md-6 col-lg-3 d-flex flex-column mb-md-5 mb-lg-0">
                          <div class="border appMethod rounded">
                              <img src="<?php echo get_template_directory_uri(); ?>/img/mobile-app.svg">
                              <div class="text-blue text-center">Mobile Loan App</div>
                              <p>With the EnerBank Mobile Loan App, you can work with your customers to apply for a loan right from their home. You can close the sale and have the loan application done before you leave their home. Available on both iOS and Android devices.</p>
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-3 d-flex flex-column mb-md-5 mb-lg-0">
                          <div class="border appMethod rounded">
                              <img src="<?php echo get_template_directory_uri(); ?>/img/online-applications.svg">
                              <div class="text-blue text-center">Online Applications</div>
                              <p>Your customers can submit a loan application online, making the application convenient no matter where and when they want to apply.</p>
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-3 d-flex flex-column">
                          <div class="border appMethod rounded">
                              <img src="<?php echo get_template_directory_uri(); ?>/img/loan-by-phone.svg">
                              <div class="text-blue text-center">Loan-By-Phone</div>
                              <p>Our helpful lending department is ready to assist at any point in the application process, whether it’s from the very beginning, partway through the application, or answering questions after the application is submitted.</p>
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-3 d-flex flex-column">
                          <div class="border appMethod rounded">
                              <img src="<?php echo get_template_directory_uri(); ?>/img/contractor-management-system.svg">
                              <div class="text-blue text-center">Contractor <br>Management Systems</div>
                              <p>We work with several partners to integrate the loan application right into your sales tool.</p>
                          </div>
                      </div>
                  </div>
                </div>                  
              </div>
          </div>
    </div>
  </div>
</div>
<!-- End  modal -->
<!-- Partner Portal Modal Start here -->
<div class="modal fade" id="partnerPopup" tabi ndex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-full modal-dialog-centered" role="document">
    <div class="modal-content">
          <div class="d-flex flex-column align-item-center justify-content-center">
              <div class="heading_bg">
                  <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                      <!-- <span aria-hidden="true">&times;</span> -->
                      <img src="<?php echo get_template_directory_uri(); ?>/img/closed_icon.svg" width="25">
                  </button>
                  <h3>PartnerPortal</h3>
              </div>
              <div class="modal_content">
                <div class="modal_banner banner_bg" style="background:url(<?php echo get_template_directory_uri(); ?>/img/partner-portal.jpg) no-repeat;">
                  <span><img src="<?php echo get_template_directory_uri(); ?>/img/svg/PartnerPortal_Icon-Wht.svg"></span>
                </div>
                <div class="p-5 py-sm-5">
                  <div class="small line-height-normal">
                      
                      <p class="mb-5">Our online dashboard, PartnerPortal, lets you track performance results through customizable reports, access loan codes and dealer fees, check application statuses, and work with electronic loan documents. Our secure PartnerPortal provides you with 24/7 access to track your results and performance quickly and easily! And, it also gives you the ability to:</p>
                  </div>
                 
                </div>                  
              </div>
              <div class="bg-blue start_drc start_drc2">
                <div class="container">
                  <div class="row">
                    <div class="col-md-4">
                      <ul class="portal_list">
                      <li>View approvals</li>
                      <li>Review dashboard</li>
                      <li>Run custom reports</li>
                    </ul>
                  </div>
                  <div class="col-md-4">
                      <ul class="portal_list">
                      <li>Check application status</li>
                      <li>Access loan codes</li>
                      <li>Access dealer fees</li>
                    </ul>
                  </div>
                   <div class="col-md-4">
                      <ul class="portal_list">
                      <li>Request loan documents</li>
                      <li>Sign loan documents</li>
                    </ul>
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-md-10 m-auto">
                      <a href="#">Current Contractors Click Here to Access Partner Portal</a>
                    </div>
                  </div>
                </div>
              </div>
              </div>
          </div>
    </div>
  </div>
</div>
<!-- Partner Portal Modal End here -->

<!-- Dealer Resource modal -->
<div class="modal fade" id="dealerPopup" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-full modal-dialog-centered" role="document">
    <div class="modal-content">
          <div class="d-flex flex-column align-item-center justify-content-center">
              <div class="heading_bg">
                  <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                      <!-- <span aria-hidden="true">&times;</span> -->
                      <img src="<?php echo get_template_directory_uri(); ?>/img/closed_icon.svg" width="25">
                  </button>
                  <h3>Dealer Resource Center</h3>
              </div>
              <div class="modal_content">
                <div class="modal_banner"><p>A powerful tool for successfully growing your business.</p></div>
                <div class="p-5 py-sm-5">
                  <div class="small line-height-normal" style="line-height: 22px;">
                      <h4 class="mb-3 text-center text-blue">Quick, Easy, and Always Available</h4>
                      <p class="mb-5">The convenient Dealer Resource Center provides you 24/7 access to high-quality, best-in-class, self-service marketing assets and other resources, including top-notch training designed to make offering payment options easier and more effective.</p>
                  </div>
                  <div class="row">
                      <div class="col-lg-4 d-flex flex-column mb-md-5 mb-lg-0">
                          <div class="border dealerResource rounded">
                              <img src="<?php echo get_template_directory_uri(); ?>/img/mobile-app.svg">
                              <div class="text-blue text-center">Education</div>
                              <p>Grab on-demand courses, tips ‘n’ tricks, and role-specific training to nail those best practices and strategies that’ll do wonders for your bottom line.</p>
                              <a href="#">Learn More</a>
                          </div>
                      </div>
                      <div class="col-lg-4 d-flex flex-column mb-md-5 mb-lg-0">
                          <div class="border dealerResource rounded">
                              <img src="<?php echo get_template_directory_uri(); ?>/img/tools-icon.svg">
                              <div class="text-blue text-center">Tools</div>
                              <p>Find helpful reference guides, eligible improvement lists, business growth calculators, and other stuff you may need as you offer payment options that boost your business.</p>
                              <a href="#">Learn More</a>  
                          </div>
                      </div>
                      <div class="col-lg-4 d-flex flex-column">
                          <div class="border dealerResource rounded">
                              <img src="<?php echo get_template_directory_uri(); ?>/img/education-icon.svg">
                              <div class="text-blue text-center">Marketing</div>
                              <p>Free, professionally-designed marketing templates for creating your own custom-branded customerfacing messaging with just a few clicks — including flyers, emails, showroom ads, and more!</p>
                              <a href="#">Learn More</a>
                          </div>
                      </div>
                  </div>
                </div>                  
              </div>
              <div class="bg-blue start_drc">
                  <div>Start Using the DRC Now!</div>
                  <p>Already an EnerBank contractor? Sign in. <br>Not on board yet? Click here to join EnerBank today.</p>
                  <a href="#">Get Started</a>
              </div>
          </div>
    </div>
  </div>
</div>
<!-- End  modal -->
<!-- Add Training Modal -->
<div class="modal fade" id="TrainingPopup" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-full modal-dialog-centered" role="document">
    <div class="modal-content">
          <div class="d-flex flex-column align-item-center justify-content-center">
              <div class="heading_bg">
                  <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                      <!-- <span aria-hidden="true">&times;</span> -->
                      <img src="<?php echo get_template_directory_uri(); ?>/img/closed_icon.svg" width="25">
                  </button>
                  <h3>Training</h3>
              </div>
              <div class="modal_content">
                <div class="modal_banner" style="background:url(<?php echo get_template_directory_uri(); ?>/img/training_hero.jpg) no-repeat;">
                  <span><img src="<?php echo get_template_directory_uri(); ?>/img/svg/Training-Wht.svg"></span>
                </div>
                <div class="p-8 py-sm-5">
                  <div class="small line-height-normal">
                      <p class="mb-5 text-md">As an exclusive home improvement lender, EnerBank provides you unique
products and personalized service you won't find anywhere else.</p>
                      <h4 class="text-blue">Owner:</h4>
                      <p class="mb-4">Designed for business owners, this course includes how to leverage EnerBank's payment options program to increase project size, close rate, and ultimately exceed annual sales goals.</p> 

                      <h4 class="text-blue">Admin:</h4>
                      <p class="mb-4">Designed for office administrators, this course demonstrates how contractors get paid by using EnerBank's quick and easy funding process! </p> 

                      <h4 class="text-blue">Sales:</h4>
                      <p class="mb-4">Designed for sales professionals, this course highlights the proven methodology that will lead to a significant increase in individual sales revenue.</p> 
                  </div>
                  
                </div>                  
              </div>
              
          </div>
    </div>
  </div>
</div>

<!-- End Training Modal -->

<!-- modal -->
<div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="d-sm-flex">
              <div class="bg-blue p-5 d-flex align-items-center justify-content-center">
                    <img src="" id="modalIcon" width="150">
              </div>
              <div class="p-4 py-sm-5 d-flex flex-column align-item-center justify-content-center">
                  <button type="button" class="close text-blue" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                  <h4 class="modal-title text-blue mb-2" id="modalTitle"></h4>
                  <div id="modalContent" class="small line-height-normal" style="line-height: 22px;"></div>
              </div>
        </div>
      </div>
    </div>
</div>

<!-- Support Start Modal -->

<div class="modal fade" id="SupportPopup" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-full modal-dialog-centered" role="document">
    <div class="modal-content">
          <div class="d-flex flex-column align-item-center justify-content-center">
              <div class="heading_bg">
                  <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                      <!-- <span aria-hidden="true">&times;</span> -->
                      <img src="<?php echo get_template_directory_uri(); ?>/img/closed_icon.svg" width="25">
                  </button>
                  <h3>Support</h3>
              </div>
              <div class="modal_content">
                
                <div class="p-8 py-sm-5">
                  <div class="small line-height-normal">
                      <p class="mb-5 text-md">As an exclusive home improvement lender, EnerBank provides you unique
products and personalized service you won't find anywhere else.</p>
                      
                  </div>
                  <div class="row">
                      <div class="col-lg-12">
                          <ul class="left-icon-list">
                            <li>
                              <span><img src="<?php echo get_template_directory_uri(); ?>/img/svg/Support_Icons_DRM.svg"></span>
                              <h4>Dedicated Relationship Manager</h4>
                              <p>Like an extra team member on your crew, looking out for you and your business, your dedicated relationship manager is committed to the success of your business and will give you unparalleled support.</p>                              
                            </li>
                            <li>
                              <span><img src="<?php echo get_template_directory_uri(); ?>/img/svg/Support_Icons_Marketing_Tools.svg"></span>
                              <h4>Marketing Tools</h4>
                              <p>The robust EnerBank Dealer Resource Center provides you 24/7 access to high-quality, best-in-class, self-service marketing assets and other resources, including top-notch training designed to make offering payment options easier and more effective.</p>                              
                            </li>
                            <li>
                              <span><img src="<?php echo get_template_directory_uri(); ?>/img/svg/Support_Icons_On-Demand_Training.svg"></span>
                              <h4>On-Demand Training</h4>
                              <p>EnerBank USA provides a full suite of professionally-designed training that’s role-specific for owners, admins, and sales reps. Choose from live webinars or on-demand courses to meet your needs and schedule.</p>                              
                            </li>
                            <li>
                              <span><img src="<?php echo get_template_directory_uri(); ?>/img/svg/Support_Icons_US_Based_Lending.svg"></span>
                              <h4>U.S Based Lending & Customer Service</h4>
                              <p>EnerBank USA serves all 50 states and offers all U.S. based lending and customer service and support.</p>                   
                            </li>                      

                          </ul>
                      </div>                    
                  </div>
                </div>                  
              </div>              
          </div>
    </div>
  </div>
</div>
<!-- Support Modal End here -->
<!-- Benefits Of Creating a Loan Program Modal -->

<div class="modal fade" id="BenefitsPopup" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-full modal-dialog-centered" role="document">
    <div class="modal-content">
          <div class="d-flex flex-column align-item-center justify-content-center">
              <div class="heading_bg">
                  <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                      <!-- <span aria-hidden="true">&times;</span> -->
                      <img src="<?php echo get_template_directory_uri(); ?>/img/closed_icon.svg" width="25">
                  </button>
                  <h3>Benefits of Creating a Loan Program</h3>
              </div>
              <div class="modal_content">
                
                <div class="p-8 py-sm-5">
                  <div class="small line-height-normal">
                      <p class="mb-5 text-md">Manufacturers, distributors, and trade groups across the nation have realized a
strategic partnership with EnerBank is a smart move. As your loan provider, we work with your corporate sales teams and their dealers to maximize results.</p>
                      
                  </div>
                  <div class="row">
                      <div class="col-lg-12">
                          <ul class="left-icon-list">
                            <li>
                              <span><img src="<?php echo get_template_directory_uri(); ?>/img/svg/Benefits_Artboard-01.svg"></span>
                              <h4>Unparalleled Service & Support</h4>
                              <p>We take good care of you. Our U.S.-based lending department and customer service professionals give you unparalleled service and support throughout the life of your loan.</p>                              
                            </li>
                            <li>
                              <span><img src="<?php echo get_template_directory_uri(); ?>/img/svg/Benefits-02.svg"></span>
                              <h4>Access to Executive Leadership</h4>
                              <p>Get direct access to our executive leadership team for calls, visits, and conference attendance and support.</p>                              
                            </li>
                            <li>
                              <span><img src="<?php echo get_template_directory_uri(); ?>/img/svg/Benefits-03.svg"></span>
                              <h4>Exclusive Home Improvement Lender</h4>
                              <p>We only do home improvement loans. In fact, we’ve funded nearly a million projects to the tune of over $9 billion since 2002, using our nation-wide contractor network.</p>                              
                            </li>
                            <li>
                              <span><img src="<?php echo get_template_directory_uri(); ?>/img/svg/Benefits-04.svg"></span>
                              <h4>Member FDIC</h4>
                              <p>We're dependable and secure — as a well-capitalized, Member-FDIC bank, you can count on us to have ready access to capital to lend to help you grow your business today and tomorrow.</p>                              
                            </li>
                            <li>
                              <span><img src="<?php echo get_template_directory_uri(); ?>/img/svg/Benefits-05.svg"></span>
                              <h4>Private-Label Programs</h4>
                              <p>Our private-label loan programs are customized to your market and customers. With EnerBank’s proven methods, your dealers will get more leads, close more sales, and get bigger jobs. We offer selling strategies and support programs that ensure your dealers are successful using your program immediately after training and activation, so you can start seeing results right away.</p>                              
                            </li>
                            <li>
                              <span><img src="<?php echo get_template_directory_uri(); ?>/img/svg/Benefits-06.svg"></span>
                              <h4>Quick & Easy Application Process</h4>
                              <p>Funding the project is super-fast and convenient with our three paperless application methods: Mobile Loan App, Online Loan Application, & Loan-by-Phone. Your customer can receive a credit decision in minutes.</p>                              
                            </li>
                            <li>
                              <span><img src="<?php echo get_template_directory_uri(); ?>/img/svg/Benefits-07.svg"></span>
                              <h4>On-Demand Training and Marketing Tools</h4>
                              <p>The robust EnerBank Dealer Resource Center provides you 24/7 access to high-quality, best-in-class, self-service marketing assets and other resources, including top-notch training designed to make offering payment options easier and more effective. Choose from live webinars or on-demand role-specific courses to meet your needs and schedule.</p>                              
                            </li>

                          </ul>
                      </div>                    
                  </div>
                </div>                  
              </div>              
          </div>
    </div>
  </div>
</div>
<!-- Benefits to Creating a Loan Program Modal -->