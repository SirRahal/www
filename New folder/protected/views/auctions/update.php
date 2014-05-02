<?php
/* @var $this AuctionsController */
/* @var $model Auctions */

$this->breadcrumbs=array(
	'Auctions'=>array('index'),
	$model->title=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Auctions', 'url'=>array('index')),
	array('label'=>'Create Auctions', 'url'=>array('create')),
	array('label'=>'View Auctions', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Auctions', 'url'=>array('admin')),
);
?>

<h1>Update Auctions <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>