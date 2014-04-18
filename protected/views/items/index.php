<?php
/* @var $this ItemsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Items',
);

$this->menu=array(
	array('label'=>'Create Items', 'url'=>array('create')),
	array('label'=>'Manage Items', 'url'=>array('admin')),
);
?>

<h1>Items</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
