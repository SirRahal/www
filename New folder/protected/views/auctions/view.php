<?php
/* @var $this AuctionsController */
/* @var $model Auctions */

$this->breadcrumbs=array(
	'Auctions'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Auctions', 'url'=>array('index')),
	array('label'=>'Create Auctions', 'url'=>array('create')),
	array('label'=>'Update Auctions', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Auctions', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Auctions', 'url'=>array('admin')),
);
?>

<h1>Auction: <i><?php echo $model->title; ?></i></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        'company',
        'date',
        'url',
        'location',
        'info',
        'clicks',
    ),
)); ?>
