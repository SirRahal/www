<?php
/* @var $this BtmlistingsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Btm Listings',
);

$this->menu=array(
	array('label'=>'Create Btmlistings', 'url'=>array('create')),
	array('label'=>'Manage Btmlistings', 'url'=>array('admin')),
);
?>

<h1>Btm Listings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
