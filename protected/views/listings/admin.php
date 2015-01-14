<?php
/* @var $this ListingsController */
/* @var $model Listings */

$this->breadcrumbs=array(
	'Listings',
);

?>

<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="/css/jquery.dataTables.css">
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="/js/jquery.dataTables.js"></script>
<h1>Manage Listings</h1>

<div class="spacer"></div>
<script>
    $(document).ready(function(){
        $('#myTable').DataTable();
    });
</script>
<a href="/index.php/listings/create">Create Listing</a>

<?php
$listings = Listings::model()->findAll();

echo $this->renderPartial('listing_table', array('listings' => $listings));
?>