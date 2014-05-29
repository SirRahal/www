<?php
/* @var $this TeamTournamentRegionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Team Tournament Regions',
);

$this->menu=array(
	array('label'=>'Create TeamTournamentRegion', 'url'=>array('create')),
	array('label'=>'Manage TeamTournamentRegion', 'url'=>array('admin')),
);
?>

<h1>Team Tournament Regions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
