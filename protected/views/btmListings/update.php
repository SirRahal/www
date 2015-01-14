<?php
/* @var $this BtmListingsController */
/* @var $model BtmListings */

$this->breadcrumbs=array(
	'Btm Listings'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List BtmListings', 'url'=>array('index')),
	array('label'=>'Create BtmListings', 'url'=>array('create')),
	array('label'=>'View BtmListings', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage BtmListings', 'url'=>array('admin')),
);
?>

<h1>Update BtmListings <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>