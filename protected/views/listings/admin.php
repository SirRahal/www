<?php
/* @var $this ListingsController */
/* @var $model Listings */

$this->breadcrumbs=array(
	'Listings',
);

?>

<h1>Manage Listings</h1>

<div class="spacer"></div>

<a href="/index.php/listings/create">Create Listing</a>

<?php
$listings = Listings::model()->findAll();

echo $this->renderPartial('listing_table', array('listings' => $listings));
?>