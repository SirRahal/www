<?php

use \EbayStore\Credentials;
use \EbayStore\Manager;
use \EbayStore\Pagination;
use \EbayStore\FindingFilter;
use \EbayStore\ShoppingFilter;

# Start session
session_start();

# Require configuration constants
require __DIR__ . '/config.php';
# Require Composer autoload class
require __DIR__ . '/vendor/autoload.php';

# Create manager object to get items
$shop = new Manager(new Credentials(), EBAY_STORE_NAME);

# Simple caching categories through session
if (isset($_SESSION['categories']) && !empty($_SESSION['categories'])) {
    $categories = $_SESSION['categories'];
} else {
    try {
        $categories = $shop->getStoreCategories();
        $_SESSION['categories'] = $categories;
    } catch (Exception $e) {
        $error .= $e->getMessage();
    }
}

# Basic params for request and pagination
$page         = isset($_GET['p']) ? intval($_GET['p']) : 1;
$category     = isset($_GET['category']) ? intval($_GET['category']) : null;
$keyword      = isset($_GET['keyword']) ? trim($_GET['keyword']) : null;
$maxPerPage   = 18;
$maxNavItems  = 11;

# Check if we need to filter category
if ($category > 0) {
    $filter = new ShoppingFilter();
    $filter->setMaxPerPage($maxPerPage);
    $filter->setPageNumber($page);
    $filter->setCategory($category);
    $items = $shop->getItemsByCategory($filter);
    $totalPages = $shop->getTotalPages();
} else {
    try {
        $filter = new FindingFilter();
        $filter->setMaxPerPage($maxPerPage)
               ->setPageNumber($page)
               ->setKeyword($keyword);
        $items = $shop->getItems($filter);
        $totalPages = min($shop->getTotalPages(), 100);
    } catch (Exception $e) {
        $error .= $e->getMessage();
    }
}
$pageNumber   = $shop->getPageNumber();
$totalEntries = $maxPerPage * $totalPages;

# Setting up page numbers and links
$queryString = preg_match('/p=[0-9]+/', $_SERVER['QUERY_STRING']) ? preg_replace('/p=[0-9]+/', 'p={nr}', $_SERVER['QUERY_STRING'], 1) : $_SERVER['QUERY_STRING'] . '&p={nr}';
try {
    $pagination = new Pagination($maxPerPage, $totalEntries, $maxNavItems, $page);
    $pageNav    = $pagination->get_html(str_replace('index.php', '', $_SERVER['PHP_SELF']) . '?' . $queryString);
} catch (Exception $e) {
    $error .= $e->getMessage();
}

# Require Bootstrap template
require TEMPLATES_DIR . '/' . basename(__FILE__, '.php') . TEMPLATE_EXTENSION;
