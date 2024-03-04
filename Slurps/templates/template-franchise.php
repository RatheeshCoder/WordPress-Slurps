<section class="hero-only single-product" id="banner">


<?php
                $Franchise_BG_ImageArguments = array(
                    'post_type' => 'Franchise_BG_Image',
                    'post_status' => 'publish',
                    'posts_per_page'   => 1
                );

                $Franchise_BG_ImageQuery = new WP_Query($Franchise_BG_ImageArguments);

                if ($Franchise_BG_ImageQuery->have_posts()) {
                    while ($Franchise_BG_ImageQuery->have_posts()) {
                        $Franchise_BG_ImageQuery->the_post();
                        $address_post_id = get_the_ID();
                        $title = CFS()->get('title', $address_post_id);
                        $paragraph = CFS()->get('paragraph', $address_post_id);
                        $image_1 = CFS()->get('image_1', $address_post_id);
                        $image_2 = CFS()->get('image_2', $address_post_id);
                        $image_3 = CFS()->get('image_3', $address_post_id);
                        $image_4 = CFS()->get('image_4', $address_post_id);
                      

                ?>


        <div class="wrapper">
            <div class="container-1">
                <h2><?php echo $title; ?></h2>
                <h5><?php echo $paragraph; ?></h5>
                <div class="cta-container">
                    <a href="#" class="orange-cta cta-button">Apply now!</a>
                    <a href="#" class="black-cta cta-button">Know more</a>
                </div>
            </div>
            <div class="container-2">
                <div class="swipper-wrapper">
                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                        class="swiper mySwiper2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="<?php echo $image_1; ?>" />
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo $image_2; ?>" />
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo $image_3; ?>" />
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo $image_4; ?>" />
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo $image_1; ?>" />
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo $image_2; ?>" />
                            </div>


                        </div>
                       
                    </div>
                </div>
            </div>
        </div>

        <?php
                    }
                }
                ?>
    </section>




    <section class="why-slurps">
        <div class="wrapper">
            <div class="container-1">
                <h2>Why Slurps?</h2>
            </div>
            <div class="container-2">
                <div class="highlights-wrapper">

                <?php
                $WhySlurpsArguments = array(
                    'post_type' => 'WhySlurps',
                    'post_status' => 'publish',
                    'posts_per_page'   => -1
                );

                $WhySlurpsQuery = new WP_Query($WhySlurpsArguments);

                if ($WhySlurpsQuery->have_posts()) {
                    while ($WhySlurpsQuery->have_posts()) {
                        $WhySlurpsQuery->the_post();
                        $address_post_id = get_the_ID();
                        $title = CFS()->get('title', $address_post_id);
                        $paragraph = CFS()->get('paragraph', $address_post_id);
                       
                      

                ?>


                    <div class="highlight-container">
                        <div class="icon-container">
                            <img src="http://localhost/slurps/wp-content/uploads/2023/05/Group-116.svg" alt="">
                        </div>
                        <h4><?php echo $title; ?></h5>
                            <p><?php echo $paragraph; ?></p>

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
                <h2>Franchise Models</h2>
            </div>
            <div class="container-2">
                <div class="gallery-wrapper">

                    <div class="gallery-container">


                    
                    <?php
                    $ModelsArguments = array(
                    'post_type' => 'FranchiseModels',
                    'post_status' => 'publish',
                    'posts_per_page'   => -1
                );

                $ModelsQuery = new WP_Query($ModelsArguments);

                if ($ModelsQuery->have_posts()) {
                    while ($ModelsQuery->have_posts()) {
                        $ModelsQuery->the_post();
                        $address_post_id = get_the_ID();
                        $product_image_model = CFS()->get('product_image_model', $address_post_id);
                      

                ?>
                       <img src="<?php echo $product_image_model; ?>" alt="">
                        <?php
                    }
                }
                ?>
                    </div>

                </div>
                <h6><span>Note: </span> Images are for illustrative purposes only.
                    Packaging may vary based on the availability.
                </h6>
            </div>
        </div>
    </section>




    <section class="franchise-details franchise-page-details">
        <div class="wrapper">
            <div class="container-1">
                <h2>What you are waiting for? </h2>
                <h6>Gear up Franchisees to become a Passionpreneur.</h6>
                <div class="cta-container">
                    <a href="tel:+911234262942" class="black-cta cta-button">Call us now!</a>
                </div>
            </div>
            <div class="container-2">


                
                        
                    <div class="form-wrapper">
                    <h4>Apply now!</h4>
                    <form id="my-form" action="" method="POST">
                    <?php echo do_shortcode('[contact-form-7 id="153" title="Franchise contact form"]'); ?>


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
                $FranchiseFAQArguments = array(
                    'post_type' => 'FranchiseFAQ',
                    'post_status' => 'publish',
                    'posts_per_page'   => -1
                );

                $FranchiseFAQQuery = new WP_Query($FranchiseFAQArguments);

                if ($FranchiseFAQQuery->have_posts()) {
                    while ($FranchiseFAQQuery->have_posts()) {
                        $FranchiseFAQQuery->the_post();
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