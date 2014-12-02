<?php
/* @var $this ListingsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Listings',
);

$this->menu=array(
	array('label'=>'Create Listings', 'url'=>array('create')),
	array('label'=>'Manage Listings', 'url'=>array('admin')),
);
?>

<h1>Listings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
