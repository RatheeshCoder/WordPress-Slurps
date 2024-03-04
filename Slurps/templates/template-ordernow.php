<div class="order-locations">
        <div class="wrapper">
            <div class="container-1">
                <h2>Our Locations</h2>
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
                        $street = CFS()->get('street', $address_post_id);
                      

                ?>
                    <div class="location-container">
                        <div class="icon-container">
                            <img src="../assets/images/Group.svg" alt="">
                        </div>
                        <h4><?php echo $place; ?></h4>
                        <h6><?php echo $street; ?></h6>
                        <div class="cta-container">
                            <a href="#" class="black-cta cta-button">Order now!</a>
                        </div>
                    </div>

                    <?php
                    }
                }
                ?>
                   
                </div>
            </div>

        </div>

    </div>
