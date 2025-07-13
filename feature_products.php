<?php
// API Call
$api_url = "https://prodhanltd.com/api/home_page_special.php";

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
$baseURL = 'https://prodhanltd.com/';
?>

<div class="row banner-product-wrapper appear-animate mb-10">
    <div class="col-lg-9 mb-4 mb-lg-0">
        <!-- Banner -->
        <div class="banner banner-fixed br-sm appear-animate">
            <figure>
                <img src="assets/images/demos/demo3/banners/2.jpg" alt="banner" width="925" height="298" style="background-color: #ecede8" />
            </figure>
            <div class="banner-content y-50">
                <h5 class="banner-subtitle text-primary font-weight-bold text-uppercase ls-25">Season Lifestyle</h5>
                <h3 class="banner-title font-weight-bold text-uppercase ls-25">
                    Wonderful Long Weekend<br />
                    <strong class="text-capitalize">Women's Style</strong>
                </h3>
                <a href="shop-banner-sidebar.php" class="btn btn-dark btn-outline btn-rounded">Shop Now</a>
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
                                    <img src="<?= $baseURL.$product['Image'] ?>" alt="<?= htmlspecialchars($product['Title']) ?>" width="330" height="338">
                                </a>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name">
                                    <a href="product-details.php?id=<?= $product['Id'] ?>"><?= htmlspecialchars($product['Title']) ?></a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%"></span>
                                    </div>
                                    <a href="product-details.php" class="rating-reviews">(5 reviews)</a>
                                </div>
                                <div class="product-pa-wrapper">
                                    <div class="product-price">
                                        <ins class="new-price">৳<?= $product['Price'] ?></ins>
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

    <!-- Right Sidebar Placeholder -->
    <div class="col-lg-3">
        <!-- You can make this section dynamic similarly if needed -->
        <?php include 'feature_products_sidebar.php'; ?>
    </div>
</div>
