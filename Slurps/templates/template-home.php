

<section class="hero-banner">
            <?php
                $backgroundArguments = array(
                    'post_type' => 'Background',
                    'post_status' => 'publish',
                    'posts_per_page'   => -1
                );

                $backgroundQuery = new WP_Query($backgroundArguments);

                if ($backgroundQuery->have_posts()) {
                    while ($backgroundQuery->have_posts()) {
                        $backgroundQuery->the_post();
                        $address_post_id = get_the_ID();
                        $title = CFS()->get('title', $address_post_id);
                        $paragraph = CFS()->get('paragraph', $address_post_id);
                        $image = CFS()->get('image', $address_post_id);
				

                ?>
        <div class="wrapper">
            <div class="container-1">
                <h1><?php echo $title;  ?></h1>
                    <div class="h5-content"><h5>
                    <?php echo $paragraph;  ?>
                </h5></div>
                
                <div class="cta-container">
                    <a href=" http://localhost/slurps/ordernow/" class="black-cta cta-button">Order now</a>
                    <a href=" http://localhost/slurps/franchise/ " class="white-cta cta-button">Get a Franchise!</a>
                </div>
            </div>
            <div class="container-2">
                <div class="shakes-doodle-container">
                    <img src="<?php echo $image;  ?>" alt="shakes-doodle">
                </div>
            </div>
        </div>

        <?php
                    }
                }
                ?>
    </section>





    <section class="our-story">
    <?php
                $OurStoryArguments = array(
                    'post_type' => 'OurStory',
                    'post_status' => 'publish',
                    'posts_per_page'   => -1
                );

                $OurStoryQuery = new WP_Query($OurStoryArguments);

                if ($OurStoryQuery->have_posts()) {
                    while ($OurStoryQuery->have_posts()) {
                        $OurStoryQuery->the_post();
                        $address_post_id = get_the_ID();
                        $image = CFS()->get('image', $address_post_id);
                        $title = CFS()->get('title', $address_post_id);
                        $paragraph = CFS()->get('paragraph', $address_post_id);
				

                ?>
        <div class="wrapper">
            <div class="container-1">
                <div class="image-container">
                    <img src="<?php echo $image; ?>" alt="stamp">
                </div>
            </div>
            <div class="container-2">
                <h2><?php echo $title; ?></h2>
                <p class="para">
                <?php echo $paragraph; ?>
                </p>
            </div>
        </div>
        <?php
                    }
                }
                ?>
    </section>



    <section class="about-us" id="#about-us">
        <div class="wrapper">
            <div class="container-1">
                <h2>About us</h2>
            </div>


            <div class="container-2">
            <?php
                $AboutUsArguments = array(
                    'post_type' => 'AboutUs',
                    'post_status' => 'publish',
                    'posts_per_page'   => -1
                );

                $AboutUsQuery = new WP_Query($AboutUsArguments);

                if ($AboutUsQuery->have_posts()) {
                    while ($AboutUsQuery->have_posts()) {
                        $AboutUsQuery->the_post();
                        $address_post_id = get_the_ID();
                        $main_para = CFS()->get('main_para', $address_post_id);
                      

                ?>
                <div class="about-us-content-wrapper">
                    <div class="about-us-content-container"> 
                        <?php echo  $main_para ; ?>
                    </div>
                   
                    </div>
                    <?php
                    }
                }
                ?>
                    
                    <div class="mission-usp-wrapper">
                    <?php
                $AboutUsArguments = array(
                    'post_type' => 'AboutUs',
                    'post_status' => 'publish',
                    'posts_per_page'   => 2
                );

                $AboutUsQuery = new WP_Query($AboutUsArguments);

                if ($AboutUsQuery->have_posts()) {
                    while ($AboutUsQuery->have_posts()) {
                        $AboutUsQuery->the_post();
                        $address_post_id = get_the_ID();
                        $title = CFS()->get('title', $address_post_id);
                        $title_main = CFS()->get('title_main', $address_post_id);
                        $title_para = CFS()->get('title_para', $address_post_id);
                      

                ?>
                    <div class="mission-usp-container">
                        <div class="heading-container">
                            <h3> <?php echo  $title ; ?></h3>
                            <h6> <?php echo  $title_main ; ?></h6>
                        </div>
                        <p class="para"> <?php echo  $title_para ; ?></p>
                    
                        </div>

                    <?php
                    }
                }
                ?>
                </div>
            </div>



        </div>
    </section>



    <section class="customer-reviews">
        <div class="wrapper">
            <div class="container-1">
                <h2>We are grateful for your love</h2>
            </div>
            <div class="container-2">
                <div class="reviews-wrapper">

                <?php
                $ReviewsArguments = array(
                    'post_type' => 'Reviews',
                    'post_status' => 'publish',
                    'posts_per_page'   => -1
                );

                $ReviewsQuery = new WP_Query($ReviewsArguments);

                if ($ReviewsQuery->have_posts()) {
                    while ($ReviewsQuery->have_posts()) {
                        $ReviewsQuery->the_post();
                        $address_post_id = get_the_ID();
                        $paragraph = CFS()->get('paragraph', $address_post_id);
                      

                ?>

                    <div class="review-container">
                       <?php echo $paragraph; ?>
                    </div>
                    <?php
                    }
                }
                ?>
                    
                </div>
            </div>
        </div>
    </section>



    <section class="home-gallery">
        <div class="wrapper">
            <div class="container-1">
                <h2>Gallery</h2>
            </div>
            <div class="container-2">
                <div class="gallery-wrapper">

                    <div class="gallery-container">


                    <?php
                $GalleryArguments = array(
                    'post_type' => 'Gallery',
                    'post_status' => 'publish',
                    'posts_per_page'   => -1
                );

                $GalleryQuery = new WP_Query($GalleryArguments);

                if ($GalleryQuery->have_posts()) {
                    while ($GalleryQuery->have_posts()) {
                        $GalleryQuery->the_post();
                        $address_post_id = get_the_ID();
                        $product_image = CFS()->get('product_image', $address_post_id);
                      

                ?>
                        <img src="<?php echo $product_image; ?>" alt="">
                        <?php
                    }
                }
                ?>
                    </div>

                </div>
            </div>
        </div>
    </section>



    <section class="available-locations">
        <div class="wrapper">
            <div class="container-1">
                <h2>Available Locations</h2>
            </div>
            <div class="container-2">
                <div class="locations-wrapper">
                <?php
                $locationsArguments = array(
                    'post_type' => 'locations',
                    'post_status' => 'publish',
                    'posts_per_page'   => -1
                );

                $locationsQuery = new WP_Query($locationsArguments);

                if ($locationsQuery->have_posts()) {
                    while ($locationsQuery->have_posts()) {
                        $locationsQuery->the_post();
                        $address_post_id = get_the_ID();
                        $place = CFS()->get('place', $address_post_id);
                      

                ?>

                    <div class="location-container">
                        <div class="icon-container">
                            <img src="http://localhost/slurps/wp-content/uploads/2023/05/Vector.svg" alt="">
                        </div>
                        <h4><?php echo $place;?></h4>
                    </div>
                  
                    <?php
                    }
                }
                ?>

                </div>
                <div class="cta-container">
                    <a href=" http://localhost/slurps/ordernow/" class="black-cta cta-button">Order now</a>
                    <a href=" http://localhost/slurps/franchise/ " class="white-cta cta-button">Get a Franchise!</a>
                </div>
                <div class="partner-wrapper">
                    <div>
                        <h5>Also Availabe in: </h5>
                    </div>

                    <?php
                $locationsArguments = array(
                    'post_type' => 'locations',
                    'post_status' => 'publish',
                    'posts_per_page'   => -1
                );

                $locationsQuery = new WP_Query($locationsArguments);

                if ($locationsQuery->have_posts()) {
                    while ($locationsQuery->have_posts()) {
                        $locationsQuery->the_post();
                        $address_post_id = get_the_ID();
                        $online_location_image = CFS()->get('online_location_image', $address_post_id);
                      

                ?>

                    <div class="logo-container">
                        <img src="<?php echo $online_location_image;?>" alt="zomato">
                     </div>
                <?php
                    }
                }
                ?>
            </div>

        </div>
    </section>



    <section class="franchise-details">
        <div class="wrapper">
            <div class="container-1">
                <h3>0% Royalty for first 10 Franchises </h3>
                <div class="highlights-wrapper">

                <?php
                $highlightsArguments = array(
                    'post_type' => 'highlights',
                    'post_status' => 'publish',
                    'posts_per_page'   => 3
                );

                $highlightsQuery = new WP_Query($highlightsArguments);

                if ($highlightsQuery->have_posts()) {
                    while ($highlightsQuery->have_posts()) {
                        $highlightsQuery->the_post();
                        $address_post_id = get_the_ID();
                        $contents = CFS()->get('contents', $address_post_id);
                      

                ?>

                    <div class="highlight-container">
                        <div class="icon-container">
                            <img src="http://localhost/slurps/wp-content/uploads/2023/05/Group-116.svg" alt="">
                        </div>
                        <div class="content-container">
                            <h5><?php echo $contents; ?></h4>
                        </div>
                    </div>
                    
                    <?php
                    }
                }
                ?>


                </div>
                <div class="cta-container">
                    <a href="#" class="black-cta cta-button">Know more</a>
                </div>
            </div>
            <div class="container-2">
                <!-- <div class="form-wrapper">
                    <div class="form-container">
                        <form action="" method="post">
                            <h4>Apply now!</h4>

                            <label>Name :</label>
                            <input name="dname" placeholder="Your Name" type="text">
                            <label>Email :</label>
                            <input name="demail" placeholder="Your Email" type="text">
                            <label>Message :</label>
                            <input name="demail" placeholder="Your Email" type="text">
                            <br>
                            <input name="dsubmit" type="submit" value="ubmit">
                        </form>
                    </div>
                </div> -->
           

