<?php
// API Call
$api_url = 'https://prodhanltd.com/api/home_page.php';

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
$products = array_slice($data['report'] ?? [], 0, 6); // Only first 6 products
$baseURL = 'https://prodhanltd.com/';
?>

<div class="widget widget-products widget-products-bordered h-100">
    <div class="widget-body br-sm h-100 pb-2">
        <h4 class="title-sm title-underline font-weight-bolder ls-normal mb-2">
            Recommend
        </h4>
        <div class="swiper">
            <div class="swiper-container swiper-theme nav-top"
                 data-swiper-options='{
                     "spaceBetween": 20,
                     "slidesPerView": 1,
                     "breakpoints": {
                         "576": { "slidesPerView": 2 },
                         "992": { "slidesPerView": 1 }
                     }
                 }'>
                <div class="swiper-wrapper row cols-lg-1 cols-md-3">
                    <div class="swiper-slide product-widget-wrap">
                        <?php foreach ($products as $product): ?>
                            <div class="product product-widget bb-no">
                                <figure class="product-media">
                                    <a href="product-details.php?id=<?= $product['Id'] ?>">
                                        <img src="<?= $baseURL . $product['Image'] ?>"
                                             alt="<?= htmlspecialchars($product['Title']) ?>"
                                             width="105" height="118" />
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
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">
                                            <?= $product['Price'] == '0' ? 'Contact for price' : '৳' . $product['Price'] ?>
                                        </ins>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <button class="swiper-button-next"></button>
                <button class="swiper-button-prev"></button>
            </div>
        </div>
    </div>
</div>
