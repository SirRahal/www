<?php
/* @var $this AuctioneerController */
/* @var $model Auctioneer */

$this->breadcrumbs=array(
	'Auctioneers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Auctioneer', 'url'=>array('index')),
	array('label'=>'Manage Auctioneer', 'url'=>array('admin')),
);
?>

<h1>Create Auctioneer</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>