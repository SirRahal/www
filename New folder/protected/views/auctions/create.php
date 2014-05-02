<?php
/* @var $this AuctionsController */
/* @var $model Auctions */

$this->breadcrumbs=array(
	'Auctions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Auctions', 'url'=>array('index')),
	array('label'=>'Manage Auctions', 'url'=>array('admin')),
);
?>

<h1>Create Auctions</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>