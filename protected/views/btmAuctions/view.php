<?php
/* @var $this BtmauctionController */
/* @var $model BtmAuctions */

$this->breadcrumbs=array(
	'Btm Auctions'=>array('index'),
	$model->name,
);

$listings = $model->btmListings;
?>

<h1><b><?php echo $model->name; ?></b></h1>



<div class="spacer"></div>

<a href="/index.php/btmlistings/create/?auction=<?php echo $model->ID; ?>">Add A Lot</a>
| <a href="/index.php/btmauctions/order_lots/<?php echo $model->ID; ?>">Set Lot Order</a>
| <a href="/index.php/btmauctions/export_lots/<?php echo $model->ID; ?>">Export Lots</a>
| <a href="/index.php/btmauctions/export_images/<?php echo $model->ID; ?>">Export Images</a>


<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="/css/jquery.dataTables.css">
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="/js/jquery.dataTables.js"></script>
<style>
    tbody{
        color:black;
        text-align: center;
    }
</style>
<table id="myTable" class="hover stripe row-border">
    <thead>
    <tr style="text-align: center">
        <td>Lot</td>
        <td>Manufacturer</td>
        <td>Model</td>
        <td>Images</td>
        <td>Options</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach($listings as $listing){ ?>
        <tr>
            <td><?php echo $listing->lot; ?></td>
            <td><?php echo $listing->manufacturer; ?></td>
            <td><?php echo $listing->model; ?></td>
            <td style="text-align: center;"><img src="/images/<?php if($listing->btmImages){ echo 'green';}else { echo 'red';} ?>thumb.jpg" /></td>
            <td style="text-align: center;">
                <a class="link" href="/index.php/btmlistings/view/<?php echo $listing->ID; ?>">View</a>
                | <a class="link" href="/index.php/btmlistings/update/<?php echo $listing->ID; ?>">Edit</a>
                | <a class="link" href="/index.php/btmlistings/create/?auction=<?php echo $model->ID ?>&listing=<?php echo $listing->ID; ?>">Copy</a>
                | <a class="link" style="cursor: pointer;" onclick="delete_btmlisting(<?php echo $listing->ID; ?>)">Delete</a>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<script>
    $(document).ready(function(){
        $('#myTable').DataTable();
    });

    function delete_btmlisting(id){
        var result = confirm("Are you sure you want to delete this listing?");
        if (result==true) {
            var url = '<?php echo Yii::app()->createUrl('btmlistings/delete'); ?>/'+id;
            $.ajax({
                type: "POST",
                url: url,
                success: function(){
                    delete window.alert; // true
                    alert('Item has been deleted.  The item will still display till the page has refreshed.');
                }
            });
        }
    };
</script>
