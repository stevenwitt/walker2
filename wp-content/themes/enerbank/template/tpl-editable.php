<?php
/**

 * The main template file

 *

 * This is the most generic template file in a WordPress theme

 * and one of the two required files for a theme (the other being style.css).

 * It is used to display a page when nothing more specific matches a query.

 * E.g., it puts together the home page when no home.php file exists.

 *

 * Template Name: Editable Page Template

 */


get_header();
?>

<?php

// Check value exists.
if( have_rows('modules') ):

    // Loop through rows.
    while ( have_rows('modules') ) : the_row();

        //
        // Case: Hero Banner
        // 
        if( get_row_layout() == 'hero_banner' ):
            $background_image = get_sub_field('background_image');
			$hero_text = get_sub_field('hero_text');
        ?>
            <section class="banner-area editable-page-hero-banner" style="background-image: url('<?php echo $background_image; ?>');">
              <div class="container">
                <div class="row fullscreen d-flex align-items-center relative">
					<div class="container text-center">
						<h1><?php echo $hero_text; ?></h1>
					</div>
                  <?php
                    // hero banner links
                    if( have_rows('link_buttons') ):
                      while( have_rows('link_buttons') ) : the_row();
						
                        $link_text = get_sub_field('link_text');
                        $link_url = get_sub_field('link_url');
                  ?>
                        <div class="col-md-4">
                          <div class="header-btn mr-3 ml-3"><a href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a></div>
                        </div>
                  <?php
                      endwhile;
                    endif; // end hero-banner-links
                  ?>
                </div>
              </div>
            </section>

            <?php unset($background_image, $link_text, $link_url); ?>

		<?php
        //
        // Case: Left Image Right Text
        //
        elseif( get_row_layout() == 'left_image_right_text' ): 
		  $column_bg_color = get_sub_field('background_color');
          $column_image = get_sub_field('column_image');
          $column_text = get_sub_field('column_text');
        ?>

          <section class="container-fluid left-image-right-text relative" style="background-color:<?php echo $column_bg_color; ?>">
			  <div class="row">
				  <div class="col-md-l2 col-lg-12 col-xl-12 col-md-12 module-content">
					  <div class="row">
						  <div class="col-lg-6 div-image" style="background: url('<?php echo $column_image; ?>') no-repeat center center/cover;">
						  </div>
				  		<div class="col-lg-6 no-padding">
							<div class="container">
								<div class="row">
									<div class="column-text"><?php echo $column_text; ?></div>
								</div>
							</div>
				  		</div>
					</div>
				  </div>
			  </div>
			  
		</section>

          <?php unset($column_bg_color, $column_image, $column_text); ?>

		<?php
        //
        // Case: Left Text Right Image
        //
        elseif( get_row_layout() == 'left_text_right_image' ): 
		  $column_bg_color = get_sub_field('background_color');
          $column_image = get_sub_field('column_image');
          $column_text = get_sub_field('column_text');
        ?>

          <section class="container-fluid left-text-right-image relative" style="background-color:<?php echo $column_bg_color; ?>">
			  <div class="row">
				  <div class="col-md-l2 col-lg-12 col-xl-12 col-md-12 module-content">
					  <div class="row">
						  <div class="col-lg-6 no-padding">
							  <div class="container">
								<div class="row">
									<div class="column-text color-blue"><?php echo $column_text; ?></div>
								</div>
							</div>
				  		</div>
						 <div class="col-lg-6 div-image" style="background: url('<?php echo $column_image; ?>') no-repeat center center/cover;"></div>				  		
					</div>
				  </div>
			  </div>			  
		</section>

          <?php unset($column_bg_color, $column_image, $column_text); ?>

        <?php
        //
        // Case: Centered Video
        //
        elseif( get_row_layout() == 'centered_video' ): 
          $embed_code = get_sub_field('embed_code');
          $video_title = get_sub_field('video_title');
        ?>

          <div class="row video-section">
            <div class="m-auto col-12 col-md-11 embed-container">
              <?php echo $embed_code; ?>
            </div>
            <p class="text-center font-weight-bold mt-2 mb-4 mx-auto"><?php echo $video_title; ?></p>
          </div>

          <?php unset($embed_code, $video_title); ?>

        <?php
        //
        // Case: section title
        //
        elseif( get_row_layout() == 'section_title' ): 
          $section_title_text = get_sub_field('section_title_text');
          $section_anchor_id = get_sub_field('section_anchor_id');
        ?>
          <div class="bg-blue mt-4 mt-md-4" id="<?php echo $section_anchor_id; ?>">
            <h2 class="text-center py-4 h1 font-weight-bold text-white"><?php echo $section_title_text; ?></h2>
          </div>

          <?php unset($section_title_text, $section_anchor_id); ?>

        <?php
        //
        // Case: paragraph text block
        //
        elseif( get_row_layout() == 'paragraph_text_block' ): 
		  $background_color = get_sub_field('background_color');
		  $text_color = get_sub_field('text_color');	
          $text = get_sub_field('text');
        ?>
		<section class="paragraph-text-block" style="background-color:<?php echo $background_color; ?>">
          <div class="container">
            <div class="justify-content-center">
              <div class="pt-5 pb-5" style="color:<?php echo $text_color; ?>"><?php echo $text; ?></div>
            </div>
          </div>
		</section>
          <?php unset($text); ?>

        <?php
        //
        // Case: icon_text_list
        //
        elseif( get_row_layout() == 'icon_text_list' ): 
        ?>
          <div class="container">
            <div class="payment-option">
                <ul>
                  <?php
                  if( have_rows('icon_text_list_item') ):
                    while( have_rows('icon_text_list_item') ) : the_row();
                
                        $icon = get_sub_field('icon');
                        $text = get_sub_field('text');
                        $link_text = get_sub_field('link_text');
                        $details = get_sub_field('details');
                      ?>
                        <li>
                          <a href="#" data-toggle="modal" data-target="#paymentModal" data-title="<?php echo $link_text; ?>" data-content="<?php echo $details; ?>">
                            <div class="box-circle icon bg-blue content-center"><img src="<?php echo $icon; ?>"></div>
                            <p><?php echo $text; ?></p>
                          </a>
                        </li>
                      <?php
                    endwhile;
                  endif;

                  unset($icon, $text, $link_text, $details); 
                  ?>
              </ul>
            </div>
          </div>

        <?php
        //
        // Case: icon_text_list
        //
        elseif( get_row_layout() == 'icon_card_content' ): 
          ?>
            <div class="container">
              <div class="d-flex flex-wrap my-3 my-md-5">
                <?php
                  if( have_rows('icon_card') ):
                    while( have_rows('icon_card') ) : the_row();
                
                        $icon = get_sub_field('icon');
                        $heading = get_sub_field('heading');
                        $paragraph = get_sub_field('paragraph');
                      ?>
                        <div class="box-shadow bg-white rounded text-center payment-option-box col-xs-12 col-md p-0 mb-3 mr-sm-3 mr-lg-5">
                          <div class="bg-blue p-5 rounded-top">
                              <img class="img-fluid" src="<?php echo $icon; ?>">
                          </div>
                          <div class="p-4">
                              <h3 class="mb-10"><?php echo $heading; ?></h3>
                              <p><?php echo $paragraph; ?></p>
                          </div>
                      </div>
                      <?php
                    endwhile;
                  endif;

                  unset($icon, $heading, $paragraph); 
                ?>
              </div>
            </div>

        <?php
        //
        // Case: icon_card_content_with_background_image
        //
        elseif( get_row_layout() == 'icon_card_content_with_background_image' ): 
            $section_heading = get_sub_field('section_heading');
          ?>
            <div class="container">
              <?php if ($section_heading) : ?>
                <h2 class="text-center color-blue"><span><?php echo $section_heading; ?></span></h2>
              <?php endif; ?>
                <div class="row my-5">
                  <?php
                    
                    if( have_rows('icon_card_with_background_image') ):
                      while( have_rows('icon_card_with_background_image') ) : the_row();
                  
                          $background_image = get_sub_field('background_image');
                          $icon = get_sub_field('icon');
                          $heading = get_sub_field('heading');
                          $paragraph = get_sub_field('paragraph');
                          $link_url = get_sub_field('link_url');
                          $link_text = get_sub_field('link_text');
                        ?>
                          <div class="box-shadow bg-white rounded text-center payment-option-box col-xs-12 col-md mb-3 mb-lg-0 p-0 mr-md-3 mr-lg-5">
                            <div class="wygthumb apps loantype">
                              <img src="<?php echo $background_image; ?>" class="card-img-top">
                              <div class="wygthumb-apps-icon">
                                <img src="<?php echo $icon; ?>">
                              </div>
                            </div>
                            <div class="p-4">
                                <h3 class="mb-10"><?php echo $heading; ?></h3>
                                <p><?php echo $paragraph; ?> <br> <a href="<?php echo $link_url; ?>" class="btn"><?php echo $link_text; ?></a></p>
                            </div>
                        </div>
                        <?php
                      endwhile;
                    endif;

                    unset($section_heading, $background_image, $icon, $heading, $paragraph, $link_url, $link_text); 
                  ?>
                </div>
            </div>

        <?php
        //
        // Case: image_on_background
        //
        elseif( get_row_layout() == 'image_on_background' ): 
          $heading = get_sub_field('heading');
          $image = get_sub_field('image');
          $background_color = get_sub_field('background_color');
        ?>
          <div class="container">
            <div class="p-3 p-sm-4 p-lg-5" style="background-color: <?php echo $background_color; ?>;">
              <div class="h1 text-dark text-center mb-4 font-weight-normal"><?php echo $heading; ?></div>
              <img src="<?php echo $image; ?>">
            </div>
          </div>

          <?php unset($heading, $image, $background_color); ?>

        <?php
        //
        // Case: image_on_background
        //
        elseif( get_row_layout() == 'testimonial_slider' ): 
          $heading = get_sub_field('heading');
          ?>
            <div class="container-fluid" style="overflow-x: hidden;">
              <div class="container">
                  <h3 class="text-center mx-5 mb-3 my-2 p-5">
                      <span><?php echo $heading; ?></span>
                      <hr style="height:2px; background:#444; margin-top:1.5rem;">
                  </h3>
              </div>

              <div class="owl-carousel owl-theme partners">
                  <?php
                    
                    if( have_rows('slide') ):
                      while( have_rows('slide') ) : the_row();
                  
                          $image = get_sub_field('image');
                          $text = get_sub_field('text');
                          $author = get_sub_field('author');
                        ?>
                          <div class="item text-center">
                            <img src="<?php echo $image;?>" alt="partner logo" class="img-fluid">
                            <p>“<?php echo $text; ?>”</p>
                            - <?php echo $author; ?>
                          </div>
                        <?php
                      endwhile;
                    endif;

                    unset($heading, $image, $text, $author); 
                  ?>
              </div>
            </div>

        <?php
        //
        // Case: image_on_background
        //


        // endif get_row_layout
        endif; 
    // End loop.
    endwhile;

// No value.
else :
  echo '<div style="margin: 80px auto; text-align: center;">No Content Here</div>';
endif; // endif modules
?>


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