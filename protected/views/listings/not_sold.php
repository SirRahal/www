<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 1/30/15
 * Time: 7:55 AM
 */ ?>


    <h1>Listings On Ebay But Not Sold</h1>

    <div class="spacer"></div>
    <a href="/index.php/listings/create">Create Listing</a>

<?php
$criteria = new CDbCriteria();
$criteria->condition = 'ebay_listed=1 AND sold=0';
$listings = Listings::model()->findAll($criteria);
echo $this->renderPartial('listing_table', array('listings' => $listings));
?>