<?php include ('header.php') ?>
<?php
    $api_url = 'https://prodhanltd.com/api/slide.php';
    $response = file_get_contents($api_url);
    $slideData = json_decode($response, true);

    $slides = $slideData['report'];
?>
  <!-- Start of Main -->
  <div class="main">
    <div class="container">
      <div class="intro-wrapper mb-4">
        <div
          class="swiper-container swiper-theme nav-inner swiper-nav-md animation-slider"
          data-swiper-options="{
                    'autoplay': {
                        'delay': 8000,
                        'disableOnInteraction': false
                    }
                }"
        >
          <div class="swiper-wrapper row cols-1 gutter-no">

              <?php if (isset($slides) && is_array($slides) && count($slides) > 0) { ?>
                <?php foreach ($slides as $index => $slide): ?>
                  <?php
                  $bgImage = "https://prodhanltd.com/" . $slide['Image'];
                  $title = $slide['Title'];
                  ?>
                  <div class="swiper-slide banner banner-fixed intro-slide intro-slide<?= $index + 1 ?> br-sm"
                       style="background-image: url('<?= $bgImage ?>'); background-color: #262729;">
                      <div class="banner-content y-50 x-50 w-100 text-center">
                          <h5 class="banner-subtitle text-primary font-weight-normal text-capitalize font-secondary ls-25 slide-animate"
                              data-animation-options="{'name': 'fadeInDownShorter', 'duration': '.8s'}">
                              Mega Sale
                          </h5>
                          <h3 class="banner-title text-white text-capitalize ls-25 lh-1 slide-animate"
                              data-animation-options="{'name': 'fadeInRightShorter', 'duration': '.5s', 'delay': '.5s'}">
                              <?= htmlspecialchars($title) ?>
                          </h3>
                          <!--
                          <p class="ls-25 slide-animate"
                             data-animation-options="{'name': 'fadeInLeftShorter', 'duration': '.5s', 'delay': '.5s'}">
                              Get Free Shipping on all orders over $99.00
                          </p>
                          -->
                          <a href="shop-banner-sidebar.php"
                             class="btn btn-white btn-outline btn-rounded btn-icon-right slide-animate"
                             data-animation-options="{'name': 'fadeInUpShorter', 'duration': '.5s', 'delay': '.5s'}">
                              Shop Now<i class="w-icon-long-arrow-right"></i>
                          </a>
                      </div>
                  </div>
                <?php endforeach; ?>
              <?php } ?>

          </div>
          <button class="swiper-button-next"></button>
          <button class="swiper-button-prev"></button>
        </div>
      </div>
      <!-- End of Intro Wrapper -->
      <div
        class="swiper-container swiper-theme intro-banner appear-animate"
        data-swiper-options="{
                'spaceBetween': 20,
                'slidesPerView': 1,
                'breakpoints': {
                    '576': {
                        'slidesPerView': 2,
                        'spaceBetween': 15
                    },
                    '992': {
                        'slidesPerView': 3
                    }
                }
            }"
      >
        <div class="swiper-wrapper row cols-lg-3 cols-sm-2 cols-1">
          <div class="swiper-slide">
            <figure class="banner banner-fixed br-sm">
              <img
                src="assets/images/demos/demo3/categories/1.jpg"
                alt="Category Banner"
                width="400"
                height="200"
                style="background-color: #3c3c3c"
              />
              <div class="banner-content y-50">
                <h5
                  class="banner-subtitle text-primary text-uppercase font-weight-bold ls-25"
                >
                  Top Products
                </h5>
                <h3 class="banner-title text-white font-weight-bold">
                  Tranding NIKE<br />Sneaker
                </h3>
                <a
                  href="shop-banner-sidebar.html"
                  class="btn btn-white btn-link btn-underline btn-icon-right"
                >
                  Shop Now<i class="w-icon-long-arrow-right"></i>
                </a>
              </div>
            </figure>
          </div>

          <div class="swiper-slide">
            <figure class="banner banner-fixed br-sm">
              <img
                src="assets/images/demos/demo3/categories/2.jpg"
                alt="Category Banner"
                width="400"
                height="200"
                style="background-color: #e1e1e1"
              />
              <div class="banner-content y-50">
                <h5
                  class="banner-subtitle text-primary text-uppercase font-weight-bold ls-25"
                >
                  New Arrivals
                </h5>
                <h3 class="banner-title ls-25">
                  Vegan Friendly<br />Makeup
                </h3>
                <a
                  href="shop-banner-sidebar.html"
                  class="btn btn-dark btn-link btn-underline btn-icon-right"
                >
                  Shop Now<i class="w-icon-long-arrow-right"></i>
                </a>
              </div>
            </figure>
          </div>

          <div class="swiper-slide">
            <figure class="banner banner-fixed br-sm">
              <img
                src="assets/images/demos/demo3/categories/3.jpg"
                alt="Category Banner"
                width="400"
                height="200"
                style="background-color: #57585d"
              />
              <div class="banner-content y-50">
                <h5
                  class="banner-subtitle text-primary text-uppercase font-weight-bold ls-25"
                >
                  Best Seller
                </h5>
                <h3 class="banner-title text-white font-weight-bold ls-15">
                  Fashion Apple<br />Accessories
                </h3>
                <a
                  href="shop-banner-sidebar.html"
                  class="btn btn-white btn-link btn-underline btn-icon-right"
                >
                  Shop Now<i class="w-icon-long-arrow-right"></i>
                </a>
              </div>
            </figure>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

      <div
        class="swiper-container swiper-theme icon-box-wrapper appear-animate br-sm mt-6 mb-10"
        data-swiper-options="{
                'slidesPerView': 1,
                'breakpoints': {
                    '576': {
                        'slidesPerView': 2
                    },
                    '768': {
                        'slidesPerView': 3
                    },
                    '992': {
                        'slidesPerView': 3
                    },
                    '1200': {
                        'slidesPerView': 4
                    }
                }
            }"
      >
        <div class="swiper-wrapper row cols-md-4 cols-sm-3 cols-1">
          <div class="swiper-slide icon-box icon-box-side text-dark">
            <span class="icon-box-icon icon-shipping">
              <i class="w-icon-truck"></i>
            </span>
            <div class="icon-box-content">
              <h4 class="icon-box-title mb-1 ls-normal">
                Free Shipping & Returns
              </h4>
              <p class="text-default">For all orders over $99</p>
            </div>
          </div>
          <div class="swiper-slide icon-box icon-box-side text-dark">
            <span class="icon-box-icon icon-payment">
              <i class="w-icon-bag"></i>
            </span>
            <div class="icon-box-content">
              <h4 class="icon-box-title mb-1 ls-normal">Secure Payment</h4>
              <p class="text-default">We ensure secure payment</p>
            </div>
          </div>
          <div
            class="swiper-slide icon-box icon-box-side text-dark icon-box-money"
          >
            <span class="icon-box-icon icon-money">
              <i class="w-icon-money"></i>
            </span>
            <div class="icon-box-content">
              <h4 class="icon-box-title mb-1 ls-normal">
                Money Back Guarantee
              </h4>
              <p class="text-default">Any back within 30 days</p>
            </div>
          </div>
          <div
            class="swiper-slide icon-box icon-box-side text-dark icon-box-chat"
          >
            <span class="icon-box-icon icon-chat">
              <i class="w-icon-chat"></i>
            </span>
            <div class="icon-box-content">
              <h4 class="icon-box-title mb-1 ls-normal">
                Customer Support
              </h4>
              <p class="text-default">Call or email us 24/7</p>
            </div>
          </div>
        </div>
      </div>
      <!-- End of Iocn Box Wrapper -->

      <h2 class="title text-left pt-1 mb-5 appear-animate">
        Most Popular Brand
      </h2>
      <div class="swiper">
        <div
          class="swiper-container category-wrapper swiper-theme appear-animate"
          data-swiper-options="{
                    'spaceBetween': 20,
                    'slidesPerView': 2,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 3
                        },
                        '768': {
                            'slidesPerView': 4
                        },
                        '992': {
                            'slidesPerView': 5
                        },
                        '1200': {
                            'slidesPerView': 6
                        }
                    }
                }"
        >
          <div
            class="swiper-wrapper row cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2"
          >
              <?php include 'partials/category-swiper-grid.php'; ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

      <!-- End of Category Wrapper -->

        <?php //include 'hot_deal.php'; ?>

      <!-- End of Deals Wrapper -->



      <h2 class="title text-left appear-animate mb-5">
        Feature Products
      </h2>
        <?php include 'feature_products.php'; ?>
      <!-- Banner Product Wrapper -->

      <div class="row category-accessories appear-animate mb-7">
        <div class="col-md-6 mb-4">
          <figure class="banner banner-fixed br-sm">
            <img
              src="assets/images/demos/demo3/categories/10.jpg"
              alt="Category Banner"
              width="610"
              height="200"
              style="background-color: #52575b"
            />
            <div class="banner-content y-50">
              <h5
                class="banner-subtitle font-weight-bold text-primary text-uppercase ls-25"
              >
                Top Selling
              </h5>
              <h3
                class="banner-title text-white text-capitalize font-weight-bold"
              >
                XBox Gaming<br />Accessories
              </h3>
              <a
                href="shop-banner-sidebar.html"
                class="btn btn-white btn-link btn-underline btn-icon-right"
              >
                Shop Now<i class="w-icon-long-arrow-right"></i>
              </a>
            </div>
          </figure>
        </div>
        <div class="col-md-6 mb-4">
          <figure class="banner banner-fixed br-sm">
            <img
              src="assets/images/demos/demo3/categories/11.jpg"
              alt="Category Banner"
              width="610"
              height="200"
              style="background-color: #f0f0f0"
            />
            <div class="banner-content y-50">
              <h5
                class="banner-subtitle font-weight-bold text-primary text-uppercase ls-25"
              >
                Season Sale
              </h5>
              <h3 class="banner-title text-capitalize ls-15">
                Fashion Figure<br />Skate Sale
              </h3>
              <a
                href="shop-banner-sidebar.html"
                class="btn btn-dark btn-link btn-underline btn-icon-right"
              >
                Shop Now<i class="w-icon-long-arrow-right"></i>
              </a>
            </div>
          </figure>
        </div>
      </div>
      <!-- End of Category Accessories -->

      <h2 class="title text-left appear-animate mb-5">Consumer Electric</h2>
        <?php
        $api_url = 'https://prodhanltd.com/api/home_page.php';
        $baseURL = 'https://prodhanltd.com/';

        // API Call
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $api_url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => [],
        ));
        $response = curl_exec($curl);
        curl_close($curl);

        $data = json_decode($response, true);
        $products = $data['report'] ?? [];
        ?>
        <div class="row banner-product-wrapper appear-animate mb-7">
            <div class="col-lg-9 mb-4 mb-lg-0">
                <!-- Banner -->
                <div class="banner banner-fixed br-sm appear-animate">
                    <figure>
                        <img src="assets/images/demos/demo3/banners/3.jpg" alt="banner" width="925" height="298" style="background-color: #56575c" />
                    </figure>
                    <div class="banner-content y-50">
                        <h5 class="banner-subtitle text-primary font-weight-bold text-uppercase ls-25">Office Electronics</h5>
                        <h3 class="banner-title font-weight-bold text-uppercase text-white ls-25">
                            Wonderful Long Weekend<br />
                            <strong class="text-capitalize">Apple Drones</strong>
                        </h3>
                        <a href="shop-banner-sidebar.php" class="btn btn-white btn-outline btn-rounded">Shop Now</a>
                    </div>
                </div>

                <!-- Swiper Products -->
                <div class="swiper-container swiper-theme mt-4"
                     data-swiper-options='{"spaceBetween":20,"slidesPerView":2,"breakpoints":{"576":{"slidesPerView":3},"768":{"slidesPerView":4}}}'>
                    <div class="swiper-wrapper row cols-md-4 cols-sm-3 cols-2">
                        <?php foreach ($products as $product): ?>
                            <div class="swiper-slide product-wrap">
                                <div class="product product-simple text-center">
                                    <figure class="product-media">
                                        <a href="product-details.php?id=<?= $product['Id'] ?>">
                                            <img src="<?= $baseURL . $product['Image'] ?>" alt="<?= htmlspecialchars($product['Title']) ?>" width="330" height="338">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name">
                                            <a href="product-details.php?id=<?= $product['Id'] ?>">
                                                <?= htmlspecialchars($product['Title']) ?>
                                            </a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%"></span>
                                            </div>
                                            <a href="product-details.php?id=<?= $product['Id'] ?>" class="rating-reviews">(5 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">
                                                    <?php if ($product['Price'] == '0'): ?>
                                                        Contact for price
                                                    <?php else: ?>
                                                        ৳<?= $product['Price'] ?>
                                                    <?php endif; ?>
                                                </ins>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-3 mb-4">
                <?php include 'arrival_products_sidebar.php'; ?>
            </div>
        </div>
    </div>
    <!-- End of Container -->
  </div>
  <!-- End of Main -->
<?php include ('footer.php') ?>
