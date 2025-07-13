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

// Function to chunk products in groups of 4
function chunkProducts($products, $chunkSize = 4) {
    return array_chunk($products, $chunkSize);
}

$productChunks = chunkProducts($products, 4);
?>

<div class="widget widget-products widget-products-bordered h-100">
    <div class="widget-body br-sm pb-2 h-100">
        <h4 class="title-sm title-underline font-weight-bolder ls-normal mb-2">
            Recommend
        </h4>
        <div class="swiper">
            <div class="swiper-container swiper-theme nav-top"
                 data-swiper-options='{
                    "slidesPerView": 1,
                    "spaceBetween": 20,
                    "breakpoints": {
                        "576": { "slidesPerView": 1 },
                        "992": { "slidesPerView": 1 }
                    }
                }'>
                <div class="swiper-wrapper row cols-lg-1 cols-md-3">
                    <?php foreach ($productChunks as $chunk): ?>
                        <div class="swiper-slide product-widget-wrap">
                            <?php foreach ($chunk as $product): ?>
                                <div class="product product-widget bb-no">
                                    <figure class="product-media">
                                        <a href="product-details.php?id=<?= $product['Id'] ?>">
                                            <img src="https://prodhanltd.com/<?= $product['Image'] ?>" alt="<?= htmlspecialchars($product['Title']) ?>" width="105" height="118" />
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
                                                <span class="ratings" style="width: 80%"></span>
                                            </div>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">৳<?= $product['Price'] ?></ins>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endforeach; ?>
                </div>

                <button class="swiper-button-next"></button>
                <button class="swiper-button-prev"></button>
            </div>
        </div>
    </div>
</div>
