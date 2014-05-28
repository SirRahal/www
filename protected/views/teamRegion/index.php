<?php
/* @var $this TeamRegionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Team Regions',
);

$this->menu=array(
	array('label'=>'Create TeamRegion', 'url'=>array('create')),
	array('label'=>'Manage TeamRegion', 'url'=>array('admin')),
);
?>

<h1>Team Regions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
