<?php

use \EbayStore\Credentials;
use \EbayStore\Manager;

# Script time is unlimited
ini_set('max_execution_time', 0);

$time = microtime(true);
echo "\nScript start\n";

# Require configuration constants
require __DIR__ . '/config.php';
# Require Composer autoload class
require __DIR__ . '/vendor/autoload.php';

# Create manager object to get items
$shop = new Manager(new Credentials(), EBAY_STORE_NAME);
try {
    $shop->downloadCategories();
    echo 'Script working time: ' . round(microtime(true) - $time, 2) . " sec.\n";
} catch (Exception $e) {
    $date = new DateTime(null, new DateTimeZone('PST'));
    echo $date->format('Y-m-d H:i:s') . ' ' . $e->getMessage() . ' ' . $e->getTraceAsString();
}
