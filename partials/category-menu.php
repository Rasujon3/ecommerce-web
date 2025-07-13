<?php
// category-menu.php

// API URL
$api_url = "https://prodhanltd.com/api/home_page_category.php";

// Initialize cURL for POST request
$ch = curl_init($api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, []); // POST body empty
$response = curl_exec($ch);
curl_close($ch);

// Parse JSON response
$categories = [];
if ($response !== false) {
    $categoryData = json_decode($response, true);
    if ($categoryData && $categoryData['error'] == 0) {
        $categories = $categoryData['report'];
    }
}
?>

<div class="dropdown-box">
    <ul class="menu vertical-menu category-menu">

        <?php if (!empty($categories)): ?>
            <?php foreach ($categories as $cat): ?>
                <?php
                $categoryName = $cat['Category'];
                $url = 'shop-fullwidth-banner.php?category=' . urlencode($categoryName);

                // Optional: Use icon mapping (can be expanded)
                $iconMap = [
                    'Umbrellas' => 'w-icon-heartbeat',
                    'Surgical' => 'w-icon-ruby',
                    'Promotional Offer' => 'w-icon-electronics',
                    'Perfume' => 'w-icon-ice-cream',
                    'Oil Item' => 'w-icon-ios',
                    'National Electronics' => 'w-icon-camera',
                    'Motor Engineer' => 'w-icon-furniture',
                    'Mens Products' => 'w-icon-tshirt2',
                    'Leather Bag' => 'w-icon-home',
                    'Home Appliance' => 'w-icon-gift',
                    'Health & Dental' => 'w-icon-heart',
                    'Health & Beauty' => 'w-icon-heartbeat',
                    'Food Products' => 'w-icon-furniture',
                    'Electric Product' => 'w-icon-electronics',
                    'Chemical Product' => 'w-icon-ruby',
                    'Beauty Products' => 'w-icon-gift',
                    'Bath and Body' => 'w-icon-home',
                    'Baby Care' => 'w-icon-ice-cream',
                    'Accessories' => 'w-icon-gift',
                ];
                $iconClass = isset($iconMap[$categoryName]) ? $iconMap[$categoryName] : 'w-icon-tag';
                ?>
                <li>
                    <a href="<?= htmlspecialchars($url) ?>">
                        <i class="<?= $iconClass ?>"></i><?= htmlspecialchars($categoryName) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <li><a href="#"><i class="w-icon-exclamation-circle"></i>No categories available</a></li>
        <?php endif; ?>

        <!-- Static final link -->
        <li>
            <a href="shop-banner-sidebar.php" class="font-weight-bold text-uppercase ls-25">
                View All Categories<i class="w-icon-angle-right"></i>
            </a>
        </li>
    </ul>
</div>
