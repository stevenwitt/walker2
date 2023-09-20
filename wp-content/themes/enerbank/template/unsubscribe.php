<?php
/**

 * The main template file

 *

 * This is the most generic template file in a WordPress theme

 * and one of the two required files for a theme (the other being style.css).

 * It is used to display a page when nothing more specific matches a query.

 * E.g., it puts together the home page when no home.php file exists.

 *

 * Template Name: Unsubscribe 

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

<section class="container">    
    <div class="form_box py-5">
      <form action="" method="post">
            <div class="form-group">
              <label class="form_label">Email Address</label>
              <input type="email" name="email" class="form-control col-md-6 col-lg-4">
              <p class="small">Enter your email above and check the box for the email types you do not want to receive.</p>
            </div>            
          
            <ul class="uns-lists">
              <li>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                  <label class="custom-control-label" for="customCheck1">
                    <h5 class="mb-1">Grow Your Business</h5>
                    <div class="small">Monthly emails to help you stay ahead of the competition with the latest research, trends, and news that will help you grow your business.</div>
                  </label>
                </div>
              </li>
              <li>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck2">
                  <label class="custom-control-label" for="customCheck2">
                    <h5 class="mb-1">Product Updates</h5>
                    <div class="small">Stay up-to-date and receive notifications whenever there is a new update on products and offerings.</div>
                  </label>
                </div>
              </li>
              <li>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck3">
                  <label class="custom-control-label" for="customCheck3">
                    <h5 class="mb-1">Rate Updates</h5>
                    <div class="small">Monthly rates updates.</div>
                  </label>
                </div>
              </li>
              <li>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck4">
                  <label class="custom-control-label" for="customCheck4">
                    <h5 class="mb-1">Unsubscribe From All</h5>
                    <div class="small">Opt-out of all emails.</div>
                  </label>
                </div>
              </li>
            </ul>
            <input type="submit" class="btn bg-blue mt-3" value="Submit">
      </form>
    </div>
</section>

<?php get_footer(); ?>