<?php
/* @var $this BtmListingsController */
/* @var $model BtmListings */

$this->breadcrumbs=array(
	'Btm Listings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BtmListings', 'url'=>array('index')),
	array('label'=>'Manage BtmListings', 'url'=>array('admin')),
);
?>

<h1>Create BtmListings</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>