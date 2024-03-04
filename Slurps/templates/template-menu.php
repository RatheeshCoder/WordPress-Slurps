<main>
        <section class="order-menu">
            <div class="container-1">
                <!-- Product name tags start -->
                <div class="sub-header ">
                    <div class=" container swipe-tabs" >
                        
                    <?php
                $OrderMenuArguments = array(
                    'post_type' => 'OrderMenu',
                    'post_status' => 'publish',
                    'posts_per_page'   => 3
                );

                $OrderMenuQuery = new WP_Query($OrderMenuArguments);

                if ($OrderMenuQuery->have_posts()) {
                    while ($OrderMenuQuery->have_posts()) {
                        $OrderMenuQuery->the_post();
                        $address_post_id = get_the_ID();
                        $menu_name = CFS()->get('menu_name', $address_post_id);
                      

                ?>

                        <div class="swipe-tab"><?php  $menu_name; ?></div>
                         <!-- <div class="swipe-tab">Shakes</div>
                        <div class="swipe-tab" >Thick Milk Shakes</div>
                        <div class="swipe-tab">Shakes</div>
                        <div class="swipe-tab">Shakes</div>
                        <div class="swipe-tab">Mojitos</div>
                        <div class="swipe-tab">Shakes</div>
                        <div class="swipe-tab">Mojitos</div> -->
                        
                        <?php
                    }
                }
                ?>

                    </div>
                 </div>
                 <!-- product name tags end -->
                 <div class="main-container">
                    <!-- Product list start  -->
                    <div class="swipe-tabs-container  ">

                    <?php
                $OrderMenuArguments = array(
                    'post_type' => 'OrderMenu',
                    'post_status' => 'publish',
                    'posts_per_page'   => 3
                );

                $OrderMenuQuery = new WP_Query($OrderMenuArguments);

                if ($OrderMenuQuery->have_posts()) {
                    while ($OrderMenuQuery->have_posts()) {
                        $OrderMenuQuery->the_post();
                        $address_post_id = get_the_ID();
                        $menu_title = CFS()->get('menu_title', $address_post_id);
                        $product_name = CFS()->get('product_name', $address_post_id);
                        $big_image_1 = CFS()->get('big_image_1', $address_post_id);
                        $big_image_2 = CFS()->get('big_image_2', $address_post_id);
                        $big_image_3 = CFS()->get('big_image_3', $address_post_id);
                        $big_image_4 = CFS()->get('big_image_4', $address_post_id);
                        $small_image_1 = CFS()->get('small_image_1', $address_post_id);
                        $small_image_2 = CFS()->get('small_image_2', $address_post_id);
                        $small_image_3 = CFS()->get('small_image_3', $address_post_id);
                        $small_image_4 = CFS()->get('small_image_4', $address_post_id);
                        $product_title_1 = CFS()->get('product_title_1', $address_post_id);
                        $product1_name1 = CFS()->get('product1_name1', $address_post_id);
                        $product1_cost1 = CFS()->get('product1_cost1', $address_post_id);
                        $product1_name2 = CFS()->get('product1_name2', $address_post_id);
                        $product1_cost2 = CFS()->get('product1_cost2', $address_post_id); 
                        $product1_name3 = CFS()->get('product1_name3', $address_post_id);
                        $product1_cost3 = CFS()->get('product1_cost3', $address_post_id);
                        $product1_name4 = CFS()->get('product1_name4', $address_post_id);
                        $product1_cost4 = CFS()->get('product1_cost4', $address_post_id);
                        $product_title_2 = CFS()->get('product_title_2', $address_post_id);
                        $product2_name1 = CFS()->get('product2_name1', $address_post_id);
                        $product2_cost1 = CFS()->get('product2_cost1', $address_post_id);
                        $product2_name2 = CFS()->get('product2_name2', $address_post_id);
                        $product2_cost2 = CFS()->get('product2_cost2', $address_post_id);
                        $product2_name3 = CFS()->get('product2_name3', $address_post_id);
                        $product2_cost3 = CFS()->get('product2_cost3', $address_post_id);
                        $product2_name4 = CFS()->get('product2_name4', $address_post_id);
                        $product2_cost4 = CFS()->get('product2_cost4', $address_post_id);
                        $product_title_3 = CFS()->get('product_title_3', $address_post_id);
                        $product3_name1 = CFS()->get('product3_name1', $address_post_id);
                        $product3_cost1  = CFS()->get('product3_cost1', $address_post_id);
                        $product3_name2 = CFS()->get('product3_name2', $address_post_id);
                        $product3_cost2  = CFS()->get('product3_cost2', $address_post_id);
                        $product3_name3 = CFS()->get('product3_name3', $address_post_id);
                        $product3_cost3  = CFS()->get('product3_cost3', $address_post_id);
                        $product3_name4 = CFS()->get('product3_name4', $address_post_id);
                        $product3_cost4  = CFS()->get('product3_cost4', $address_post_id);
                        $product_title_4 = CFS()->get('product_title_4', $address_post_id);
                        $product4_name1 = CFS()->get('product4_name1', $address_post_id);
                        $product4_cost1 = CFS()->get('product4_cost1', $address_post_id);
                        $product4_name2 = CFS()->get('product4_name2', $address_post_id); 
                        $product4_cost2 = CFS()->get('product4_cost2', $address_post_id);
                        $product4_name3 = CFS()->get('product4_name3', $address_post_id);
                        $product4_cost3 = CFS()->get('product4_cost3', $address_post_id);
                        $product4_name4 = CFS()->get('product4_name4', $address_post_id);
                        $product4_cost4 = CFS()->get('product4_cost4', $address_post_id);




                      

                ?>


                        <!-- product 1 -->
                        <div class="swipe-tab-content">
                            <!-- product caption -->
                            <div class="cta-heading container">
                                <h1><?php echo $menu_title; ?></h1>
                            </div>
                            <div class="wrapper">
                                <!-- product name -->
                                <div class="cta-title">
                                    <h3><?php echo $product_name; ?></h3>
                                </div>
                                <!-- product gallery -->
                                <div class="slider">
                                    <div class="slider__flex">
                                     
                                  
                                      <div class="slider__images">
                                        <div class="swiper-container">  
                                          <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                              <div class="slider__image"><img src="<?php echo $big_image_1; ?><?php echo $product_name; ?>" alt="" /></div>
                                            </div>
                                            <div class="swiper-slide">
                                              <div class="slider__image"><img src=" <?php echo $big_image_2; ?><?php echo $product_name; ?>" alt=""/></div>
                                            </div>
                                            <div class="swiper-slide">
                                              <div class="slider__image"><img src=" <?php echo $big_image_3; ?><?php echo $product_name; ?>" alt=""/></div>
                                            </div>
                                            <div class="swiper-slide">
                                              <div class="slider__image"><img src=" <?php echo $big_image_4; ?><?php echo $product_name; ?>" alt=""/></div>
                                            </div>
                                            <div class="swiper-slide">
                                              <div class="slider__image"><img src=" <?php echo $big_image_1; ?><?php echo $product_name; ?>" alt=""/></div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                            
                                      <div class="slider__col">
                                  
                                        <div class="slider__prev"></div> 
                                  
                                        <div class="slider__thumbs">
                                          <div class="swiper-container">
                                            <div class="swiper-wrapper">
                                              <div class="swiper-slide">
                                                <div class="slider__image"><img src="<?php echo $small_image_1; ?>" alt="" style="object-fit: cover;-o-object-fit: cover;"/></div>
                                              </div>
                                              <div class="swiper-slide">
                                                <div class="slider__image"><img src=" <?php echo $small_image_2; ?>" alt="" style="object-fit: cover;-o-object-fit: cover;"/></div>
                                              </div>
                                              <div class="swiper-slide">
                                                <div class="slider__image"><img src=" <?php echo $small_image_3; ?>" alt="" style="object-fit: cover;-o-object-fit: cover;"/></div>
                                              </div>
                                              <div class="swiper-slide">
                                                <div class="slider__image"><img src=" <?php echo $small_image_4; ?>" alt="" style="object-fit: cover;-o-object-fit: cover;"/></div>
                                              </div>
                                              <div class="swiper-slide">
                                                <div class="slider__image"><img src=" <?php echo $small_image_5; ?>" alt="" style="object-fit: cover;-o-object-fit: cover;"/></div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                  
                                        <div class="slider__next"></div>  
                                  
                                      </div>
                                  
                                    </div>
                                </div>


                            </div>
                            <!-- order button -->
                            <div class="cta-btn">
                                <button>Order now</button>
                            </div>
                            <!-- Products cost  -->
                            <div class="container-2">
                                <div class="grid-container">
                                    <div class="grid-item">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th><?php echo $product_title_1; ?></th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $product1_name1; ?> </td>
                                                    <td><?php echo $product1_cost1; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $product1_name2; ?> </td>
                                                    <td><?php echo $product1_cost2; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $product1_name3; ?> </td>
                                                    <td><?php echo $product1_cost3; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $product1_name4; ?> </td>
                                                    <td><?php echo $product1_cost4; ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="grid-item">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th><?php echo $product_title_2; ?></th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $product2_name1; ?> </td>
                                                    <td><?php echo $product2_cost1; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $product2_name2; ?> </td>
                                                    <td><?php echo $product2_cost2; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $product2_name3; ?> </td>
                                                    <td><?php echo $product2_cost3; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $product2_name4; ?> </td>
                                                    <td><?php echo $product2_cost4; ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="grid-item">
                                    <table>
                                            <thead>
                                                <tr>
                                                    <th><?php echo $product_title_2; ?></th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $product3_name1; ?> </td>
                                                    <td><?php echo $product3_cost1; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $product3_name2; ?> </td>
                                                    <td><?php echo $product3_cost2; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $product3_name3; ?> </td>
                                                    <td><?php echo $product3_cost3; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $product3_name4; ?> </td>
                                                    <td><?php echo $product3_cost4; ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="grid-item">
                                    <table>
                                            <thead>
                                                <tr>
                                                    <th><?php echo $product_title_2; ?></th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $product4_name1; ?> </td>
                                                    <td><?php echo $product4_cost1; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $product4_name2; ?> </td>
                                                    <td><?php echo $product4_cost2; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $product4_name3; ?> </td>
                                                    <td><?php echo $product4_cost3; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $product4_name4; ?> </td>
                                                    <td><?php echo $product4_cost4; ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- product DISCLAIMERS -->
                            <div class="cta-dis">
                                <p><strong> DISCLAIMERS:</strong>Images are for illustrative purposes only. Packaging
                                    may vary based on the availability </p>
                            </div>
                        </div>


                        <?php
                    }
                }
                ?>

                        </div>
                    <!-- product list end -->
                </div>
            </div>
        </section>
    </main>