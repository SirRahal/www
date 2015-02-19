<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to BTM-NTS</h1>

<h3>This Site is for Listers Only.<br/>If you are not a lister, please leave.</h3>
<style>
    img {
        opacity: 0.5;
        float: right;
        margin-top: 260px;
        position: absolute;
        right:10px;
    }
</style>
<img src="/images/giphy.gif" style="" />
<br/>
<div>
    <div class="container">
        <!--Lister site breakdown-->
        <div class="row">
            <div class="col-lg-2">
                <h6>Back Listers</h6>
                <ul>
                    <li>Create listings</li>
                    <li>Edit Listings</li>
                    <li>Add Images</li>
                    <li>Copy Listings</li>
                    <li>View Listings</li>
                    <li>Delete Images</li>
                    <li>Delete Listings</li>
                    <li>Create Manufacture</li>
                    <li>Delete Manufacture</li>
                    <li>My Listings</li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h6>eBay Listers</h6>
                <ul>
                    <li>View Listings on Ebay</li>
                    <li>View Listings Not on Ebay</li>
                    <li>Not Sold Items</li>
                    <li>Mark Items as Ebay Listed</li>
                    <li>Mark Items as Sold</li>
                    <li>Set Dates</li>
                    <li>Leave Notes</li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h6>Admin</h6>
                <ul>
                    <li>Create Users</li>
                    <li>Edit Users</li>
                    <li>Delete Users</li>
                    <li>Change Permissions</li>
                    <li>View User Activity</li>
                    <li>Delete Old Images</li>
                </ul>
            </div>
            <div class="col-lg-4">
                <h6>Automatic</h6>
                <ul>
                    <li>Rename Images so they don't overlap</li>
                    <li>Organizes listing Views</li>
                    <li>Image Notifier</li>
                    <li>Manufacture Listing</li>
                    <li>Editing Manufacture Cascades</li>
                </ul>
            </div>
        </div>
        <!--BTM Lister Breakdown-->
        <div class="row">
            <div class="col-lg-2">
                <h6>BTM Listers</h6>
                <ul>
                    <li>Create Auction</li>
                    <li>Add Lots</li>
                    <li>View Lots</li>
                    <li>Edit Lots</li>
                    <li>Copy Lots</li>
                    <li>Delete Lots</li>
                    <li>Add Images</li>
                    <li>Delete Images</li>
                    <li>Re-Order Lots</li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h6>Other Features</h6>
                <ul>
                    <li>Re-Order Lots</li>
                    <li>Excel Organizer</li>
                    <li>Exporting Lot Listing</li>
                    <li>Export Zipped Images</li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h6>Automatic</h6>
                <ul>
                    <li>Lot Organizer</li>
                    <li>Auto Image Namer</li>
                    <li>Excel Creater</li>
                    <li>Zip Folder</li>
                </ul>
            </div>
        </div>
    </div>
</div>



