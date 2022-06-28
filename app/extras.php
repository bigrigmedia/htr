<?php

/**
 * Theme extras.
 */

namespace App;

/**
 * Custom image sizes
 *
 * @link https://developer.wordpress.org/reference/functions/add_image_size/
 *
 * e.g. add_image_size('w800x400', 800, 400, true)
 */

$custom_sizes = [
    'w1917x1058'    => [1917, 1058, true],
    'w1748x858'     => [1748, 858, true],
    'w1740x1140'    => [1740, 1140, true],
    'w1536x954'     => [1536, 954, true],
    'w1070x582'     => [1070, 582, true],
    'w1013x615'     => [1013, 615, true],
    'w1013x668'     => [1013, 668, true],
    'w940x838'      => [940, 838, true],
    'w889x676'      => [889, 676, true],
    'w780x736'      => [780, 736, true],
    'w700x732'      => [700, 732, true],
    'w698x776'      => [698, 776, true],
    'w470x419'      => [470, 419, true],
    'w444x742'      => [444, 742, true],
    'w313x168'      => [313, 168, true]
];

if (!empty($custom_sizes)) {
    foreach ($custom_sizes as $key => $custom_size) {
        add_image_size($key, $custom_size[0], $custom_size[1], $custom_size[2]);
    }
}

/**
 * Allow max image quality
 */
add_filter('jpeg_quality', function ($arg) {
    return 100;
});

add_filter('wp_editor_set_quality', function ($arg) {
    return 100;
});
