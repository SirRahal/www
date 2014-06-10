<?php
/* @var $this PlacementController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Placements',
);

$this->menu=array(
	array('label'=>'Create Placement', 'url'=>array('create')),
	array('label'=>'Manage Placement', 'url'=>array('admin')),
);
?>

<h1>Placements</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
