<?php
/* @var $this BtmAuctionsController */
/* @var $model BtmAuctions */

$this->breadcrumbs=array(
	'Btm Auctions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BtmAuctions', 'url'=>array('index')),
	array('label'=>'Manage BtmAuctions', 'url'=>array('admin')),
);
?>

<h1>Create BtmAuctions</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>