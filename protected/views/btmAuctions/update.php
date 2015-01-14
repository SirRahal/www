<?php
/* @var $this BtmAuctionsController */
/* @var $model BtmAuctions */

$this->breadcrumbs=array(
	'Btm Auctions'=>array('index'),
	$model->name=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List BtmAuctions', 'url'=>array('index')),
	array('label'=>'Create BtmAuctions', 'url'=>array('create')),
	array('label'=>'View BtmAuctions', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage BtmAuctions', 'url'=>array('admin')),
);
?>

<h1>Update BtmAuctions <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>