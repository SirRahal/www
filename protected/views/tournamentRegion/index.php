<?php
/* @var $this TournamentRegionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tournament Regions',
);

$this->menu=array(
	array('label'=>'Create TournamentRegion', 'url'=>array('create')),
	array('label'=>'Manage TournamentRegion', 'url'=>array('admin')),
);
?>

<h1>Tournament Regions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
