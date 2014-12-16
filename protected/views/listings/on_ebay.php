<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 12/4/14
 * Time: 2:58 PM
 */ ?>



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
$listings = Listings::model()->findAllByAttributes(array('ebay_listed'=>1));
?>
<style>
    tbody{
        color:black;
    }
</style>
<table id="myTable" class="hover stripe row-border">
    <thead>
    <tr>
        <td>Edit</td>
        <td>Edit</td>
        <td>ID</td>
        <td>Inventory</td>
        <td>Manufacturer</td>
        <td>Serial #</td>
        <td>Model #</td>
        <td>Date</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach($listings as $item){ ?>
        <tr>
            <td ><a class="link" href="/index.php/listings/update/<?php echo $item->ID; ?>">Edit</a></td>
            <td ><a class="link" href="/index.php/listings/view/<?php echo $item->ID; ?>">View</a></td>
            <td><?php echo $item->ID; ?></td>
            <td><?php echo $item->inventory; ?></td>
            <td><?php echo $item->manufacturer; ?></td>
            <td><?php echo $item->serial_number; ?></td>
            <td><?php echo $item->model_number; ?></td>
            <td><?php echo $item->date; ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<script>
    $(document).ready(function(){
        $('#myTable').DataTable();
    });
</script>