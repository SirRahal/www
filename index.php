<?php

use \EbayShop\Credentials;
use \EbayShop\Manager;
use \EbayShop\Pagination;

# Require configuration constants
require __DIR__ . '/config.php';
# Require Composer autoload class
require __DIR__ . '/vendor/autoload.php';

# Create manager object to get items
$shop = new Manager(new Credentials(), STORE_NAME);

# Basic params for request and pagination
$page         = isset($_GET['p']) ? intval($_GET['p']) : 1;
$maxPerPage   = 21;
$items        = $shop->getItems(null, $maxPerPage, $page);
$totalPages   = 100;
$pageNumber   = $shop->getPageNumber();
$totalEntries = $maxPerPage * $totalPages;
$maxNavItems  = 11;

# Setting up page numbers and links
$pagination  = new Pagination($maxPerPage, $totalEntries, $maxNavItems, $page);
$queryString = strlen($_SERVER['QUERY_STRING']) > 0 ? preg_replace('/p=[0-9]+/', 'p={nr}', $_SERVER['QUERY_STRING'], 1) : 'p={nr}';
$pageNav     = $pagination->get_html(str_replace('index.php', '', $_SERVER['PHP_SELF']) . '?' . $queryString);

# Require Bootstrap template
require TEMPLATES_DIR . '/' . basename(__FILE__, '.php') . TEMPLATE_EXTENSION;
