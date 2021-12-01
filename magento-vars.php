<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

/**
 * Enable, adjust and copy this code for each store you run
 *
 * Store #0, default one
 *
 * if (isHttpHost("example.com")) {
 *    $_SERVER["MAGE_RUN_CODE"] = "default";
 *    $_SERVER["MAGE_RUN_TYPE"] = "store";
 * }
 *
 * @param string $host
 * @return bool
 */
function isHttpHost(string $host)
{
    if (!isset($_SERVER['HTTP_HOST'])) {
        return false;
    }
    return $_SERVER['HTTP_HOST'] === $host;
}

$allowedSiteCodes = ['fresh','auto','b2b','b2c','sitea','siteb','sitec','sited','sitee','luma','venia','brentmill','healthbeauty'];

if(isset($_SERVER['REQUEST_URI'])){
    $uri = explode('/', $_SERVER['REQUEST_URI']);
    if(isset($uri[1])){
        if (in_array($uri[1], $allowedSiteCodes)) {
            $_SERVER["MAGE_RUN_TYPE"] = 'website';
            $_SERVER["MAGE_RUN_CODE"] = $uri[1];
        }
    }
}
