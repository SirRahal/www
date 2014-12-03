<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage User', 'url'=>array('admin')),
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
    <tr>
        <td>Edit</td>
        <td>Activity</td>
        <td>ID</td>
        <td>Internal #</td>
        <td>Manufacturer</td>
        <td>Serial #</td>
        <td>Model #</td>
        <td>Date</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach($model->listings as $post){ ?>
        <tr>
            <td><a class="link" href="/index.php/postings/update/<?php echo $post->ID; ?>">Edit</a></td>
            <td><a class="link" href="/index.php/listings/view/<?php echo $post->ID; ?>">View</a></td>
            <td><?php echo $post->ID; ?></td>
            <td><?php echo $post->internal_number; ?></td>
            <td><?php echo $post->manufacturer; ?></td>
            <td><?php echo $post->serial_number; ?></td>
            <td><?php echo $post->model_number; ?></td>
            <td><?php echo $post->date; ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<script>
    $(document).ready(function(){
        $('#myTable').DataTable();
    });
</script>