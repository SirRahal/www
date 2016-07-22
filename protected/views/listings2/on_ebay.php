<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 12/4/14
 * Time: 2:58 PM
 */

$this->breadcrumbs=array(
    'Listings',
);
?>

<h1>Listings On Ebay</h1>

<div class="spacer"></div>
<a href="/index.php/listings/create">Create Listing</a> | <a href="/index.php/listings/manual_create">Create Manual Listing</a>

<?php
    $listings = Listings::model()->findAllByAttributes(array('ebay_listed'=>1));
    echo $this->renderPartial('listing_table', array('listings' => $listings));
?>