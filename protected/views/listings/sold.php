<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 1/7/15
 * Time: 3:02 PM
 */
$this->breadcrumbs=array(
    'Listings',
);
?>



    <h1>Sold Items</h1>

    <div class="spacer"></div>

    <a href="/index.php/listings/create">Create Listing</a>

<?php
$listings = Listings::model()->findAllByAttributes(array('sold'=>1));
echo $this->renderPartial('listing_table', array('listings' => $listings));
?>