<div class="form-wrapper">
    <h4>Apply now!</h4>
    <form id="my-form" action="" method="POST">
    <?php echo do_shortcode('[contact-form-7 id="152" title="Slurps Form"]'); ?>


            </div>
        </div>
    </section>



    <section class="faqs">
        <div class="wrapper">
          <div class="container-1">
            <h2>FAQ's</h2>
            <!-- <p class="para">AlphaFit is a 100% Australian owned family business. We manufacture gear specifically made for the commercial, strength and conditioning, functional fitness and</p> -->
          </div>
          <div class="container-2">
            <div class="faq-wrapper">

            <?php
                $FAQsArguments = array(
                    'post_type' => 'FAQs',
                    'post_status' => 'publish',
                    'posts_per_page'   => -1
                );

                $FAQsQuery = new WP_Query($FAQsArguments);

                if ($FAQsQuery->have_posts()) {
                    while ($FAQsQuery->have_posts()) {
                        $FAQsQuery->the_post();
                        $address_post_id = get_the_ID();
                        $faq_question = CFS()->get('faq_question', $address_post_id);
                        $faq_answer = CFS()->get('faq_answer', $address_post_id);
                      

                ?>
              <div class="faq-container">
                 <!-- faq question -->
                 <h4 class="faq-page">
                 <?php echo $faq_question; ?>
                 </h4>
  
                 <!-- faq answer -->
                 <div class="faq-body">
                  <p class="para">
                  <?php echo $faq_answer; ?>
                  </p>
                </div>
              </div>
              
              <?php
                    }
                }
                ?>

            </div>
          </div>
        </div>
      </section>