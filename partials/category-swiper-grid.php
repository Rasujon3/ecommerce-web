<?php
// category-swiper-grid.php

// API call (same as previous)
$api_url = "https://prodhanltd.com/api/home_page_category.php";

$ch = curl_init($api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, []);
$response = curl_exec($ch);
curl_close($ch);

$categories = [];
if ($response !== false) {
    $categoryData = json_decode($response, true);
    if ($categoryData && $categoryData['error'] == 0) {
        $categories = $categoryData['report'];
    }
}
?>

<div class="swiper-wrapper row cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2">
    <?php if (!empty($categories)): ?>
        <?php foreach ($categories as $cat): ?>
            <?php
            $categoryName = $cat['Category'];
            $imageUrl = 'https://prodhanltd.com/' . $cat['Image'];
            $link = 'shop-fullwidth-banner.php?category=' . urlencode($categoryName);
            ?>
            <div class="swiper-slide category category-classic category-absolute overlay-zoom br-xs">
                <a href="<?= htmlspecialchars($link) ?>">
                    <figure class="category-media">
                        <img src="<?= htmlspecialchars($imageUrl) ?>"
                             alt="<?= htmlspecialchars($categoryName) ?>"
                             width="130"
                             height="130"
                             style="object-fit: cover;" />
                    </figure>
                </a>
                <div class="category-content">
                    <h4 class="category-name" style="color: #fe7c00 !important;">
                        <a href="<?= htmlspecialchars($link) ?>"><?= htmlspecialchars($categoryName) ?></a>
                    </h4>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <div class="swiper-slide">
            <p>No categories found.</p>
        </div>
    <?php endif; ?>
</div>
