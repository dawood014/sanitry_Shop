<?php

/** @var array<string, array> */
$categories = require __DIR__.'/chunks/website_categories.php';

return [
    /*
    | Homepage “Featured Products” carousel order (must resolve via WebsiteCatalog).
    */
    'featured_slugs_order' => [
        'haier-1-5t-inverter-ac',
        'gree-1t-inverter-ac',
        'haier-14-cft-refrigerator',
        'samsung-7kg-eco-bubble',
        'dawlance-25l-microwave',
        'pel-16-cft-inverter-fridge',
        'anex-fan-heater-2000w',
        'super-asia-ecm-4000-air-cooler',
    ],

    'categories' => $categories,
];
