<?php
/* @var $this AuctioneerController */
/* @var $model Auctioneer */

$this->breadcrumbs=array(
	'Auctioneers'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Auctioneer', 'url'=>array('index')),
	array('label'=>'Create Auctioneer', 'url'=>array('create')),
	array('label'=>'View Auctioneer', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Auctioneer', 'url'=>array('admin')),
);
?>

<h1>Update Auctioneer <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>