<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->ID,
);

?>

<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="/css/jquery.dataTables.css">
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="/js/jquery.dataTables.js"></script>
<h1>View User <?php echo $model->first_name . ' '. $model->last_name; ?></h1>

<h3>Recent Activity</h3>
<style>
    tbody{
        color:black;
    }
</style>
<table id="myTable" class="hover stripe row-border">
    <thead>
    <tr style="text-align: center">
        <td>ID</td>
        <td>Inventory</td>
        <td>Manufacturer</td>
        <td>Serial #</td>
        <td>Model #</td>
        <td>Date</td>
        <td>Options</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach($model->listings as $item){ ?>
        <tr>
            <td><?php echo $item->ID; ?></td>
            <td><?php echo $item->inventory; ?></td>
            <td><?php echo $item->manufacturer; ?></td>
            <td><?php echo $item->serial_number; ?></td>
            <td><?php echo $item->model_number; ?></td>
            <td style="text-align: center;"><?php echo date("M d/y",strtotime($item->date)); ?></td>
            <td style="text-align: center;"><a class="link" href="/index.php/listings/update/<?php echo $item->ID; ?>">Edit</a> | <a class="link" href="/index.php/listings/view/<?php echo $item->ID; ?>">View</a> | <a class="link" href="/index.php/listings/create/<?php echo $item->ID; ?>">Copy</a> | <a class="link" style="cursor: pointer;" onclick="delete_listing(<?php echo $item->ID; ?>)">Delete</a></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<script>
    $(document).ready(function(){
        $('#myTable').DataTable();
    });
</script>