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



    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="/css/jquery.dataTables.css">
    <!-- DataTables -->
    <script type="text/javascript" charset="utf8" src="/js/jquery.dataTables.js"></script>
    <h1>Sold Items</h1>

    <div class="spacer"></div>
    <script>
        $(document).ready(function(){
            $('#myTable').DataTable();
        });
    </script>
    <a href="/index.php/listings/create">Create Listing</a>

<?php
$listings = Listings::model()->findAllByAttributes(array('sold'=>1));
echo $this->renderPartial('listing_table', array('listings' => $listings));
?>