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



<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="/css/jquery.dataTables.css">
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="/js/jquery.dataTables.js"></script>
<h1>Listings On Ebay</h1>

<div class="spacer"></div>
<script>
    $(document).ready(function(){
        $('#myTable').DataTable();
    });
</script>
<a href="/index.php/listings/create">Create Listing</a>

<?php
    $listings = Listings::model()->findAllByAttributes(array('ebay_listed'=>1));
    echo $this->renderPartial('listing_table', array('listings' => $listings));
?>